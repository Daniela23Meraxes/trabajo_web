<?php
    $con=mysqli_connect('localhost','root','','formulario') or die('Error en la conexion en la conexion servidor');

    $sql="INSERT INTO formulario
    VALUES ('".$_POST["nombre"]."','".$_POST["correo"]."','".$_POST["asunto"]."','".$_POST["mensaje"]."')";

    $resultado= mysqli_query($con,$sql) or die ('Error en el query database');
    mysqli_close($con);

    echo 'El ingresado es: '.$_POST["nombre"];
    echo 'El correo es: '.$_POST["correo"];
    echo 'El asunto es: '.$_POST["asunto"];
    echo 'El mensaje es: '.$_POST["mensaje"];

?>