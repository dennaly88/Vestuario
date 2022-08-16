<?php
 

$conexion=pg_connect("host=localhost port=5432 dbname=vestuario user=postgres password=d3s4rr0ll0") or die  (" ERROR  BASE DE DATOS
     	" . pg_last_error());
 
 
if(!$conexion) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
echo "\n";
}
 

 
?>



