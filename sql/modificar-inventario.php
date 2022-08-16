<?php
include ('conexion.php');


  
                     



$edit_id=$_POST['edit_id'];
$edit_statu=$_POST['edit_statu'];








 
     $query = "UPDATE inventario SET id='$edit_id', statu='$edit_statu'







                                      WHERE '$edit_id'=id



                                        " ;




     
     
     $result = pg_query($query) or die('Query failed: ' .pg_last_error());

header("Location: http:../principal-inventario.php?usu=2");
      
  echo "SE BORRO EL REGISTRO";
?>


 

     






