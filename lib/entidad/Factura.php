<?php

class Factura {
	//********* Atributos *********//
	private $id_factura;
	private $folio;
	private $monto;
	private $fecha_vencimiento;
	private $id_renta;
	
	
//******************** inician set y get de Factura ***********************//

//************************ set y get de Id_Factura ************************//
	
	public function setId_Factura($id_factura)
	{
		$this->id_factura=$id_factura;
		return $this;
	}
	public function getId_Factrua()
	{
		return $this->id_factura;
	}

//************************ set y get de Folio ******************************//
	public function setFolio($folio)
	{
		$this->folio=$folio;
		return $this;
	}
	public function getFolio()
	{
		return $this->folio;
	}
	
//************************ set y get de Monto ******************************//
	public function setMonto($monto)
	{
		$this->monto=$monto;
		return $this;
	}
	public function getMonto()
	{
		return $this->monto;
	}
	
//******************* set y get de Fecha_Vencimiento **********************//	
	public function setFecha_Vencimiento($fecha_vencimiento)
	{
		$this->fecha_vencimiento=$fecha_vencimiento;
		return $this;
	}	
	public function getFecha_vencimiento()
	{
		return $this->fecha_vencimiento;
	}
	
//************************ set y get de Id_Renta ****************************//
	public function setId_Renta($id_renta)
	{
		$this->id_renta=$id_renta;
		return $this;
	}
	public function getId_Renta()
	{
		return $this->id_renta;
	}
}
?>
