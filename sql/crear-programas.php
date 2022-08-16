<?php
include ('conexion.php');

$nom =$_POST['nom'];



                    
     $query = "INSERT INTO programas(nombre) VALUES 
                    ('$nom')";
                                        $result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
                                        $cmdtuples = pg_affected_rows($result);


                                        
                    header("Location:../principal-programas.php?usu=1?");
                    echo $cmdtuples . " datos registrados.\n";
                    pg_free_result($result); 


















   