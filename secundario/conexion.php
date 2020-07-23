<?php
$conexion2 =mysqli_connect("localhost","root","root","bd_prueba");
if(!$conexion2){
    die("Conexion mala".mysqli_connect_error());
}
echo "conexion buena";
?>
