

<?php

$usu=$_GET["usu"];




switch ($usu) {
    case 1:
       
        require ("mensajes/crear-materiales.php"); 
        break;
    case 2:
        require ("mensajes/aumento-materiales.php");
        
 

        break;
    case 3:
    
        require ("mensajes/eliminar-materiales.php");
break;





       
}


    
   
?>