DROP PROCEDURE IF EXISTS SP_ELIMINAR_CELULAR;

DELIMITER $$

CREATE PROCEDURE SP_ELIMINAR_CELULAR(
  IN pnUsuario_idUsuario     INT,
  IN pnidCelular  INT,
  OUT pcMensaje   		      VARCHAR(1000),
  OUT pbOcurrioError 	      BOOLEAN
)

SP: BEGIN
  DECLARE vnConteo  	INT DEFAULT 0;
  SET autocommit=0;

  START TRANSACTION;

  SET pcMensaje='';
  SET pbOcurrioError=TRUE;

  IF FN_BORRAR_CELULAR(pnUsuario_idUsuario) = 1 THEN
    DELETE FROM Celular WHERE idCelular = pnidCelular AND Usuario_idUsuario = pnUsuario_idUsuario;
    SET pcMensaje='Celular eliminado con exito.';
    COMMIT;
    SET pbOcurrioError=FALSE;
  ELSE
    SET pcMensaje = CONCAT("No se puede eliminar el celular.");
    LEAVE SP;
  END IF;
END $$
