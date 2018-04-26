DROP PROCEDURE IF EXISTS SP_LISTAR_DESEOS;
DELIMITER $$
CREATE PROCEDURE SP_LISTAR_DESEOS(
  IN pnidCuenta       INT,
  OUT pcMensaje       VARCHAR(1000),
  OUT pbOcurrioError  BOOLEAN
)

SP:BEGIN

    DECLARE vnConteo      INT DEFAULT 0;

    SET pcMensaje='';
    SET pbOcurrioError = TRUE;

    SELECT COUNT(*) INTO vnConteo FROM Deseo WHERE  Cuenta_idCuenta= pnidCuenta;

    IF vnConteo > 0 THEN
      SELECT * FROM Deseo WHERE Cuenta_idCuenta = pnidCuenta;
      SET pcMensaje = 'Lista mostrada con éxito.';
      SET pbOcurrioError = FALSE;
    ELSE
      SET pcMensaje='La cuenta no ha añadido ningún deseo en la lista.';
      LEAVE SP;
    END IF;
    
END $$