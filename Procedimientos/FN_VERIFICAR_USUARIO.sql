DROP FUNCTION IF EXISTS FN_VERIFICAR_USUARIO;

DELIMITER $$

CREATE FUNCTION FN_VERIFICAR_USUARIO (
  pnIdUsuario INT
) RETURNS BOOLEAN

BEGIN
  DECLARE vnConteo INT;
  DECLARE vbResp BOOLEAN;

  SET vbResp = FALSE;
  SET vnConteo = 0;

  SELECT COUNT(*) INTO vnConteo FROM Usuario us
  WHERE us.idUsuario = pnIdUsuario;

  IF vnConteo > 0 THEN
    SET vbResp = TRUE;
  END IF;

  RETURN vbResp;
END $$
DELIMITER ;