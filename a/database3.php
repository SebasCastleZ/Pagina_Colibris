<?php
$conexion=mysqli_connect("localhost","root","","dBaseColibris") or die("Conexión Fallida");
mysqli_query($conexion,"insert into Datos(Nombre,Apellido1,Apellido2,Mail,Telefono,Opciones,Aceptar) values('$_REQUEST[Nombre]','$_REQUEST[Apellido1]','$_REQUEST[Apellido2]','$_REQUEST[Mail]','$_REQUEST[Telefono]','$_REQUEST[Opciones]','$_REQUEST[Aceptar]')")
or die("Problemas en el Select".mysqli_error($conexion));
mysqli_close($conexion);
echo "Comentario Subido";
?>