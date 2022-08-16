







<?php
include ('conexion.php');
$fecha =$_POST['fecha'];
$accesorio =$_POST['accesorio'];
$cantidad =$_POST['cantidad'];
$usuario =$_POST['usuario'];



$query = "INSERT INTO lavanderia(fecha,accesorio,cantidad,usuario) VALUES ('$fecha','$accesorio','$cantidad','$usuario')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 


$query2 = "INSERT INTO registro_lavanderia(fecha,accesorio,cantidad,usuario) VALUES ('$fecha','$accesorio','$cantidad','$usuario')";
$result2 = pg_query($conexion, $query2) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples2 = pg_affected_rows($result2);
header("Location:../principal-lavanderia.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result2); 




 

 






