<?php  


if ($_GET['form']=='add') { ?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Empleado
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=emp"> Empleado </a></li>
      <li class="active"> agregar </li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/empleados/proses.php?act=insert" enctype="multipart/form-data">
            <div class="box-body">


              <div class="form-group">
                <label class="col-sm-2 control-label">Tipo de identificacion</label>
                <div class="col-sm-5">
                    <select class="form-control" name="tipo_identificacion" required>
                    <option value="TI">TI</option>
                    <option value="CC">CC</option>
                    <option value="CE">CE</option>
                    <option value="PS">PS</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Numero identificacion</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="identificacion" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Nombres</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombre" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Apellidos</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="apellido" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Celular</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="celular" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Correo</label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" name="correo" autocomplete="off" required>
                </div>
              </div>
              
             <div class="form-group">
                <label class="col-sm-2 control-label">Genero</label>
                <div class="col-sm-5">
                    <select class="form-control" name="genero" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Direccion</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="direccion" autocomplete="off" required>
                </div>
              </div>
              
             <div class="form-group">
                <label class="col-sm-2 control-label">Fecha nacimiento</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" name="fecha_nacimiento" autocomplete="off" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre de usuario</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="usuario" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Contrase単a</label>
                <div class="col-sm-5">
                  <input type="password" class="form-control" name="password" autocomplete="off" required>
                </div>
              </div>

              <?php 
                  $query = mysqli_query($mysqli,"SELECT * FROM roles");
              
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cargo</label>
                <div class="col-sm-5">
                  <select class="form-control" name="rol" required>
                    <option value=""></option>
                    <?php  while($data = mysqli_fetch_assoc($query)){?>
                    
                    <option value="<?php echo $data['idrol']?>"><?php echo $data['nombre']?></option>

                    <?php } ?>
                  </select>
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=emp" class="btn btn-default btn-reset">Cancelar</a>
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

      $query = mysqli_query($mysqli, "SELECT empleados.tipo_identificacion AS tipo_identificacion,
                                             empleados.identificacion AS identificacion,
                                             empleados.nombre AS nombre,
                                             empleados.apellido AS apellido,
                                             empleados.celular AS celular,
                                             empleados.genero AS genero,
                                             empleados.direccion AS direccion,
                                             empleados.fecha_nacimiento AS fecha_nacimiento,
                                             empleados.correo AS correo,
                                             empleados.usuario AS usuario,
                                             empleados.estado AS estado,
                                             roles.idrol AS idrol,
                                             roles.nombre AS rol
                                              FROM empleados INNER JOIN roles ON empleados.idrol = roles.idrol WHERE identificacion='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }	
    
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar datos de Empleado
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Inicio</a></li>
      <li><a href="?module=user"> Empleado </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/empleados/proses.php?act=update" enctype="multipart/form-data">
            <div class="box-body">

              <!--<input type="hidden" name="" value="<?php //echo $data['identificacion']; ?>">-->
              <div class="form-group">
                <label class="col-sm-2 control-label">Tipo de identificacion</label>
                <div class="col-sm-5">
                    <select class="form-control" name="tipo_identificacion" required>
                    <option value="<?php echo $data['tipo_identificacion']; ?>"><?php echo $data['tipo_identificacion']; ?></option>
                    <option value="TI">TI</option>
                    <option value="CC">CC</option>
                    <option value="CE">CE</option>
                    <option value="PS">PS</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Identificacion</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="identificacion" autocomplete="off" value="<?php echo $data['identificacion']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombre" autocomplete="off" value="<?php echo $data['nombre']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Apellido</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="apellido" autocomplete="off" value="<?php echo $data['apellido']; ?>" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Celular</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="celular" autocomplete="off" value="<?php echo $data['celular']; ?>" required>
                </div>
              </div>
                          
             <div class="form-group">
                <label class="col-sm-2 control-label">correo</label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" name="correo" autocomplete="off" value="<?php echo $data['correo']; ?>">
                </div>
              </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Genero</label>
                <div class="col-sm-5">
                    <select class="form-control" name="genero" required>
                    <option value="<?php echo $data['genero']; ?>"><?php echo $data['genero']; ?></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                  </select>
                </div>
              </div>
              
             <div class="form-group">
                <label class="col-sm-2 control-label">direccion</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="direccion" autocomplete="off" value="<?php echo $data['direccion']; ?>" required>
                </div>
              </div>
              
            <div class="form-group">
                <label class="col-sm-2 control-label">Fecha de nacimiento</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" name="fecha_nacimiento" autocomplete="off" value="<?php echo $data['fecha_nacimiento']; ?>" required>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Usuario</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="usuario" autocomplete="off" value="<?php echo $data['usuario']; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cargo</label>
                <div class="col-sm-5">
                  <select class="form-control" name="rol" required>
                    <option value="<?php echo $data['idrol']; ?>"><?php echo $data['rol']; ?></option>
                    <?php  
                       $query = mysqli_query($mysqli,"SELECT * FROM roles");
                        while($data = mysqli_fetch_assoc($query)){?>
                    
                    <option value="<?php echo $data['idrol']?>"><?php echo $data['nombre']?></option>

                    <?php } ?>
                  </select>
                  </select>
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=emp" class="btn btn-default btn-reset">Cancelar</a>
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