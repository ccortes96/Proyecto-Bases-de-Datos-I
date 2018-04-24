
DROP PROCEDURE IF EXISTS SP_PAGAR_FACTURA;
DELIMITER $$
CREATE PROCEDURE SP_PAGAR_FACTURA(
  IN pnidUsuario          INT,
  IN pnidCuenta           INT,
  IN pnidFactura          INT,
  IN pnidFormaEnvio       INT,
  IN pnidClaseEnvio       INT,
  IN pnidTipoEnvio        INT,
  IN pnidEmpresaEnvio     INT,
  IN pnidDireccionUsuario INT,
  OUT pcMensaje           VARCHAR(1000),
  OUT pbOcurrioError      BOOLEAN
)

SP:BEGIN

    DECLARE vnConteo      INT DEFAULT 0;
    DECLARE vnTotalF      DOUBLE(10,2);
    DECLARE vnSaldoA      DOUBLE(10,2);
    DECLARE vnIdUsuario   INT;
    DECLARE vnNSaldo      DOUBLE(10,2);

    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;


    SELECT COUNT(*) INTO vnConteo FROM Factura WHERE idFactura = pnidFactura;
    IF vnConteo>0 THEN
      SELECT Saldo INTO vnSaldoA FROM Cuenta WHERE idCuenta = pnidCuenta;
      SELECT Total INTO vnTotalF FROM vw_Total WHERE IdFactura = pnidFactura;

      IF vnSaldoA >= vnTotalF THEN
        INSERT INTO Envio (EmpresaEnvio_idEmpresaEnvio, FormaEnvio_idFormaEnvio, ClaseEnvio_idClaseEnvio, Factura_idFactura, DireccionUsuario_idDireccionUsuario) VALUES (pnidEmpresaEnvio, pnidFormaEnvio, pnidClaseEnvio, pnidFactura, pnidDireccionUsuario);
        SET vnNSaldo = FN_MODIFICAR_SALDO(pnidUsuario, pnidCuenta, -vnTotalF);
        UPDATE Cuenta SET Saldo = vnNSaldo WHERE idCuenta = pnidCuenta;
        COMMIT;
        SET pbOcurrioError = FALSE;
        SET pcMensaje='Su envío está listo para ser entregado.';
      ELSE
        SET pcMensaje = 'El saldo es insuficiente.';
        LEAVE SP;
      END IF;

    ELSE
      SET pcMensaje='La factura no existe.';
      LEAVE SP;
    END IF;
    
END $$
DROP PROCEDURE IF EXISTS SP_PAGAR_FACTURA;
DELIMITER $$
CREATE PROCEDURE SP_PAGAR_FACTURA(
  IN pnidCuenta           INT,
  IN pnidFactura          INT,
  IN pnidFormaEnvio       INT,
  IN pnidClaseEnvio       INT,
  IN pnidTipoEnvio        INT,
  IN pnidEmpresaEnvio     INT,
  IN pnidDireccionUsuario INT,
  OUT pcMensaje           VARCHAR(1000),
  OUT pbOcurrioError      BOOLEAN
)

SP:BEGIN

    DECLARE vnConteo      INT DEFAULT 0;
    DECLARE vnTotalF      DOUBLE(10,2);
    DECLARE vnSaldoA      DOUBLE(10,2);
    DECLARE vnIdUsuario   INT;
    DECLARE vnNSaldo      DOUBLE(10,2);

    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;


    SELECT COUNT(*) INTO vnConteo FROM Factura WHERE idFactura = pnidFactura;
    IF vnConteo>0 THEN
      SELECT Saldo INTO vnSaldoA FROM Cuenta WHERE idCuenta = pnidCuenta;
      SELECT Total INTO vnTotalF FROM vw_Total WHERE IdFactura = pnidFactura;

      IF vnSaldoA >= vnTotalF THEN
        INSERT INTO Envio (EmpresaEnvio_idEmpresaEnvio, FormaEnvio_idFormaEnvio, ClaseEnvio_idClaseEnvio, Factura_idFactura, DireccionUsuario_idDireccionUsuario) VALUES (pnidEmpresaEnvio, pnidFormaEnvio, pnidClaseEnvio, pnidFactura, pnidDireccionUsuario);
        SELECT us.idUsuario INTO vnIdUsuario FROM (Usuario us INNER JOIN Cuenta cta ON us.idUsuario = cta.Usuario_idUsuario) WHERE cta.idCuenta = pnidCuenta;
        SET vnNSaldo = FN_MODIFICAR_SALDO(vnIdUsuario, pnidCuenta, -vnTotalF);
        UPDATE Cuenta SET Saldo = vnNSaldo WHERE idCuenta = pnidCuenta;
        COMMIT;
        SET pbOcurrioError = FALSE;
        SET pcMensaje='Su envío está listo para ser entregado.';
      ELSE
        SET pcMensaje = 'El saldo es insuficiente.';
        LEAVE SP;
      END IF;

    ELSE
      SET pcMensaje='La factura no existe.';
      LEAVE SP;
    END IF;
    
END $$