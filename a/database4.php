<?php
    $conexion=mysqli_connect("localhost","root","","dBaseColibris") or die("Problemas de Conexión");
    $registros=mysqli_query($conexion, "select * from Datos where ID='$_REQUEST[ID]'") or
    die("Problemas en el Select: ".mysqli_error($conexion));
    if($reg=mysqli_fetch_array($registros)){
        $conexion=mysqli_connect("localhost","root","","dBaseColibris") or die("Problemas de Conexión");
        mysqli_query($conexion, "update Datos set Mail='$_REQUEST[Mail]' where ID='$_REQUEST[ID]'") or die("Problemas en el Select: ".mysqli_error($conexion));
        echo "El Mail fue Modificado con exito";
    }
    else
    echo "No Existe el Mail";
?>