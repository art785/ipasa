<?php
include_once("lib/doctrine/Sql_Combobox.php");
class ComboboxController
{
  public function Combobox_tipo_Propiedad()
  {
	 
	$combobox= new Sql_Combobox();
	$propiedades=$combobox->Tipo_Propiedades();
	echo "<select id= 'tipo_Propiedades' name='tipo_Propiedades'>";
	foreach ($propiedades as $propiedad)
	{
		echo "<option value=".$propiedad->getId_Tipo_Propiedad().">".$propiedad->getNombre()."</option>";
	}
	echo "</select>";
  }
  
  public function Combobox_Localidad()
  {
  
  	$combobox= new Sql_Combobox();
  	$localidades=$combobox->Localidades();
  	echo "<select id='localidad' name='localidad'>";
  	foreach ($localidades as $localidad)
  	{
  		echo "<option value=".$localidad->getId_Localidad().">".$localidad->getNombre()."</option>";
  	}
  	echo "</select>";
  }
  
  public function Combobox_Cuartos()
  {
  	echo "<select id='cuartos' name='cuartos'>";
  	echo "<option value='na'>n/a</option>";
  	for($i=1;$i<=10;$i++)
  	{
  		echo "<option value=".$i.">".$i."</option>";
  	}
  	echo "</select>";
  }
  
  public function Combobox_Banos()
  {
  
  	$combobox= new Sql_Combobox();
  	echo "<select id='banos' name='banos'>";
  	echo "<option value='na'>n/a</option>";
  	for($i=1;$i<=10;$i++)
  	{
  	 
  	 
  	echo "<option value=".$i.">".$i."</option>";
  	 
  	}
  	echo "</select>";
  }

}
?>