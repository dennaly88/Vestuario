







<?php
include ('conexion.php');
$col =$_POST['col'];


$query = "INSERT INTO color(nombre) VALUES ('$col')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-color.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 






 






