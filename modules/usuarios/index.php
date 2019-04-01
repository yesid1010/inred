<!-- Main content -->
<section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/usuarios/proses.php?act=update" method="POST">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Identificación</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="identificacion" value="<?php echo $data['identificacion']; ?>" readonly required>
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
                  <label class="col-sm-2 control-label">Correo</label>
                  <div class="col-sm-5">
                    <input type="email" class="form-control" name="correo" autocomplete="off" value="<?php echo $data['correo']; ?>" >
                  </div>
                </div>
                
                <hr>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Celular</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="celular" autocomplete="off" value="<?php echo $data['celular']; ?>" maxlength="10" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Fijo</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="telefono" autocomplete="off" value="<?php echo $data['telefono']; ?>" maxlength="7" >
                    </div>
                  </div>
      
                


                <div class="form-group">
                    <label class="col-sm-2 control-label">Proyecto</label>
                    <div class="col-sm-5">
                      <select class="chosen-select" name="proyecto" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                      <option value="<?php echo $data['idproyecto']; ?>"> <?php echo $data['proyecto']; ?></option>
                          <?php  
                              $querys = mysqli_query($mysqli,"SELECT * FROM proyectos");
                              while($datas = mysqli_fetch_assoc($querys)){
                          ?>
                            <option value="<?php echo $datas['idproyecto']?>"><?php echo $datas['nombre']?></option>
                        <?php } ?>

                      </select>
                    </div>
                  </div>
                </div> <!--div clas 6-->
                
                <div class="col-md-6">


                  <div class="form-group">
                    <label class="col-sm-2 control-label">Barrio</label>
                    <div class="col-sm-5">
                      <select class="chosen-select" name="barrio" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                        <option value="<?php echo $data['idbarrio']; ?>"> <?php echo $data['barrio']; ?></option>
                        <?php  
                            $query2 = mysqli_query($mysqli,"SELECT * FROM barrios");
                            while($data2 = mysqli_fetch_assoc($query2)){
                        ?>
                          <option value="<?php echo $data2['idbarrios']?>"><?php echo $data2['nombre']?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Género</label>
                    <div class="col-sm-5">
                      <select class="chosen-select" name="genero" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                        <option value="<?php echo $data['genero']; ?>"><?php echo $data['genero']; ?></option>
                        <option value="M">M</option>
                        <option value="F">F</option>
                      </select>
                    </div>
                  </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">F.Nacimiento</label>
                  <div class="col-sm-5">
                    <input type="date" class="form-control" name="nacimiento" id='calendario2' autocomplete="off" value="<?php echo $data['nacimiento']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Edad</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="edad"  id = "edad2" autocomplete="off" value="<?php echo $data['edad']; ?>" readonly  required>
                  </div>
                </div>

         
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Acudiente</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="acudiente" autocomplete="off" value="<?php echo $data['acudiente']; ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Cel.Acudiente</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="cel_acudiente" autocomplete="off" value="<?php echo $data['cel_acudiente']; ?>" >
                    </div>
                  </div>
             
                  
                </div> <!--div col 6 -->

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-7 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=usuarios" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->