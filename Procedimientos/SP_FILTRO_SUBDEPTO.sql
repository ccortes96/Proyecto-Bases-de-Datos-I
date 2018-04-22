
DROP PROCEDURE IF EXISTS SP_FILTRO_SUBDEPTO;
DELIMITER $$
CREATE PROCEDURE SP_FILTRO_SUBDEPTO(
  IN pnIdSubdepto     INT,
  OUT pcMensaje       VARCHAR(1000),
  OUT pbOcurrioError  BOOLEAN
)

SP:BEGIN
    DECLARE vnConteo      INT DEFAULT 0;


    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;


    SELECT COUNT(*) INTO vnConteo FROM Subdepartamento WHERE idSubdepartamento = pnIdSubdepto;

    IF vnConteo > 0 THEN
      SELECT pro.* FROM 
        ((Producto pro INNER JOIN ProductoPorSubdepartamento pps ON  pro.idProducto = pps.Producto_idProducto)  
        INNER JOIN Subdepartamento subd ON pps.Subdepartamento_idSubdepartamento = subd.idSubdepartamento)
        WHERE subd.idSubdepartamento = pnIdSubdepto;
      COMMIT;
      SET pbOcurrioError = FALSE;
      SET pcMensaje='Consulta realizada con éxito';

    ELSE
      SET pcMensaje='No existe Subdepartamento';
      LEAVE SP;
    END IF;
    
END $$