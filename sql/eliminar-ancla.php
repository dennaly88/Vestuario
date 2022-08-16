
<?php
include ('conexion.php');
$id = $_GET['id'];

 
     $query = "DELETE FROM ancla WHERE id ='$id'";
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());
          header("Location: http:../principal-ancla.php?usu=3");
          
    
      
?>