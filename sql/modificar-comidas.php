<?php
include('conexion.php');





$edit_id = $_POST['edit_id'];
$edit_gerencia = $_POST['edit_gerencia'];
$edit_tipo = $_POST['edit_tipo'];
$edit_cantidad = $_POST['edit_cantidad'];
$edit_fecha = $_POST['edit_fecha'];
$edit_accion = $_POST['edit_accion'];
$edit_entregado = $_POST['edit_entregado'];











$query = "UPDATE comida SET id='$edit_id', gerencia='$edit_gerencia',tipo='$edit_tipo',cantidad='$edit_cantidad',
     fecha='$edit_fecha' , estado='$edit_accion' ,  entregado='$edit_entregado'







                                      WHERE '$edit_id'=id



                                        ";






$result = pg_query($query) or die('Query failed: ' . pg_last_error());

$cmdtuples = pg_affected_rows($result);






header("Location: http:../principal-comidas.php?usu=2");

echo "SE BORRO EL REGISTRO";
