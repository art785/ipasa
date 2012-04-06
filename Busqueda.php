<?php
$sql="SELECT * FROM direccion GROUP BY ciudad";
$sql1="SELECT * FROM direccion GROUP BY zona";
$sql2="SELECT * FROM propiedad GROUP BY propiedad_tipo";
$sql3="SELECT * FROM estructura GROUP BY estructura_recamaras";
$sql4="SELECT * FROM estructura GROUP BY estructura_amueblado";
$sql5="SELECT * FROM plusvalia GROUP BY plusvalia_precio_renta";
$sql6="SELECT * FROM plusvalia GROUP BY plusvalia_precio_renta";

if(!$result=mysql_query($sql)) {exit("error consulta0"); }
if(!$result1=mysql_query($sql1)) { exit("error consulta1"); }
if(!$result2=mysql_query($sql2)) { exit("error consulta2"); }
if(!$result3=mysql_query($sql3)) { exit("error consulta3"); }  
if(!$result4=mysql_query($sql4)) { exit("error consulta4"); }
if(!$result5=mysql_query($sql5)) { exit("error consulta5"); }
if(!$result6=mysql_query($sql6)) { exit("error consulta6"); }
?>
					
<form method="post" action="resultado.php">
    <div align="center">* Ciudad: <br>
<?php
$row = mysql_fetch_array($result);
 
    echo '<select name= "ciudad">';
    echo '<option value="0"> Selecciona una Opci&oacute;n </option>';
        do {
            echo '<option value= "'.$row["ciudad"].'">'.$row["ciudad"].'</option>';
            } while ($row  = mysql_fetch_array($result)); 
    echo '</select>';
?>
</div>
<div align="center">* Zona: <br>
<?php
$row1 = mysql_fetch_array($result1);
  echo '<select name= "zona">';
  echo '<option value="0"> Selecciona una Opci&oacute;n </option>';
  do {
    echo '<option value= "'.$row1["zona"].'">'.$row1["zona"].'</option>';
        } while ($row1 =mysql_fetch_array($result1)); 
  echo '</select>';

?>
</div>
 <div align="center">* Tipo de propiedad: <br>
<?php
$row2 = mysql_fetch_array($result2);
echo '<select name= "tipo">';
echo '<option value="0"> Selecciona una Opci&oacute;n </option>';
do {
    echo '<option value= "'.$row2["propiedad_tipo"].'">'.$row2["propiedad_tipo"].'</option>';
    } while ($row2 = mysql_fetch_array($result2)); 
    echo '</select>';
?>
</div>
 <div align="center">No. Dormitorios: <br>
<?php
$row3 = mysql_fetch_array($result3);
{ 
echo '<select name= "dormitorios">';
echo '<option value="0"> Selecciona una Opci&oacute;n </option>';
    do {
echo '<option value= "'.$row3["estructura_recamaras"].'">'.$row3["estructura_recamaras"].'</option>';
        } while ($row3 = mysql_fetch_array($result3)); 
echo '</select>';
}
?>
</div>								  
 <div align="center">Amueblado: <br>
<?php
$row4 = mysql_fetch_array($result4); 
    echo '<select name= "amueblado">';
     echo '<option value="0"> Selecciona una Opci&oacute;n </option>';
     do {
        echo '<option value= "'.$row4["estructura_amueblado"].'">'.$row4["estructura_amueblado"].'</option>';
        } while ($row4 = mysql_fetch_array($result4)); 
            echo '</select>';
 ?>
</div> 
<div align="center">Precio minimo: <br>
<?php
$row5 = mysql_fetch_array($result5);
    { 
        echo '<select name= "precio1">';
         echo '<option value="0"> Selecciona una Opci&oacute;n </option>';
        do {
            echo '<option value= "'.$row5["plusvalia_precio_renta"].'">'.$row5["plusvalia_precio_renta"].'</option>';
            } while ($row5 = mysql_fetch_array($result5)); 
            echo '</select>';
}
 ?>
</div>
<div align="center">Precio maximo: <br>
   
<?php
$row6 = mysql_fetch_array($result6);
 
 echo '<select name= "precio2">';
  echo '<option value="0"> Selecciona una Opci&oacute;n </option>';
do {
echo '<option value= "'.$row6["plusvalia_precio_renta"].'">'.$row6["plusvalia_precio_renta"].'</option>';
} while ($row6 = mysql_fetch_array($result6)); 
 echo '</select>';
 ?>
</div>
<div align="center">
<input type="submit" value="BUSCAR" align="center">
</div>
</form>
