<section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Reportes Usuario
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=usuarios"> Usuarios </a></li>
      <li class="active"> Más </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" target="_blank"  class="form-horizontal" action="modules/reportes/usuarios/usuarios.php?act=insert" method="POST">
            <div class="box-body">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="col-sm-4 control-label"><b>Género</b></label>
                  <div class="col-sm-4">
                    <select class="chosen-select" name="genero" data-placeholder="-- Seleccionar --" autocomplete="off" >
                      <option value=""></option>
                      <option value="M">M</option>
                      <option value="F">F</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"><b>Barrio</b></label>
                    <div class="col-sm-4">
                      <select class="chosen-select" name="barrio" data-placeholder="Barrio" autocomplete="off" >
                        <option value=""></option>
                        <?php  
                          $query = mysqli_query($mysqli,"SELECT * FROM barrios");
                          while($data = mysqli_fetch_assoc($query)){
                        ?>
                        <option value="<?php echo $data['idbarrios']?>"><?php echo $data['nombre']?></option>
                          <?php } ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label"><b>Proyecto</b></label>
                  <div class="col-sm-4">
                    <select class="chosen-select" name="proyecto" id="proyecto_add" data-placeholder="-- Seleccionar --" autocomplete="off" >
                      <option value=""></option>
                      <?php  
                        $query = mysqli_query($mysqli,"SELECT * FROM proyectos");
                        while($data = mysqli_fetch_assoc($query)){
                      ?>
                      <option value="<?php echo $data['idproyecto']?>"><?php echo $data['nombre']?></option>
                        <?php } ?>
                    </select>
                  </div>
              </div> 

             </div> <!-- div col 4-->

         


          </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                  <label class="col-sm-8 control-label"><b>Si No desea Hacer Filtro solo haga click en consultar</b></label>
                  <div class="col-sm-offset-9 col-sm-10">
                     <input  type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Consultar">
                  <a href="?module=reportes" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->