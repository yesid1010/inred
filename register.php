
<!doctype html>
<html lang="en">
  <head>
    <!--  meta tags -->
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
                        <a class="nav-link active " id="proyecto-tab" data-toggle="tab" href="#proyecto" role="tab" aria-controls="proyecto" aria-selected="false">Proyecto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos personales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Datos Salud</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane mt-5 fade show active" id="proyecto" role="tabpanel" aria-labelledby="proyecto-tab">
                           
                        <form action="modules/usuarios/registro.php" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label><b>Proyecto</b></label>
                                        <select class="chosen-select form-control" name="proyecto" id="proyecto_add" data-placeholder="-- Seleccionar --" autocomplete="off" >
                                            
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
                                        
                                        <option value="Atletismo">Atletismo</option>
                                        <option value="Baloncesto">Baloncesto</option>
                                        <option value="Beisbol">Béisbol</option>
                                        <option value="Boxeo">Boxeo</option>
                                        <option value="Futbol">Futbol</option>
                                        <option value="Karate">Karate</option>
                                        <option value="Lucha Olimpica">Lucha Olimpica</option>
                                        <option value="Patinaje">Patinaje</option>
                                        <option value="Softbol">Softbol</option>
                                        <option value="Tekondp">Tekondo</option>
                                        <option value="Voleibol">Voleibol</option>
                                    </select>
                                </div>
                                <!-- barrios deporte muevete samario -->
                                <div class="form-group col-md-4" id="barrio_ms" >
                                    <label ><b>Barrio</b></label>
                                    <select class="form-control" name="barrio_ms_ms"  data-placeholder="-- Seleccionar --" autocomplete="off" >
                
                                        <option value="20 DE JULIO">20 DE JULIO</option>
                                        <option value="ALMENDRO PM">ALMENDRO PM</option>
                                        <option value="ALMENDRO AM">ALMENDRO AM</option>
                                        <option value="ANDREA CAROLINA">ANDREA CAROLINA</option>
                                        <option value="BASTIDAS">BASTIDAS</option>
                                        <option value="BONDA">BONDA</option>
                                        <option value="BOSQUE">BOSQUE</option>
                                        <option value="BULEVAR DE LA ROSA">BULEVAR DE LA ROSA</option>
                                        <option value="CANTILITO">CANTILITO</option>
                                        <option value="CISNE">CISNE</option>
                                        <option value="CIUDAD EQUIDAD AM">CIUDAD EQUIDAD AM</option>
                                        <option value="CRISTO REY">CRISTO REY</option>
                                        <option value="CURINCA">CURINCA</option>
                                        <option value="EL MAYOR">EL MAYOR</option>
                                        <option value="EL PARQUE">EL PARQUE</option>

                                        <option value="GAIRA">GAIRA</option>
                                        <option value="HONDAS DEL CARIBE">HONDAS DEL CARIBE</option>
                                        <option value="LA BOLIVARIANA">LA BOLIVARIANA</option>
                                        <option value="LA PAZ">LA PAZ</option>
                                        <option value="LIBANO">LIBANO</option>
                                        <option value="MANZANARE">MANZANARE</option>
                                        <option value="MARIA EUGENIA">MARIA EUGENIA</option>
                                        <option value="NACHO VIVE">NACHO VIVE</option>
                                        <option value="PANDO">PANDO</option>
                                        <option value="PARQUE DEL AGUA">PARQUE DEL AGUA</option>
                                        <option value="PARQUES DE BOLIVAR">PARQUES DE BOLIVAR</option>
                                        <option value="PESCAITO">PESCAITO</option>
                                        <option value="RODADERO">RODADERO</option>
                                        <option value="SAN MIGUEL">SAN MIGUEL</option>
                                        <option value="SAN PEDRO">SAN PEDRO</option>

                                        <option value="SANTA ANA">SANTA ANA</option>
                                        <option value="SANTA CLARA">SANTA CLARA</option>
                                        <option value="SANTA CRUZ">SANTA CRUZ</option>
                                        <option value="TAGANGA">TAGANGA</option>
                                        <option value="TAMINAKA">TAMINAKA</option>
                                        <option value="TEJARES">TEJARES</option>
                                        <option value="TRUPILLO">TRUPILLO</option>
                                        <option value="VILLA BOLIOVARIANA AM">VILLA BOLIOVARIANA AM</option>
                                        <option value="VILLA BOLIOVARIANA PM">VILLA BOLIOVARIANA PM</option>
                                        <option value="VILLA MARBELLA">VILLA MARBELLA</option>

                                    </select>
                                </div>
                            </div>
                    </div> <!-- tap-proyectos -->
                    <div class="tab-pane mt-5 fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <?php
                        include('samario.php');
                        include('escuelas_pd.php');
                        ?>
                    </div> <!-- tap-home -->
                    <div class="tab-pane mt-5 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    
                    <div class="form-row" id="lesion_enfermedad">
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
                            <div class="form-row" id="medicamentos">
                                <div class="form-group col-md-7" >
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
                            <div class="form-row" id="sisben">
                                <div class="form-group col-md-7">
                                    <label ><b>Afiliado al Sisben  &nbsp;&nbsp;</b></label>
                                    <label class="col-sm-2 ">Si</label>
                                    <input type="radio" class="col-sm-1" value="Si" name="sisben">
                                    <label class="col-sm-2 ">No</label>
                                    <input type="radio" class="col-sm-1" value="No" checked name="sisben">
                                </div>
                            </div>
                            <div class="form-row" id="eps">
                                <div class="form-group col-md-6">
                                    <label ><b>EPS</b></label>
                                    <input type="text" class="form-control"  name="eps" autocomplete="off" >

                                </div>
                                <div class="form-group col-md-6">
                                    <label >Discapacidad</label>
                                    <select class="chosen-select form-control" name="discapacidad" data-placeholder="-- Seleccionar --" autocomplete="off" >
                                        <option value=""></option>
                                        <option value="Discapacidad auditiva">Discapacidad auditiva</option>
                                        <option value="Discapacitada de movilidad">Discapacitada de movilidad</option>
                                        <option value="Discapacidad en el habla">Discapacidad en el habla</option>
                                        <option value="Discapacidad mental">Discapacidad mental</option>
                                        <option value="Discapacidad visual">Discapacidad visual</option>
                                        <option value="N/A">N/A</option>   
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                    <a href="http://www.inredsantamarta.gov.co/" class="btn btn-danger" > <i class="fa fa-times"></i> Cancelar</a>
                                    <button type="submit" name="Guardar" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button> 
                            </div>
                        </form>
                        
                    </div> <!-- tap-profile -->
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