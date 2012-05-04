<?php class MySQL{

  private $conexion; private $total_consultas; private $total_inserts;

  public function MySQL(){ 
    if(!isset($this->conexion)){


      $this->conexion = (mysql_connect("localhost","root","corvette"))


    
        or die(mysql_error());
      mysql_select_db("ipasa",$this->conexion) or die(mysql_error());
      mysql_set_charset('utf8',$this->conexion);
    }
  }
  

  public function consulta($consulta){ 
    $this->total_consultas++; 
    $resultado = mysql_query($consulta,$this->conexion);
    if(!$resultado){ 
      echo 'MySQL Error: ' . mysql_error();
      exit;
    }
    return $resultado;
  }

  public function fetch_object($resultado){
   return mysql_fetch_object($resultado);
  }

  public function getTotalConsultas(){
   return $this->total_consultas; 
  }
  
  public function cerrarConexion(){
  	return mysql_close($this->conexion);
  }
  
  public function insercion($insert){
  	$this->total_inserts++;
  	$resultado = mysql_query($insert,$this->conexion);
  	if(!$resultado){
  		echo 'MySQL Error: ' . mysql_error();
  		exit;
  	}
  	return $resultado;
  }
  
  public function getTotalInserciones(){
  	return $this->total_inserts;
  }
  
  

}?>
