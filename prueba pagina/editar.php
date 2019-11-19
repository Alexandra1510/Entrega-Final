<?php
@$vv2 =$_GET['variable2'];

session_start();
if (isset($_SESSION['correo'])){ 
		$loginSession=$_SESSION['correo'];
		$tipoUsuario=$_SESSION['tipo'];
	} 
	else{
		$loginSession="";
    }
    if($tipoUsuario<>"2"){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/iniciar.css">
    <title>Document</title>
</head>
<body>

<div>
  <form action="editarbd.php?variable60=<?php echo $vv2; ?>" method="post">
    <label for="fname">Marca</label>
    <input type="text" id="fname" name="marca" placeholder="La marca..">

    <label for="lname">Cantidad</label>
    <input type="text" id="lname" name="cantidad" placeholder="Cantidad..">

    <label for="lname">Precio</label>
    <input type="text" id="lname" name="precio" placeholder="precio">

    <label for="lname">Descripcion</label>
    <input type="text" id="lname" name="descripcion" placeholder="Descripcion..">

    <label for="lname">Nombre</label>
    <input type="text" id="lname" name="nombre" placeholder="El nombre..">

    <label for="lname">Stock</label>
    <input type="text" id="lname" name="stock" placeholder="El Stock..">
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>