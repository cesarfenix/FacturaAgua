<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<label>Nombre de cliente :</label><label><?= $FacturaAgua->getNombreCliente() ?></label><br>
		<label>Direccion :</label><label><?= $FacturaAgua->getDireccion() ?></label><br>
		<label>Estrato :</label><label><?= $FacturaAgua->getEstrato() ?></label><br>
		<label>Cantidad de metros acueducto :</label><label><?= $FacturaAgua->getMetrosAcueducto() ?></label><br>
		<label>Cantidad de metros alcantarillado :</label><label><?= $FacturaAgua->getMetrosAlcantarillado() ?></label><br>
		<label>Valor por acueducto :</label><label><?= $FacturaAgua->getTotalAcueducto() ?></label><br>
		<label>Valor por alcantarillado :</label><label><?= $FacturaAgua->getTotalAlcantarillado() ?></label><br>
		<label>SubTotal :</label><label><?= $FacturaAgua->getSubTotal() ?></label><br>
		<label>Descuento :</label><label><?= $FacturaAgua->getDescuento() ?></label><br>
		<label>Valor a cancelar con descuento :</label><label><?= $FacturaAgua->getTotalAPagar() ?></label><br>
	</body>
</html>