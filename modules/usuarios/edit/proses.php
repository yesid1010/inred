<?php
session_start();


require_once "../../../config/database.php";

    if ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['idproyecto'])) {
                
                $idproyecto = mysqli_real_escape_string($mysqli,trim($_POST['idproyecto']));
                
                
                if($idproyecto == 3){ // si es muevete samario
                    $identificacion             = mysqli_real_escape_string($mysqli, trim($_POST['identificacion_ms']));
                    $nombre                     = mysqli_real_escape_string($mysqli, trim($_POST['nombre_ms']));
                    $apellido                   = mysqli_real_escape_string($mysqli, trim($_POST['apellido_ms']));
                    $genero                     = mysqli_real_escape_string($mysqli, trim($_POST['genero_ms']));
                    $talla                      = mysqli_real_escape_string($mysqli, trim($_POST['talla_ms']));
                    $correo                     = mysqli_real_escape_string($mysqli, trim($_POST['correo_ms']));
                    $nacimiento                 = mysqli_real_escape_string($mysqli, trim($_POST['nacimiento_ms']));
                    $edad                       = mysqli_real_escape_string($mysqli, trim($_POST['edad_ms']));
                    $direccion_domicilio        = mysqli_real_escape_string($mysqli, trim($_POST['direccion_domicilio_ms']));
                    $barrio                     = mysqli_real_escape_string($mysqli, trim($_POST['barrio_ms']));
                    $celular                    = mysqli_real_escape_string($mysqli, trim($_POST['celular_ms']));
                    $lesion_efermedad_deportiva = mysqli_real_escape_string($mysqli, trim($_POST['lesion_enfermedad_deportiva_ms']));
                    $ocupacion                  = mysqli_real_escape_string($mysqli, trim($_POST['ocupacion_ms']));
                    $barrio_proyecto            = mysqli_real_escape_string($mysqli, trim($_POST['barrio_proyecto_ms']));
                    $caracterizacion            = mysqli_real_escape_string($mysqli, trim($_POST['caracterizacion_ms']));
                
                    $query = mysqli_query($mysqli, "UPDATE usuarios SET 
                                                    identificacion              = '$identificacion',
                                                    nombre                      = '$nombre',
                                                    apellido                    = '$apellido',
                                                    genero                      = '$genero',
                                                    talla                       = '$talla',
                                                    correo                      = '$correo',
                                                    fecha_nacimiento            = '$nacimiento',
                                                    edad                        = '$edad',
                                                    direccion_domicilio         = '$direccion_domicilio',
                                                    idbarrio                    = '$barrio',
                                                    celular                     = '$celular',
                                                    lesion_efermedad_deportiva  = '$lesion_efermedad_deportiva',
                                                    ocupacion                   = '$ocupacion',
                                                    barrio_ms                   = '$barrio_proyecto',
                                                    caracterizacion             = '$caracterizacion'
                                                    
                                                    WHERE identificacion  = '$identificacion'")
                                or die('error: '.mysqli_error($mysqli));
                                    
                    if ($query) {
                        header("location: ../../../main.php?module=usuarios&alert=2");
                    }
                }else {
                    if($idproyecto == 2){ // si es escuelas populares del deporte

                        $identificacion             = mysqli_real_escape_string($mysqli, trim($_POST['identificacion_pd']));
                        $nombre                     = mysqli_real_escape_string($mysqli, trim($_POST['nombre_pd']));
                        $apellido                   = mysqli_real_escape_string($mysqli, trim($_POST['apellido_pd']));
                        $genero                     = mysqli_real_escape_string($mysqli, trim($_POST['genero_pd']));
                        $talla                      = mysqli_real_escape_string($mysqli, trim($_POST['talla_pd']));
                        $nacimiento                 = mysqli_real_escape_string($mysqli, trim($_POST['nacimiento_pd']));
                        $edad                       = mysqli_real_escape_string($mysqli, trim($_POST['edad_pd']));
                        $poblacion_menor            = mysqli_real_escape_string($mysqli, trim($_POST['poblacion_menor_pd']));
                        $direccion_domicilio        = mysqli_real_escape_string($mysqli, trim($_POST['direccion_domicilio_pd']));
                        $barrio                     = mysqli_real_escape_string($mysqli, trim($_POST['barrio_pd']));
                        $grado_escolaridad          = mysqli_real_escape_string($mysqli, trim($_POST['grado_escolaridad_pd']));
                        $institucion_educativa      = mysqli_real_escape_string($mysqli, trim($_POST['institucion_educativa_pd']));
                        $modalidad                  = mysqli_real_escape_string($mysqli, trim($_POST['modalidad_pd']));
                        $internet                   = mysqli_real_escape_string($mysqli, trim($_POST['internet_pd']));
                        $lesion_efermedad_deportiva = mysqli_real_escape_string($mysqli, trim($_POST['lesion_enfermedad_deportiva_pd']));
                        $sisben                     = mysqli_real_escape_string($mysqli, trim($_POST['sisben_pd']));
                        $eps                        = mysqli_real_escape_string($mysqli, trim($_POST['eps_pd']));
                        $discapacidad               = mysqli_real_escape_string($mysqli, trim($_POST['discapacidad_pd']));
                        $cedula_acudiente           = mysqli_real_escape_string($mysqli, trim($_POST['cedula_acudiente_pd']));
                        $acudiente                  = mysqli_real_escape_string($mysqli, trim($_POST['acudiente_pd']));
                        $cel_acudiente              = mysqli_real_escape_string($mysqli, trim($_POST['cel_acudiente_pd']));
                        
                        $query = mysqli_query($mysqli, "UPDATE usuarios SET 
                                                        identificacion              = '$identificacion',
                                                        nombre                      = '$nombre',
                                                        apellido                    = '$apellido',
                                                        genero                      = '$genero',
                                                        talla                       = '$talla',
                                                        fecha_nacimiento            = '$nacimiento',
                                                        edad                        = '$edad',
                                                        poblacion_menor             = '$poblacion_menor',
                                                        direccion_domicilio         = '$direccion_domicilio',
                                                        idbarrio                    = '$barrio',
                                                        grado_escolaridad           = '$grado_escolaridad',
                                                        institucion_educativa       = '$institucion_educativa',
                                                        modalidad                   = '$modalidad',
                                                        internet                    = '$internet',
                                                        lesion_efermedad_deportiva  = '$lesion_efermedad_deportiva',
                                                        sisben                      = '$sisben',
                                                        eps                         = '$eps',
                                                        discapacidad                = '$discapacidad',
                                                        cedula_acudiente            = '$cedula_acudiente',
                                                        acudiente                   = '$acudiente',
                                                        cel_acudiente               = '$cel_acudiente'
                                                        
                                                        WHERE identificacion  = '$identificacion'")
                                    or die('error: '.mysqli_error($mysqli));
                                        
                        if ($query) {
                            header("location: ../../../main.php?module=usuarios&alert=2");
                        }
                    
                    }else{ // si es alguno de los otros proyectos
                        
                    }
                }
                
            }
        }
    }

?>