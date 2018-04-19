DROP PROCEDURE IF EXISTS SP_ACTUALIZAR_USUARIO;
DELIMITER $$
CREATE PROCEDURE SP_ACTUALIZAR_USUARIO(
  IN pnIdUsuario  VARCHAR(45),
  IN pcPNombre    VARCHAR(45),
  IN pcSNombre    VARCHAR(45),
  IN pcPApellido  VARCHAR(45),
  IN pnGenero_idGenero INT,
  OUT pcMensaje        VARCHAR(1000),
  OUT pbOcurrioError    BOOLEAN
)

SP:BEGIN

    DECLARE vnConteo INT;
    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;

    IF F_VERIFICAR_USUARIO(pnIdUsuario) = 0 THEN
      SET pcMensaje = CONCAT("El Usuario: ", pnIdUsuario, " No existe." );
      LEAVE SP;
    ELSE
      UPDATE Usuario
      SET pNombre=pcPNombre, sNombre=pcSNombre, pApellido  = pcPApellido, Genero_idGenero = pnGenero_idGenero
      WHERE idUsuario=pnIdUsuario;

      SET pcMensaje = "Usuario actualizado exitosamente";
      COMMIT;
      SET pbOcurrioError = FALSE;

    END IF;

END $$
