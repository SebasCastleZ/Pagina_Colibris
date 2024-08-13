<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de la tabla</title>
</head>
<body>

    <?php
    
        $servidor = "localhost";
        $usuario = "root";
        $contraseña = "";
        $dataBase = "informacion";

        $conexion = mysqli_connect($servidor, $usuario, $contraseña, $dataBase);

        
        $Apell1 = $_POST['Ape1'];
        $Apell2 = $_POST['Ape2'];
        $Name1 = $_POST['Name'];
        $Correo = $_POST['Correo'];
        $Tele = $_POST['telefono'];
        $Opciones = $_POST['opciones'];


        if($conexion->connect_error){
            die("Connection failed: " . $conexion->connect_error);
        }
        else{
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }

        $table = "usuarios";

        if (!$table){
            echo "No se ha podido encontrar la Tabla";
        }
        else{
            echo "<h3>Tabla seleccionada</h3>" ;
        }
        
        $consult = "INSERT INTO usuarios (p_apellido, s_apellido, nombre, correo, num_Tele, info) 
                    VALUES ('$Apell1', '$Apell2', '$Name1', '$Correo', '$Tele', '$Opciones')";
        
        $query = mysqli_query($conexion, $consult);

        if($query){
            echo "<h3>Registro ingresado correctamente.</h3>";
        }else{
            echo "Resgistro ingresado incorrectamente.";
        }
        
        mysqli_close($conexion);
    ?> 
</body>
</html>