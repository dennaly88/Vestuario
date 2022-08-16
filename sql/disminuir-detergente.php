<?php
include ('conexion.php');



 
$edit_id=$_POST['edit_id'];
$cantidad=$_POST['cantidad'];
$nueva=$_POST['nueva'];






$cantidad=$cantidad-$nueva;


 
     $query = "UPDATE detergente SET id='$edit_id', cantidad='$cantidad'







                                      WHERE '$edit_id'=id



                                        " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());




    






header("Location: http:../principal-detergente.php?usu=5");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     

                        






