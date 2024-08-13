<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="">
		<link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
        
	<title></title>
</head>
<body class="he">

	<header id="headerC" ><h1 id="ti111" class="ob">Datos</h1></header>
	<?php
	$Conexion = mysqli_connect("localhost","root","","dBaseColibris")or
die("Problemas con la conexión");


$registros = mysqli_query($Conexion, "select ID,Nombre,Apellido1,Apellido2,Mail,Telefono,Opciones,Aceptar from Datos where ID='$_REQUEST[ID]'") or die("Problemas en el select:" . mysqli_error($Conexion));
if($reg=mysqli_fetch_array($registros)){
	echo "<table id='T' class='table table-success table-bordered'> <thead><tr><td>ID</td><td>Nombre</td><td>Primer Apellido</td><td>Segundo Apellido</td><td>Mail</td><td>Telefono</td><td>Opciones</td><td>Aceptar</td></tr></thead>";
	echo"<tr ><td >" . htmlspecialchars($reg['ID']) . "</td><td>" . htmlspecialchars($reg['Nombre']) . "</td><td>" . htmlspecialchars($reg['Apellido1']) . "</td><td>". htmlspecialchars($reg['Apellido2']) . "</td><td>" . htmlspecialchars($reg['Mail']) . "</td><td>" . htmlspecialchars($reg['Telefono']) . "</td><td>" . htmlspecialchars($reg['Opciones']) . "</td><td>" . htmlspecialchars($reg['Aceptar']) . "</td></table>"  ;
}
else{
	echo "NO EXISTE LA PERSONA EN LA BASE DE DATOS";
}
mysqli_close($Conexion);
?>
<div class="d-grid gap-2">
<a href="consulta.html"><button class="btn btn-success btn-lg">VOLVER</button></a>
<div>
<center><img id="demo" class="cal" src="capa1.png"></center>
</div>
</div>
</body>
</html>