<?php
include ('conexion.php');




$fecha =$_POST['fecha'];
$accesorios =$_POST['accesorios'];
$cantidad =$_POST['cantidad'];



$query = "INSERT INTO lavanderia(fecha,accesorio,cantidad) VALUES ('$fecha','$accesorios','$cantidad')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-lavanderia.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 






 



















 






