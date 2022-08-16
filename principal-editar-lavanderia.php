<?php
include('sql/conexion.php');
include('scrips/seguridad.php');

?>

<!DOCTYPE html>
<html>

<head>
       <link rel="shortcut icon" href="img/FAVicon.ico">

       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">



       <title>Vestuario</title>

</head>



<body>




       <?php require("scrips/librerias.php"); ?>      
       <?php require("principal-menu.php"); ?><br><br><br>
       <?php require("cuerpo-lavanderia.php"); ?>
       <?php require("editar-lavanderia.php"); ?>



</body>
<?php require("footer.php"); ?>
<?php require("mensaje.php"); ?>



</html>