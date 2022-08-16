<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
require ("mensajes/crear-lavanderia.php"); 
        break;
    case 2:
        

require ("mensajes/editar-lavanderia.php"); 

        break;
    case 3:
    require ("mensajes/eliminar-lavanderia.php"); 
      
break;

case 4:
    require ("mensajes/resetear-lavanderia.php"); 
      
break;

       
}

 

   
?>