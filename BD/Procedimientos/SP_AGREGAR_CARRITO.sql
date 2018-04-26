
DROP PROCEDURE IF EXISTS SP_AGREGAR_CARRITO;
DELIMITER $$
CREATE PROCEDURE SP_AGREGAR_CARRITO(
  IN pnidCarrito      INT,
  IN pnidProducto     INT,
  IN pnCantidad       INT,
  OUT pcMensaje       VARCHAR(1000),
  OUT pbOcurrioError  BOOLEAN
)

SP:BEGIN

    DECLARE vnConteo      INT DEFAULT 0;
    DECLARE vnIdProducto  INT;
    DECLARE vnCantidad    INT;

    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;

    SELECT COUNT(*) INTO vnConteo FROM Producto WHERE idProducto = pnidProducto;

    IF vnConteo > 0 THEN
      SELECT cantidad INTO vnCantidad FROM Producto 
      WHERE idProducto = pnidProducto;
      
      IF vnCantidad < pnCantidad THEN
        SET pcMensaje = 'La cantidad solicitada no está disponible.';
        SET pbOcurrioError = TRUE;
        LEAVE SP;

      ELSE

        INSERT INTO DetalleCarrito (Producto_idProducto, Carrito_idCarrito, cantidad) VALUES (pnidProducto, pnidCarrito, pnCantidad);
        UPDATE Producto SET cantidad = (cantidad - pnCantidad) WHERE idProducto = pnidProducto;
        SET pcMensaje = 'Producto agregado con éxito.';
        SET pbOcurrioError = FALSE;
        COMMIT;
      END IF;
    ELSE
      SET pcMensaje='El Producto no existe.';
      LEAVE SP;
    END IF;
    
END $$