DROP FUNCTION IF EXISTS FN_MODIFICAR_SALDO;

DELIMITER $$
CREATE FUNCTION `FN_MODIFICAR_SALDO`(
  pnUsuario_idUsuario INT,
  pnIdCuenta          INT,
  pnCantidad          DOUBLE(10,2)
) RETURNS double(10,2)
BEGIN
  DECLARE vnASaldo DOUBLE(10,2) DEFAULT 0.00;
  DECLARE vnNSaldo DOUBLE(10,2) DEFAULT 0.00;

  IF F_VERIFICAR_USUARIO(pnUsuario_idUsuario) = 1 THEN
    SELECT Saldo INTO vnASaldo FROM Cuenta
    WHERE idCuenta = pnIdCuenta AND Usuario_idUsuario = pnUsuario_idUsuario;
      SET vnNSaldo = (vnASaldo + pnCantidad);
      RETURN vnNSaldo;
  ELSE
  	RETURN vnNSaldo;
  END IF;

  END$$
DELIMITER ;
