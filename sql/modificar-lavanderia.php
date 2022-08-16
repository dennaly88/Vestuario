<?php
include ('conexion.php');











                  $edit_id=$_POST['edit_id'];
                  $edit_accesorio=$_POST['edit_accesorio'];
                  $edit_cantidad=$_POST['edit_cantidad'];









 
     $query = "UPDATE lavanderia SET id='$edit_id', cantidad='$edit_cantidad'







                                      WHERE '$edit_id'=id



                                        " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());

header("Location: http:../principal-lavanderia.php?usu=2");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        






