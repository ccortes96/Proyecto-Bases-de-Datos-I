DROP PROCEDURE IF EXISTS SP_ACTUALIZAR_CORREO;
DELIMITER $$
CREATE PROCEDURE SP_ACTUALIZAR_CORREO(
  IN pnIdCorreoUsuario         INT,
  IN pcDescripcion        VARCHAR(45),
  IN pnUsuario_idUsuario  INT,
  OUT pcMensaje           VARCHAR(1000),
  OUT pbOcurrioError      BOOLEAN
)

SP:BEGIN

    DECLARE vnConteo INT;
    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;

    IF F_VERIFICAR_USUARIO(pnUsuario_idUsuario) = 0 THEN
      SET pcMensaje = CONCAT("El Usuario: ", pnIdUsuario, " No existe." );
      LEAVE SP;
    ELSE
      UPDATE CorreoUsuario
      SET descripcion = pcDescripcion
      WHERE idCorreoUsuario = pnIdCorreoUsuario AND Usuario_idUsuario=pnUsuario_idUsuario;

      SET pcMensaje = "Correo actualizado exitosamente";
      COMMIT;
      SET pbOcurrioError = FALSE;

    END IF;

END $$
