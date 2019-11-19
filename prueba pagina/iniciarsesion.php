<?php @$alerta=$_GET['alerta1'];
    if($alerta==1){
        echo"<script>alert('INICIE SESION')</script>";
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

    <center><div>
        <img src="img/avatar-mujer.png"  height="250"  width="300" alt="">
        <img src="img/iconoperfilhombre.png"  height="250"  width="300"  alt="">
    </div> </center> 

<div>
  <form action="inciobd.php" method="post">
    <label for="fname">Correo</label>
    <input type="text" id="fname" name="correo" placeholder="Tu correo..">

    <label for="lname">Contraseña</label>
    <input type="text" id="lname" name="contraseña" placeholder="Tu contraseña..">

    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>