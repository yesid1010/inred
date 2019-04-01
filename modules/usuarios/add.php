<section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Usuario
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
          <form role="form" class="form-horizontal" action="modules/usuarios/proses.php?act=insert" method="POST">
            <div class="box-body">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Identificación</label>
                  <div class="col-sm-7">
                    <input type="number" class="form-control" name="identificacion"  required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nombres</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="nombre" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Apellidos</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="apellido" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">F.Nacimiento</label>
                  <div class="col-sm-7">
                    <input type="date" class="form-control" id='calendario' name="nacimiento" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Edad</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="edad" id="edad" autocomplete="off"  readonly required>
                    <span id="edadCalculada"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Género</label>
                  <div class="col-sm-7">
                    <select class="chosen-select" name="genero" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                      <option value=""></option>
                      <option value="M">M</option>
                      <option value="F">F</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Caracterización</label>
                  <div class="col-sm-7">
                    <select class="chosen-select" name="caracterizacion" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                      <option value=""></option>
                      <option value="Discapacitado">Discapacitado</option>
                      <option value="Desplazado">Desplazado</option>
                      <option value="Indigena">Indígena</option>
                      <option value="Afrocolombiano">Afrocolombiano</option>
                      <option value="Convencional">Convencional</option>        
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Tipo Sangre</label>
                  <div class="col-sm-7">
                    <select class="chosen-select" name="grupo_sanguineo" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                      <option value=""></option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                    </select>
                  </div>
                </div>
             </div> <!-- div col 4-->

             <div class="col-md-4">
              <div class="form-group">
                    <label class="col-sm-5 control-label">Barrio</label>
                    <div class="col-sm-7">
                      <select class="chosen-select" name="barrio" data-placeholder="Barrio" autocomplete="off" required>
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
                  <label class="col-sm-5 control-label">Correo</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" name="correo" autocomplete="off" value="@" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Celular</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="celular" autocomplete="off"  maxlength="10">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">fijo</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="telefono" autocomplete="off"  maxlength="7">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-5 control-label">Lesión/Enfermedad</label>
                  <label class="col-sm-1 control-label">Si</label>
                  <input type="radio" class="col-sm-1" value="1" name="lesion">
                  <label class="col-sm-1 control-label">No</label>
                  <input type="radio" class="col-sm-1" value="0" checked name="lesion">
                </div>
                <div id = "lesion">
                  <div class="form-group">
                      <label class="col-sm-5 control-label">Cual : </label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" name="lesion_efermedad_deportiva" autocomplete="off"  >
                      </div>
                  </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-5 control-label">¿Medicamentos?</label>
                    <label class="col-sm-1 control-label">Si</label>
                    <input type="radio" class="col-sm-1" value="yes" name="medi">
                    <label class="col-sm-1 control-label">No</label>
                    <input type="radio" class="col-sm-1" value="Not" checked name="medi">
                </div>
                <div id="medi">
                    <div class="form-group">
                        <label class="col-sm-5 control-label">Cual : </label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="medicamentos" autocomplete="off"  >
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-5 control-label">¿ Sisben ?</label>
                    <label class="col-sm-1 control-label">Si</label>
                    <input type="radio" class="col-sm-1" value="Si"  name="sisben">
                    <label class="col-sm-1 control-label">No</label>
                    <input type="radio" class="col-sm-1" value="No" checked  name="sisben">
                </div>

             </div> <!-- div col 4-->

             <div class="col-md-4">
               
             <div class="form-group" >
                    <label class="col-sm-5 control-label">EPS</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="eps" autocomplete="off" required>
                    </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-5 control-label">Proyecto</label>
                  <div class="col-sm-7">
                    <select class="chosen-select" name="proyecto" id="proyecto_add" data-placeholder="-- Seleccionar --" autocomplete="off" required>
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
         
                <div class="form-group" id="modalidad_add" >
                  <label class="col-sm-5 control-label">Modalidad</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="modalidad"  data-placeholder="-- Seleccionar --" autocomplete="off" >
            
                      <option value="Futbol">Futbol</option>
                      <option value="Softbol">Softbol</option>
                      <option value="Voleibol">Voleibol</option>
                      <option value="Atletismo">Atletismo</option>
                      <option value="Ajedrez">Ajedrez</option>
                      <option value="Beisbol">Béisbol</option>
                      <option value="Patinaje">Patinaje</option>
                      <option value="Boxeo">Boxeo</option>
                      <option value="Baloncesto">Baloncesto</option>
                      <option value="Lucha">Lucha</option>
                      <option value="Natacion">Natación</option>
                      <option value="Futsal">Futsal</option>
                    </select>
                  </div>
                </div>
             
                
              <div class="form-group">
                <label class="col-sm-5 control-label">Barrio Proyecto</label>
                <div class="col-sm-7">
                  <select class="chosen-select" name="barrio_proyecto" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                    <option value=""></option>
                    <?php  
                      $query = mysqli_query($mysqli,"SELECT * FROM barrios");
                      while($data = mysqli_fetch_assoc($query)){
                    ?>
                    <option value="<?php echo $data['nombre']?>"><?php echo $data['nombre']?></option>
                      <?php } ?>
                  </select>
                </div>
              </div>
              <div id ='acudiente'>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Acudiente</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="acudiente" autocomplete="off" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Celular Acu.</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="cel_acudiente" autocomplete="off" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Correo Acudiente</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="correo_acudiente" autocomplete="off"  >
                  </div>
                </div>
              </div>
            </div> <!-- div col 4-->

          </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-9 col-sm-10">
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