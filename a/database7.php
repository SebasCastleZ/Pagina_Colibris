<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
	<title></title>
</head>
<body >
<?php
$conexion= mysqli_connect("localhost","root","") or die("problemas con la conexion");
mysqli_select_db($conexion,'COLIBRIES');
$query = "SELECT * FROM DATOS"; 
$result = mysqli_query($conexion,$query);

echo "<table class='table table-success table-bordered'> <thead><tr><td>ID</td><td>PRIMER APELLIDO</td><td>SEGUNDO APELLIDO</td><td>NOMBRE</td><td>MAIL</td><td>TELEFONO</td><td>MENSAJE</td><td>CONOCIDO</td></tr></thead>";

while($row = mysqli_fetch_array($result))
{  echo"<tr ><td >" . htmlspecialchars($row['id_colibri']) . "</td><td>" . htmlspecialchars($row['apellido1']) . "</td><td>" . htmlspecialchars($row['apellido2']) . "</td><td>". htmlspecialchars($row['nombre']) . "</td><td>" . htmlspecialchars($row['mail']) . "</td><td>" . htmlspecialchars($row['telefono']) . "</td><td>" . htmlspecialchars($row['mensaje']) . "</td><td>" . htmlspecialchars($row['conocido']) . "</td>" ;
}

echo "</table></center>";
echo "<center><a href='index.html'><button>regresar</button></a></center>"; 

mysqli_close($conexion); 
?>
</body>
</html>
	