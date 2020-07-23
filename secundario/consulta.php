<?php
include 'conexion.php';
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

$insertar  = "INSERT INTO usuario(nombre,apellido,correo,mensaje) VALUES ('$nombre','$apellido','$correo','$mensaje')";
$resultado =mysqli_query($conexion2,$insertar);
if(!$resultado){
    echo '  ERROR NO SE PUDO ENVIAR';
} else {
    echo ' CONSULTA ENVIADA';
}
mysqli_close($conexion2);
