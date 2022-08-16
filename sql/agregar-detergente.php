<?php
include ('conexion.php');




$fecha =$_POST['fecha'];
$cantidad =$_POST['cantidad'];
$status =$_POST['status'];
$unidad =$_POST['unidad'];
$ti =$_POST['ti'];

        

$query = "INSERT INTO detergente(fecha,cantidad,statu,unidad,tipo) VALUES ('$fecha','$cantidad','$status','$unidad','$ti')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-detergente.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 










 



















 






