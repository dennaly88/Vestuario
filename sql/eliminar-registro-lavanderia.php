<?php
include ('conexion.php');


 
     $query = "DELETE  FROM lavanderia";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
          header("Location: http:../principal-lavanderia.php?usu=4");
          
    
      
?>