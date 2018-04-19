DROP PROCEDURE IF EXISTS SP_ACTUALIZAR_DIRECCION;
DELIMITER $$
CREATE PROCEDURE SP_ACTUALIZAR_DIRECCION(
  IN pnIdDireccionUsuario INT,
  IN pnUsuario_idUsuario  INT,
  IN pcPais               VARCHAR(45),
  IN pcEstado_Depto       VARCHAR(45),
  IN pcCiudad             VARCHAR(45),
  IN pcColonia            VARCHAR(45),
  IN pcSector_Calle       VARCHAR(45),
  IN pcCasa_Edicio        VARCHAR(45),
  IN pnCodigoPostal       INT,
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
      UPDATE DireccionUsuario
      SET pais=pcPais, estado_depto=pcEstado_Depto, ciudad=pcCiudad, colonia = pcColonia, sector_calle = pcSector_Calle, casa_edificio = pcCasa_Edicio, codigoPostal = pnCodigoPostal
      WHERE idDireccionUsuario = pnIdDireccionUsuario AND  Usuario_idUsuario=pnUsuario_idUsuario;

      SET pcMensaje = "Dirección actualizada exitosamente";
      COMMIT;
      SET pbOcurrioError = FALSE;

    END IF;

END $$
