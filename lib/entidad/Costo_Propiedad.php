<?php
class Costo_Propiedad
{
	private $id_costo_propiedad;
	private $fecha;
	private $costo_predial;
	private $id_propiedad;
	
	public function setId_Costo_Propiedad($id_costo_propiedad)
	{
		$this->id_costo_propiedad=$id_costo_propiedad;
		return $this;
	}
	public function getId_Costo_Propiedad()
	{
		return $this->id_costo_propiedad;
	}
	
public function setFecha($fecha)
	{
		$this->fecha=$fecha;
		return $this;
	}
	public function getFecha()
	{
		return $this->fecha;
	}
	
public function setCosto_Predial($costo_predial)
	{
		$this->costo_predial=$costo_predial;
		return $this;
	}
	public function getCosto_Predial()
	{
		return $this->costo_predial;
	}
	
public function setId_Propiedad($id_propiedad)
	{
		$this->Id_Propiedad=$id_propiedad;
		return $this;
	}
	public function getId_Propiedad()
	{
		return $this->id_propiedad;
	}
	
}