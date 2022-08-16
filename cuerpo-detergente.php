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



        <center><button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" onclick="location.href='#'" style="max-width: 10rem;">
            <span aria-hidden="true" class="text-light">Detergente</span>
          </button>








      </div>
      <div class="card-body text-secondary">
        <button type="button" title="Crear" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ex" data-whatever="">&#x2795;</button>
        <table id="p" class="table active border-secondary responsive" style="max-width: 80rem" ;>
          <thead>
            <tr class="bg-dark text-white">
              <h4>
                <td>Id</td>
                <center>
                  <td>Fecha</td>
                  <td>Cantidad</td>
                  <td>Unidad</td>
                  <td>Status</td>
                  <td>Tipo de detergente</td>
                  <td>Accion</td>
                  
                  

                 
              </h4>
            </tr>
          </thead>
          <?php
          $query = 'SELECT * FROM detergente ';
          $result = pg_query($query) or die('Query failed: ' . pg_last_error());
          while ($mostrar = pg_fetch_array($result)) {
            $id = $mostrar['id'];
            $usu = $mostrar['usuario'];
            
            
           
            
            
          ?>

            <tr>
              <center>
                <td><?php echo $mostrar['id'] ?></td>
                <center>
                  <center>
                    <td><?php echo $mostrar['fecha'] ?></td>
                    <center>
                    <td><?php echo $mostrar['cantidad'] ?></td>

                          <center>
                            
                          <td><?php echo $mostrar['unidad'] ?></td>
                          <center>
                            
                          <td><?php echo $mostrar['statu'] ?></td>

                          <center>

                          <td><?php echo $mostrar['tipo'] ?></td>
                          
                          
             
                                          
                                                  <td>
                                                    <!--___________________________BOTON ELIMINAR_________________________________________________________________________-->

 
                                                    <a href="principal-eliminar-detergente.php?id=<?php echo $id; ?>">

                                                    <button type="button" class="btn btn-danger">Eliminar</button>


                                                      <!--__________________________________________________________________________________________________________________-->
                                                      <a href="#" data-target="#myModal" class="edit" data-toggle="modal" "
                     data-usu=" <?php echo $usu; ?>" data-pass="<?php echo $pass; ?>" data-per="<?php echo $per; ?>" data-cor="<?php echo $cor; ?>" data-nom="<?php echo $nom; ?>" data-ape="<?php echo $ape; ?>" data-tel="<?php echo $tel; ?>" data-ced="<?php echo $ced; ?>">

                                                        <!--_____________________________________BOTON EDITAR_________________________________________________________________-->




<a href="principal-aumentar-detergente.php?id=<?php echo $id; ?>">                                                
<button type="button" class="btn btn-success">+</button>                                                    

 <!--______________________________________________________________________________________________________-->





 <a href="principal-disminuir-detergente.php?id=<?php echo $id; ?>">                                                

                                                        <button type="button" class="btn btn-warning">-</button>






                                                        




                                                          <!--__________________________________________________________________________________________________________________-->
                                                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                              <div class="modal-content">
                                                                <div class="modal-header btn btn-secondary">
                                                                  <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-info " data-dismiss="modal">
                                                                      <span aria-hidden="true">Editar detergente</span>
                                                                    </button>
                                                                  </h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                  <div class="card border mb-3" style="max-width: 50rem;">
                                                                    <div class="card-body text-secondary">
                                                                      <center>
                                                                        <form method="post" action="sql/modificar-detergente.php">
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
          <!--___________________________________________________CABEZERA DEL MODAL________________________________________________________________________________________-->


          <div class="modal-header btn btn-dark mb-3">
            <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal">
              <span aria-hidden="true">Agregar Detergente</span>
          </div>
          <div class="modal-body">
            <div class="card border mb-3" style="max-width: 50rem;">
              <div class="card-body text-secondary">
                <center>
                  <form method="post" action="sql/agregar-detergente.php">              



Fecha<input class="form-control form-control-sm" type="text" name="fecha" id="fecha" readonly placeholder="" value="<?php 
echo  date("d-m-Y");
 
?>" required> 
                    

                    Cantidad<input class="form-control form-control-sm" type="number" name="cantidad" id="cantidad" placeholder="" value="" required>
                    

                    
                    Status<select class="form-control form-control-sm" placeholder name="status" required>
                        
                        <option selected>Recibido</option>
                        <option selected>Entregado</option>
                        <option selected>Elige una opción</option>
                      </select>
                      Unidad<select class="form-control form-control-sm" placeholder name="unidad" required>
                        
                        <option selected>Kilos</option>
                        <option selected>Gramos</option>
                        <option selected>Litros</option>
                        <option selected>Elige una opción</option>
                        
                      </select>

                      Tipo <select class="form-control form-control-sm" placeholder name="ti" required>
                      <option selected>Desinfectante</option>
                        <option selected>Cloro</option>
                        <option selected>Polvo</option>
                        <option selected>Liquido</option>
                        <option selected>Elige una opción</option>
                      </select>
                    
                     
                   
                
                    <br>
              </div>
            </div> 
          </div>
          <div class="modal-footer btn btn-dark">
            <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value="Agregar">
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

              $query1 = "SELECT * from detergente where 'Desinfectante'=tipo";
              $resulatdo1 = pg_query($query1) or die("error ");
              $numReg1 = pg_num_rows($resulatdo1);

?>



<?php
          $detergente = 0;
          while ($fila1 = pg_fetch_assoc($resulatdo1)) {

            $detergente +=  $fila1['cantidad'];
          }
          ?>




 <!--____________________________________________________________________________________________________-->
    <?php




$query1 = "SELECT * from detergente where 'Cloro'=tipo";

$resulatdo1 = pg_query($query1) or die("error ");
$numReg1 = pg_num_rows($resulatdo1);

?>

<?php
$cloro = 0;
while ($fila1 = pg_fetch_assoc($resulatdo1)) {

     $cloro =  $fila1['cantidad'];
}
?>

<?php




$query1 = "SELECT * from detergente where 'Polvo'=tipo";

$resulatdo1 = pg_query($query1) or die("error ");
$numReg1 = pg_num_rows($resulatdo1);

?>

<?php
$Polvo = 0;
while ($fila1 = pg_fetch_assoc($resulatdo1)) {

     $Polvo +=  $fila1['cantidad'];
}
?>


 <!--____________________________________________________________________________________________________-->


 <!--____________________________________________________________________________________________________-->
 <?php

              $query1 = "SELECT * from detergente where 'Liquido'=tipo";
              $resulatdo1 = pg_query($query1) or die("error ");
              $numReg1 = pg_num_rows($resulatdo1);

?>



<?php
          $Liquido = 0;
          while ($fila1 = pg_fetch_assoc($resulatdo1)) {

            $Liquido +=  $fila1['cantidad'];
          }
          ?>

 
 
 <!--____________________________________________________________________________________________________-->



    <a href="reporte/desinfectante.php" title="Desinfectante" target="_blank">
 

      <button type="button" class="btn-close btn btn-dark btn-sm" data-dismiss="modal" style="max-width: 10rem;">
              <span aria-hidden="true" class="text-light">Desinfectante = <?php

                                                                          echo "$detergente";
                                                                          ?></span>
          </button>
    </a>   

    <a href="reporte/cloro.php" title="Stock de Comidas" target="_blank">
          <button type="button" class="btn-close btn btn-dark btn-sm" data-dismiss="modal" style="max-width: 10rem;">
              <span aria-hidden="true" class="text-light">Cloro = <?php

                                                                          echo "$cloro";
                                                                          ?></span>
          </button> 
   </a>

   <a href="reporte/polvo.php" title="Stock de Comidas" target="_blank">



          <button type="button" class="btn-close btn btn-dark btn-sm" data-dismiss="modal" style="max-width: 10rem;">
              <span aria-hidden="true" class="text-light">Polvo = <?php

                                                                          echo "$Polvo";
                                                                          ?></span>
          </button> 
   </a>
   
   <a href="reporte/liquido.php" title="Stock de Comidas" target="_blank">

          <button type="button" class="btn-close btn btn-dark btn-sm" data-dismiss="modal" style="max-width: 10rem;">
              <span aria-hidden="true" class="text-light">Liquido = <?php

                                                                          echo "$Liquido";
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