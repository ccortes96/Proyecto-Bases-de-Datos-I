DROP PROCEDURE IF EXISTS SP_ELIMINAR_CARRITO;
DELIMITER $$
CREATE PROCEDURE SP_ELIMINAR_CARRITO(
  IN pnidCarrito      INT,
  IN pnidProducto     INT,
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

    SELECT COUNT(*) INTO vnConteo FROM DetalleCarrito WHERE Producto_idProducto = pnidProducto;

    IF vnConteo > 0 THEN
      SELECT cantidad INTO vnCantidad FROM DetalleCarrito 
      WHERE Producto_idProducto = pnidProducto;
      
      DELETE FROM DetalleCarrito 
      WHERE Producto_idProducto = pnidProducto;

      UPDATE Producto SET cantidad = (cantidad + vnCantidad) 
      WHERE idProducto = pnidProducto;

      SET pcMensaje = 'Producto eliminado con éxito';
      SET pbOcurrioError = FALSE;
      COMMIT;

    ELSE
      SET pcMensaje='El Producto no existe en el carrito.';
      LEAVE SP;
    END IF;
    
END $$