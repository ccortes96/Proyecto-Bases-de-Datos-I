DROP PROCEDURE IF EXISTS SP_AGREGAR_SALDO;
DELIMITER $$
CREATE PROCEDURE SP_AGREGAR_SALDO(
  IN pnIdUsuario          INT,
  IN pnIdCuenta           VARCHAR(45),
  IN pfsaldo              FLOAT,
  OUT pcMensaje           VARCHAR(1000),
  OUT pbOcurrioError      BOOLEAN
)

SP:BEGIN

    DECLARE vnConteo INT;
    DECLARE vnConteo2 INT;
    DECLARE vfSaldoA  FLOAT;

    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;
    SELECT COUNT(*) INTO vnConteo FROM Usuario WHERE idUsuario = pnIdUsuario;
    IF vnConteo > 0 THEN
      SELECT COUNT(*) INTO vnConteo2 FROM Cuenta WHERE idCuenta = pnIdCuenta;
        IF vnConteo2 > 0 THEN
          SELECT Saldo INTO vfSaldoA FROM Cuenta WHERE idCuenta = pnIdCuenta;
          UPDATE Cuenta SET Saldo = (vfSaldoA + pfsaldo) WHERE idCuenta = pnIdCuenta;
          COMMIT;
          SET pbOcurrioError = FALSE;
          SET pcMensaje='Su saldo se actualizó.';
        ELSE
          SET pcMensaje = 'La cuenta solicitada no existe.';
          LEAVE SP;
        END IF;
    ELSE
      SET pcMensaje = 'El Usuario no existe.';
      LEAVE SP;
    END IF;

END $$
