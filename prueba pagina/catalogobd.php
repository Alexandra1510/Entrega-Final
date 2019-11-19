<?php
                    $mysqli = new mysqli("localhost", "notigree_alex", "12345", "notigree_littlesister");
                    if (mysqli_connect_errno()) {
                        printf("Falló la conexión: %s\n", mysqli_connect_error());
                        exit();
                    }
                    $id= Array();
                    $marca= Array();
                    $cantidad = Array();
                    $precio = Array();
                    $descripcion = Array();
                    $nombre = Array();
                    $stock = Array();
                    $i=0;
                    $consulta = "SELECT * FROM productos";
                    $consulta2= "SELECT COUNT(*) FROM productos";
                    $hghg=0;
                    $resultado2=0;
                    if ($resultado = $mysqli->query($consulta)) {
                        while ($fila = $resultado->fetch_row()) {
                            $id[$i]=$fila[0];
                            $cantidad[$i] = $fila[2];
                            $precio[$i] = $fila[3];
                            $marca[$i] = $fila[1];
                            $descripcion[$i] = $fila[4];
                            $nombre[$i] = $fila[5];
                            $stock[$i] = $fila[6];
                            $i++;

                        }
                        $resultado->close();
                    }
                    if ($resultado2 = $mysqli->query($consulta2)) {
                        $fila = $resultado2->fetch_row(); 
                            $hghg=$fila[0];
                        /* liberar el conjunto de resultados */
                        $resultado2->close();
                        
                    }
?>