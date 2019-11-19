<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
    if(empty($nombre) || empty($correo) || empty($contraseña))
    {
        header("Location:index.php");
    }
    $mysqli = new mysqli("localhost", "notigree_alex", "12345", "notigree_littlesister");
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
    $sqlQuery="INSERT INTO usuario(nombre,tipo,correo, contra)VALUES('$nombre','1','$correo','$contraseña')";
    if (mysqli_query($mysqli, $sqlQuery)) {
        header("Location:iniciarsesion.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
  
    }
?>

