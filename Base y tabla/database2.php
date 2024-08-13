<?php
$servidor="localhost";
$usuario="root";
$contraseña="";
$db="dBaseColibris";
$conexion = new mysqli($servidor, $usuario, $contraseña, $db);

if($conexion->connect_error){
	die("Conexión Fallida".$conexion->connect_error);
}

$sql="CREATE TABLE Datos(
	`ID` INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`Nombre` VARCHAR(40) NOT NULL,
	`Apellido1` VARCHAR(40) NOT NULL,
	`Apellido2` VARCHAR(40) NOT NULL,
	`Mail` VARCHAR(40) NOT NULL,
	`Telefono` VARCHAR(40) NOT NULL,
	`Opciones` VARCHAR(40) NOT NULL,
	`Aceptar` VARCHAR(40) NOT NULL)";

if($conexion->query($sql)===TRUE){
	echo "Tabla Creada Correctamente\n";
}
else{
	echo "Error al Crear Tabla\n";
}

$conexion->close();
?>