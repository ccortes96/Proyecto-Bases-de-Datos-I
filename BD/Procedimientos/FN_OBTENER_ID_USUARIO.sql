DELIMITER $$
CREATE  FUNCTION FN_OBTENER_ID_USUARIO (pcEmail VARCHAR(45)) RETURNS INT(11)
BEGIN
    DECLARE vnResp INT;
    DECLARE vnConteo INT;

    SELECT COUNT(1) INTO vnConteo FROM CorreoUsuario WHERE descripcion = pcEmail;
    IF vnConteo > 0 THEN
        SELECT u.idUsuario INTO vnResp FROM (Usuario u INNER JOIN CorreoUsuario cu ON u.idUsuario = cu.Usuario_idUsuario) WHERE cu.descripcion = pcEmail;
        return vnResp;
    ELSE
        SET vnResp=0;
        return vnResp;
    END if;
    
END$$
DELIMITER ;