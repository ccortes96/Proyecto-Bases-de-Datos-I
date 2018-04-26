DROP VIEW IF EXISTS `vw_Subtotal`;

CREATE VIEW `vw_Subtotal`  AS  
	select `d`.`idFactura` AS `idFactura`,sum(`d`.`subTotal`) AS `SubTotal` from 
	(select `fac`.`idFactura` AS `idFactura`,`df`.`cantidad` AS `cantidad`,`pro`.`nombre` AS `nombre`,`pro`.`precioVenta` AS `precioVenta`,`pro`.`precioCosto` AS `precioCos`,(`df`.`cantidad` * `pro`.`precioVenta`) AS `subTotal`,(`df`.`cantidad` * (`pro`.`precioVenta` - `pro`.`precioCosto`)) AS `utilidad` 
		from ((`factura` `fac` join `detallefactura` `df` on((`fac`.`idFactura` = `df`.`Factura_idFactura`))) 
		join `Producto` `pro` on((`pro`.`idProducto` = `df`.`Producto_idProducto`)))) `d` 
group by `d`.`idFactura` ;