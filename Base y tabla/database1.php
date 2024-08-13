<?php
$servidor="localhost";
$usuario="root";
$contraseña="";
$conexion = new mysqli($servidor, $usuario, $contraseña);

if ($conexion->connect_error){
	die("Conexión Fallida".$conexion->connect_error);
}
$db="CREATE DATABASE dBaseColibris";
if ($conexion->query($db)===true){
	echo "Base de Datos Creada Correctamente\n";
}
else{
	echo "Error al Crear Base de Datos\n";
}

$conexion->close();
?>