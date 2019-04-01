<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($mysqli,"SELECT 
    usuarios.identificacion AS identificacion, 
    usuarios.nombre AS nombre,
    usuarios.apellido AS apellido,
    usuarios.fecha_nacimiento AS nacimiento,
    usuarios.edad AS edad,
    usuarios.genero AS genero,
    usuarios.caracterizacion AS caracterizacion,
    usuarios.grupo_sanguineo AS tipo_sangre,
    barrios.nombre AS barrio,
    usuarios.correo AS correo,
    usuarios.celular AS celular,
    usuarios.telefono  AS telefono,
    usuarios.lesion_efermedad_deportiva AS lesion,
    usuarios.medicamentos AS medicamentos,
    usuarios.sisben AS sisben,
    usuarios.eps AS eps,
    proyectos.nombre AS proyecto,
    usuarios.modalidad AS modalidad,
    usuarios.barrio_proyecto AS barrio_proyecto,
    usuarios.acudiente AS acudiente,
    usuarios.cel_acudiente AS cel_acudiente,
    usuarios.correo_acudiente AS correo_acudiente,
    barrios.idbarrios AS idbarrio,
    proyectos.idproyecto AS idproyecto
    FROM usuarios INNER JOIN barrios ON usuarios.idbarrio = barrios.idbarrios 
                  INNER JOIN proyectos ON usuarios.idproyecto = proyectos.idproyecto 
                  WHERE usuarios.identificacion = '$id'");

    $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar Estudiante
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=usuarios"> Estudiantes </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/usuarios/proses.php?act=update" method="POST">
            <div class="box-body">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Identificación</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="identificacion" value="<?php echo $data['identificacion']; ?>" readonly required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nombres</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="nombre"  value="<?php echo $data['nombre']; ?>" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Apellidos</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="apellido" value="<?php echo $data['apellido']; ?>" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">F.Nacimiento</label>
                  <div class="col-sm-7">
                    <input type="date" class="form-control" id='calendario_edit' name="nacimiento" value="<?php echo $data['nacimiento']; ?>" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Edad</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="edad" id="edad_edit" value="<?php echo $data['edad']; ?>" autocomplete="off"  readonly required>
                    <span id="edadCalculada"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Género</label>
                  <div class="col-sm-7">
                    <select class="chosen-select" name="genero"  data-placeholder="-- Seleccionar --" autocomplete="off" required>
                      <option value="<?php echo $data['genero']; ?>"><?php echo $data['genero']; ?></option>
                      <option value="M">M</option>
                      <option value="F">F</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Caracterización</label>
                  <div class="col-sm-7">
                    <select class="chosen-select" name="caracterizacion"  data-placeholder="-- Seleccionar --" autocomplete="off" required>
                      <option value="<?php echo $data['caracterizacion']; ?>"><?php echo $data['caracterizacion']; ?></option>
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
                      <option value="<?php echo $data['tipo_sangre']; ?>"><?php echo $data['tipo_sangre']; ?></option>
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
                      <option value="<?php echo $data['idbarrio']; ?>"><?php echo $data['barrio']; ?></option>
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
                  <label class="col-sm-5 control-label">Correo</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" value="<?php echo $data['correo'];?>" name="correo" autocomplete="off" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Celular</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="celular" value="<?php echo $data['celular']; ?>" autocomplete="off"  maxlength="10">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">fijo</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control"  value="<?php echo $data['telefono']; ?>"  name="telefono" autocomplete="off"  maxlength="7">
                  </div>
                </div>

                <div >
                  <div class="form-group">
                      <label class="col-sm-5 control-label">Enfermedad/lesion</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" value="<?php echo $data['lesion']; ?>" name="lesion_efermedad_deportiva" autocomplete="off"  >
                      </div>
                  </div>
                </div>

                <div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label">Medicamentos</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" value="<?php echo $data['medicamentos']; ?>"  name="medicamentos" autocomplete="off"  >
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-5 control-label">¿ Sisben ?</label>
                    <?php
                       if($data['sisben']=='Si'){?>
                          <label class="col-sm-1 control-label">Si</label>
                          <input type="radio" class="col-sm-1" checked value="Si"  name="sisben">
                          <label class="col-sm-1 control-label">No</label>
                          <input type="radio" class="col-sm-1" value="No"   name="sisben">
                   <?php 
                        }else {?> 
                          <label class="col-sm-1 control-label">Si</label>
                          <input type="radio" class="col-sm-1"  value="Si"  name="sisben">
                          <label class="col-sm-1 control-label">No</label>
                          <input type="radio" class="col-sm-1" value="No"  checked name="sisben">                      
                        <?php
                        } ?>

                </div>

                <div class="form-group" >
                    <label class="col-sm-5 control-label">EPS</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" value="<?php echo $data['eps']; ?>"  name="eps" autocomplete="off" required>
                    </div>
                </div>
             </div> <!-- div col 4-->

             <div class="col-md-4">
              <div class="form-group">
                  <label class="col-sm-5 control-label">Proyecto</label>
                  <div class="col-sm-7">
                    <select class="chosen-select" name="proyecto" id="proyecto_edit" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                      <option value="<?php echo $data['idproyecto']?>"><?php echo $data['proyecto']?></option>
                      <?php  
                        $quer = mysqli_query($mysqli,"SELECT * FROM proyectos");
                        while($dat = mysqli_fetch_assoc($quer)){
                      ?>
                      <option value="<?php echo $dat['idproyecto']?>"><?php echo $dat['nombre']?></option>
                        <?php } ?>
                    </select>
                  </div>
              </div>
              <div id="modalidad_edit">
                <div class="form-group" >
                  <label class="col-sm-5   control-label">Modalidad</label>
                  <div class="col-sm-7">
                    <select class="chosen-select" name="modalidad"  data-placeholder="-- Seleccionar --" autocomplete="off" >
                      <option value="<?php echo $data['modalidad']?>"><?php echo $data['modalidad']?></option>
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
              </div>
                
              <div class="form-group">
                <label class="col-sm-5 control-label">Barrio Proyecto</label>
                <div class="col-sm-7">
                  <select class="chosen-select" name="barrio_proyecto" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                    <option value="<?php echo $data['barrio_proyecto']?>"><?php echo $data['barrio_proyecto']?></option>
                    <?php  
                      $querys = mysqli_query($mysqli,"SELECT * FROM barrios");
                      while($datas = mysqli_fetch_assoc($querys)){
                    ?>
                    <option value="<?php echo $datas['nombre']?>"><?php echo $datas['nombre']?></option>
                      <?php } ?>
                  </select>
                </div>
              </div>
              <?php
                if($data['edad'] < 18){?>
                  <div id="edit_acudiente">
                      <div class="form-group">
                        <label class="col-sm-5 control-label">Acudiente</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" value = "<?php echo $data['acudiente']?>" name="acudiente" autocomplete="off" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-5 control-label">Celular Acu.</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" value = "<?php echo $data['cel_acudiente']?>" name="cel_acudiente" autocomplete="off" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-5 control-label">Correo Acudiente</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" value = "<?php echo $data['correo_acudiente']?>" name="correo_acudiente" autocomplete="off"  >
                        </div>
                      </div>
                  </div>
              <?php }else {?>
                <div id="edit_acudiente">
                      <div class="form-group">
                        <label class="col-sm-5 control-label">Acudiente</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" value = "<?php echo $data['acudiente']?>" name="acudiente" autocomplete="off" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-5 control-label">Celular Acu.</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" value = "<?php echo $data['cel_acudiente']?>" name="cel_acudiente" autocomplete="off" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-5 control-label">Correo Acudiente</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" value = "<?php echo $data['correo_acudiente']?>" name="correo_acudiente" autocomplete="off"  >
                        </div>
                      </div>
                  </div>

              <?php } ?>
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