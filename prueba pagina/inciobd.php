<?php
$correo=$_POST['correo'];
$password=$_POST['contraseña'];
include_once 'conexion.php';
$mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
$sqlQuery="SELECT * FROM usuario WHERE correo='".$correo."'";

$resultado=$mysqlConexion->query($sqlQuery);
if($row = $resultado->fetch_array(MYSQLI_ASSOC))
{
    if($row['contra'] == $password){
        session_start();
        $_SESSION['correo'] = $correo;
        $_SESSION['tipo'] =$row['tipo'];
        
        header("Location: index.php");
        
    }else{
        header("Location: iniciarsesion.php");
        exit();
    }
}else{
    header("Location: iniciarsesion.php");
    exit();
}



?>