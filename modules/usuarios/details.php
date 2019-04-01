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
    localidad.nombre AS localidad,
    proyectos.idproyecto AS idproyecto
    FROM usuarios INNER JOIN barrios ON usuarios.idbarrio = barrios.idbarrios 
                  INNER JOIN proyectos ON usuarios.idproyecto = proyectos.idproyecto 
                  INNER JOIN localidad ON barrios.idlocalidad = localidad.idlocalidad
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
          <form role="form" class="form-horizontal">
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
                    <input type="text" class="form-control" name="nombre"  value="<?php echo $data['nombre']; ?>" autocomplete="off" readonly required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Apellidos</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="apellido" value="<?php echo $data['apellido']; ?>" autocomplete="off" readonly required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">F.Nacimiento</label>
                  <div class="col-sm-7">
                    <input type="date" class="form-control" id='calendario_edit' name="nacimiento" value="<?php echo $data['nacimiento']; ?>" readonly autocomplete="off" required>
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
                    <input type="text" class="form-control" value="<?php echo $data['genero']; ?>" autocomplete="off" readonly  required>
                    <span id="edadCalculada"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Caracterización</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" value="<?php echo $data['caracterizacion']; ?>" autocomplete="off" readonly  required>
                    <span id="edadCalculada"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Tipo Sangre</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" value="<?php echo $data['tipo_sangre']; ?>" autocomplete="off" readonly  required>
                    <span id="edadCalculada"></span>
                  </div>
                </div>

             </div> <!-- div col 4-->
        
             <div class="col-md-4">
                <div class="form-group">
                  <label class="col-sm-5 control-label">Barrio</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" value="<?php echo $data['barrio']; ?>" autocomplete="off" readonly  required>
                    <span id="edadCalculada"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Localidad</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" value="<?php echo $data['localidad']; ?>" autocomplete="off" readonly  required>
                    <span id="edadCalculada"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Correo</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control" value="<?php echo $data['correo'];?>" name="correo" readonly autocomplete="off" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">Celular</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="celular" value="<?php echo $data['celular']; ?>" readonly autocomplete="off"  maxlength="10">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-5 control-label">fijo</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control"  value="<?php echo $data['telefono']; ?>"  name="telefono"  readonly autocomplete="off"  maxlength="7">
                  </div>
                </div>

                <div >
                  <div class="form-group">
                      <label class="col-sm-5 control-label">Enfermedad/lesion</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" value="<?php echo $data['lesion']; ?>" readonly  name="lesion_efermedad_deportiva" autocomplete="off"  >
                      </div>
                  </div>
                </div>

                <div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label">Medicamentos</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" value="<?php echo $data['medicamentos']; ?>" readonly name="medicamentos" autocomplete="off"  >
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-5 control-label">¿ Sisben ?</label>
                    <?php
                       if($data['sisben']=='Si'){?>
                          <label class="col-sm-1 control-label">Si</label>
                          <input type="radio" class="col-sm-1" checked value="Si" readonly>
                   <?php 
                        }else {?> 
                          <label class="col-sm-1 control-label">No</label>
                          <input type="radio" class="col-sm-1" value="No"  checked readonly>                      
                        <?php
                        } ?>

                </div>
             </div> <!-- div col 4-->
                        
             <div class="col-md-4">

               <div class="form-group" >
                    <label class="col-sm-5 control-label">EPS</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" value="<?php echo $data['eps']; ?>" readonly name="eps" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group" >
                    <label class="col-sm-5 control-label">Proyecto</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="proyecto_detail" value="<?php echo $data['proyecto']; ?>" readonly name="eps" autocomplete="off" required>
                    </div>
                </div>

              <div id="modalidad_detail">
                <div class="form-group" >
                    <label class="col-sm-5 control-label">Modalidad</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" value="<?php echo $data['modalidad']; ?>" readonly name="eps" autocomplete="off" required>
                    </div>
                </div>
              </div>
                
               <div class="form-group" >
                    <label class="col-sm-5 control-label">Barrio_Proyecto</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" value="<?php echo $data['barrio_proyecto']; ?>" readonly name="eps" autocomplete="off" required>
                    </div>
                </div>
              <?php
                  if($data['edad'] < 18){?>
                  <div id="edit_acudiente">
                      <div class="form-group">
                        <label class="col-sm-5 control-label">Acudiente</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" value = "<?php echo $data['acudiente']?>" readonly name="acudiente" autocomplete="off" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-5 control-label">Celular Acu.</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" value = "<?php echo $data['cel_acudiente']?>" readonly name="cel_acudiente" autocomplete="off" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-5 control-label">Correo Acudiente</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" value = "<?php echo $data['correo_acudiente']?>" readonly name="correo_acudiente" autocomplete="off"  >
                        </div>
                      </div>
                  </div>
              <?php } ?>
            </div> <!-- div col 4-->

          </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-10  col-sm-10">
                  <a href="?module=usuarios"  class="btn btn-lg btn-primary ">Atras</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->