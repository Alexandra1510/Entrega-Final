<?php
    $marca=$_POST['marca'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $nombre=$_POST['nombre'];
    $stock=$_POST['stock'];
    if(empty($marca) || empty($cantidad) || empty($precio)|| empty($descripcion) || empty($nombre) )
    {
        header("Location:index.php");
    }
    $mysqli = new mysqli("localhost", "notigree_alex", "12345", "notigree_littlesister");
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
    $sqlQuery="INSERT INTO productos (marca,cantidad,precio, Descripcion, Nombre,stock)VALUES('$marca',$cantidad,'$precio','$descripcion','$nombre','$stock')";
    if (mysqli_query($mysqli, $sqlQuery)) {
        header("Location:Catalogo.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
  
    }
?>

