

<?php  


if ($_GET['form']=='add') { ?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Barrio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=barrios"> Barios </a></li>
      <li class="active"> agregar </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/barrios/proses.php?act=insert" enctype="multipart/form-data">
            <div class="box-body">


              <div class="form-group">
                <label class="col-sm-2 control-label">nombre</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="nombre" autocomplete="off" required>
                </div>
           


              <?php 
                  $query = mysqli_query($mysqli,"SELECT * FROM localidad"); 
              ?>

              
                <label class="col-sm-2 control-label">Localidad</label>
                <div class="col-sm-3">
                  <select class="form-control" name="localidad" required>
                    <option value=""></option>
                    <?php  while($data = mysqli_fetch_assoc($query)){?>
                    
                    <option value="<?php echo $data['idlocalidad']?>"><?php echo $data['nombre']?></option>

                    <?php } ?>
                  </select>
              
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=barrios" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}

elseif ($_GET['form']=='edit') { 
  	if (isset($_GET['id'])) {

      $query = mysqli_query($mysqli, "SELECT barrios.idbarrios AS idbarrio,
                                             barrios.nombre AS nombre,
                                             localidad.nombre AS localidad,
                                             localidad.idlocalidad  AS idlocalidad
                                              FROM barrios INNER JOIN localidad ON barrios.idlocalidad = localidad.idlocalidad WHERE idbarrios='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }	
    
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar datos del Barrio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Inicio</a></li>
      <li><a href="?module=user"> Barrio </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/barrios/proses.php?act=update" enctype="multipart/form-data">
            <div class="box-body">

            <div class="form-group">
                <label class="col-sm-2 control-label">nombre</label>
                <div class="col-sm-3">
                <input type="hidden" name="idbarrio" value="<?php echo $data['idbarrio']; ?>">
                  <input type="text" class="form-control" name="nombre" value="<?php echo $data['nombre']; ?>" autocomplete="off" required>
                </div>
           


              <?php 
                  $query = mysqli_query($mysqli,"SELECT * FROM localidad"); 
              ?>

              
                <label class="col-sm-2 control-label">Localidad</label>
                <div class="col-sm-3">
                  <select class="form-control" name="localidad" required>
                    <option value="<?php echo $data['idlocalidad']; ?>"><?php echo $data['localidad']; ?></option>
                    <?php  while($data = mysqli_fetch_assoc($query)){?>
                    
                    <option value="<?php echo $data['idlocalidad']?>"><?php echo $data['nombre']?></option>

                    <?php } ?>
                  </select>
              
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=barrios" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>