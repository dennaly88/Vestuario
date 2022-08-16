

<?php
include ('conexion.php');
$acce =$_POST['acce'];



$query = "INSERT INTO accesorio(nombre) VALUES ('$acce')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-accesorios.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 






 






