<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="css/bootstrap.min.css">


  <?php
  include('sql/conexion.php');
  $id = $_GET['id'];


 
  $query = "SELECT * FROM inventario WHERE id ='$id'";
  $result = pg_query($query) or die('Query failed: ' . pg_last_error());
  $row = pg_fetch_array($result);



  $row['id'];
  $row['nombre'];
  


  ?>

 

  <div class="modal fade" id="danny" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header btn btn-dark">
          <h5 class="modal-title" id="exampleModalLabel"><button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal">
              <span aria-hidden="true">Editar Registro</span>
            </button>
          </h5>
        </div>
        <div class="modal-body">
          <div class="card border mb-3" style="max-width: 50rem;">
            <div class="card-body text-secondary">
              <center>
                <form method="post" action="sql/modificar-inventario.php">
    Id<input class="form-control form-control-sm" type="text" name="edit_id" readonly id="edit_id" placeholder="id" value="<?php echo $row['id'] ?>" required>
    Fecha<input class="form-control form-control-sm" type="text" name="edit_fecha" readonly id="edit_fecha" placeholder="fecha" value="<?php echo $row['fecha'] ?>" required>  
    Vestuarista<input class="form-control form-control-sm" type="text" name="edit_usuario" readonly id="edit_usuario" placeholder="usuario" value="<?php echo $_SESSION['usuario']; ?>" required>
    Ancla<input class="form-control form-control-sm" type="text" name="edit_ancla" id="edit_ancla" readonly placeholder="ancla" value="<?php echo $row['ancla'] ?>" required>
    Programas<input class="form-control form-control-sm" type="text" name="edit_programa" readonly id="edit_programa" placeholder="programa" value="<?php echo $row['programa'] ?>" required>
    Accesorio<input class="form-control form-control-sm" type="text" name="edit_accesorio" readonly id="edit_accesorio" placeholder="accesorio" value="<?php echo $row['accesorio'] ?>" required>
    Color<input class="form-control form-control-sm" type="text" name="edit_color" id="edit_color" readonly placeholder="color" value="<?php echo $row['color'] ?>" required>
    Lavanderia<input class="form-control form-control-sm" type="text" name="edit_color" id="edit_color" readonly placeholder="color" value="<?php echo $row['color'] ?>" required>
    <?php

$query = 'SELECT * FROM statu;';
$resulatdo = pg_query($query) or die("error ");
$numReg = pg_num_rows($resulatdo);

?>



<div class="form-group">
Status
<select class="form-control form-control-sm" placeholder name="edit_statu" required>
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
          <input class="btn-submit btn btn-primary btn-sm" type="submit" size="35" value="Modificar">
          <input class="btn-reset btn btn-success btn-sm" type="reset" size="35" value="Limpiar">
          <button type="button" class="btn-close btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Cerrar</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>


  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/editar-usuario.js"></script>
  </body>

</html>