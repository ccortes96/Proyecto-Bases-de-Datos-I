DROP PROCEDURE IF EXISTS SP_ELIMINAR_CORREO;

DELIMITER $$

CREATE PROCEDURE SP_ELIMINAR_CORREO(
  IN pnUsuario_idUsuario     INT,
  IN pnidCorreo  INT,
  OUT pcMensaje   		      VARCHAR(1000),
  OUT pbOcurrioError 	      BOOLEAN
)

SP: BEGIN
  DECLARE vnConteo  	INT DEFAULT 0;
  SET autocommit=0;

  START TRANSACTION;

  SET pcMensaje='';
  SET pbOcurrioError=TRUE;

  IF FN_BORRAR_CORREO_USUARIO(pnUsuario_idUsuario) = 1 THEN
    DELETE FROM CorreoUsuario WHERE idCorreoUsuario = pnidCorreo AND Usuario_idUsuario = pnUsuario_idUsuario;
    SET pcMensaje='Correo eliminado con exito.';
    COMMIT;
    SET pbOcurrioError=FALSE;
  ELSE
    SET pcMensaje = CONCAT("No se puede eliminar el correo.");
    LEAVE SP;
  END IF;
END $$
