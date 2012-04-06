<?php

class Conexion
{
    
        public $error;
	private $coneccion;
     public $host = "localhost";
     public  $usuario = "root";
     public $pass = "stratus";
     public $bd = "ipasa";
     public function Conectar()
	{
	
	
		try{
			$this->coneccion = mysql_connect($this->host,$this->usuario,$this->pass);
			if(! $this->coneccion)
			{
				throw new Exception(mysql_errno($this->coneccion) . ": " . mysql_error($this->coneccion));
			}
			$database = mysql_select_db($this->bd,$this->coneccion);
			if(!$database)
			{
				throw new Exception("Error de base de datos");
			}

			return $this->coneccion;
		}catch(Exception $e)
		{
			$this->error = $e->getMessage();
		
			return false;
		}
	}
        
        
        
	public function desconectar()
	{
		mysql_close($this->coneccion);
	}
	public function getError()
	{
		return $this->error;
	}
}


?>

