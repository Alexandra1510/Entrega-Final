<?php
@$envio =$_GET['variable100'];

session_start();
if (isset($_SESSION['correo'])){ 
		$loginSession=$_SESSION['correo'];
		$tipoUsuario=$_SESSION['tipo'];
	} 
	else{
		$loginSession="";
    }
    if($tipoUsuario==""){
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
  <form action="pruductobdddd.php?variable60=<?php echo $envio; ?>" method="post">
>
    <label for="lname">Domicilio</label>
    <input type="text" id="lname" name="domicilio" placeholder="Domicilio..">
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>