<?php  
    session_start();
    if (isset($_SESSION['correo'])){ 
		$loginSession=$_SESSION['correo'];
		$tipoUsuario=$_SESSION['tipo'];
	} 
	else{
		$loginSession="";
    }
    if($loginSession==""){
        header("Location: index.php");
    }
    $idd = $_GET['variable1'];
        $mysqli = new mysqli("localhost", "notigree_alex", "12345", "notigree_littlesister");
        if (mysqli_connect_errno()) {
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            exit();
        }
        $sqlQuery="DELETE  FROM productos WHERE id_='$idd'";
        if (mysqli_query($mysqli, $sqlQuery)) {
            header("Location:Catalogo.php?alerta3=1");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
      
        }
?>