DROP PROCEDURE IF EXISTS SP_ELIMINAR_DESEO;
DELIMITER $$
CREATE PROCEDURE SP_ELIMINAR_DESEO(
  IN pnidCuenta       INT,
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

    SELECT COUNT(*) INTO vnConteo FROM Deseo WHERE Producto_idProducto = pnidProducto;

    IF vnConteo > 0 THEN
      DELETE FROM Deseo WHERE Producto_idProducto = pnidProducto;
      SET pcMensaje = 'Producto eliminado con éxito.';
      SET pbOcurrioError = FALSE;
      COMMIT;
    ELSE
      SET pcMensaje='El Producto no existe en la lista.';
      LEAVE SP;
    END IF;
    
END $$