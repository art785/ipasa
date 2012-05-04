<?php
include 'doctrine/Sql_Slide_Show.php';
include "entidad/Slide_Show.php";
class SlideController {
	
	private $sql_slide;
	
	public function __construct()
	{
		$this->sql_slide = new Sql_Slide_Show();
	}
	
	public function insertar_slide()
	{
		if(isset($_POST["slide_principal"]))
		{
			$ruta=$_POST["ruta"];
			$descripcion=$_POST["descipcion"];
			$slide= new Slide_Show();
			$slide->setActivo(1);
			$slide->setDescripcion($descripcion);
			$slide->setRuta($ruta);
			$this->sql_slide->agrega_slide($slide);

		}
		
	}
}


?>
