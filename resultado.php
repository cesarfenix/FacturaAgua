<?php
require_once "model/FacturaAgua.php";
$FacturaAgua =new FacturaAgua($_POST["NombreCliente"],$_POST["Direccion"],$_POST["Estrato"],$_POST["MetrosAcueducto"],$_POST["MetrosAlcantarillado"]
);
require_once "view/vresultado.php";
?>