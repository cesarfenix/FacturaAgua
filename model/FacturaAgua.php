<?php  
class FacturaAgua{
	private $NombreCliente;#definicion de variables
	private $Direccion;
	private $Estrato;
	private $MetrosAcueducto;
	private $MetrosAlcantarillado;

	public function __construct($Ncli,$Dir,$Est,$Mac,$Mal){
	$this->NombreCliente=$Ncli;
	$this->Direccion=$Dir;
	$this->Estrato=$Est;
	$this->MetrosAcueducto=$Mac;
	$this->MetrosAlcantarillado=$Mal;
}
public function FacturaAgua()
{
return $this->NombreCliente.$this->Direccion.$this->Estrato.$this->MetrosAcueducto.$this->MetrosAlcantarillado;	
}
public function getNombreCliente(){
	return $this->NombreCliente;
}
public function getDireccion(){
	return $this->Direccion;
}
public function getEstrato(){
	return $this->Estrato;
}

public function getMetrosAcueducto(){
	return $this->MetrosAcueducto;
}
public function getMetrosAlcantarillado(){
	return $this->MetrosAlcantarillado;
}
public function getTotalAcueducto(){
	/*Si la cantidad de metros cúbicos de acueducto están entre 0 y 20, se le cobrara al suscriptor a $ 1450 cada metro. Si se superan los 20 metros, se le cobrara al suscriptor los primeros 20 metros a $ 1450 y el resto de metros al 150% de ese valor.*/
	$Total=0;
	if ($this->MetrosAcueducto <= 20) {
		 $Total=$this->MetrosAcueducto*1450;
		
	}
	else{
		 #$Total=(20*1450)+($this->MetrosAcueducto-20*1450*1.5);
		$Total=(20*1450)+($this->MetrosAcueducto+(20*1450*1.5));

	}
	return $Total;
}
public function getTotalAlcantarillado(){
	$Total=0;
	if ($this->MetrosAlcantarillado <= 20) {
		 $Total=$this->MetrosAlcantarillado*1100;
	}
	else {
		$Total=(20*1100)+(($this->MetrosAcueducto-20)*1100*1.5);
	}
	return $Total;
}
public function getSubTotal(){
	return $this->getTotalAcueducto()+$this->getTotalAlcantarillado();
}
public function getDescuento(){
/*Adicional a esto, de acuerdo al estrato se obtendrá un descuento sobre el valor de la factura.
Estrato 1. 20%
Estrato 2. 10%
Estrato 3. 5%
El resto de estratos no posee descuento*/
$descuento = 0;
		switch ($this->Estrato) {
			case 1:
				$descuento=$this->getSubTotal()*0.2;
				break;
				case 2:
				$descuento=$this->getSubTotal()*0.1;
				break;
				case 3:
				$descuento=$this->getSubTotal()*0.05;
				break;
			
			return $descuento;
			}
	}
	public function getTotalAPagar(){
		return $this->getSubTotal()-$this->getDescuento();
	}

}



?>