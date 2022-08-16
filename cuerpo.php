
<?php require ("scrips/librerias.php");?>

<?php

    //creamos la sesion
    session_start();
    //validamos si se ha hecho o no el inicio de sesion correctamente
    //si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['usuario'])) 
    {
        
        header('Location: index.php'); 
        
        exit();
     }

?>

<br>

  
	<body>

<center>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-25" src="img/3.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-25" src="img/4.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-25" src="img/5.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-25" src="img/2121.png" alt="CU slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-25" src="img/2323.png" alt="CI slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-25" src="img/7.png" alt="LU slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-25" src="img/saco1.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-25" src="img/saco2.png" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>












