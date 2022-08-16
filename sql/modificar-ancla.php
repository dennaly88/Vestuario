<?php
include ('conexion.php');





$edit_id=$_POST['edit_id'];
$edit_nom=$_POST['edit_nom'];








 
     $query = "UPDATE ancla SET id='$edit_id', nombre='$edit_nom'







                                      WHERE '$edit_id'=id



                                        " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());

header("Location: http:../principal-ancla.php?usu=2");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        






