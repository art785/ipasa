<?php 
include "lib/controller/Detalles_PropiedadController.php" ;
session_start();
           
                if(isset($_REQUEST["id_Propiedad"]))
                {
                    $_SESSION["id_propiedad"]=$_REQUEST["id_Propiedad"];
                    $id_propiedad= $_SESSION["id_propiedad"];
                }
$resultado_propiedad=new Detalles_PropiedadController();
$resultado_propiedad->detalles_propiedad($id_propiedad);
?>
