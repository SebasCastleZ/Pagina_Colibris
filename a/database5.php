<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <?php
  $conexion=mysqli_connect("localhost","root","","dBaseColibris")or
  die("Problemas con la conexión");

  $registros=mysqli_query($conexion,"SELECT ID FROM Datos WHERE ID='$_REQUEST[ID]'")or
  die("Problemas en el select:".mysqli_error($conexion));

  if($reg=mysqli_fetch_array($registros)){
    mysqli_query($conexion,"DELETE FROM Datos WHERE ID='$_REQUEST[ID]'")or
    die("Problemas en el select:".mysqli_error($conexion));
    echo"Se Borro el Comentario";
  }
  else{
    echo"No Existe Comentario con esa ID";
  }
  mysqli_close($conexion);
?>
</body>
</html>