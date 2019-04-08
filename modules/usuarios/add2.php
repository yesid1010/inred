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

  <section class="content">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Datos Personales</a></li>
    <li><a data-toggle="tab" href="#menu1">Datos Adicionales</a></li>
    <li><a data-toggle="tab" href="#menu2">Datos del Proyecto</a></li>
    <li><a data-toggle="tab" href="#menu3">Datos del Acudiente</a></li>
  </ul>


<div class="box box-primary">
  <form role="form" class="form-horizontal" action="modules/usuarios/proses.php?act=insert" method="POST">
        <div class="box-body">
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-sm-4 control-label"><b>Identificación</b></label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="identificacion"  required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label"><b>Nombres</b></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="nombre" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label"><b>Apellidos</b></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="apellido" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label"><b>F.Nacimiento</b></label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" id='calendario' name="nacimiento" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label"><b>Edad</b></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="edad" id="edad" autocomplete="off"  readonly required>
                                <span id="edadCalculada"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label"><b>Género</b></label>
                            <div class="col-sm-7">
                                <select class="chosen-select" name="genero" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                                    <option value=""></option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label"><b>Tipo Sangre</b></label>
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
                    </div>
                </div> <!-- close home-->
                <div id="menu1" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-sm-4 control-label"><b>Caracterización</b></label>
                                <div class="col-sm-8">
                                    <select class="form-control " name="caracterizacion" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                                    <option value=""></option>
                                    <option value="Discapacitado">Discapacitado</option>
                                    <option value="Desplazado">Desplazado</option>
                                    <option value="Indigena">Indígena</option>
                                    <option value="Afrocolombiano">Afrocolombiano</option>
                                    <option value="N.A">N.A</option>        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                    <label class="col-sm-4 control-label"><b>Barrio</b></label>
                    <div class="col-sm-7">
                      <select class="chosen form-control" name="barrio" data-placeholder="Barrio" autocomplete="off" required>
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
                        </div> <!-- close col-md-4-->
                    </div>
                </div>

            </div> <!-- close tab content-->

        <div> <!-- cierre box-body-->
        <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-9 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=usuarios" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
  </form>
</div>
  </section>