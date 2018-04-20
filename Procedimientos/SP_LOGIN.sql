DROP PROCEDURE IF EXISTS SP_LOGIN;

DELIMITER $$

CREATE PROCEDURE SP_LOGIN(
  IN pcCorreoUsuario       	VARCHAR(45),
  IN pcContrasenia         	VARCHAR(45),
  OUT pcMensaje   		    VARCHAR(1000),
  OUT pbOcurrioError 	    BOOLEAN
)

SP: BEGIN
  DECLARE vnConteo  	INT DEFAULT 0;
  DECLARE vnUsuario 	INT;
  DECLARE vnCuenta  	INT;
  DECLARE vcContrasenia VARCHAR(45);
  SET autocommit=0;

  /*START TRANSACTION;*/

  SET pcMensaje='';
  SET pbOcurrioError=TRUE;

  SELECT COUNT(*) INTO vnConteo FROM correousuario cu
  WHERE cu.descripcion = pcCorreoUsuario;

  IF vnConteo = 0 THEN
    SET pcMensaje = CONCAT('El correo: ', pcCorreoUsuario, ' no existe.');
    LEAVE SP;

  ELSE
    SELECT us.idUsuario INTO vnUsuario FROM
    (Usuario us INNER JOIN CorreoUsuario cu ON us.idUsuario = cu.Usuario_idUsuario)
    WHERE cu.descripcion = pcCorreoUsuario;

    SELECT cta.idCuenta INTO vnCuenta FROM
    (Usuario us INNER JOIN Cuenta cta ON us.idUsuario = cta.Usuario_idUsuario)
    WHERE cta.Usuario_idUsuario = vnUsuario;

    SELECT cta.contrasenia INTO vcContrasenia FROM Cuenta cta
    WHERE cta.idCuenta = vnCuenta;

      IF (vcContrasenia = pcContrasenia) THEN
        SET pcMensaje=CONCAT('Bienvenido a VOL-UNAH : ', F_NombreUsuario(vnUsuario));
        SET pbOcurrioError=FALSE;

      ELSE
      	SET pcMensaje = CONCAT('La contraseña: ', pcContrasenia, ' no es válida.');
    	LEAVE SP;

      END IF;
  END IF;
END$$
