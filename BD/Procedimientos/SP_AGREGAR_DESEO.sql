DROP PROCEDURE IF EXISTS SP_AGREGAR_DESEO;
DELIMITER $$
CREATE PROCEDURE SP_AGREGAR_DESEO(
  IN pnidCuenta      INT,
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

    IF vnConteo = 0 THEN
      INSERT INTO Deseo(Producto_idProducto, Cuenta_idCuenta, fecha) VALUES (pnidProducto, pnidCuenta, (SELECT CURDATE()));
      SET pcMensaje = 'Producto agregado con éxito.';
      SET pbOcurrioError = FALSE;
      COMMIT;
    ELSE
      SET pcMensaje='El Producto ya existe en la lista.';
      LEAVE SP;
    END IF;
    
END $$