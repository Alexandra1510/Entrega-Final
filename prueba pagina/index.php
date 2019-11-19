<?php
  session_start();
  if (isset($_SESSION['correo'])){ 
      $loginSession=$_SESSION['correo'];
      $tipoUsuario=$_SESSION['tipo'];
    } 
    else{
      $loginSession="";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/calendario.css">
    <title>Little sister</title>
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
                        <?php if(!empty($loginSession)){ ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> <?php echo $loginSession ?> </a>
                        </li>
                    <?php }?>
                        <?php if(empty($loginSession)){ ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="iniciarsesion.php">Iniciar sesion</a>
                        </li>
                         <?php }?>
                         <?php if(!empty($loginSession)){ ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="cerrarsesion.php">Cerrar sesion</a>
                        </li>
                        <?php }?>

                        <li class="nav-item active">
                        <?php if(@$tipoUsuario=="2"){?>
                          <a class="nav-link" href="agregarproducto.php">Agregar producto</a>
                        <?php  } ?>
                        </li>
                        <?php if(empty($loginSession)){ ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="registrarse.php">registrarse</a>
                        </li>
                        <?php  } ?>
                        <?php if(@$tipoUsuario=="2"){?>
                          <a class="nav-link" href="pedidos.php">Pedidos</a>
                        <?php  } ?>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contactanos
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://www.facebook.com/Little-Sister-101287774648950/?notify_field=cover_photo&modal=profile_completion&notif_id=1572332157612218&notif_t=page_profile_cover_photo">Facebook</a>
                            <a class="dropdown-item" href="#">Instagram</a>
                          </div>
                        </li>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php if(@$tipoUsuario=="2"){ ?>
                        <li class="nav-item active">
                          <a class="nav-link" href="Catalogo.php">Catalogo <span class="sr-only">(current)</span></a>
                        </li>
                        <?php }?>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                      </form>
                    </div>
                  </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <img src="img/barbietoystory.jpg" width="60%">
                    <br><br>
                    <p>Barbie Toy Story Edition $1200 </p>
                    <br>
                    <?php $ruta1='barbietoystory.jpg';?>
                    <a href="producto.php?variable100=<?php echo 1; ?>&variable101=<?php echo $ruta1; ?>">Ver producto</a>
            </div>
            <div class="col-md-4">
                    <img src="img/bebenegro.jpg" width="60%">
                    <br><br>
                    <p>Nenuco Rapero $500</p>
                    <br>
                    <?php $ruta2='bebenegro.jpg';?>
                    <a href="producto.php?variable100=<?php echo 2; ?>&variable101=<?php echo $ruta2; ?>">Ver producto</a>
            </div>
            <div class="col-md-4">
                    <img src="img/bebes.jpg" width="60%">
                    <br><br>
                    <p>Nenucos Hermanos $2000</p>
                    <br>
                    <?php $ruta3='bebes.jpg';?>
                    <a href="producto.php?variable100=<?php echo 3; ?>&variable101=<?php echo $ruta3; ?>">Ver producto</a>
            </div>
            

        </div>
    </div>


        <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <img src="img/chapanecalabuena.jpg" width="60%">
                  <br><br>
                  <p>Muñeca de trapo Chiapaneca $600</p>
                  <br>
                  <?php $ruta4='chapanecalabuena.jpg';?>
                  <a href="producto.php?variable100=<?php echo 4; ?>&variable101=<?php echo $ruta4; ?>">Ver producto</a>
              </div>
              <div class="col-md-4">
                 <img src="img/halowen.jpg" width="60%">
                 <br><br>
                 <p>Muñeca sonriente Halloween $1000</p>
                 <br>
                 <?php $ruta5='halowen.jpg';?>
                 <a href="producto.php?variable100=<?php echo 5; ?>&variable101=<?php echo $ruta5; ?>">Ver producto</a>
              </div>
              <div class="col-md-4">
                     <img src="img/doscabezas.jpg" width="60%">
                     <p>Muñeca monster high Doble cabeza $300</p>
                     <br>
                     <?php $ruta6='doscabezas.jpg';?>
                     <a href="producto.php?variable100=<?php echo 6; ?>&variable101=<?php echo $ruta6; ?>">Ver producto</a>
              </div>
              
  
          </div>
      </div>
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