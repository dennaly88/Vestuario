







<?php
include ('conexion.php');
$ancla =$_POST['ancla'];



$query = "INSERT INTO ancla(nombre) VALUES ('$ancla')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-ancla.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 






 






