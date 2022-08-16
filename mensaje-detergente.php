<?php

$usu=$_GET["usu"];




switch ($usu) {
   
    case 1:
        

require ("mensajes/editar-detergente.php"); 

        break;
    case 2:
    require ("mensajes/eliminar-detergente.php"); 
      
        break;

    case 3:
    require ("mensajes/aumentar-detergente.php");

    break;

    case 4:
    require ("mensajes/aumento-detergente.php");

    break;



       
}

 

   
?>