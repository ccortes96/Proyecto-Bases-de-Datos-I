DROP FUNCTION IF EXISTS FN_MODIFICAR_SALDO;

DELIMITER $$

CREATE FUNCTION FN_MODIFICAR_SALDO(
  pnUsuario_idUsuario INT,
  pnIdCuenta          INT,
  pnCantidad          DOUBLE(10,2)
) RETURNS DOUBLE(10,2)

BEGIN
  DECLARE vnASaldo DOUBLE(10,2);
  DECLARE vnNSaldo DOUBLE(10,2);
  SET vnNSaldo = 0;
  SET vnASaldo = 0;

  IF F_VERIFICAR_USUARIO(pnUsuario_idUsuario) = 0 THEN
    LEAVE;
  ELSE
    SET vnASaldo = SELECT Saldo FROM Cuenta
    WHERE idCuenta = pnIdCuenta AND Usuario_idUsuario = pnUsuario_idUsuario;
  END IF;

  SET vnNSaldo = (vnASaldo + pnCantidad)

  RETURN vnNSaldo;

  END $$
  DELIMITER ;
