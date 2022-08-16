<?php
include ('conexion.php');
$fecha =$_POST['fecha'];
$usuario =$_POST['usuario'];
$ancla =$_POST['ancla'];
$programas =$_POST['programas'];
$accesorios =$_POST['accesorios'];
$color =$_POST['color'];
$deta =$_POST['deta'];
$status =$_POST['status'];

$query = "INSERT INTO inventario(fecha,usuario,ancla,programa,accesorio,color,detalle,statu) VALUES
                                ('$fecha','$usuario','$ancla','$programas','$accesorios','$color','$deta','$status')";
$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
header("Location:../principal-inventario.php?usu=1");
echo $cmdtuples . " datos registrados.\n";
pg_free_result($result); 







 




 






