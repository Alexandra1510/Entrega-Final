<?php
        $nidupdate=$_GET['variable60'];
        session_start();
        $marca=$_POST['marca'];
        $cantidad=$_POST['cantidad'];
        $precio=$_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $nombre = $_POST['nombre'];
        $stock = $_POST['stock'];

            include_once 'conexion.php';
            $mysqlConexion=mysqli_connect($hostDb,$usuarioDb,$claveDb,$nombreDb);
            if(!$mysqlConexion){
                echo 'Error al conectar a la base de datos';
            }
            $sqlQuery="UPDATE productos SET marca='$marca',cantidad='$cantidad',precio='$precio',Descripcion='$descripcion',Nombre='$nombre',stock='$stock' WHERE id_='$nidupdate'";
            if($resultado=$mysqlConexion->query($sqlQuery))
            {
                header("Location:Catalogo.php");
            }
            else
            {
                echo $resultado;
            }
                    
?>