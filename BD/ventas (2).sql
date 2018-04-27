-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-04-2018 a las 20:00:52
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `SP_ACTUALIZAR_CELULAR`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ACTUALIZAR_CELULAR` (IN `pnIdCelular` INT, IN `pcDescripcion` VARCHAR(45), IN `pnUsuario_idUsuario` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN

    DECLARE vnConteo INT;
    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;

    IF F_VERIFICAR_USUARIO(pnUsuario_idUsuario) = 0 THEN
      SET pcMensaje = CONCAT("El Usuario: ", pnIdUsuario, " No existe." );
      LEAVE SP;
    ELSE
      UPDATE Celular
      SET descripcion = pcDescripcion
      WHERE idCelular = pnIdCelular AND Usuario_idUsuario=pnUsuario_idUsuario;

      SET pcMensaje = "Celular actualizado exitosamente";
      COMMIT;
      SET pbOcurrioError = FALSE;

    END IF;

END$$

DROP PROCEDURE IF EXISTS `SP_ACTUALIZAR_CORREO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ACTUALIZAR_CORREO` (IN `pnIdCorreoUsuario` INT, IN `pcDescripcion` VARCHAR(45), IN `pnUsuario_idUsuario` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN

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

END$$

DROP PROCEDURE IF EXISTS `SP_ACTUALIZAR_CUENTA`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ACTUALIZAR_CUENTA` (IN `pnIdCuenta` INT, IN `pnUsuario_idUsuario` INT, IN `pcContrasenia` VARCHAR(45), IN `pnIdioma_idIdioma` INT, IN `pnSaldo` DOUBLE(10,2), OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN

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

END$$

DROP PROCEDURE IF EXISTS `SP_ACTUALIZAR_DIRECCION`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ACTUALIZAR_DIRECCION` (IN `pnIdDireccionUsuario` INT, IN `pnUsuario_idUsuario` INT, IN `pcPais` VARCHAR(45), IN `pcEstado_Depto` VARCHAR(45), IN `pcCiudad` VARCHAR(45), IN `pcColonia` VARCHAR(45), IN `pcSector_Calle` VARCHAR(45), IN `pcCasa_Edicio` VARCHAR(45), IN `pnCodigoPostal` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN

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

END$$

DROP PROCEDURE IF EXISTS `SP_ACTUALIZAR_TELEFONO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ACTUALIZAR_TELEFONO` (IN `pnIdTelefono` INT, IN `pcDescripcion` VARCHAR(45), IN `pnUsuario_idUsuario` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN

    DECLARE vnConteo INT;
    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;

    IF F_VERIFICAR_USUARIO(pnUsuario_idUsuario) = 0 THEN
      SET pcMensaje = CONCAT("El Usuario: ", pnIdUsuario, " No existe." );
      LEAVE SP;
    ELSE
      UPDATE TelefonoUsuario
      SET descripcion = pcDescripcion
      WHERE idTelefono = pnIdTelefono AND Usuario_idUsuario=pnUsuario_idUsuario;

      SET pcMensaje = "Usuario actualizado exitosamente";
      COMMIT;
      SET pbOcurrioError = FALSE;

    END IF;

END$$

DROP PROCEDURE IF EXISTS `SP_ACTUALIZAR_USUARIO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ACTUALIZAR_USUARIO` (IN `pnIdUsuario` VARCHAR(45), IN `pcPNombre` VARCHAR(45), IN `pcSNombre` VARCHAR(45), IN `pcPApellido` VARCHAR(45), IN `pnGenero_idGenero` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN

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

      SET pcMensaje = "Pregunta actualizada exitosamente";
      COMMIT;
      SET pbOcurrioError = FALSE;

    END IF;

END$$

DROP PROCEDURE IF EXISTS `SP_AGREGAR_CARRITO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_AGREGAR_CARRITO` (IN `pnidCarrito` INT, IN `pnidProducto` INT, IN `pnCantidad` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN

    DECLARE vnConteo      INT DEFAULT 0;
    DECLARE vnIdProducto  INT;
    DECLARE vnCantidad    INT;

    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;

    SELECT COUNT(*) INTO vnConteo FROM Producto WHERE idProducto = pnidProducto;

    IF vnConteo > 0 THEN
      SELECT cantidad INTO vnCantidad FROM Producto 
      WHERE idProducto = pnidProducto;
      
      IF vnCantidad < pnCantidad THEN
        SET pcMensaje = 'La cantidad solicitada no está disponible.';
        SET pbOcurrioError = TRUE;
        LEAVE SP;

      ELSE

        INSERT INTO DetalleCarrito (Producto_idProducto, Carrito_idCarrito, cantidad) VALUES (pnidProducto, pnidCarrito, pnCantidad);
        UPDATE Producto SET cantidad = (cantidad - pnCantidad) WHERE idProducto = pnidProducto;
        SET pcMensaje = 'Producto agregado con éxito.';
        SET pbOcurrioError = FALSE;
        COMMIT;
      END IF;
    ELSE
      SET pcMensaje='El Producto no existe.';
      LEAVE SP;
    END IF;
    
END$$

DROP PROCEDURE IF EXISTS `SP_AGREGAR_DESEO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_AGREGAR_DESEO` (IN `pnidCuenta` INT, IN `pnidProducto` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN

    DECLARE vnConteo      INT DEFAULT 0;
    DECLARE vnIdProducto  INT;
    DECLARE vnCantidad    INT;

    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;

    SELECT COUNT(*) INTO vnConteo FROM Deseo WHERE Producto_idProducto = pnidProducto;

    IF vnConteo = 0 THEN
      INSERT INTO Deseo(Producto_idProducto, Cuenta_idCuenta, fecha) VALUES (pnidProducto, pnidCuenta, (SELECT CURDATE()));
      SET pcMensaje = 'Producto agregado con éxito.';
      SET pbOcurrioError = FALSE;
      COMMIT;
    ELSE
      SET pcMensaje='El Producto ya existe en la lista.';
      LEAVE SP;
    END IF;
    
END$$

DROP PROCEDURE IF EXISTS `SP_ELIMINAR_CARRITO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ELIMINAR_CARRITO` (IN `pnidCarrito` INT, IN `pnidProducto` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN

    DECLARE vnConteo      INT DEFAULT 0;
    DECLARE vnIdProducto  INT;
    DECLARE vnCantidad    INT;

    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;

    SELECT COUNT(*) INTO vnConteo FROM DetalleCarrito WHERE Producto_idProducto = pnidProducto;

    IF vnConteo > 0 THEN
      SELECT cantidad INTO vnCantidad FROM DetalleCarrito 
      WHERE Producto_idProducto = pnidProducto;
      
      DELETE FROM DetalleCarrito 
      WHERE Producto_idProducto = pnidProducto;

      UPDATE Producto SET cantidad = (cantidad + vnCantidad) 
      WHERE idProducto = pnidProducto;

      SET pcMensaje = 'Producto eliminado con éxito';
      SET pbOcurrioError = FALSE;
      COMMIT;

    ELSE
      SET pcMensaje='El Producto no existe en el carrito.';
      LEAVE SP;
    END IF;
    
END$$

DROP PROCEDURE IF EXISTS `SP_ELIMINAR_CELULAR`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ELIMINAR_CELULAR` (IN `pnUsuario_idUsuario` INT, IN `pnidCelular` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP: BEGIN
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
END$$

DROP PROCEDURE IF EXISTS `SP_ELIMINAR_CORREO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ELIMINAR_CORREO` (IN `pnUsuario_idUsuario` INT, IN `pnidCorreo` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP: BEGIN
  DECLARE vnConteo  	INT DEFAULT 0;
  SET autocommit=0;

  START TRANSACTION;

  SET pcMensaje='';
  SET pbOcurrioError=TRUE;

  IF FN_BORRAR_CORREO_USUARIO(pnUsuario_idUsuario) = 1 THEN
    DELETE FROM CorreoUsuario WHERE idCorreoUsuario = pnidCorreo AND Usuario_idUsuario = pnUsuario_idUsuario;
    SET pcMensaje='Correo eliminado con exito.';
    COMMIT;
    SET pbOcurrioError=FALSE;
  ELSE
    SET pcMensaje = CONCAT("No se puede eliminar el correo.");
    LEAVE SP;
  END IF;
END$$

DROP PROCEDURE IF EXISTS `SP_ELIMINAR_DESEO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ELIMINAR_DESEO` (IN `pnidCuenta` INT, IN `pnidProducto` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN

    DECLARE vnConteo      INT DEFAULT 0;
    DECLARE vnIdProducto  INT;
    DECLARE vnCantidad    INT;

    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;

    SELECT COUNT(*) INTO vnConteo FROM Deseo WHERE Producto_idProducto = pnidProducto;

    IF vnConteo > 0 THEN
      DELETE FROM Deseo WHERE Producto_idProducto = pnidProducto;
      SET pcMensaje = 'Producto eliminado con éxito.';
      SET pbOcurrioError = FALSE;
      COMMIT;
    ELSE
      SET pcMensaje='El Producto no existe en la lista.';
      LEAVE SP;
    END IF;
    
END$$

DROP PROCEDURE IF EXISTS `SP_ELIMINAR_DIRECCION`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ELIMINAR_DIRECCION` (IN `pnUsuario_idUsuario` INT, IN `pnidDireccion` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP: BEGIN
  DECLARE vnConteo  	INT DEFAULT 0;
  SET autocommit=0;

  START TRANSACTION;

  SET pcMensaje='';
  SET pbOcurrioError=TRUE;

  IF FN_BORRAR_DIRECCION(pnUsuario_idUsuario) = 1 THEN
    DELETE FROM DireccionUsuario WHERE idDireccionUsuario = pnidDireccion AND Usuario_idUsuario = pnUsuario_idUsuario;
    SET pcMensaje='Dirección eliminada con exito.';
    COMMIT;
    SET pbOcurrioError=FALSE;
  ELSE
    SET pcMensaje = CONCAT("No se puede eliminar la dirección.");
    LEAVE SP;
  END IF;
END$$

DROP PROCEDURE IF EXISTS `SP_ELIMINAR_TELEFONO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ELIMINAR_TELEFONO` (IN `pnUsuario_idUsuario` INT, IN `pnidTelefono` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP: BEGIN
  DECLARE vnConteo  	INT DEFAULT 0;
  SET autocommit=0;

  START TRANSACTION;

  SET pcMensaje='';
  SET pbOcurrioError=TRUE;

  IF FN_BORRAR_TELEFONO_USUARIO(pnUsuario_idUsuario) = 1 THEN
    DELETE FROM TelefonoUsuario WHERE idTelefono = pnidTelefono AND Usuario_idUsuario = pnUsuario_idUsuario;
    SET pcMensaje='Telefono eliminado con exito.';
    COMMIT;
    SET pbOcurrioError=FALSE;
  ELSE
    SET pcMensaje = CONCAT("No se puede eliminar el teléfono.");
    LEAVE SP;
  END IF;
END$$

DROP PROCEDURE IF EXISTS `SP_FACTURAR_CARRITO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_FACTURAR_CARRITO` (IN `pnidCarrito` INT, IN `pnidDescuento` INT, IN `pnidImpuesto` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN

    DECLARE vnConteo1     INT DEFAULT 0;
    DECLARE vnConteo      INT DEFAULT 0;
    DECLARE vnIdFnuevo    INT DEFAULT 0;
    DECLARE vnI           INT DEFAULT 1;
    DECLARE vnIdProducto  INT;
    DECLARE vnCantidad    INT;
    DECLARE vbAdescuento  BOOLEAN;
    DECLARE vbAimpuesto   BOOLEAN;
    DECLARE vcEdescuento  VARCHAR(1);
    DECLARE vcEimpuesto   VARCHAR(1);

    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;


    SELECT COUNT(*) INTO vnConteo1 FROM DetalleCarrito WHERE Carrito_idCarrito = pnidCarrito;
    IF vnConteo1>0 THEN
      INSERT INTO Factura (Carrito_idCarrito, fecha) VALUES (pnidCarrito, (SELECT SYSDATE()));
      SET vnIdFnuevo = LAST_INSERT_ID();

      SELECT estado INTO vcEdescuento FROM Descuento WHERE idDescuento = pnidDescuento;
      SELECT estado INTO vcEimpuesto FROM TipoImpuesto WHERE idTipoImpuesto = pnidImpuesto;
      
      IF vcEdescuento = 'A' THEN 
        INSERT INTO DescuentoFactura(Factura_idFactura, Descuento_idDescuento) VALUES (vnIdFnuevo, pnidDescuento);
      ELSE 
        INSERT INTO DescuentoFactura(Factura_idFactura, Descuento_idDescuento) VALUES (vnIdFnuevo, 16);
      END IF;

      IF vcEimpuesto = 'A' THEN 
        INSERT INTO Impuesto(Factura_idFactura, TipoImpuesto_idTipoImpuesto) VALUES (vnIdFnuevo, pnidImpuesto);
      ELSE
        INSERT INTO Impuesto(Factura_idFactura, TipoImpuesto_idTipoImpuesto) VALUES (vnIdFnuevo, 16);
      END IF;

      CREATE TEMPORARY TABLE Compras (
        idCompras           INT NOT NULL AUTO_INCREMENT,
        Producto_idProducto INT NOT NULL, 
        cantidad            INT NOT NULL,
        CONSTRAINT PK_COMPRAS PRIMARY KEY (idCompras)
      );

      INSERT INTO Compras (Producto_idProducto, cantidad) SELECT DetalleCarrito.Producto_idProducto, DetalleCarrito.cantidad FROM DetalleCarrito WHERE DetalleCarrito.Carrito_idCarrito = pnidCarrito;
      SELECT COUNT(*) INTO vnConteo FROM Compras;

      WHILE vnI <= vnConteo DO 
        SELECT Compras.Producto_idProducto INTO vnIdProducto FROM Compras WHERE Compras.idCompras = vnI;
        SELECT Compras.cantidad INTO vnCantidad FROM Compras WHERE Compras.idCompras = vnI;
        INSERT INTO DetalleFactura(Factura_idFactura, Producto_idProducto, cantidad) VALUES (vnIdFnuevo, vnIdProducto, vnCantidad);
        SET vnI = (vnI + 1) ;
      END WHILE;

      DROP TABLE IF EXISTS Compras;
      DELETE FROM DetalleCarrito WHERE Carrito_idCarrito = pnidCarrito;
      
      COMMIT;
      SET pbOcurrioError = FALSE;
      SET pcMensaje='Pago realizado correctamente';

    ELSE
      SET pcMensaje='Carrito vacío';
      LEAVE SP;
    END IF;
    
END$$

DROP PROCEDURE IF EXISTS `SP_FILTRO_SUBDEPTO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_FILTRO_SUBDEPTO` (IN `pnIdSubdepto` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN
    DECLARE vnConteo      INT DEFAULT 0;


    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;


    SELECT COUNT(*) INTO vnConteo FROM Subdepartamento WHERE idSubdepartamento = pnIdSubdepto;

    IF vnConteo > 0 THEN
      SELECT pro.* FROM 
        ((Producto pro INNER JOIN ProductoPorSubdepartamento pps ON  pro.idProducto = pps.Producto_idProducto)  
        INNER JOIN Subdepartamento subd ON pps.Subdepartamento_idSubdepartamento = subd.idSubdepartamento)
        WHERE subd.idSubdepartamento = pnIdSubdepto;
      COMMIT;
      SET pbOcurrioError = FALSE;
      SET pcMensaje='Consulta realizada con éxito';

    ELSE
      SET pcMensaje='No existe Subdepartamento';
      LEAVE SP;
    END IF;
    
END$$

DROP PROCEDURE IF EXISTS `SP_LOGIN`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LOGIN` (IN `pcCorreoUsuario` VARCHAR(45), IN `pcContrasenia` VARCHAR(45), OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP: BEGIN
  DECLARE vnConteo  	INT DEFAULT 0;
  DECLARE vnUsuario 	INT;
  DECLARE vnCuenta  	INT;
  DECLARE vcContrasenia VARCHAR(45);
  SET autocommit=0;

  /*START TRANSACTION;*/

  SET pcMensaje='';
  SET pbOcurrioError=TRUE;

  SELECT COUNT(*) INTO vnConteo FROM CorreoUsuario cu
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
        SET pcMensaje=CONCAT('Bienvenido a VOL-UNAH : ', FN_Nombre_Usuario(vnUsuario));
        SET pbOcurrioError=FALSE;

      ELSE
      	SET pcMensaje = CONCAT('La contraseña: ', pcContrasenia, ' no es válida.');
    	LEAVE SP;

      END IF;
  END IF;
END$$

DROP PROCEDURE IF EXISTS `SP_PAGAR_FACTURA`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_PAGAR_FACTURA` (IN `pnidUsuario` INT, IN `pnidCuenta` INT, IN `pnidFactura` INT, IN `pnidFormaEnvio` INT, IN `pnidClaseEnvio` INT, IN `pnidTipoEnvio` INT, IN `pnidEmpresaEnvio` INT, IN `pnidDireccionUsuario` INT, OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP:BEGIN

    DECLARE vnConteo      INT DEFAULT 0;
    DECLARE vnTotalF      DOUBLE(10,2);
    DECLARE vnSaldoA      DOUBLE(10,2);
    DECLARE vnIdUsuario   INT;
    DECLARE vnNSaldo      DOUBLE(10,2);
    DECLARE vcEstadoFac   VARCHAR(1);

    SET autocommit=0;
    START TRANSACTION;
    SET pcMensaje='';
    SET pbOcurrioError = TRUE;


    SELECT COUNT(*) INTO vnConteo FROM Factura WHERE idFactura = pnidFactura;
    IF vnConteo>0 THEN
      SELECT estado INTO vcEstadoFac FROM Factura WHERE idFactura = pnidFactura;
      IF vcEstadoFac <> 'C' THEN
        SELECT Saldo INTO vnSaldoA FROM Cuenta WHERE idCuenta = pnidCuenta;
        SELECT Total INTO vnTotalF FROM vw_Total WHERE IdFactura = pnidFactura;
  
        IF vnSaldoA >= vnTotalF THEN
          INSERT INTO Envio (EmpresaEnvio_idEmpresaEnvio, FormaEnvio_idFormaEnvio, ClaseEnvio_idClaseEnvio, Factura_idFactura, DireccionUsuario_idDireccionUsuario) VALUES (pnidEmpresaEnvio, pnidFormaEnvio, pnidClaseEnvio, pnidFactura, pnidDireccionUsuario);
          SET vnNSaldo = FN_MODIFICAR_SALDO(pnidUsuario, pnidCuenta, -vnTotalF);
          UPDATE Cuenta SET Saldo = vnNSaldo WHERE idCuenta = pnidCuenta;
          UPDATE Factura SET estado = 'C' WHERE idFactura = pnidFactura;
          INSERT INTO Pedido(Factura_idFactura, Cuenta_idCuenta) VALUES(pnidFactura,pnidCuenta);
          COMMIT;
          SET pbOcurrioError = FALSE;
          SET pcMensaje='Su envío está listo para ser entregado.';
        ELSE
        SET pcMensaje = 'El saldo es insuficiente.';
        LEAVE SP;
        END IF;
      ELSE 
        SET pcMensaje = 'La factura ya ha sido cancelada.';
        LEAVE SP;
      END IF;
    ELSE
      SET pcMensaje='La factura no existe.';
      LEAVE SP;
    END IF;
    
END$$

DROP PROCEDURE IF EXISTS `SP_USUARIO_CUENTA`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_USUARIO_CUENTA` (IN `pcCorreoUsuario` VARCHAR(45), IN `pcPNombre` VARCHAR(45), IN `pcSNombre` VARCHAR(45), IN `pcPApellido` VARCHAR(45), IN `pnGenero` INT, IN `pnTipoCuenta` INT, IN `pcContrasenia` VARCHAR(45), IN `pnIdioma` INT, IN `pnSaldo` DOUBLE(10,2), OUT `pcMensaje` VARCHAR(1000), OUT `pbOcurrioError` BOOLEAN)  SP: BEGIN

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
      SET pcMensaje='Registro realizado correctamente';
      COMMIT;
      SET pbOcurrioError=FALSE;
   END IF;

END$$

--
-- Funciones
--
DROP FUNCTION IF EXISTS `FN_BORRAR_CELULAR`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `FN_BORRAR_CELULAR` (`pnIdUsuario` INT) RETURNS TINYINT(1) BEGIN
  DECLARE vnConteo INT;
  DECLARE vbResp BOOLEAN;

  SET vbResp = FALSE;
  SET vnConteo = 0;

  SELECT COUNT(*) INTO vnConteo FROM Celular ce
  WHERE ce.Usuario_idUsuario = pnIdUsuario;

  IF vnConteo >=2 THEN
    SET vbResp = TRUE;
  END IF;

  RETURN vbResp;
END$$

DROP FUNCTION IF EXISTS `FN_BORRAR_CORREO_USUARIO`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `FN_BORRAR_CORREO_USUARIO` (`pnIdUsuario` INT) RETURNS TINYINT(1) BEGIN
  DECLARE vnConteo INT;
  DECLARE vbResp BOOLEAN;

  SET vbResp = FALSE;
  SET vnConteo = 0;

  SELECT COUNT(*) INTO vnConteo FROM CorreoUsuario cu
  WHERE cu.Usuario_idUsuario = pnIdUsuario;

  IF vnConteo >=2 THEN
    SET vbResp = TRUE;
  END IF;

  RETURN vbResp;
END$$

DROP FUNCTION IF EXISTS `FN_BORRAR_DIRECCION`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `FN_BORRAR_DIRECCION` (`pnIdUsuario` INT) RETURNS TINYINT(1) BEGIN
  DECLARE vnConteo INT;
  DECLARE vbResp BOOLEAN;

  SET vbResp = FALSE;
  SET vnConteo = 0;

  SELECT COUNT(*) INTO vnConteo FROM DireccionUsuario du
  WHERE du.Usuario_idUsuario = pnIdUsuario;

  IF vnConteo >1 THEN
  SET vbResp = TRUE;
  END IF;

  RETURN vbResp;
END$$

DROP FUNCTION IF EXISTS `FN_BORRAR_TELEFONO_USUARIO`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `FN_BORRAR_TELEFONO_USUARIO` (`pnIdUsuario` INT) RETURNS TINYINT(1) BEGIN
  DECLARE vnConteo INT;
  DECLARE vbResp BOOLEAN;

  SET vbResp = FALSE;
  SET vnConteo = 0;

  SELECT COUNT(*) INTO vnConteo FROM TelefonoUsuario tu
  WHERE tu.Usuario_idUsuario = pnIdUsuario;

  IF vnConteo >=2 THEN
    SET vbResp = TRUE;
  END IF;

  RETURN vbResp;
END$$

DROP FUNCTION IF EXISTS `FN_MODIFICAR_SALDO`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `FN_MODIFICAR_SALDO` (`pnUsuario_idUsuario` INT, `pnIdCuenta` INT, `pnCantidad` DOUBLE(10,2)) RETURNS DOUBLE(10,2) BEGIN
  DECLARE vnASaldo DOUBLE(10,2) DEFAULT 0.00;
  DECLARE vnNSaldo DOUBLE(10,2) DEFAULT 0.00;

  IF FN_VERIFICAR_USUARIO(pnUsuario_idUsuario) = 1 THEN
    SELECT Saldo INTO vnASaldo FROM Cuenta
    WHERE idCuenta = pnIdCuenta AND Usuario_idUsuario = pnUsuario_idUsuario;
      SET vnNSaldo = (vnASaldo + pnCantidad);
      RETURN vnNSaldo;
  ELSE
  	RETURN vnNSaldo;
  END IF;

  END$$

DROP FUNCTION IF EXISTS `FN_NOMBRE_USUARIO`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `FN_NOMBRE_USUARIO` (`_idUsuario` INT) RETURNS VARCHAR(135) CHARSET latin1 BEGIN
    DECLARE nombreApellido VARCHAR(135);
    SET nombreApellido = (SELECT CONCAT(pNombre, " ", sNombre, " ", pApellido) FROM Usuario WHERE idUsuario = _idUsuario);
    RETURN nombreApellido;
  END$$

DROP FUNCTION IF EXISTS `FN_OBTENER_ID_USUARIO`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `FN_OBTENER_ID_USUARIO` (`pcEmail` VARCHAR(45)) RETURNS INT(11) BEGIN
    DECLARE vnResp INT;
    DECLARE vnConteo INT;

    SELECT COUNT(1) INTO vnConteo FROM CorreoUsuario WHERE descripcion = pcEmail;
    IF vnConteo > 0 THEN
        SELECT u.idUsuario INTO vnResp FROM (Usuario u INNER JOIN CorreoUsuario cu ON u.idUsuario = cu.Usuario_idUsuario) WHERE cu.descripcion = pcEmail;
        return vnResp;
    ELSE
        SET vnResp=0;
        return vnResp;
    END if;
    
END$$

DROP FUNCTION IF EXISTS `FN_VERIFICAR_USUARIO`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `FN_VERIFICAR_USUARIO` (`pnIdUsuario` INT) RETURNS TINYINT(1) BEGIN
  DECLARE vnConteo INT;
  DECLARE vbResp BOOLEAN;

  SET vbResp = FALSE;
  SET vnConteo = 0;

  SELECT COUNT(*) INTO vnConteo FROM Usuario us
  WHERE us.idUsuario = pnIdUsuario;

  IF vnConteo > 0 THEN
    SET vbResp = TRUE;
  END IF;

  RETURN vbResp;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficio`
--

DROP TABLE IF EXISTS `beneficio`;
CREATE TABLE IF NOT EXISTS `beneficio` (
  `idBeneficio` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de cada Beneficio existente.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Descripción de cada beneficio.',
  `estado` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Cada beneficio tendrá un estado de Activo o Inactivo.',
  PRIMARY KEY (`idBeneficio`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `beneficio`
--

INSERT INTO `beneficio` (`idBeneficio`, `descripcion`, `estado`) VALUES
(1, 'GenerarPublicaciones', 'A'),
(2, 'GenerarEstadosContables', 'A'),
(3, 'RealizarCompras', 'A'),
(4, 'VerInformaciónTotal', 'A'),
(5, 'VerInformaciónParcial', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficioporcuenta`
--

DROP TABLE IF EXISTS `beneficioporcuenta`;
CREATE TABLE IF NOT EXISTS `beneficioporcuenta` (
  `TipoCuenta_idTipoCuenta` int(11) NOT NULL COMMENT 'Tipo de cuenta del detalle.',
  `Beneficio_idBeneficio` int(11) NOT NULL COMMENT 'Tipo de beneficio según cuenta.',
  `estado` varchar(1) COLLATE utf8_unicode_ci DEFAULT 'A' COMMENT '	Estado del beneficio por cuenta ejemplo: Activado o Inactivo.',
  KEY `FK_TipoCuenta` (`TipoCuenta_idTipoCuenta`),
  KEY `FK_Beneficio` (`Beneficio_idBeneficio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `beneficioporcuenta`
--

INSERT INTO `beneficioporcuenta` (`TipoCuenta_idTipoCuenta`, `Beneficio_idBeneficio`, `estado`) VALUES
(1, 1, 'A'),
(2, 3, 'A'),
(3, 3, 'A'),
(4, 3, 'A'),
(5, 3, 'A'),
(6, 3, 'A'),
(7, 3, 'A'),
(8, 3, 'A'),
(9, 3, 'A'),
(10, 3, 'A'),
(11, 3, 'A'),
(12, 3, 'A'),
(13, 3, 'A'),
(14, 3, 'A'),
(15, 3, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacioncomentario`
--

DROP TABLE IF EXISTS `calificacioncomentario`;
CREATE TABLE IF NOT EXISTS `calificacioncomentario` (
  `Producto_idProducto` int(11) NOT NULL,
  `Cuenta_idCuenta` int(11) NOT NULL,
  `TipoCalificacion_idCalificacion` int(11) NOT NULL DEFAULT '5',
  `comentario` varchar(280) COLLATE utf8_unicode_ci DEFAULT NULL,
  KEY `FK_Cuenta` (`Cuenta_idCuenta`),
  KEY `FK_Producto` (`Producto_idProducto`),
  KEY `FK_TipoCalificacion` (`TipoCalificacion_idCalificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `calificacioncomentario`
--

INSERT INTO `calificacioncomentario` (`Producto_idProducto`, `Cuenta_idCuenta`, `TipoCalificacion_idCalificacion`, `comentario`) VALUES
(10, 2, 5, 'Excelente'),
(10, 2, 5, 'Excelente'),
(15, 2, 5, 'Excelente'),
(2, 2, 5, 'Excelente'),
(11, 2, 5, 'Excelente'),
(3, 2, 5, 'Excelente'),
(8, 2, 5, 'Excelente'),
(9, 2, 5, 'Excelente'),
(13, 2, 5, 'Excelente'),
(12, 2, 5, 'Excelente'),
(8, 2, 5, 'Excelente'),
(8, 2, 5, 'Excelente'),
(7, 2, 5, 'Excelente'),
(7, 2, 5, 'Excelente'),
(9, 2, 5, 'Excelente'),
(3, 2, 5, 'Excelente'),
(6, 2, 5, 'Excelente'),
(5, 2, 5, 'Excelente'),
(1, 2, 5, 'Excelente'),
(8, 2, 5, 'Excelente'),
(13, 2, 5, 'Excelente'),
(9, 2, 5, 'Excelente'),
(5, 2, 5, 'Excelente'),
(9, 2, 5, 'Excelente'),
(4, 2, 5, 'Excelente'),
(10, 2, 5, 'Excelente'),
(4, 2, 5, 'Excelente'),
(10, 2, 5, 'Excelente'),
(13, 2, 5, 'Excelente'),
(3, 2, 5, 'Excelente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

DROP TABLE IF EXISTS `carrito`;
CREATE TABLE IF NOT EXISTS `carrito` (
  `idCarrito` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifica a cada carrito.',
  `Cuenta_idCuenta` int(11) NOT NULL COMMENT 'Indica la cuenta a la que está asociada el carrito.',
  PRIMARY KEY (`idCarrito`),
  KEY `FK_Cuenta` (`Cuenta_idCuenta`),
  KEY `idCarrito` (`idCarrito`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`idCarrito`, `Cuenta_idCuenta`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celular`
--

DROP TABLE IF EXISTS `celular`;
CREATE TABLE IF NOT EXISTS `celular` (
  `idCelular` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del correo dentro del sistema.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Número del teléfono celular ligado al usuario ejemplo: +504 9999-9999',
  `Usuario_idUsuario` int(11) NOT NULL COMMENT 'Identificador de la persona a la cual pertenece el celular',
  PRIMARY KEY (`idCelular`),
  KEY `FK_Usuario` (`Usuario_idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `celular`
--

INSERT INTO `celular` (`idCelular`, `descripcion`, `Usuario_idUsuario`) VALUES
(1, '+504 99887766', 1),
(2, '+504 98786556', 2),
(3, '+504 88332233', 3),
(4, '+504 87663322', 4),
(5, '+504 88944433', 5),
(6, '+504 873232223', 6),
(7, '+504 977664312', 7),
(8, '+504 87339900', 8),
(9, '+504 99765522', 9),
(10, '+504 99119933', 10),
(11, '+504 98778888', 11),
(12, '+504 91345678', 12),
(13, '+504 89993487', 13),
(14, '+700 87443322', 14),
(15, '+504 98778899', 15),
(16, '+504 88765432', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `claseenvio`
--

DROP TABLE IF EXISTS `claseenvio`;
CREATE TABLE IF NOT EXISTS `claseenvio` (
  `idClaseEnvio` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifica cada clase de envío existente.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Debe haber una breve descripción por cada clase de envió existente.',
  `categoria` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Existen categorías de envío, por ejemplo Premium, básico, etc.',
  PRIMARY KEY (`idClaseEnvio`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `claseenvio`
--

INSERT INTO `claseenvio` (`idClaseEnvio`, `descripcion`, `categoria`) VALUES
(1, 'Express: Entrega  al día siguiente', 'A'),
(2, 'Express: Entrega dentro de dos días.', 'B'),
(3, 'Prioritario: Entrega dentro de tres días.', 'A'),
(4, 'Prioritario:Entrega dentro de cuatro días.', 'B'),
(5, 'Primera Clase: Entrega dentro de cinco días.', 'A'),
(6, 'Primera Clase:Entrega dentro de seis días.', 'B'),
(7, 'Express/Seguro', 'A'),
(8, 'Express/Seguro', 'B'),
(9, 'Prioritario/Seguro', 'A'),
(10, 'Prioritario/Seguro', 'B'),
(11, 'PrimeraClase/Seguro', 'A'),
(12, 'PrimeraClase/Seguro', 'B'),
(13, 'Express/Cuidado Especial', 'C'),
(14, 'Primera Clase/ Cuidado Especial', 'D'),
(15, 'Prioritario/ Cuidado Especial', 'F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `compras` (
  `idCompras` int(11) NOT NULL AUTO_INCREMENT,
  `Producto_idProducto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCompras`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correoempresarial`
--

DROP TABLE IF EXISTS `correoempresarial`;
CREATE TABLE IF NOT EXISTS `correoempresarial` (
  `idCorreoEmpresarial` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del correo empresarial dentro de la empresa.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Correo asociado a la empresa ejemplo: wallmart@information.com',
  `TipoCorreo_idTipoCorreo` int(11) NOT NULL COMMENT 'Tipo de correo de la empresa, ejemplos: Correo de devoluciones, de compras, etc.',
  `Empresa_idEmpresa` int(11) NOT NULL COMMENT 'Identificador de la empresa a la que está asociada el correo.',
  PRIMARY KEY (`idCorreoEmpresarial`),
  KEY `FK_TipoCorreo` (`TipoCorreo_idTipoCorreo`),
  KEY `FK_Empresa` (`Empresa_idEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `correoempresarial`
--

INSERT INTO `correoempresarial` (`idCorreoEmpresarial`, `descripcion`, `TipoCorreo_idTipoCorreo`, `Empresa_idEmpresa`) VALUES
(1, 'in.tempus.eu@malesuadafringillaest.ca', 2, 1),
(2, 'est@malesuadamalesuada.co.uk', 4, 2),
(3, 'lorem@cursus.org', 1, 3),
(4, 'Aliquam@diam.net', 5, 4),
(5, 'justo.Praesent@sociisnatoquepenatibus.net', 2, 5),
(6, 'Aliquam@atpede.net', 1, 6),
(7, 'luctus.ipsum.leo@fermentum.ca', 2, 7),
(8, 'ultrices.Duis@etpede.com', 2, 8),
(9, 'amet@nec.com', 2, 9),
(10, 'cursus.non@lectusquismassa.org', 1, 10),
(11, 'tempus.mauris@gravidaAliquam.net', 1, 11),
(12, 'Curae.Phasellus.ornare@miDuisrisus.ca', 5, 12),
(13, 'adipiscing.fringilla.porttitor@nonjusto.net', 1, 13),
(14, 'et.tristique@erategettincidunt.edu', 1, 14),
(15, 'lobortis.quis@pharetraQuisqueac.co.uk', 1, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correousuario`
--

DROP TABLE IF EXISTS `correousuario`;
CREATE TABLE IF NOT EXISTS `correousuario` (
  `idCorreoUsuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del correo dentro del sistema.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Dirección de correo electónico ligado a un usuario ejemplo: enid.sierra@unah.hn.',
  `Usuario_idUsuario` int(11) NOT NULL COMMENT 'Identificador de usuario del correo electrónico.',
  PRIMARY KEY (`idCorreoUsuario`),
  KEY `FK_Usuario` (`Usuario_idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `correousuario`
--

INSERT INTO `correousuario` (`idCorreoUsuario`, `descripcion`, `Usuario_idUsuario`) VALUES
(1, 'abc@gmail.com', 1),
(2, 'abd@gmail.com', 2),
(3, 't144@gmail.com', 3),
(4, '234@yahoo.es', 4),
(5, '8899@hotmail.es', 5),
(6, 'G99@gmail.com', 5),
(7, '7889@yahoo.es', 7),
(8, '899@gmail.com', 8),
(9, 'Chitos@gmail.com', 9),
(10, 'arbol@unah.hn', 10),
(11, 'yoyo@gmail.com', 11),
(12, 'bt@hotmail.com', 12),
(13, 'ghot@gmail.com', 13),
(14, 'gihi@yahoo.es', 14),
(15, 'jaz@gmail.com', 15),
(16, 'nuevoCorreo@gmail.com', 16),
(114, 'ccc@gmail.com', 22),
(115, 'la@gmail.com', 23),
(116, 'acosta@gmail.com', 24),
(117, 'aa@gmail.com', 25),
(118, 'fmurillo@gmail.com', 26),
(119, 'ndiaz@gmail.com', 27),
(120, 'roberto@gmail.com', 28),
(121, 'ca@gmail.com', 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

DROP TABLE IF EXISTS `cuenta`;
CREATE TABLE IF NOT EXISTS `cuenta` (
  `idCuenta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la cuenta dentro del sistema.',
  `TipoCuenta_idTipoCuenta` int(11) NOT NULL COMMENT 'Tipo de cuenta que el usuario ha creado.',
  `Usuario_idUsuario` int(11) NOT NULL COMMENT 'Identificación del usuario que creó la cuenta',
  `fechaRegistro` date NOT NULL COMMENT 'Fecha de creación de la cuenta.',
  `contrasenia` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Contraseña para ingresar a la cuenta.',
  `Idioma_idIdioma` int(11) NOT NULL COMMENT 'Identificación del idioma que registró el usuario.',
  `Saldo` double(10,2) DEFAULT '0.00' COMMENT 'Saldo asignado a la cuenta.',
  PRIMARY KEY (`idCuenta`),
  KEY `FK_TipoCuenta` (`TipoCuenta_idTipoCuenta`),
  KEY `FK_Usuario` (`Usuario_idUsuario`),
  KEY `FK_Idioma` (`Idioma_idIdioma`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`idCuenta`, `TipoCuenta_idTipoCuenta`, `Usuario_idUsuario`, `fechaRegistro`, `contrasenia`, `Idioma_idIdioma`, `Saldo`) VALUES
(1, 1, 1, '2017-07-18', 'Cras', 1, 15475.00),
(2, 2, 2, '2003-08-17', 'ut,', 1, 220.00),
(3, 2, 3, '2008-05-18', 'est', 1, 3500.00),
(4, 2, 4, '2014-01-18', 'vitae', 1, 500.00),
(5, 2, 5, '2001-07-17', 'ultricies', 1, 20000.50),
(6, 2, 6, '2031-12-18', 'non,', 1, 254.33),
(7, 2, 7, '2001-12-17', 'Nunc', 1, 150.00),
(8, 2, 8, '2013-11-18', 'a', 1, 8000.00),
(9, 2, 9, '2001-01-18', 'ipsum', 1, 45076.00),
(10, 2, 10, '2024-11-18', 'ac', 1, 12345.00),
(11, 2, 11, '2008-06-17', 'vitae', 1, 11.00),
(12, 2, 12, '2017-08-17', 'Integer', 1, 654.00),
(13, 2, 13, '2005-08-18', 'Duis', 1, 50.00),
(14, 2, 14, '2018-09-17', 'ipsum.', 1, 750.00),
(15, 2, 15, '2014-08-17', 'ligula', 1, 30.00),
(16, 1, 16, '2018-04-14', 'prueba@1234', 2, 9000.00),
(17, 1, 22, '2018-04-20', 'HOLA', 1, 100.00),
(18, 2, 23, '2018-04-25', 'aaaa', 1, 0.00),
(19, 2, 24, '2018-04-25', 'doab', 1, 0.00),
(20, 2, 25, '2018-04-25', '1234', 1, 0.00),
(21, 2, 26, '2018-04-26', '1234', 1, 0.00),
(22, 2, 27, '2018-04-26', 'ndiaz', 1, 0.00),
(23, 2, 28, '2018-04-26', 'qwer', 1, 0.00),
(24, 2, 29, '2018-04-27', 'hola', 1, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del departamento en el sistema.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre del departamento ejemplo : electrónicos.',
  PRIMARY KEY (`idDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`idDepartamento`, `descripcion`) VALUES
(1, 'Electrónica, Computadoras y Oficina'),
(2, 'Juguetes y Niños'),
(3, 'Vestimenta, Calzado y Joyería'),
(4, 'Libros'),
(5, 'Jardinería'),
(6, 'Hecho A Mano'),
(7, 'Ebooks'),
(8, 'Películas, Música y Juegos'),
(9, 'Suplementos de Mascotas'),
(10, 'Deportes '),
(11, 'Tabletas'),
(12, 'Comida y Comestibles'),
(13, 'Exclusivos'),
(14, 'Belleza y Salud'),
(15, 'Automovilismo e Industriales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuento`
--

DROP TABLE IF EXISTS `descuento`;
CREATE TABLE IF NOT EXISTS `descuento` (
  `idDescuento` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifica cada tipo de descuento existente.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Descripción de cada tipo de descuento aplicable.',
  `estado` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Denota con una palabra específica para saber si está o no está activo algún descuento.',
  `porcentajeDescuento` decimal(3,2) NOT NULL COMMENT 'Porcentaje descuento aplicable',
  PRIMARY KEY (`idDescuento`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `descuento`
--

INSERT INTO `descuento` (`idDescuento`, `descripcion`, `estado`, `porcentajeDescuento`) VALUES
(1, 'Descuento Aniversario Empresa', 'I', '0.00'),
(2, 'Descuento Empleado', 'A', '0.18'),
(3, 'Descuento Cliente Favorito', 'I', '0.00'),
(4, 'Descuento Puntos', 'A', '0.15'),
(5, 'Descuento Visita', 'I', '0.00'),
(6, 'Descuento Folleto', 'I', '0.00'),
(7, 'Descuento Revista', 'I', '0.00'),
(8, 'Descuento Períodico', 'I', '0.00'),
(9, 'Descuento Código', 'I', '0.00'),
(10, 'Descuento Televisivo', 'I', '0.00'),
(11, 'Descuento Radio', 'I', '0.00'),
(12, 'Descuento Familiar', 'I', '0.00'),
(13, 'Descuento Cantidad de Productos', 'I', '0.00'),
(14, 'Descuento Especial', 'I', '0.00'),
(15, 'Descuento Producto Dañado', 'I', '0.20'),
(16, 'Ninguno', 'A', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuentofactura`
--

DROP TABLE IF EXISTS `descuentofactura`;
CREATE TABLE IF NOT EXISTS `descuentofactura` (
  `Factura_idFactura` int(11) NOT NULL COMMENT 'Denota la factura a la que se cargará el descuento.',
  `Descuento_idDescuento` int(11) DEFAULT NULL COMMENT 'Denota el tipo de descuento que se aplicará a la factura.',
  KEY `FK_Factura` (`Factura_idFactura`),
  KEY `FK_Descuento` (`Descuento_idDescuento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `descuentofactura`
--

INSERT INTO `descuentofactura` (`Factura_idFactura`, `Descuento_idDescuento`) VALUES
(1, 4),
(2, 2),
(3, 16),
(4, 16),
(5, 16),
(6, 16),
(7, 16),
(8, 16),
(9, 16),
(10, 16),
(11, 16),
(12, 16),
(13, 16),
(14, 16),
(15, 16),
(16, 16),
(17, 16),
(18, 16),
(19, 16),
(20, 16),
(21, 16),
(22, 16),
(23, 16),
(24, 16),
(25, 16),
(26, 16),
(27, 16),
(28, 16),
(29, 16),
(30, 16),
(55, 16),
(56, 16),
(57, 1),
(58, 2),
(59, 16),
(60, 16),
(61, 16),
(62, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deseo`
--

DROP TABLE IF EXISTS `deseo`;
CREATE TABLE IF NOT EXISTS `deseo` (
  `Cuenta_idCuenta` int(11) NOT NULL COMMENT 'Identificador de la cuenta asociada.',
  `Producto_idProducto` int(11) NOT NULL COMMENT 'Identificador del producto que se mostrará.',
  `fecha` date NOT NULL COMMENT 'Fecha en que se asignó el producto a la lista.',
  KEY `FK_Cuenta` (`Cuenta_idCuenta`),
  KEY `FK_Producto` (`Producto_idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `deseo`
--

INSERT INTO `deseo` (`Cuenta_idCuenta`, `Producto_idProducto`, `fecha`) VALUES
(15, 10, '2018-02-19'),
(2, 7, '2031-03-19'),
(9, 6, '2012-11-17'),
(10, 6, '2020-02-19'),
(4, 13, '2026-05-17'),
(5, 13, '2002-09-18'),
(5, 2, '2006-07-17'),
(1, 4, '2020-01-18'),
(13, 1, '2023-03-18'),
(14, 11, '2001-07-18'),
(1, 12, '2003-08-18'),
(6, 5, '2019-02-18'),
(2, 15, '2004-03-19'),
(2, 13, '2011-02-19'),
(2, 7, '2002-06-17'),
(13, 3, '2018-07-18'),
(10, 15, '2027-05-17'),
(5, 13, '2026-11-17'),
(8, 10, '2005-06-17'),
(6, 11, '2017-07-17'),
(1, 12, '2003-08-18'),
(6, 5, '2019-02-18'),
(2, 15, '2004-03-19'),
(2, 13, '2011-02-19'),
(2, 7, '2002-06-17'),
(13, 3, '2018-07-18'),
(10, 15, '2027-05-17'),
(5, 13, '2026-11-17'),
(8, 10, '2005-06-17'),
(6, 11, '2017-07-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecarrito`
--

DROP TABLE IF EXISTS `detallecarrito`;
CREATE TABLE IF NOT EXISTS `detallecarrito` (
  `Producto_idProducto` int(11) NOT NULL COMMENT 'Identificador de cada producto en el carrito.',
  `Carrito_idCarrito` int(11) NOT NULL COMMENT 'Identificador del carrito.',
  `cantidad` int(11) NOT NULL COMMENT 'Cantidad por cada producto',
  KEY `FK_IDPRODUCTO` (`Producto_idProducto`),
  KEY `FK_IDCARRITO` (`Carrito_idCarrito`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

DROP TABLE IF EXISTS `detallefactura`;
CREATE TABLE IF NOT EXISTS `detallefactura` (
  `Factura_idFactura` int(11) NOT NULL COMMENT 'Identificador de la factura',
  `Producto_idProducto` int(11) NOT NULL COMMENT 'Identificador de producto.',
  `cantidad` int(11) NOT NULL COMMENT 'Cantidad por cada producto',
  KEY `FK_PRODUCTO` (`Producto_idProducto`) USING BTREE,
  KEY `FK_FACTURA` (`Factura_idFactura`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `detallefactura`
--

INSERT INTO `detallefactura` (`Factura_idFactura`, `Producto_idProducto`, `cantidad`) VALUES
(55, 11, 6),
(55, 1, 3),
(56, 7, 1),
(1, 1, 2),
(3, 3, 1),
(2, 2, 1),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(8, 8, 1),
(9, 9, 1),
(10, 10, 2),
(11, 11, 2),
(13, 13, 2),
(14, 14, 2),
(15, 15, 2),
(16, 16, 2),
(2, 1, 3),
(1, 2, 3),
(7, 7, 1),
(57, 4, 2),
(58, 1, 2),
(59, 15, 1),
(60, 16, 5),
(60, 2, 2),
(61, 1, 2),
(62, 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccionusuario`
--

DROP TABLE IF EXISTS `direccionusuario`;
CREATE TABLE IF NOT EXISTS `direccionusuario` (
  `idDireccionUsuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la dirección de la persona dentro del sistema.',
  `pais` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'País en el que reside la persona.',
  `estado_depto` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Estado o departamento en que reside la persona.',
  `ciudad` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ciudad en la que reside la persona.',
  `colonia` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Colonia en la que reside la persona.',
  `sector_calle` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Calle o sector en que reside la persona.',
  `casa_edificio` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Número de casa o edificio en que reside la persona.',
  `codigoPostal` int(11) NOT NULL COMMENT 'Código postal del lugar de residencia.',
  `Usuario_idUsuario` int(11) NOT NULL COMMENT 'Identifica el usuario al que pertenece la dirección.',
  PRIMARY KEY (`idDireccionUsuario`),
  KEY `FK_Usuario` (`Usuario_idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `direccionusuario`
--

INSERT INTO `direccionusuario` (`idDireccionUsuario`, `pais`, `estado_depto`, `ciudad`, `colonia`, `sector_calle`, `casa_edificio`, `codigoPostal`, `Usuario_idUsuario`) VALUES
(1, 'Guernsey', 'A', 'Quesada', 'Aliquam adipiscing lobortis risus. In mi pede', 'P.O. Box 255, 8567 Sed Avenue', '70', 3839, 1),
(2, 'Bahamas', 'AP', 'Malkajgiri', 'sodales nisi magna sed dui. Fusce aliquam, en', '931-2293 Cum St.', '72', 304762, 2),
(3, 'Marshall Islands', 'Rio de Janeiro', 'Petrópolis', 'nisi dictum augue malesuada malesuada. Intege', 'P.O. Box 477, 6577 Odio Av.', '9', 948094, 3),
(4, 'Belize', 'Euskadi', 'Bilbo', 'gravida molestie arcu. Sed eu nibh vulputate ', '8804 Lorem, Rd.', '42', 2413, 4),
(5, 'Saint Pierre and Miquelon', 'A', 'Alajuela', 'turpis non enim. Mauris quis turpis vitae pur', '4832 Felis Rd.', '75', 21615, 5),
(6, 'Saint Kitts and Nevis', 'WA', 'South Perth', 'pharetra, felis eget varius ultrices, mauris ', 'Ap #651-9092 Ante, Road', '45', 366004, 6),
(7, 'Serbia', 'Ist', 'Istanbul', 'turpis. Aliquam adipiscing lobortis risus. In', 'P.O. Box 833, 3931 Nulla Av.', '100', 62432, 7),
(8, 'Cayman Islands', 'IL', 'Aurora', 'orci. Donec nibh. Quisque nonummy ipsum non a', 'P.O. Box 711, 3511 Non St.', '68', 51004, 8),
(9, 'South Sudan', 'Marche', 'Saltara', 'dolor. Donec fringilla. Donec feugiat metus s', 'P.O. Box 957, 7750 Consectetuer Ave', '84', 4643, 9),
(10, 'Benin', 'HH', 'Hamburg', 'taciti sociosqu ad litora torquent per conubi', 'Ap #632-3275 Sed St.', '55', 32161, 10),
(11, 'Falkland Islands', 'Ontario', 'Markham', 'facilisis eget, ipsum. Donec sollicitudin adi', 'P.O. Box 453, 9215 Condimentum. Avenue', '6', 20181, 11),
(12, 'Malta', 'TN', 'Chattanooga', 'mollis vitae, posuere at, velit. Cras lorem l', 'P.O. Box 777, 8606 Eu Street', '5', 447348, 12),
(13, 'Guam', 'NT', 'Palmerston', 'quis accumsan convallis, ante lectus convalli', 'Ap #958-9412 Blandit St.', '11', 674493, 13),
(14, 'Guinea', 'Ontario', 'Osgoode', 'rhoncus id, mollis nec, cursus a, enim. Suspe', 'P.O. Box 970, 6808 Ut, Rd.', '84', 0, 14),
(15, 'Christmas Island', 'BE', 'Berlin', 'cursus purus. Nullam scelerisque neque sed se', '900-2022 In Avenue', '87', 3804, 15),
(16, 'USA', 'NY', 'MANHATAN', 'NW', '6', 'XQ-1234', 6789, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `idEmpresa` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la empresa dentro del sistema.',
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre de la empresa asociada ejemplo: Wallmart, Apple, Microsoft.',
  `TipoEmpresa_idTipoEmpresa` int(11) NOT NULL COMMENT 'Tipo de empresa que se registra.',
  PRIMARY KEY (`idEmpresa`),
  KEY `FK_TipoEmpresa` (`TipoEmpresa_idTipoEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `nombre`, `TipoEmpresa_idTipoEmpresa`) VALUES
(1, 'Tellus Phasellus Elit LLP', 1),
(2, 'Faucibus Industries', 2),
(3, 'Sed PC', 2),
(4, 'Enim Corporation', 2),
(5, 'Velit LLP', 1),
(6, 'Non Arcu Corp.', 1),
(7, 'Enim Ltd', 2),
(8, 'Turpis Non Enim Limited', 2),
(9, 'Enim Gravida Sit Incorporated', 1),
(10, 'Sit Amet Limited', 2),
(11, 'Nec Euismod In LLP', 2),
(12, 'Lorem Semper Auctor Corp.', 2),
(13, 'Tincidunt Consulting', 2),
(14, 'Eu Nibh Vulputate Foundation', 2),
(15, 'Malesuada Vel Venenatis Incorporated', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresaenvio`
--

DROP TABLE IF EXISTS `empresaenvio`;
CREATE TABLE IF NOT EXISTS `empresaenvio` (
  `idEmpresaEnvio` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de cada empresa asociada.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Proporciona breve descripción de cada empresa.',
  PRIMARY KEY (`idEmpresaEnvio`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresaenvio`
--

INSERT INTO `empresaenvio` (`idEmpresaEnvio`, `descripcion`) VALUES
(1, 'Fedex'),
(2, 'UPS'),
(3, 'International Chinese Shipping'),
(4, 'Sea Express'),
(5, 'FlyFly'),
(6, 'Correo Internacional'),
(7, 'USATURBO'),
(8, 'WingLand'),
(9, 'APLUS'),
(10, 'EEE+'),
(11, 'InterOcean'),
(12, 'BlueSea'),
(13, 'BlueSea China'),
(14, 'NavyDuty'),
(15, 'MaxBox');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

DROP TABLE IF EXISTS `envio`;
CREATE TABLE IF NOT EXISTS `envio` (
  `idEnvio` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifica cada solicitud de envío.',
  `EmpresaEnvio_idEmpresaEnvio` int(11) NOT NULL COMMENT 'Adjunta el id de la empresa que realizará el envío.',
  `FormaEnvio_idFormaEnvio` int(11) NOT NULL COMMENT 'Adjunta el id que proporciona el medio en que se realizará el envío.',
  `ClaseEnvio_idClaseEnvio` int(11) NOT NULL COMMENT 'Adjunta el id de la clase por la cual se realizará el envío.',
  `estado` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'P' COMMENT 'Se indica si el envío se realizó(R) o está pendiente(P)',
  `DireccionUsuario_idDireccionUsuario` int(11) NOT NULL COMMENT 'Dirección a la que el usuario decide pedir el envío',
  `Factura_idFactura` int(11) NOT NULL COMMENT 'Factura que se carga en el envío',
  PRIMARY KEY (`idEnvio`),
  KEY `FK_EmpresaEnvio` (`EmpresaEnvio_idEmpresaEnvio`),
  KEY `FK_FormaEnvio` (`FormaEnvio_idFormaEnvio`),
  KEY `FK_ClaseEnvio` (`ClaseEnvio_idClaseEnvio`),
  KEY `FK_DireccionUsuario` (`DireccionUsuario_idDireccionUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`idEnvio`, `EmpresaEnvio_idEmpresaEnvio`, `FormaEnvio_idFormaEnvio`, `ClaseEnvio_idClaseEnvio`, `estado`, `DireccionUsuario_idDireccionUsuario`, `Factura_idFactura`) VALUES
(1, 13, 13, 5, 'P', 1, 1),
(2, 5, 4, 9, 'P', 2, 2),
(3, 10, 10, 4, 'P', 3, 3),
(4, 4, 3, 12, 'P', 4, 4),
(5, 12, 1, 13, 'P', 5, 5),
(6, 8, 3, 7, 'P', 6, 6),
(7, 4, 10, 6, 'P', 7, 7),
(8, 11, 5, 5, 'P', 8, 8),
(9, 11, 12, 3, 'P', 9, 9),
(10, 1, 11, 4, 'P', 10, 10),
(11, 8, 1, 14, 'P', 11, 11),
(12, 11, 5, 11, 'P', 12, 12),
(13, 5, 8, 6, 'P', 13, 13),
(14, 5, 3, 4, 'P', 14, 14),
(15, 3, 12, 5, 'P', 15, 15),
(16, 13, 3, 13, 'P', 16, 16),
(17, 6, 7, 1, 'P', 17, 17),
(18, 2, 14, 15, 'P', 18, 18),
(19, 2, 11, 2, 'P', 19, 19),
(20, 10, 6, 12, 'P', 20, 20),
(21, 8, 14, 14, 'P', 21, 21),
(22, 2, 2, 8, 'P', 22, 22),
(23, 15, 10, 14, 'P', 23, 23),
(24, 14, 10, 15, 'P', 24, 24),
(25, 12, 10, 1, 'P', 25, 25),
(26, 8, 9, 6, 'P', 26, 26),
(27, 10, 10, 7, 'P', 27, 27),
(28, 15, 6, 10, 'P', 28, 28),
(29, 5, 15, 9, 'P', 29, 29),
(30, 9, 10, 12, 'P', 30, 30),
(33, 1, 1, 1, 'P', 1, 60),
(34, 1, 1, 1, 'P', 2, 61),
(35, 1, 1, 1, 'P', 1, 60),
(36, 1, 1, 1, 'P', 1, 62);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `idFactura` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifica cada factura en existencia.',
  `Carrito_idCarrito` int(11) NOT NULL COMMENT 'Indica a qué carrito está asociada la factura.',
  `fecha` date NOT NULL COMMENT 'Indica la fecha que se realizó la factura.',
  `observaciones` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Se describe cada observación que sea necesaria en la factura.',
  `estado` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'P' COMMENT 'Determina si una factura está cancelada(C) o pendiente(P)',
  PRIMARY KEY (`idFactura`),
  KEY `FK_Carrito` (`Carrito_idCarrito`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`idFactura`, `Carrito_idCarrito`, `fecha`, `observaciones`, `estado`) VALUES
(1, 1, '2022-11-18', NULL, 'P'),
(2, 2, '2002-09-18', NULL, 'P'),
(3, 3, '2031-07-17', NULL, 'P'),
(4, 4, '2021-04-17', NULL, 'P'),
(5, 5, '2006-06-18', NULL, 'P'),
(6, 6, '2004-09-17', NULL, 'P'),
(7, 7, '2024-07-18', NULL, 'P'),
(8, 8, '2001-02-18', NULL, 'P'),
(9, 9, '2003-02-19', NULL, 'P'),
(10, 10, '2011-07-18', NULL, 'P'),
(11, 11, '2009-03-18', NULL, 'P'),
(12, 12, '2013-03-18', NULL, 'P'),
(13, 13, '2010-08-18', NULL, 'P'),
(14, 14, '2025-05-18', NULL, 'P'),
(15, 15, '2005-12-17', NULL, 'P'),
(16, 16, '2009-12-17', NULL, 'P'),
(17, 17, '2029-12-18', NULL, 'P'),
(18, 18, '2001-04-19', NULL, 'P'),
(19, 19, '2017-09-17', NULL, 'P'),
(20, 20, '2023-07-18', NULL, 'P'),
(21, 21, '2003-09-18', NULL, 'P'),
(22, 22, '2021-12-17', NULL, 'P'),
(23, 23, '2025-05-18', NULL, 'P'),
(24, 24, '2026-11-17', NULL, 'P'),
(25, 25, '2015-05-18', NULL, 'P'),
(26, 26, '2008-10-17', NULL, 'P'),
(27, 27, '2013-02-19', NULL, 'P'),
(28, 28, '2024-02-19', NULL, 'P'),
(29, 29, '2001-06-17', NULL, 'P'),
(30, 30, '2013-03-19', NULL, 'P'),
(55, 1, '2018-04-22', NULL, 'P'),
(56, 2, '2018-04-22', NULL, 'P'),
(57, 1, '2018-04-23', NULL, 'P'),
(58, 1, '2018-04-23', NULL, 'P'),
(59, 3, '2018-04-23', NULL, 'P'),
(60, 1, '2018-04-24', NULL, 'C'),
(61, 2, '2018-04-24', NULL, 'C'),
(62, 1, '2018-04-25', NULL, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formaenvio`
--

DROP TABLE IF EXISTS `formaenvio`;
CREATE TABLE IF NOT EXISTS `formaenvio` (
  `idFormaEnvio` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de forma de envío existente.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Describe cada forma de envío posible.',
  PRIMARY KEY (`idFormaEnvio`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `formaenvio`
--

INSERT INTO `formaenvio` (`idFormaEnvio`, `descripcion`) VALUES
(1, 'Internacional Marítimo'),
(2, 'Internacional Aéreo'),
(3, 'Internacional Marítimo/Aéreo'),
(4, 'Internacional Terrestre'),
(5, 'Nacional Marítimo '),
(6, 'Nacional Terrestre'),
(7, 'Nacional Aéreo'),
(8, 'Nacional Terrestre Furgón'),
(9, 'Nacional Terrestre Moto'),
(10, 'Nacional Terrestre Carro'),
(11, 'Nacional Terrestre Bus'),
(12, 'Nacional Terrestre No específicado'),
(13, 'Nacional Terrestre Trailer'),
(14, 'Nacional Terrestre Mixto'),
(15, 'Envió no especificado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `idGenero` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifica cada tipo de género disponible.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Describe un tipo de género.',
  PRIMARY KEY (`idGenero`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`idGenero`, `descripcion`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

DROP TABLE IF EXISTS `idioma`;
CREATE TABLE IF NOT EXISTS `idioma` (
  `idIdioma` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de cada idioma disponible.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre del idioma, por ejemplo: Español, Inglés, etc.',
  PRIMARY KEY (`idIdioma`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`idIdioma`, `descripcion`) VALUES
(1, 'Español'),
(2, 'Ingles'),
(3, 'Mandarín'),
(4, 'Japones'),
(5, 'Koreano'),
(6, 'Danes'),
(7, 'Alemán'),
(8, 'Sueco'),
(9, 'Tailandes'),
(10, 'Ruso'),
(11, 'Árabe'),
(12, 'Portugués'),
(13, 'Francés'),
(14, 'Italiano'),
(15, 'Griego');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenproducto`
--

DROP TABLE IF EXISTS `imagenproducto`;
CREATE TABLE IF NOT EXISTS `imagenproducto` (
  `idImagenProducto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de cada imagen registrada.',
  `imagenURL` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Dirección de ubicación de la imagen en el equipo.',
  `Producto_idProducto` int(11) NOT NULL COMMENT 'Identificador del producto asociado a la imagen.',
  PRIMARY KEY (`idImagenProducto`),
  KEY `FK_Producto` (`Producto_idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imagenproducto`
--

INSERT INTO `imagenproducto` (`idImagenProducto`, `imagenURL`, `Producto_idProducto`) VALUES
(1, 'www.a.com', 1),
(2, 'www.b.com', 2),
(3, 'www.c.com', 3),
(4, 'www.d.com', 4),
(5, 'www.e.com', 5),
(6, 'www.f.com', 6),
(7, 'www.g.com', 7),
(8, 'www.h.com', 8),
(9, 'www.i.com', 9),
(10, 'www.j.com', 10),
(11, 'www.k.com', 11),
(12, 'www.l.com', 12),
(13, 'www.m.com', 13),
(14, 'www.n.com', 14),
(15, 'www.o.com', 15),
(16, 'www.p.com', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impuesto`
--

DROP TABLE IF EXISTS `impuesto`;
CREATE TABLE IF NOT EXISTS `impuesto` (
  `Factura_idFactura` int(11) NOT NULL COMMENT 'Identificador de la factura asociada.',
  `TipoImpuesto_idTipoImpuesto` int(11) DEFAULT NULL COMMENT 'Identificador del impuesto que se aplicará a la factura.',
  KEY `FK_Factura` (`Factura_idFactura`),
  KEY `FK_TipoImpuesto` (`TipoImpuesto_idTipoImpuesto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `impuesto`
--

INSERT INTO `impuesto` (`Factura_idFactura`, `TipoImpuesto_idTipoImpuesto`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 2),
(59, 1),
(60, 1),
(61, 2),
(62, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `idMarca` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de cada marca asociada.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre de la marca del producto ejemplo: Nike, Adidas, Samsung, etc.',
  `Empresa_idEmpresa` int(11) NOT NULL COMMENT 'Empresa asociada a la marca ejemplo: P&G.',
  PRIMARY KEY (`idMarca`),
  KEY `FK_Empresa` (`Empresa_idEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `descripcion`, `Empresa_idEmpresa`) VALUES
(1, 'Colax', 1),
(2, 'Demper', 2),
(3, 'Mosu', 3),
(4, 'GeneralPlus', 4),
(5, 'Pop-eye', 5),
(6, 'SpaceD', 6),
(7, 'Dotcom', 7),
(8, 'Rapter', 8),
(9, 'BuzzLight', 9),
(10, 'TigerMuscle', 10),
(11, 'Rox', 11),
(12, 'Johnson\'s', 12),
(13, 'Duckson\'s ', 13),
(14, 'EverPro', 14),
(15, 'Susie\'s', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

DROP TABLE IF EXISTS `oferta`;
CREATE TABLE IF NOT EXISTS `oferta` (
  `idOferta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de cada oferta disponible.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Breve descripción de cada oferta existente, ejemplo: Oferta por cambio de temporada.',
  `estado` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Denotará si una oferta está disponible o no disponible.',
  PRIMARY KEY (`idOferta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`idOferta`, `descripcion`, `estado`) VALUES
(1, 'Ninguna', 'A'),
(2, 'Descuento de bienvenida', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de un pedido hecho por un cliente a un vendedor.',
  `Factura_idFactura` int(11) NOT NULL COMMENT 'Factura que registro el pedido hecho.',
  `estado` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N' COMMENT 'Estado del pedido hecho por el comprador ejemplo : "Entregado".',
  `Cuenta_idCuenta` int(11) NOT NULL COMMENT 'Cuenta a la que está asociada el pedido del producto.',
  PRIMARY KEY (`idPedido`),
  KEY `FK_Factura` (`Factura_idFactura`),
  KEY `FK_Cuenta` (`Cuenta_idCuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idPedido`, `Factura_idFactura`, `estado`, `Cuenta_idCuenta`) VALUES
(1, 1, 'N', 2),
(2, 2, 'N', 2),
(3, 3, 'N', 2),
(4, 4, 'N', 2),
(5, 5, 'N', 2),
(6, 6, 'N', 2),
(7, 7, 'N', 2),
(8, 8, 'N', 2),
(9, 9, 'N', 2),
(10, 10, 'N', 2),
(11, 11, 'N', 2),
(12, 12, 'N', 2),
(13, 13, 'N', 2),
(14, 14, 'N', 2),
(15, 15, 'N', 2),
(16, 16, 'N', 2),
(17, 17, 'N', 2),
(18, 18, 'N', 2),
(19, 19, 'N', 2),
(20, 20, 'N', 2),
(21, 21, 'N', 2),
(22, 22, 'N', 2),
(23, 23, 'N', 2),
(24, 24, 'N', 2),
(25, 25, 'N', 2),
(26, 26, 'N', 2),
(27, 27, 'N', 2),
(28, 28, 'N', 2),
(29, 29, 'N', 2),
(30, 30, 'N', 2),
(31, 61, 'N', 2),
(32, 60, 'N', 1),
(33, 62, 'N', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del tipo de correo asociado.',
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre del producto, por ejemplo: Samsung Galaxy J5 PRIME.',
  `precioCosto` double(10,2) NOT NULL COMMENT 'Precio al que se compró el producto.',
  `precioVenta` double(10,2) NOT NULL COMMENT 'Precio al que se venderá el producto.',
  `fechaElaboracion` date DEFAULT NULL COMMENT 'Fecha en la que se elaboró el producto',
  `fechaVencimiento` date DEFAULT NULL COMMENT 'Fecha en la que caducará el producto.',
  `TipoProducto_idTipoProducto` int(11) NOT NULL COMMENT 'Identificador del tipo de producto que se está en catalogo es decir: medicamento, alimento, ropa, etc.',
  `Marca_idMarca` int(11) NOT NULL COMMENT 'Marca o derecho propio del producto.',
  `peso` double(10,2) DEFAULT NULL COMMENT 'Campo para indicar el peso del producto, ejemplo: 20.6 Kg.',
  `alto` double(10,2) DEFAULT NULL COMMENT 'Campo en el cual se indicará la altura que posee el producto, ejemplo: 10.3 Pulg.',
  `ancho` double(10,2) DEFAULT NULL COMMENT 'Ancho que posee el producto, ejemplo: 5.8 Pulg.',
  `largo` double(10,2) DEFAULT NULL COMMENT 'Largo que posee el producto, ejemplo: 5.6 Pulg.',
  `color` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Color del producto, ejemplo: Azul.',
  `descripcion` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cantidad` int(11) NOT NULL DEFAULT '0' COMMENT 'Cantidad existente en el inventario, por producto.',
  `Oferta_idOferta` int(11) DEFAULT NULL COMMENT 'Identificador de la oferta asociada al producto.',
  PRIMARY KEY (`idProducto`),
  KEY `FK_TipoProducto` (`TipoProducto_idTipoProducto`),
  KEY `FK_Marca` (`Marca_idMarca`),
  KEY `FK_OFERTA` (`Oferta_idOferta`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombre`, `precioCosto`, `precioVenta`, `fechaElaboracion`, `fechaVencimiento`, `TipoProducto_idTipoProducto`, `Marca_idMarca`, `peso`, `alto`, `ancho`, `largo`, `color`, `descripcion`, `cantidad`, `Oferta_idOferta`) VALUES
(1, 'Televisor 54 Pulgadas', 7500.00, 8600.00, '2017-05-23', NULL, 1, 1, 20.00, 137.70, 1.50, 230.40, 'Negro', NULL, 1, 2),
(2, 'SmartPhone 2.5 GHz', 2000.00, 3000.00, '2018-03-04', NULL, 2, 2, 0.40, 15.00, 0.40, 5.00, 'Blanco', NULL, 1, 2),
(3, 'Estereo Home Premium 40kHz', 2000.00, 3500.00, '2018-02-20', NULL, 3, 3, 15.00, 35.00, 40.00, 40.00, 'Azul', NULL, 7, 1),
(4, 'Zapato Liso Vaquero', 4000.00, 4500.00, '2017-06-18', NULL, 4, 4, 3.00, 40.00, 8.00, 20.00, 'Café', 'Zapatos de Vaquero, talla 42 Cuero Fino', 0, 1),
(5, 'Camisa Manga Larga Diseño Cuadriculado Talla ', 300.00, 500.00, '2018-02-27', NULL, 5, 5, 0.50, 100.00, 40.00, 40.00, 'Azul', NULL, 17, 1),
(6, 'Laptop Gaming Xtreme', 10400.00, 15000.00, '2016-05-09', NULL, 6, 6, 6.00, 20.00, 35.00, 50.00, 'Rojo', 'Laptop , 8Gb de RAM, 3.5 GHz, Pantalla HD', 8, 1),
(7, 'Computadora de Oficina', 3000.00, 4500.00, NULL, NULL, 7, 7, 15.00, NULL, NULL, NULL, NULL, 'Computadora , perfecta para uso de oficina, ahorradora de energia, Pantalla 18 Pulgadas, CPU 4 RAM', 10, 1),
(8, 'XDOX 2', 2000.00, 5000.00, NULL, NULL, 8, 8, NULL, NULL, NULL, NULL, NULL, NULL, 6, 1),
(9, 'Reloj Blietz Pro Let', 4000.00, 5000.00, NULL, NULL, 9, 9, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1),
(10, 'LE GO 4', 2000.00, 4400.00, NULL, NULL, 10, 10, NULL, NULL, NULL, NULL, NULL, 'Cámara 25 MP, 360 `', 12, 1),
(11, 'Call Of  Hurry', 3400.00, 4600.00, NULL, NULL, 11, 11, NULL, NULL, NULL, NULL, NULL, NULL, 22, 1),
(12, 'Tablet iMad', 4300.00, 5400.00, NULL, NULL, 12, 8, NULL, NULL, NULL, NULL, NULL, NULL, 15, 1),
(13, 'Jarrón Antiguo 1909', 8999.00, 10000.00, NULL, NULL, 13, 13, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1),
(14, 'Guitarra Winstong 89', 8999.00, 9999.00, NULL, NULL, 9, 9, NULL, NULL, NULL, NULL, NULL, NULL, 9, 1),
(15, 'Mesa de Oficina ', 2000.00, 4300.00, NULL, NULL, 15, 15, NULL, NULL, NULL, NULL, NULL, 'Mesa de Caoba ', 14, 1),
(16, 'Samsung J5 Prime', 5000.00, 6000.00, NULL, NULL, 2, 14, NULL, NULL, NULL, NULL, NULL, NULL, 15, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoporsubdepartamento`
--

DROP TABLE IF EXISTS `productoporsubdepartamento`;
CREATE TABLE IF NOT EXISTS `productoporsubdepartamento` (
  `Producto_idProducto` int(11) NOT NULL COMMENT 'Identificador del tipo de producto dentro del sistema.',
  `Subdepartamento_idSubdepartamento` int(11) NOT NULL COMMENT 'Identificador del subdepartamento asociado.',
  KEY `FK_Producto` (`Producto_idProducto`),
  KEY `FK_Subdepartamento` (`Subdepartamento_idSubdepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productoporsubdepartamento`
--

INSERT INTO `productoporsubdepartamento` (`Producto_idProducto`, `Subdepartamento_idSubdepartamento`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subdepartamento`
--

DROP TABLE IF EXISTS `subdepartamento`;
CREATE TABLE IF NOT EXISTS `subdepartamento` (
  `idSubdepartamento` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del subdepartamento asociado al sistema.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre del subdepartamento.',
  `Departamento_idDepartamento` int(11) NOT NULL COMMENT 'Identificador del departamento asociado al subdepartamento.',
  PRIMARY KEY (`idSubdepartamento`),
  KEY `FK_Departamento` (`Departamento_idDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `subdepartamento`
--

INSERT INTO `subdepartamento` (`idSubdepartamento`, `descripcion`, `Departamento_idDepartamento`) VALUES
(1, 'TVs', 1),
(2, 'Celulares', 1),
(3, 'Estereos', 1),
(4, 'Camisas', 3),
(5, 'Zapatos', 3),
(6, 'Laptops', 1),
(7, 'Computadoras de escritorio', 1),
(8, 'Consolas', 8),
(9, 'Relojes', 3),
(10, 'Camaras', 1),
(11, 'Videojuegos', 8),
(12, 'Tabletas', 11),
(13, 'Jarrones', 6),
(14, 'Guitarras', 8),
(15, 'Mesas', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonoempresarial`
--

DROP TABLE IF EXISTS `telefonoempresarial`;
CREATE TABLE IF NOT EXISTS `telefonoempresarial` (
  `idTelefonoEmpresarial` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de cada telefono de la empresa.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Número telefónico asociado a la empresa',
  `Empresa_idEmpresa` int(11) NOT NULL COMMENT 'Identificador de la empresa a la cual pertenece el teléfono.',
  PRIMARY KEY (`idTelefonoEmpresarial`),
  KEY `FK_Empresa` (`Empresa_idEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `telefonoempresarial`
--

INSERT INTO `telefonoempresarial` (`idTelefonoEmpresarial`, `descripcion`, `Empresa_idEmpresa`) VALUES
(1, '654-9444', 1),
(2, '358-8045', 2),
(3, '161-2145', 3),
(4, '1-625-963-0237', 4),
(5, '353-1656', 5),
(6, '619-2351', 6),
(7, '1-959-417-2056', 7),
(8, '1-646-977-4590', 8),
(9, '315-7980', 9),
(10, '1-953-865-9994', 10),
(11, '530-4689', 11),
(12, '1-295-244-7367', 12),
(13, '1-524-548-5256', 13),
(14, '1-468-550-9340', 14),
(15, '592-9308', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonousuario`
--

DROP TABLE IF EXISTS `telefonousuario`;
CREATE TABLE IF NOT EXISTS `telefonousuario` (
  `idTelefono` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del teléfono fijo de la persona ligada a la cuenta dentro del sistema.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Número de teléfono ligado ejemplo +504 2227-2222.',
  `Usuario_idUsuario` int(11) NOT NULL COMMENT 'Identificador de persona al cual pertenece el teléfono fijo.',
  PRIMARY KEY (`idTelefono`),
  KEY `FK_Usuario` (`Usuario_idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `telefonousuario`
--

INSERT INTO `telefonousuario` (`idTelefono`, `descripcion`, `Usuario_idUsuario`) VALUES
(1, '+504 96 70 65 51', 1),
(2, '+504 67 57 39 32', 2),
(3, '+504 57 98 29 42', 3),
(4, '+504 39 64 93 83', 4),
(5, '+504 21 42 00 32', 5),
(6, '+504 36 36 41 54', 6),
(7, '+504 73 15 08 17', 7),
(8, '+504 07 36 37 50', 8),
(9, '+504 78 09 69 55', 9),
(10, '+504 38 91 72 07', 10),
(11, '+504 02 98 35 18', 11),
(12, '+504 07 70 16 40', 12),
(13, '+504 14 39 57 49', 13),
(14, '+504 43 26 27 06', 14),
(15, '+504 25 00 64 34', 15),
(16, '+504 96969696', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocalificacion`
--

DROP TABLE IF EXISTS `tipocalificacion`;
CREATE TABLE IF NOT EXISTS `tipocalificacion` (
  `idCalificacion` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifica cada tipo de calificación disponible.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Proporciona una breve descripción de cada tipo de calificación.',
  PRIMARY KEY (`idCalificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipocalificacion`
--

INSERT INTO `tipocalificacion` (`idCalificacion`, `descripcion`) VALUES
(1, 'Una estrella'),
(2, 'Dos estrellas'),
(3, 'Tres Estrellas'),
(4, 'Cuatro Estrellas'),
(5, 'Cinco Estrellas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocorreo`
--

DROP TABLE IF EXISTS `tipocorreo`;
CREATE TABLE IF NOT EXISTS `tipocorreo` (
  `idTipoCorreo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del tipo de correo asociado.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tipo de correo que se tiene asociado, es decir, si es de negocios, servicio al cliente, de información u otro tipo de categoría. ',
  PRIMARY KEY (`idTipoCorreo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipocorreo`
--

INSERT INTO `tipocorreo` (`idTipoCorreo`, `descripcion`) VALUES
(1, 'Pedidos'),
(2, 'Devoluciones'),
(3, 'Atención Cliente'),
(4, 'Garantía'),
(5, 'Sucursal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocuenta`
--

DROP TABLE IF EXISTS `tipocuenta`;
CREATE TABLE IF NOT EXISTS `tipocuenta` (
  `idTipoCuenta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del tipo de cuenta dentro del sistema.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tipo de cuenta que posee el usuario ejemplo: básica o de administrador.',
  PRIMARY KEY (`idTipoCuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipocuenta`
--

INSERT INTO `tipocuenta` (`idTipoCuenta`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoempresa`
--

DROP TABLE IF EXISTS `tipoempresa`;
CREATE TABLE IF NOT EXISTS `tipoempresa` (
  `idTipoEmpresa` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del tipo de empresa dentro del sistema.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tipo de empresa asociada es decir si es de productos alimenticios, de construcción, juguetes, etc.',
  PRIMARY KEY (`idTipoEmpresa`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipoempresa`
--

INSERT INTO `tipoempresa` (`idTipoEmpresa`, `descripcion`) VALUES
(1, 'Comercial'),
(2, 'Industrial'),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoimpuesto`
--

DROP TABLE IF EXISTS `tipoimpuesto`;
CREATE TABLE IF NOT EXISTS `tipoimpuesto` (
  `idTipoImpuesto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de cada impuesto existente.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Descripción de cada impuesto, ejemplo: Impuesto sobre venta.',
  `porcentajeImpuesto` decimal(3,2) NOT NULL COMMENT 'Porcentaje que se aplicará a cada tipo de impuesto, ejemplo: 15%',
  `estado` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Denotará si el impuesto está activo o inactivo.',
  PRIMARY KEY (`idTipoImpuesto`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipoimpuesto`
--

INSERT INTO `tipoimpuesto` (`idTipoImpuesto`, `descripcion`, `porcentajeImpuesto`, `estado`) VALUES
(1, 'ISV', '0.15', 'A'),
(2, 'Impuesto Aduana', '0.15', 'A'),
(3, 'Impuesto Sobre Producto Importado', '0.10', 'A'),
(4, 'Impuesto Sobre Soberanía Nacional', '0.10', 'I'),
(5, 'Impuesto Sobre Protección Del Producto', '0.20', 'I'),
(6, 'Impuesto Regulatorio', '0.30', 'I'),
(7, 'Impuesto Sobre Redistribuidor', '0.10', 'I'),
(8, 'Impuesto Sobre Maderas Especiales', '0.10', 'I'),
(9, 'Impuesto Sobre Telas Especiales', '0.10', 'I'),
(10, 'Impuesto Sobre La Renta', '0.30', 'I'),
(11, 'Impuesto de Ley A', '0.20', 'I'),
(12, 'Impuesto de Ley B', '0.30', 'I'),
(13, 'Impuesto de Ley C', '0.10', 'I'),
(14, 'Impuesto de Ley D', '0.10', 'I'),
(15, 'Impuesto de Ley E', '0.30', 'I'),
(16, 'Ninguno', '0.00', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproducto`
--

DROP TABLE IF EXISTS `tipoproducto`;
CREATE TABLE IF NOT EXISTS `tipoproducto` (
  `idTipoProducto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del tipo de producto dentro del sistema.',
  `descripcion` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre de la categoría a la cual pertenece el producto ejemplo : alimento, medicina, ropa, calzado, etc.',
  PRIMARY KEY (`idTipoProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipoproducto`
--

INSERT INTO `tipoproducto` (`idTipoProducto`, `descripcion`) VALUES
(1, 'Televisores'),
(2, 'Celulares'),
(3, 'Equipos de Sonido'),
(4, 'Zapatos'),
(5, 'Camisas'),
(6, 'Laptops'),
(7, 'Computadoras de escritorio'),
(8, 'Consolas de videojuegos'),
(9, 'Relojes'),
(10, 'Cámaras'),
(11, 'Videojuegos'),
(12, 'Tablets'),
(13, 'Arte'),
(14, 'Guitarras acústicas'),
(15, 'Mesas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificación del usuario dentro de la plataforma.',
  `pNombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Describe el primer nombre del usuario.',
  `sNombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Describe el segundo nombre del usuario.',
  `pApellido` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Describe el primer apellido del usuario.',
  `Genero_idGenero` int(11) NOT NULL COMMENT 'Describe el género al cual pertenece el usuario.',
  PRIMARY KEY (`idUsuario`),
  KEY `FK_Genero` (`Genero_idGenero`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `pNombre`, `sNombre`, `pApellido`, `Genero_idGenero`) VALUES
(1, 'Daniela', 'Fernanda', 'Domin', 1),
(2, 'Carlos', 'Antonio', 'Carballo', 1),
(3, 'Fernando', 'Daniel', 'Sierra', 1),
(4, 'Alejandra', 'Michelle', 'Vargas', 2),
(5, 'Angie', ' Nicole', 'Fernandez', 2),
(6, 'Enid', 'Jesus', 'Sierra', 1),
(7, 'Cristian', 'Alexis', 'Cortes', 1),
(8, 'Fabricio', 'Ismael', 'Gonzales', 1),
(9, 'Roberto', 'Rafael', 'Arguijo', 1),
(10, 'Cristian', 'Fernando', 'Cerrato', 1),
(11, 'Alexa', 'Fabiola', 'Farach', 2),
(12, 'Ileana', 'Mariel', 'Garcia', 2),
(13, 'Vilma', 'Fabiola', 'Fernandez', 2),
(14, 'Vilma', 'Andrea', 'Gonzales', 2),
(15, 'Nelson', 'Ross', 'Gross', 1),
(16, 'JUAN', 'PABLO', 'MONTES', 1),
(22, 'Pedro', 'Antonio', 'Banegas', 1),
(23, 'Luis', 'Miguel', 'Andino', 1),
(24, 'Dalma', 'Odette', 'Acosta', 2),
(25, 'Alexis', 'Antonio', 'Zúniga', 1),
(26, 'Fabricio', 'Ismael', 'Murillo', 1),
(27, 'Nelson', 'Alejandro', 'Díaz', 1),
(28, 'Roberto', 'Rafael', 'Ramirez', 1),
(29, 'César', 'Alejandro', 'Durón', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_bestevaluados`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vw_bestevaluados`;
CREATE TABLE IF NOT EXISTS `vw_bestevaluados` (
`nombre` varchar(45)
,`precioVenta` double(10,2)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_cantproductosensubdeptos`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vw_cantproductosensubdeptos`;
CREATE TABLE IF NOT EXISTS `vw_cantproductosensubdeptos` (
`Subdepartamento` varchar(45)
,`Cantidad` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_descuentoporfactura`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vw_descuentoporfactura`;
CREATE TABLE IF NOT EXISTS `vw_descuentoporfactura` (
`IdFactura` int(11)
,`Descuento` varchar(45)
,`Porcentaje` decimal(3,2)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_generofemenino`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vw_generofemenino`;
CREATE TABLE IF NOT EXISTS `vw_generofemenino` (
`pNombre` varchar(45)
,`pApellido` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_generomasculino`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vw_generomasculino`;
CREATE TABLE IF NOT EXISTS `vw_generomasculino` (
`pNombre` varchar(45)
,`pApellido` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_impuestoporfactura`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vw_impuestoporfactura`;
CREATE TABLE IF NOT EXISTS `vw_impuestoporfactura` (
`IdFactura` int(11)
,`Impuesto` varchar(45)
,`Porcentaje` decimal(3,2)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_productosporsubdepartamento`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vw_productosporsubdepartamento`;
CREATE TABLE IF NOT EXISTS `vw_productosporsubdepartamento` (
`Producto` varchar(45)
,`Subdepartamento` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_subtotal`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vw_subtotal`;
CREATE TABLE IF NOT EXISTS `vw_subtotal` (
`idFactura` int(11)
,`SubTotal` double(19,2)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_total`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vw_total`;
CREATE TABLE IF NOT EXISTS `vw_total` (
`IdFactura` int(11)
,`Subtotal` double(19,2)
,`Impuesto` varchar(45)
,`PorcentajeImpuesto` decimal(3,2)
,`Descuento` varchar(45)
,`PorcentajeDescuento` decimal(3,2)
,`Total` double(19,2)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_bestevaluados`
--
DROP TABLE IF EXISTS `vw_bestevaluados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_bestevaluados`  AS  select `pro`.`nombre` AS `nombre`,`pro`.`precioVenta` AS `precioVenta` from (`calificacioncomentario` `cal` join `producto` `pro` on((`pro`.`idProducto` = `cal`.`Producto_idProducto`))) where (`cal`.`TipoCalificacion_idCalificacion` = 5) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_cantproductosensubdeptos`
--
DROP TABLE IF EXISTS `vw_cantproductosensubdeptos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_cantproductosensubdeptos`  AS  select `sd`.`descripcion` AS `Subdepartamento`,count(0) AS `Cantidad` from ((`producto` `pro` join `productoporsubdepartamento` `pps` on((`pro`.`idProducto` = `pps`.`Producto_idProducto`))) join `subdepartamento` `sd` on((`pps`.`Subdepartamento_idSubdepartamento` = `sd`.`idSubdepartamento`))) group by `sd`.`descripcion` order by `sd`.`descripcion` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_descuentoporfactura`
--
DROP TABLE IF EXISTS `vw_descuentoporfactura`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_descuentoporfactura`  AS  select `fac`.`idFactura` AS `IdFactura`,`des`.`descripcion` AS `Descuento`,`des`.`porcentajeDescuento` AS `Porcentaje` from ((`factura` `fac` join `descuentofactura` `df` on((`fac`.`idFactura` = `df`.`Factura_idFactura`))) join `descuento` `des` on((`des`.`idDescuento` = `df`.`Descuento_idDescuento`))) where (`des`.`estado` = 'A') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_generofemenino`
--
DROP TABLE IF EXISTS `vw_generofemenino`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_generofemenino`  AS  select `usuario`.`pNombre` AS `pNombre`,`usuario`.`pApellido` AS `pApellido` from `usuario` where (`usuario`.`Genero_idGenero` = 2) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_generomasculino`
--
DROP TABLE IF EXISTS `vw_generomasculino`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_generomasculino`  AS  select `usuario`.`pNombre` AS `pNombre`,`usuario`.`pApellido` AS `pApellido` from `usuario` where (`usuario`.`Genero_idGenero` = 1) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_impuestoporfactura`
--
DROP TABLE IF EXISTS `vw_impuestoporfactura`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_impuestoporfactura`  AS  select `fac`.`idFactura` AS `IdFactura`,`ti`.`descripcion` AS `Impuesto`,`ti`.`porcentajeImpuesto` AS `Porcentaje` from ((`factura` `fac` join `impuesto` `imp` on((`fac`.`idFactura` = `imp`.`Factura_idFactura`))) join `tipoimpuesto` `ti` on((`ti`.`idTipoImpuesto` = `imp`.`TipoImpuesto_idTipoImpuesto`))) where (`ti`.`estado` = 'A') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_productosporsubdepartamento`
--
DROP TABLE IF EXISTS `vw_productosporsubdepartamento`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_productosporsubdepartamento`  AS  select `pro`.`nombre` AS `Producto`,`sd`.`descripcion` AS `Subdepartamento` from ((`producto` `pro` join `productoporsubdepartamento` `pps` on((`pro`.`idProducto` = `pps`.`Producto_idProducto`))) join `subdepartamento` `sd` on((`pps`.`Subdepartamento_idSubdepartamento` = `sd`.`idSubdepartamento`))) order by `sd`.`descripcion` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_subtotal`
--
DROP TABLE IF EXISTS `vw_subtotal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_subtotal`  AS  select `d`.`idFactura` AS `idFactura`,sum(`d`.`subTotal`) AS `SubTotal` from (select `fac`.`idFactura` AS `idFactura`,`df`.`cantidad` AS `cantidad`,`pro`.`nombre` AS `nombre`,`pro`.`precioVenta` AS `precioVenta`,`pro`.`precioCosto` AS `precioCos`,(`df`.`cantidad` * `pro`.`precioVenta`) AS `subTotal`,(`df`.`cantidad` * (`pro`.`precioVenta` - `pro`.`precioCosto`)) AS `utilidad` from ((`factura` `fac` join `detallefactura` `df` on((`fac`.`idFactura` = `df`.`Factura_idFactura`))) join `producto` `pro` on((`pro`.`idProducto` = `df`.`Producto_idProducto`)))) `d` group by `d`.`idFactura` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_total`
--
DROP TABLE IF EXISTS `vw_total`;
-- Error leyendo la estructura de la tabla ventas.vw_total: #1046 - Base de datos no seleccionada

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallecarrito`
--
ALTER TABLE `detallecarrito`
  ADD CONSTRAINT `FK_IDCARRITO` FOREIGN KEY (`Carrito_idCarrito`) REFERENCES `carrito` (`idCarrito`),
  ADD CONSTRAINT `FK_IDPRODUCTO` FOREIGN KEY (`Producto_idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD CONSTRAINT `DetalleFactura_ibfk_1` FOREIGN KEY (`Producto_idProducto`) REFERENCES `producto` (`idProducto`),
  ADD CONSTRAINT `FK_IDFACTURA` FOREIGN KEY (`Factura_idFactura`) REFERENCES `factura` (`idFactura`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_OFERTA` FOREIGN KEY (`Oferta_idOferta`) REFERENCES `oferta` (`idOferta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
