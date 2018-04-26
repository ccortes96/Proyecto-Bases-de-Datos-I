DROP PROCEDURE IF EXISTS SP_ELIMINAR_TELEFONO;

DELIMITER $$

CREATE PROCEDURE SP_ELIMINAR_TELEFONO(
  IN pnUsuario_idUsuario     INT,
  IN pnidTelefono  INT,
  OUT pcMensaje   		      VARCHAR(1000),
  OUT pbOcurrioError 	      BOOLEAN
)

SP: BEGIN
  DECLARE vnConteo  	INT DEFAULT 0;
  SET autocommit=0;

  START TRANSACTION;

  SET pcMensaje='';
  SET pbOcurrioError=TRUE;

  IF FN_BORRAR_TELEFONO_USUARIO(pnUsuario_idUsuario) = 1 THEN
    DELETE FROM TelefonoUsuario WHERE idTelefono = pnidTelefono AND Usuario_idUsuario = pnUsuario_idUsuario;
    SET pcMensaje='Telefono eliminado con exito.';
    COMMIT;
    SET pbOcurrioError=FALSE;
  ELSE
    SET pcMensaje = CONCAT("No se puede eliminar el teléfono.");
    LEAVE SP;
  END IF;
END $$
