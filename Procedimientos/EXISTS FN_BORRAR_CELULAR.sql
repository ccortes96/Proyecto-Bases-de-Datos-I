DROP FUNCTION IF EXISTS FN_BORRAR_CELULAR

DELIMITER $$

CREATE FUNCTION FN_BORRAR_CELULAR(
  pnIdUsuario INT
) RETURNS BOOLEAN

BEGIN
  DECLARE vnConteo INT;
  DECLARE vbResp BOOLEAN;

  SET vbResp = FALSE;
  SET vnConteo = 0;

  SELECT COUNT(*) INTO vnConteo FROM Celular ce
  WHERE ce.Usuario_idUsuario = pnIdUsuario;

  IF vnConteo >=2 THEN
    SET vbResp = TRUE;
  END IF;

  RETURN vbResp
END $$