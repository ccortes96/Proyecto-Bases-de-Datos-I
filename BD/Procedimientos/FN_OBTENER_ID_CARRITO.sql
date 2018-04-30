DELIMITER $$
CREATE FUNCTION `FN_OBTENER_ID_CARRITO`(pnIdCuenta INT) RETURNS int(11)
BEGIN
    DECLARE vnResp INT;
    DECLARE vnConteo INT;

    SELECT COUNT(1) INTO vnConteo FROM Cuenta WHERE idCuenta = pnIdCuenta;
    IF vnConteo > 0 THEN
        SELECT car.idCarrito INTO vnResp FROM (Carrito car INNER JOIN Cuenra cu ON car.Cuenta_idCuenta = cu.idCuenta) WHERE cu.idCuenta = pnIdCuenta;
        return vnResp;
    ELSE
        SET vnResp=0;
        return vnResp;
    END if;
    
END$$
DELIMITER ;