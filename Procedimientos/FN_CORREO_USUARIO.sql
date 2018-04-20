DROP FUNCTION IF EXISTS FN_CORREO_USUARIO

DELIMITER $$

CREATE FUNCTION FN_CORREO_USUARIO(
  pnIdUsuario INT
) RETURNS BOOLEAN

BEGIN
  DECLARE vnConteo INT;
  DECLARE vbResp BOOLEAN;

  SET vbResp = FALSE;
  SET vnConteo = 0;

  SELECT COUNT(*) INTO vnConteo FROM CorreoUsuario cu
  WHERE cu.Usuario_idUsuario = pnIdUsuario;

  IF vnConteo >=2 THEN
    SET vbResp = TRUE;
  END IF;

  RETURN vbResp
END $$