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
  <form action="usuariosbd.php" method="post">
    <label for="fname">Nombre Completo</label>
    <input type="text" id="fname" name="nombre" placeholder="Tu nombre..">

    <label for="lname">Correo</label>
    <input type="text" id="lname" name="correo" placeholder="Tu correo..">

    <label for="lname">Contraseña</label>
    <input type="text" id="lname" name="contraseña" placeholder="Tu contraseña..">


    
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>