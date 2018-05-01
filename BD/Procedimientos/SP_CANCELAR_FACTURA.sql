DROP PROCEDURE IF EXISTS SP_CANCELAR_FACTURA;
DELIMITER $$
CREATE PROCEDURE SP_CANCELAR_FACTURA(
  IN pnidFactura          INT,
  OUT pcMensaje           VARCHAR(1000),
  OUT pbOcurrioError      BOOLEAN
)

SP:BEGIN

    DECLARE vnConteo      INT DEFAULT 0;

    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;


    SELECT COUNT(*) INTO vnConteo FROM Factura WHERE idFactura = pnidFactura;
    IF vnConteo>0 THEN
      DELETE FROM DetalleFactura WHERE Factura_idFactura = pnidFactura;
      DELETE FROM Factura WHERE idFactura = pnidFactura;
      COMMIT;
      SET pcMensaje='Se canceló la factura.';
      SET pbOcurrioError = FALSE;
    ELSE
      SET pcMensaje='La factura no existe.';
      LEAVE SP;
    END IF;
    
END $$