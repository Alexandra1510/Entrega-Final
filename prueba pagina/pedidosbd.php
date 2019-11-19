<?php

                    $mysqli = new mysqli("localhost", "notigree_alex", "12345", "notigree_littlesister");
                    if (mysqli_connect_errno()) {
                        printf("Falló la conexión: %s\n", mysqli_connect_error());
                        exit();
                    }
                    $id_pedido= Array();
                    $cantidad = Array();
                    $fechapedido = Array();
                    $domicilio = Array();
                    $id_foto = Array();
                    $id_usuario = Array();
                    $i=0;
                    $consulta = "SELECT * FROM pedidos";
                    $consulta2= "SELECT COUNT(*) FROM pedidos";
                    $hghg=0;
                    $resultado2=0;
                    if ($resultado = $mysqli->query($consulta)) {
                        while ($fila = $resultado->fetch_row()) {
                            $id_pedido[$i]=$fila[0];
                            $cantidad[$i] = $fila[1];
                            $fechapedido[$i] = $fila[2];
                            $domicilio[$i] = $fila[3];
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