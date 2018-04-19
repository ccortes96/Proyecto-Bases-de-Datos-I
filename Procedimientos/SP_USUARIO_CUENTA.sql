DROP PROCEDURE IF EXISTS SP_USUARIO_CUENTA;

DELIMITER $$

CREATE PROCEDURE SP_USUARIO_CUENTA(
  IN pcCorreoUsuario       VARCHAR(45),
  IN pcPNombre             VARCHAR(45),
  IN pcSNombre             VARCHAR(45),
  IN pcPApellido           VARCHAR(45),
  IN pnGenero              INT,
  IN pnTipoCuenta          INT,
  IN pcContrasenia         VARCHAR(45),
  IN pcIdioma              INT,
  IN pnSaldo               DOUBLE(10,2),
  OUT pcMensaje   		     VARCHAR(1000),
  OUT pbOcurrioError 	     BOOLEAN
)

SP: BEGIN

  DECLARE vcIdnuevo INT DEFAULT 0;
  DECLARE vnConteo INT;

  SET autocommit=0;

  START TRANSACTION;

  SET pcMensaje='';
  SET pbOcurrioError=TRUE;

  SELECT COUNT(*) INTO vnConteo FROM CorreoUsuario cu
  WHERE cu.descripcion = pcCorreoUsuario;

  IF vnConteo >0 THEN
    SET pcMensaje = CONCAT('El correo: ', pcCorreoUsuario, ' ya existe.');
    LEAVE SP;
  ELSE
      INSERT INTO Usuario (pNombre, sNombre, pApellido, Genero_idGenero) VALUES (pcPNombre, pcSNombre, pcPApellido, pcGenero);
      SET vcIdnuevo = LAST_INSERT_ID();
      INSERT INTO CorreoUsuario (descripcion, Usuario_idUsuario) VALUES (pcCorreoUsuario, pnIdnuevo);
      INSERT INTO Cuenta (TipoCuenta_idTipoCuenta, Usuario_idUsuario, fechaRegistro, contrasenia, Idioma_idIdioma, Saldo) VALUES (pnTipoCuenta, pnIdnuevo, (SELECT CURDATE()), pcContrasenia, pnIdioma, pnSaldo);
      SET pcMensaje='Registro realizado correctamente';
      COMMIT;
      SET pbOcurrioError=FALSE;
   END IF;

END $$
DELIMITER ;
