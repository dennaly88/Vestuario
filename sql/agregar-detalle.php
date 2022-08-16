







<?php
include ('conexion.php');
$deta =$_POST['deta'];


$query = "INSERT INTO detalle(nombre) VALUES ('$deta')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-detalle.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 






 






