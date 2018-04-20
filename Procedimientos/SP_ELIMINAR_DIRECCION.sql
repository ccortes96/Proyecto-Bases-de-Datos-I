DROP PROCEDURE IF EXISTS SP_ELIMINAR_DIRECCION;

DELIMITER $$

CREATE PROCEDURE SP_ELIMINAR_DIRECCION(
  IN pnUsuario_idUsuario     INT,
  IN pnidDireccion  INT,
  OUT pcMensaje   		      VARCHAR(1000),
  OUT pbOcurrioError 	      BOOLEAN
)

SP: BEGIN
  DECLARE vnConteo  	INT DEFAULT 0;
  SET autocommit=0;

  START TRANSACTION;

  SET pcMensaje='';
  SET pbOcurrioError=TRUE;

  IF FN_BORRAR_DIRECCION(pnUsuario_idUsuario) = 1 THEN
    DELETE FROM DireccionUsuario WHERE idDireccionUsuario = pnidDireccion AND Usuario_idUsuario = pnUsuario_idUsuario;
    SET pcMensaje='Dirección eliminada con exito.';
    COMMIT;
    SET pbOcurrioError=FALSE;
  ELSE
    SET pcMensaje = CONCAT("No se puede eliminar la dirección.");
    LEAVE SP;
  END IF;
END $$
