<?php
                    $ultimo = $_GET['variable60'];
                    @$ultimo = $ultimo - 1;
                    $domiciliooo = $_POST['domicilio'];
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
                    require 'catalogobd.php';
                    $mysqli = new mysqli("localhost", "notigree_alex", "12345", "notigree_littlesister");
                    if (mysqli_connect_errno()) {
                        printf("Falló la conexión: %s\n", mysqli_connect_error());
                        exit();
                    }
                    $sqlQuery="SELECT * FROM productos WHERE id_='$id[$ultimo]'";
                    $resultado=$mysqli->query($sqlQuery);
                    if($row = $resultado->fetch_array(MYSQLI_ASSOC))
                    {
                        $ntstock =$row['stock'];
                    }
                        $ntstock = $ntstock - 1;
                    $sqlQuery="UPDATE productos SET stock='$ntstock' WHERE id_='$id[$ultimo]'";
                    if (mysqli_query($mysqli, $sqlQuery)) {
                        $sqlQuery2="INSERT INTO pedidos (cantidad,fechapedido,domicilio)VALUES(1,'2019-11-19','$domiciliooo')";
                        if (mysqli_query($mysqli, $sqlQuery2)) {
                             header("Location:index.php?alerta2=1");
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
                      
                        }
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
                  
                    }
                    
?>