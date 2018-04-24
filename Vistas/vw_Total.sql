DROP VIEW IF EXISTS `vw_Total`;
CREATE VIEW vw_Total
AS
SELECT vw_Subtotal.idFactura"IdFactura",vw_Subtotal.SubTotal"Subtotal", vw_ImpuestoPorFactura.Impuesto "Impuesto", vw_ImpuestoPorFactura.Porcentaje "PorcentajeImpuesto",
vw_DescuentoPorFactura.Descuento"Descuento", vw_DescuentoPorFactura.Porcentaje"PorcentajeDescuento",
(vw_Subtotal.SubTotal+(vw_Subtotal.SubTotal*vw_ImpuestoPorFactura.Porcentaje)-(vw_Subtotal.SubTotal*vw_DescuentoPorFactura.Porcentaje))"Total"
FROM
	((vw_Subtotal INNER JOIN vw_ImpuestoPorFactura ON vw_Subtotal.idFactura = vw_Impuestoporfactura.IdFactura)
    INNER JOIN vw_DescuentoPorFactura ON vw_DescuentoPorFactura.IdFactura = vw_ImpuestoPorFactura.IdFactura);
