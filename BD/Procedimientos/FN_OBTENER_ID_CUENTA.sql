DELIMITER $$
CREATE  FUNCTION FN_OBTENER_ID_CUENTA (pnUsuario INT) RETURNS INT(11)
BEGIN
    DECLARE vnResp INT;
    DECLARE vnConteo INT;

    SELECT COUNT(1) INTO vnConteo FROM Usuario WHERE idUsuario = pnUsuario;
    IF vnConteo > 0 THEN
        SELECT cta.idCuenta INTO vnResp FROM (Usuario u INNER JOIN Cuenta cta ON u.idUsuario = cta.Usuario_idUsuario) WHERE u.idUsuario = pnUsuario;
        return vnResp;
    ELSE
        SET vnResp=0;
        return vnResp;
    END if;
    
END$$
DELIMITER ;