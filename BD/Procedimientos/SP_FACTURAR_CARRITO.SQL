
DROP PROCEDURE IF EXISTS SP_FACTURAR_CARRITO;
DELIMITER $$
CREATE PROCEDURE SP_FACTURAR_CARRITO(
  IN pnidCarrito      INT,
  IN pnidDescuento    INT,
  IN pnidImpuesto     INT,
  OUT pcMensaje       VARCHAR(1000),
  OUT pbOcurrioError  BOOLEAN
)

SP:BEGIN

    DECLARE vnConteo1     INT DEFAULT 0;
    DECLARE vnConteo      INT DEFAULT 0;
    DECLARE vnIdFnuevo    INT DEFAULT 0;
    DECLARE vnI           INT DEFAULT 1;
    DECLARE vnIdProducto  INT;
    DECLARE vnCantidad    INT;
    DECLARE vbAdescuento  BOOLEAN;
    DECLARE vbAimpuesto   BOOLEAN;
    DECLARE vcEdescuento  VARCHAR(1);
    DECLARE vcEimpuesto   VARCHAR(1);

    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;


    SELECT COUNT(*) INTO vnConteo1 FROM DetalleCarrito WHERE Carrito_idCarrito = pnidCarrito;
    IF vnConteo1>0 THEN
      INSERT INTO Factura (Carrito_idCarrito, fecha) VALUES (pnidCarrito, (SELECT SYSDATE()));
      SET vnIdFnuevo = LAST_INSERT_ID();

      SELECT estado INTO vcEdescuento FROM Descuento WHERE idDescuento = pnidDescuento;
      SELECT estado INTO vcEimpuesto FROM TipoImpuesto WHERE idTipoImpuesto = pnidImpuesto;
      
      IF vcEdescuento = 'A' THEN 
        INSERT INTO DescuentoFactura(Factura_idFactura, Descuento_idDescuento) VALUES (vnIdFnuevo, pnidDescuento);
      ELSE 
        INSERT INTO DescuentoFactura(Factura_idFactura, Descuento_idDescuento) VALUES (vnIdFnuevo, 16);
      END IF;

      IF vcEimpuesto = 'A' THEN 
        INSERT INTO Impuesto(Factura_idFactura, TipoImpuesto_idTipoImpuesto) VALUES (vnIdFnuevo, pnidImpuesto);
      ELSE
        INSERT INTO Impuesto(Factura_idFactura, TipoImpuesto_idTipoImpuesto) VALUES (vnIdFnuevo, 16);
      END IF;

      CREATE TEMPORARY TABLE Compras (
        idCompras           INT NOT NULL AUTO_INCREMENT,
        Producto_idProducto INT NOT NULL, 
        cantidad            INT NOT NULL,
        CONSTRAINT PK_COMPRAS PRIMARY KEY (idCompras)
      );

      INSERT INTO Compras (Producto_idProducto, cantidad) SELECT DetalleCarrito.Producto_idProducto, DetalleCarrito.cantidad FROM DetalleCarrito WHERE DetalleCarrito.Carrito_idCarrito = pnidCarrito;
      SELECT COUNT(*) INTO vnConteo FROM Compras;

      WHILE vnI <= vnConteo DO 
        SELECT Compras.Producto_idProducto INTO vnIdProducto FROM Compras WHERE Compras.idCompras = vnI;
        SELECT Compras.cantidad INTO vnCantidad FROM Compras WHERE Compras.idCompras = vnI;
        INSERT INTO DetalleFactura(Factura_idFactura, Producto_idProducto, cantidad) VALUES (vnIdFnuevo, vnIdProducto, vnCantidad);
        SET vnI = (vnI + 1) ;
      END WHILE;

      DROP TABLE IF EXISTS Compras;
      
      COMMIT;
      SET pbOcurrioError = FALSE;
      SET pcMensaje='Pago realizado correctamente';

    ELSE
      SET pcMensaje='Carrito vacío';
      LEAVE SP;
    END IF;
    
END $$