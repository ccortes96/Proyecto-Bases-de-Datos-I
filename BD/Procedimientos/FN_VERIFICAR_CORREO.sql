DELIMITER $$
CREATE  FUNCTION FN_VERIFICAR_CORREO (pcEmail VARCHAR(45)) RETURNS INT(11)
BEGIN
    DECLARE resp INT;
    DECLARE conteo INT;
    SELECT COUNT(1) INTO conteo FROM usuario u WHERE u.email=email;
    if conteo = 1 THEN
        SELECT u.idUsuario INTO resp FROM usuario u WHERE u.email=email;
        return resp;
    ELSE
        SET resp=0;
        return resp;
    END if;
END$$
DELIMITER ;
