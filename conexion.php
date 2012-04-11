
<?php class MySQL{

  private $conexion; private $total_consultas;

  public function MySQL(){ 
    if(!isset($this->conexion)){
<<<<<<< HEAD
      $this->conexion = (mysql_connect("localhost","root","shauron"))
=======
      $this->conexion = (mysql_connect("localhost","root","stratus"))
>>>>>>> e14f4348f60a74fe882f41e64bfae25ce3ac7b16
        or die(mysql_error());
      mysql_select_db("ipasa",$this->conexion) or die(mysql_error());
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

}?>