<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-detalle.php"); 
        break;
    case 2:
        

require ("mensajes/editar-detalle.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-detalle.php"); 
      
break;



       
}

 

   
?>