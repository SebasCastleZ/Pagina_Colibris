<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos | Colibri </title>
</head>
<body>
    <?php 
        $servidor = "localhost";
        $usuario = "root";
        $contraseña = "";

        $conexion = new mysqli ($servidor, $usuario, $contraseña);

        if($conexion -> connect_error){
            die("Conexión Fallida;".$conexion-> connect_error);
        }

        $borrar = "DROP DATA BASE IF EXISTS prueba";

        $sql = "CREATE DATABASE informacion";

        if($conexion->query($sql)===true){
            echo "BASE DE DATOS CREADA CORRECTAMENTE";
        }
    ?>
</body>
</html>