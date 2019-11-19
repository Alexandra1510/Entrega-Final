<?php
require 'catalogobd.php';
@$alerta3 =$_GET['alerta3'];
if($alerta3==1){
    echo"<script>alert('Articulo Eliminado')</script>";
}
    @session_start();
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = "https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css"  rel = "stylesheet" >
    <link rel="stylesheet" href="css/calendario.css">
    <title>Document</title>
</head>
<body>
    <header>
            <nav  heigth="3000" class="navbar navbar-expand-lg navbar-light" style="background-color:#FAA2CB;">
                    <a class="navbar-brand" href="#">Little Sister</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php">Menu principal <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contactanos
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">Instagram</a>
                           
                          </div>
                        </li>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <li class="nav-item active">
                          <a class="nav-link" href="Catalogo.php">Catalogo <span class="sr-only">(current)</span></a>
                        </li>

                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                      </form>
                    </div>
                  </nav>
    </header>
    <div class="margen">
        <table id="customers">
            <tr>
                <th>id</th>
                <th>marca</th>
                <th>cantidad</th>
                <th>precio</th>
                <th>Descripcion</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
          
            <?php for ($v = 0; $v < $hghg; $v++) { ?>
                <tr>
                    <td> <?php echo $id[$v];  ?> </td>
                    <td> <?php echo $marca[$v];  ?> </td>
                    <td> <?php echo $cantidad[$v]; ?> </td>
                    <td> <?php echo $precio[$v]; ?> </td>
                    <td> <?php echo $descripcion[$v]; ?> </td>
                    <td> <?php echo $nombre[$v]; ?> </td>
                    <td> <?php echo $stock[$v]; ?> </td>
                    <td> <a href="editar.php?variable2=<?php echo $v+1;?>"> <i class = "icon ion-md-create" > </i> </a> </td>
                    <td> <a href="eliminar.php?variable1=<?php echo $v+1;?>"><i class = "icon ion-md-close" > </i> </a> </td>
                </tr>
            <?php }   ?>
        </table>
    <div class="footer container-fluid">
        <div class="row">
            <div class="col-md-12">
                
                <b>Universidad Autonoma De Chiapas</b></dt>
                <dt>Little Sister</dt>
                <dt>Tuxtla Gutierrez</dt>
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>