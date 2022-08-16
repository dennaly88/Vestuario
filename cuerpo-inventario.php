<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <title>Vestuario</title>


<body class="">


 

  </head>

<br><br><br>
  <center>
    <div class="card border-secondary mb-3" style="max-width: 80rem;">
      <div class="card-header card text-white bg-dark mb-3">



        <center><button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" onclick="location.href='principal-inventario.php'" style="max-width: 10rem;">
            <span aria-hidden="true" class="text-light">Inventario</span>
          </button>



  




      </div>
      <div class="card-body text-secondary">
        <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>
        <table id="p" class="table active border-secondary responsive" style="max-width: 80rem" ;>
          <thead>
            <tr class="bg-dark text-white">
              <h4>
                  <td>Fecha</td>
                  <td>Vestuarista</td>
                  <td>Responsable</td>
                  <td>Programas</td>
                  <td>Accesorio</td>
                  <td>Color</td>
                  <td>Detalle</td>
                  <td>Status</td>
                  <td>Accion</td>
              </h4>
            </tr>
          </thead>
          <?php
          $query = 'SELECT * FROM inventario ';
          $result = pg_query($query) or die('Query failed: ' . pg_last_error());
          while ($mostrar = pg_fetch_array($result)) {
            $id = $mostrar['id'];
            $usu = $mostrar['usuario'];
            $pass = $mostrar['pass'];
            $per = $mostrar['perfil'];
            $cor = $mostrar['correo'];
            $nom = $mostrar['nombre'];
            $ape = $mostrar['apellido'];
            
          ?>

            <tr>
              <center>
                <td><?php echo $mostrar['fecha'] ?></td>
                <center>
                  <center>
                    <td><?php echo $mostrar['usuario'] ?></td>
                    <center>
                      <center>
                        <td><?php echo $mostrar['ancla'] ?></td>
                        <center>
                          <center>
                            <td><?php echo $mostrar['programa'] ?></td>
                            <center>
                              <center>
                                <td><?php echo $mostrar['accesorio'] ?></td>
                                <center>
                                  <center>
                                  <td><?php echo $mostrar['color'] ?></td>
                                    
                                    <center>
                                      <center>
                                      <td><?php echo $mostrar['detalle'] ?></td>
                                      <center>
                                      <center>

                                      <td><?php echo $mostrar['statu'] ?></td>
                                        <center>
                                          <center>
                                          
                                                  <td>
                                                    <!--___________________________BOTON ELIMINAR_________________________________________________________________________-->


                                                    <a href="principal-eliminar-registro.php?id=<?php echo $id; ?>">

                                                      <button type='button' class='btn btn-danger btn-sm' title="Eliminar">&#x274e;</button>


                                                      <!--__________________________________________________________________________________________________________________-->
                                                      <a href="#" data-target="#myModal" class="edit" data-toggle="modal" "
                     data-usu=" <?php echo $usu; ?>" data-pass="<?php echo $pass; ?>" data-per="<?php echo $per; ?>" data-cor="<?php echo $cor; ?>" data-nom="<?php echo $nom; ?>" data-ape="<?php echo $ape; ?>" data-tel="<?php echo $tel; ?>" data-ced="<?php echo $ced; ?>">

                                                        <!--_____________________________________BOTON EDITAR_________________________________________________________________-->






                                                        <a href="principal-editar-registro.php?id=<?php echo $id; ?>">

                                                          <button type='button' class='btn btn-info btn-sm' title="Editar"> &#x1f4dd; </button>



                                                          <!--__________________________________________________________________________________________________________________-->
                                                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                              <div class="modal-content">
                                                                <div class="modal-header btn btn-secondary">
                                                                  <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info " data-dismiss="modal">
                                                                      <span aria-hidden="true">Editar Usuario</span>
                                                                    </button>
                                                                  </h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                  <div class="card border mb-3" style="max-width: 50rem;">
                                                                    <div class="card-body text-secondary">
                                                                      <center>
                                                                        <form method="post" action="sql/modificar-usuario.php">
                                                                          Id<input class="input form-control" type="text" name="edit_id" readonly id="edit_id" placeholder="id" value="<?php echo $row['id'] ?>" required>
                                                                          Usuario<input class="input form-control" type="text" name="edit_usu" id="edit_usu" placeholder="usuario" value="" required>
                                                                          Contraseña<input class="input form-control" type="text" name="edit_pass" id="edit_pass" placeholder="pass" value="" required>
                                                                          Perfil<input class="input form-control" type="text" name="edit_per" id="edit_per" placeholder="perfil" value="" required>
                                                                          Correo<input class="input form-control" type="text" name="edit_cor" id="edit_cor" placeholder="correo" value="" required>
                                                                          Nombre<br><input class="input form-control" type="text" name="edit_nom" id="edit_nom" placeholder="nombre" value="" required>
                                                                          Apellido<input class="input form-control" type="text" name="edit_ape" id="edit_ape" placeholder="apellido" value="" required>
                                                                          Telefono<input class="input form-control" type="text" name="edit_tel" id="edit_tel" placeholder="telefono" value="" required>
                                                                          Cedula<input class="input form-control" type="text" name="edit_ced" id="edit_ced" placeholder="cedula" value="" required>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="modal-footer btn btn-secondary">
                                                                  <input class="btn-submit btn btn-primary" type="submit" size="35" value="Modificar">
                                                                  <input class="btn-reset btn btn-success" type="reset" size="35" value="Limpiar">
                                                                  <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">Cerrar</span>
                                                                  </button>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
      </div>
    </div>

    </form>

    </td>
    <center>
      </tr>

    <?php
          }
    ?>

    <div class="modal fade " id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  mb-3" role="document">
        <div class="modal-content">
  <!--___________________________________________________CABEZERA DEL MODAL_________________________________________________-->


          <div class="modal-header btn btn-dark mb-3">
            <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal">
              <span aria-hidden="true">Crear Registro</span>
          </div>
          <div class="modal-body">
            <div class="card border mb-3" style="max-width: 50rem;">
              <div class="card-body text-secondary">
                <center>
                  <form method="post" action="sql/crear-registro.php">


                  


  Fecha<input class="form-control form-control-sm" type="text" name="fecha" id="fecha" placeholder=""  readonly value="  <?php echo  date("d-m-Y");?>" required>
  Vestuarista<input class="form-control form-control-sm" type="text" name="usuario" id="usuario" placeholder="" readonly value="<?php echo  $_SESSION['usuario']; ?>" required>
                    <?php
                          $query = 'SELECT * FROM ancla;';
                          $resulatdo = pg_query($query) or die("error ");
                          $numReg = pg_num_rows($resulatdo);
                    ?>
                    <div class="form-group">
  Responsable <select class="form-control form-control-sm" placeholder name="ancla" required>
                        <option selected>Elige el Nombre</option>
                        <?php
                        while ($fila = pg_fetch_array($resulatdo)) {
                          echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                        }
                        ?>
          </select>
                    </div>

                    <?php

                            $query = 'SELECT * FROM programas;';
                            $resulatdo = pg_query($query) or die("error ");
                            $numReg = pg_num_rows($resulatdo);

                    ?>
                             <div class="form-group">
                                  Programas
                                  <select class="form-control form-control-sm" placeholder name="programas" required>
                                    <option selected>Elige el Programa</option>
                                    <?php
                                    while ($fila = pg_fetch_array($resulatdo)) {
                                      echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                                    }
                                    ?>
                                  </select>
                                  </div>

                                        <?php

                                          $query = 'SELECT * FROM accesorio;';
                                          $resulatdo = pg_query($query) or die("error ");
                                          $numReg = pg_num_rows($resulatdo);

                                         ?>



                                 <div class="form-group">
                                        Accesorios
                                        <select class="form-control form-control-sm" placeholder name="accesorios" required>
                                          <option selected>Elige el Accesorio</option>
                                          <?php
                                          while ($fila = pg_fetch_array($resulatdo)) {
                                            echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
                                          }
                                          ?>
                                        </select>
                                   </div>

                                   <?php

$query = 'SELECT * FROM color;';
$resulatdo = pg_query($query) or die("error ");
$numReg = pg_num_rows($resulatdo);

?>



<div class="form-group">
Color
<select class="form-control form-control-sm" placeholder name="color" required>
<option selected>Elige el Accesorio</option>
<?php
while ($fila = pg_fetch_array($resulatdo)) {
  echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
}
?>
</select>
</div>
<?php

$query = 'SELECT * FROM detalle;';
$resulatdo = pg_query($query) or die("error ");
$numReg = pg_num_rows($resulatdo);

?>



<div class="form-group">
Detalle
<select class="form-control form-control-sm" placeholder name="deta" required>
<option selected>Elige el Accesorio</option>
<?php
while ($fila = pg_fetch_array($resulatdo)) {
  echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
}
?>
</select>
</div>



<?php

$query = 'SELECT * FROM statu;';
$resulatdo = pg_query($query) or die("error ");
$numReg = pg_num_rows($resulatdo);

?>



<div class="form-group">
Status
<select class="form-control form-control-sm" placeholder name="status" required>
<option selected>Elige</option>
<?php
while ($fila = pg_fetch_array($resulatdo)) {
  echo "<option values" . $fila['id'] . ">" . $fila['nombre'] . "</option>";
}
?>
</select>
</div>






                                   
                            
                                




              
              </div>
            </div>
          </div>
          <div class="modal-footer btn btn-dark">
            <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value="Crear">
            <input class="btn-reset btn btn-success btn-sm" type="reset" size="35" value="Limpiar">
            <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">Cerrar</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    </form>

    </table>



    <?php




$query1 = "SELECT * from inventario where 'Stock'=statu";

$resulatdo1 = pg_query($query1) or die("error ");
$numReg1 = pg_num_rows($resulatdo1);

?>

<?php
$total8 = 0;
while ($fila1 = pg_fetch_assoc($resulatdo1)) {

     $total8 =  $total8+1;
}
?>







 <!--____________________________________________________________________________________________________-->
    <?php




$query1 = "SELECT * from inventario where 'Prestamo'=statu";

$resulatdo1 = pg_query($query1) or die("error ");
$numReg1 = pg_num_rows($resulatdo1);

?>

<?php
$total = 0;
while ($fila1 = pg_fetch_assoc($resulatdo1)) {

     $total =  $total+1;
}
?>
 <!--____________________________________________________________________________________________________-->

<?php

$query1 = "SELECT * from inventario where 'Entregado'=statu";

$resulatdo1 = pg_query($query1) or die("error ");
$numReg1 = pg_num_rows($resulatdo1);

?>

<?php
$total1 = 0;
while ($fila1 = pg_fetch_assoc($resulatdo1)) {

     $total1 =  $total1+1;
}
?>

 <!--____________________________________________________________________________________________________-->
 <?php

$query1 = "SELECT * from inventario where 'Lavanderia'=statu"; 

$resulatdo1 = pg_query($query1) or die("error ");
$numReg1 = pg_num_rows($resulatdo1);

?>

<?php
$total2 = 0;
while ($fila1 = pg_fetch_assoc($resulatdo1)) {

     $total2 =  $total2+1;
}
?>

 <!--____________________________________________________________________________________________________-->
 <?php

$query1 = "SELECT * from inventario where 'tintoreria'=statu";

$resulatdo1 = pg_query($query1) or die("error ");
$numReg1 = pg_num_rows($resulatdo1);

?>

<?php
$total3 = 0;
while ($fila1 = pg_fetch_assoc($resulatdo1)) {

     $total3 =  $total3+1;
}
?>

 <!--____________________________________________________________________________________________________-->

 <?php

$query1 = "SELECT * from inventario where 'Deposito'=statu";

$resulatdo1 = pg_query($query1) or die("error ");
$numReg1 = pg_num_rows($resulatdo1);

?>

<?php
$total4 = 0;
while ($fila1 = pg_fetch_assoc($resulatdo1)) {

     $total4 =  $total4+1;
}
?>

 <!--____________________________________________________________________________________________________-->



    <a href="reporte/Stock.php" title="Stock de Comidas" target="_blank">


      <button type="button" class="btn-close btn btn-dark btn-sm" data-dismiss="modal" style="max-width: 10rem;">
              <span aria-hidden="true" class="text-light">Stock = <?php

                                                                          echo "$total8";
                                                                          ?></span>
          </button>
    </a>   

    <a href="reporte/prestamo.php" title="Stock de Comidas" target="_blank">
          <button type="button" class="btn-close btn btn-dark btn-sm" data-dismiss="modal" style="max-width: 10rem;">
              <span aria-hidden="true" class="text-light">Prestamo = <?php

                                                                          echo "$total";
                                                                          ?></span>
          </button> 
   </a>

   <a href="reporte/entregado.php" title="Stock de Comidas" target="_blank">



          <button type="button" class="btn-close btn btn-dark btn-sm" data-dismiss="modal" style="max-width: 10rem;">
              <span aria-hidden="true" class="text-light">Entregado = <?php

                                                                          echo "$total1";
                                                                          ?></span>
          </button> 
   </a>
   
   <a href="reporte/tintoreria.php" title="Stock de Comidas" target="_blank">

          <button type="button" class="btn-close btn btn-dark btn-sm" data-dismiss="modal" style="max-width: 10rem;">
              <span aria-hidden="true" class="text-light">Tintoreria = <?php

                                                                          echo "$total3";
                                                                          ?></span>
          </button> 
   </a>
   <a href="reporte/deposito.php" title="Stock de Comidas" target="_blank">

          <button type="button" class="btn-close btn btn-dark btn-sm" data-dismiss="modal" style="max-width: 10rem;">
              <span aria-hidden="true" class="text-light">Deposito = <?php

                                                                          echo "$total4";
                                                                          ?></span>
          </button> 
   </a>


    </div>
    </div>
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>

</body>
<center>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#p').DataTable();


    });
  </script>