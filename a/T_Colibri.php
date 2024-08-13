<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>

    <?php
        $servidor = "localhost";
        $usuario = "root";
        $contraseña = "";
        $dataBase = "informacion";
     

        $conexion = new mysqli ($servidor, $usuario, $contraseña, $dataBase); 

        // Check connection
        if ($conexion->connect_error) {
            die("Connection failed: " . $conexion->connect_error);
        }
        

        $table = "CREATE TABLE usuarios(
            id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            p_apellido VARCHAR(50) NOT NULL,
            s_apellido VARCHAR(50) NOT NULL,
            nombre VARCHAR (50) NOT NULL,
            correo VARCHAR (50) NOT NULL,
            num_Tele VARCHAR (10) NOT NULL,
            info VARCHAR (50) NOT NULL
        )";

        if ($conexion->query($table) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conexion->error;
        }

        $conexion->close();
    
    ?>
    
</body>
</html>