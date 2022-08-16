<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-color.php"); 
        break;
    case 2:
        

require ("mensajes/editar-color.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-color.php"); 
      
break;



       
}

 

   
?>