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
  IN pnIdioma              INT,
  IN pnSaldo               DOUBLE(10,2),
  OUT pcMensaje   		     VARCHAR(1000),
  OUT pbOcurrioError 	     BOOLEAN
)

SP: BEGIN

  DECLARE vnIdnuevo INT DEFAULT 0;
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
      INSERT INTO Usuario (pNombre, sNombre, pApellido, Genero_idGenero) VALUES (pcPNombre, pcSNombre, pcPApellido, pnGenero);
      SET vnIdnuevo = LAST_INSERT_ID();
      INSERT INTO CorreoUsuario (descripcion, Usuario_idUsuario) VALUES (pcCorreoUsuario, vnIdnuevo);
      INSERT INTO Cuenta (TipoCuenta_idTipoCuenta, Usuario_idUsuario, fechaRegistro, contrasenia, Idioma_idIdioma, Saldo) VALUES (pnTipoCuenta, vnIdnuevo, (SELECT CURDATE()), pcContrasenia, pnIdioma, pnSaldo);
      INSERT INTO Celular(descripcion, Usuario_idUsuario) VALUES ("NO SE ESPECIFICÓ",vnIdnuevo);
      INSERT INTO TelefonoUsuario(descripcion, Usuario_idUsuario) VALUES ("NO SE ESPECIFICÓ",vnIdnuevo);
      INSERT INTO DireccionUsuario(pais, estado_depto, ciudad, colonia, sector_calle, casa_edificio, codigoPostal, Usuario_idUsuario) 
      VALUES ("NO SE ESPECIFICÓ", "NO SE ESPECIFICÓ", "NO SE ESPECIFICÓ", "NO SE ESPECIFICÓ", "NO SE ESPECIFICÓ", "NO SE ESPECIFICÓ", 00000, vnIdnuevo);
      SET pcMensaje='Registro realizado correctamente';
      COMMIT;
      SET pbOcurrioError=FALSE;
   END IF;

END $$
DELIMITER ;
