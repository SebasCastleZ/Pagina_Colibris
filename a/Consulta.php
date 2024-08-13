<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colsulta PHP</title>
</head>
<body>

<?php

    $conexion = mysqli_connect("localhost", "root", "", "informacion") or die("Problemas con la conexión");

    $registros= mysqli_query($conexion, "select p_apellido, s_apellido, correo, num_Tele, info 
            from usuarios where nombre='$_REQUEST[nombre]'") or 
        die("Problemas en el select:" . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array ($registros)) {

    echo "Información:" . $reg['info']."<br>";

        switch ($reg['info']) {

            case 1:
                echo "Node.js";
            echo $Apell1;
            echo $Apell2 ;
            echo $Name1; 
            echo $Correo; 
            echo $Tele ;
            echo $Opciones;
            break;

            case 2:
                echo "Javascript";
                echo "Node.js";
                echo $Apell1;
                echo $Apell2 ;
                echo      $Name1; 
                echo    $Correo; 
                echo    $Tele ;
                echo    $Opciones;
            break;

            case 3:
                echo "Ruby";
                echo "Node.js";
                echo $Apell1;
                echo $Apell2 ;
                echo      $Name1; 
                echo    $Correo; 
                echo    $Tele ;
                echo    $Opciones;
            break;
        }
    } else{
        echo"No existe el alumno con ese nombre.";

    }

    mysqli_close($conexion);
?>
    
</body>
</html>