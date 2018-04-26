DROP PROCEDURE IF EXISTS SP_ACTUALIZAR_CUENTA;
DELIMITER $$
CREATE PROCEDURE SP_ACTUALIZAR_CUENTA(
  IN pnIdCuenta           INT,
  IN pnUsuario_idUsuario  INT,
  IN pcContrasenia        VARCHAR(45),
  IN pnIdioma_idIdioma    INT,
  IN pnSaldo              DOUBLE(10,2),
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
      UPDATE Cuenta
      SET contrasenia = pcContrasenia, Idioma_idIdioma = pnIdioma_idIdioma, Saldo = pnSaldo
      WHERE idCuenta = pnIdCuenta AND Usuario_idUsuario=pnUsuario_idUsuario;

      SET pcMensaje = "Cuenta actualizada exitosamente";
      COMMIT;
      SET pbOcurrioError = FALSE;

    END IF;

END $$
