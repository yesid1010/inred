
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- FontAwesome 4.3.0 -->
    <link href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />  

   
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="assets/css/sweetalert.css" type="text/css"/>


    <script src="assets/js/sweetalert.min.js" type="text/javascript"></script>
    <script src="assets/js/vue.js" type="text/javascript"></script>

    <title>INRED Registro!</title>
  </head>
  <body>
        <!-- Image and text -->
        <nav class="navbar navbar-expand-lg fixed-top " style="background-color: rgb(1, 93, 202);">
            <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                <a class="navbar-brand " href="http://www.inredsantamarta.gov.co/">
                    <img src="assets/img/logo.svg" width="119px" height="40px" class="d-inline-block align-top" alt="" loading="lazy">
                </a>
            </div>
        </nav>

        <!-- ALERTAS  -->
        <?php 
            require_once "config/database.php";

            if (empty($_GET['alert'])) {
                
            }
            elseif($_GET['alert'] == 1){?>

            <script>
                nuevo_registroCliente()
            </script>

            <?php  

            }elseif($_GET['alert'] == 2){?>

            <script>
                buscar2()
            </script>

            <?php  
            }
        ?>
        <!-- FIN ALERTAS  -->
            <br> <br> <br>
        <div class=" card text-center container  mt-3" style="width:70%">
            <div class="card-header">
                <h2 class="text-center">Registrate</h2>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos personales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Datos Salud</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="proyecto-tab" data-toggle="tab" href="#proyecto" role="tab" aria-controls="proyecto" aria-selected="false">Proyecto</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane mt-5 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           
                        <form action="modules/usuarios/registro.php" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label >Identificaciòn</label>
                                    <input type="number" name="identificacion" class="form-control" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id='calendario' name="nacimiento" autocomplete="off" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Gènero</label>
                                    <select class="chosen-select form-control   " name="genero" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                                        <option value=""></option>
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label >Nombres</label>
                                    <input type="text" name="nombre"  class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label >Apellidos</label>
                                    <input type="text" name="apellido"  class="form-control" required >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label >Correo</label>
                                    <input type="email" name="correo"  class="form-control" placeholder="@">
                                </div>
                                <div class="form-group col-md-4">
                                    <label >Celular</label>
                                    <input type="number" name="celular"  class="form-control" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label >Fijo</label>
                                    <input type="number" name="telefono"  class="form-control"  >
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label >Bario</label>
                                    <select class="chosen-select form-control" name="barrio" data-placeholder="Barrio" autocomplete="off" required>
                                        <option value=""></option>
                                        <?php  
                                        $query = mysqli_query($mysqli,"SELECT * FROM barrios");
                                        while($data = mysqli_fetch_assoc($query)){
                                        ?>
                                        <option value="<?php echo $data['idbarrios']?>"><?php echo $data['nombre']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label >Caracterizaciòn</label>
                                    <select class="chosen-select form-control" name="caracterizacion" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                                        <option value=""></option>
                                        <option value="Discapacitado">Discapacitado</option>
                                        <option value="Desplazado">Desplazado</option>
                                        <option value="Indigena">Indígena</option>
                                        <option value="Afrocolombiano">Afrocolombiano</option>
                                        <option value="N.A">N.A</option>        
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label >Edad</label>
                                    <input type="text" class="form-control" name="edad" id="edad" autocomplete="off"  readonly required>
                                        <span id="edadCalculada"></span>
                                </div>
                            </div>

                            <!-- ACUDIENTE -->
                                            
                            <div id ='acudiente'>
                                <hr>
                                <P style="text-align: center;"> <b>DATOS DEL ACUDIENTE</b> </P>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label >Parentezco</label>
                                        <select class="form-control" name="parentezco" data-placeholder="-- Seleccionar --" autocomplete="off">
                                            <option value=""></option>
                                            <option value="Madre">Madre</option>
                                            <option value="Padre">Padre</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label >Identificaciòn</label>
                                        <input type="number" name="cedula_acudiente" class="form-control" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label >Celular</label>
                                        <input type="number" name="cel_acudiente" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label >Nombres</label>
                                        <input type="text" class="form-control" name="acudiente">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label >Correo</label>
                                        <input type="email" name="correo_acudiente" class="form-control">
                                    </div>
                                </div>
                            </div>                      
                    </div> <!-- fin div class="tab-pane" id="home" -->
                    <div class="tab-pane fade mt-5" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                       
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label ><b>Lesión/Enfermedad</b></label>
                                <label class="col-sm-2 ">Si</label>
                                <input type="radio" class="col-sm-1" value="1" name="lesion">
                                <label class="col-sm-2 ">No</label>
                                <input type="radio" class="col-sm-1" value="0" checked name="lesion">
                            </div>
                            <div id = "lesion" class="form-group col-md-5">
                                <input type="text" placeholder="¿Cual?" class="form-control" name="lesion_efermedad_deportiva">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label ><b>Usa Medicamentos&nbsp;</b></label>
                                <label class="col-sm-2 ">Si</label>
                                <input type="radio" class="col-sm-1" value="yes" name="medi">
                                <label class="col-sm-2 ">No</label>
                                <input type="radio" class="col-sm-1" value="not" checked name="medi">
                            </div>
                            <div id = "medi" class="form-group col-md-5">
                                <input type="text" placeholder="¿Cual?"  name="medicamentos"  class="form-control" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label ><b>Afiliado al Sisben  &nbsp;&nbsp;</b></label>
                                <label class="col-sm-2 ">Si</label>
                                <input type="radio" class="col-sm-1" value="Si" name="sisben">
                                <label class="col-sm-2 ">No</label>
                                <input type="radio" class="col-sm-1" value="No" checked name="sisben">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label ><b>EPS</b></label>
                                <input type="text" class="form-control"  name="eps" autocomplete="off" required>

                            </div>
                            <div class="form-group col-md-6">
                                <label ><b>Tipo de Sangre</b></label>
                                <select class="chosen-select form-control" name="grupo_sanguineo" data-placeholder="-- Seleccionar --" autocomplete="off" required>
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

                    
                    </div> <!-- fin div class="tab-pane" id="profile" -->

                    <div class="tab-pane fade mt-5" id="proyecto" role="tabpanel" aria-labelledby="proyecto-tab">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label ><b>Proyecto</b></label>
                                <select class="chosen-select form-control" name="proyecto" id="proyecto_add" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                                    <option value=""></option>
                                    <?php  
                                        $query = mysqli_query($mysqli,"SELECT * FROM proyectos");
                                        while($data = mysqli_fetch_assoc($query)){
                                    ?>
                                    <option value="<?php echo $data['idproyecto']?>"><?php echo $data['nombre']?></option>
                                        <?php } ?>
                                </select>

                            </div>
                            <div class="form-group col-md-4" id="modalidad_add" >
                                <label ><b>Deporte</b></label>
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
                                    <option value="Futbol de Salon">Futbol de salón</option>
                                    <option value="Levantamiento de Peso">Levantamiento de Peso</option>
                                    <option value="Bmx">Bmx</option>
                                    <option value="Escuelas Nauticas">Escuelas Nauticas</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label ><b>Bario Proyecto</b></label>
                                <select class="chosen-select form-control" name="barrio_proyecto" data-placeholder="-- Seleccionar --" autocomplete="off" required>
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
                        <div class="modal-footer">
                                <a href="http://www.inredsantamarta.gov.co/"class="btn btn-danger" > <i class="fa fa-times"></i> Cancelar</a>
                                <button type="submit" name="Guardar" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button> 
                        </div>
                        </form>
                    </div> <!-- fin div class="tab-pane" id="proyecto" -->

                <div> <!-- fin div class="tab-content" id="myTabContent" -->
            </div>
          
        </div>
        

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>