<?php
    require_once "../../config/database.php";
    if (isset($_POST['Guardar'])) {

        // campos no obligatorios
        
        $salud = 'No';
        $barrio_proyecto = 'No';
        $telefono = 'No';
        $celular = 'No';
        $parentezco = 'No';
        $cedula_acudiente = 'No';
        $acudiente='No';
        $cel_acudiente='No';
        $correo_acudiente = 'No';
        $modalidad = 'No';
        $correo='No';
        $lesion_efermedad_deportiva='No';
        $medicamentos = 'No';
        $grupo_sanguineo = 'No';
        $caracterizacion = 'No';
        $foto = 'No';
        $talla = 'No';
        $copia_identidad_menor = 'No';
        $sisben = 'No';
        $eps = 'No';
        $correo = 'No';
        $fecha_nacimiento = 'No';
        $edad = 'No';
        $genero = 'No';
        $direccion_domicilio = 'No';
        $barrio_domicilio = 'No';
        $grado_escolaridad = 'No';
        $institucion_educativa = 'No';
        $poblacion_menor = 'No';
        $discapacidad = 'No';
        $ocupacion = 'No';
        $barrio_ms = 'No';
        $internet = 'No';
        $cedula_adjunto_acudiente = 'No';
        $cuadro_informativo_acudiente = 'No';

        $proyecto  = mysqli_real_escape_string($mysqli, trim($_POST['proyecto']));

        if($proyecto == 3){// si es mueve samario
          $identificacion  = mysqli_real_escape_string($mysqli, trim($_POST['identificacion_ms']));
            if($_FILES["file"]["name"] != '') {
                $newFilename = time() . "_" . $_FILES["file"]["name"];
                $foto = 'images/'.$identificacion.'/'. $newFilename;  
                $path = "images/$identificacion";
                
                if (!file_exists($path)) {
                    mkdir($path, 0777, true); 
                }
                move_uploaded_file($_FILES["file"]["tmp_name"], $foto);
                

                $barrio_ms = mysqli_real_escape_string($mysqli, trim($_POST['barrio_ms_ms']));
                
                $nombre  = mysqli_real_escape_string($mysqli, trim($_POST['nombre_ms']));
                $apellido  = mysqli_real_escape_string($mysqli, trim($_POST['apellido_ms']));
                $nacimiento  = mysqli_real_escape_string($mysqli, trim($_POST['nacimiento_ms']));
                $edad  = mysqli_real_escape_string($mysqli, trim($_POST['edad_ms']));
                $genero  = mysqli_real_escape_string($mysqli, trim($_POST['genero_ms']));
                $caracterizacion = mysqli_real_escape_string($mysqli,trim($_POST['caracterizacion_ms']));
                $barrio  = mysqli_real_escape_string($mysqli, trim($_POST['barrio_ms']));
                $correo  = mysqli_real_escape_string($mysqli, trim($_POST['correo_ms']));
                $celular = mysqli_real_escape_string($mysqli, trim($_POST['celular_ms']));
                $direccion_domicilio = mysqli_real_escape_string($mysqli, trim($_POST['direccion_domicilio_ms']));
                $ocupacion = mysqli_real_escape_string($mysqli, trim($_POST['ocupacion_ms']));
                $talla = mysqli_real_escape_string($mysqli, trim($_POST['talla_ms']));
                
                if(!$_POST['lesion_efermedad_deportiva']==''){
                    $lesion_efermedad_deportiva = mysqli_real_escape_string($mysqli, trim($_POST['lesion_efermedad_deportiva']));
                }

                $empleado = 123456789;
                // convertir a mayuscula solo el primer caracter
                $nombre = ucwords(strtolower($nombre));
                $apellido = ucwords(strtolower($apellido));

                $sql= mysqli_query($mysqli,"SELECT * FROM usuarios WHERE identificacion='$identificacion'")
                or die("hubo un error al consultar si el usuario existe".mysql_error($sql));

                $row  = mysqli_num_rows($sql);
                
                if($row > 0){

                // header("location: ../../register.php");
                header("location: ../../register.php?alert=2");
                    
                }else{
                    $query = mysqli_query($mysqli, "INSERT INTO usuarios(identificacion,nombre,apellido,
                                                                grupo_sanguineo,caracterizacion,telefono,
                                                                celular,foto,talla,copia_identidad_menor,
                                                                lesion_efermedad_deportiva,medicamentos,sisben,
                                                                eps,correo,fecha_nacimiento,edad,genero,
                                                                direccion_domicilio,grado_escolaridad,
                                                                institucion_educativa,poblacion_menor,discapacidad,
                                                                ocupacion,barrio_ms,internet,
                                                                empleados,idproyecto,modalidad,
                                                                barrio_proyecto,idbarrio,acudiente,
                                                                parentezco,cedula_acudiente,cel_acudiente,
                                                                correo_acudiente,cedula_adjunto_acudiente,cuadro_informativo_acudiente)
                                                    VALUES('$identificacion','$nombre','$apellido',
                                                                '$grupo_sanguineo','$caracterizacion','$telefono',
                                                                '$celular','$foto','$talla','$copia_identidad_menor','$lesion_efermedad_deportiva',
                                                                '$medicamentos','$sisben','$salud','$correo','$nacimiento',
                                                                '$edad','$genero','$direccion_domicilio','$grado_escolaridad','$institucion_educativa',
                                                                '$poblacion_menor','$discapacidad','$ocupacion','$barrio_ms','$internet',
                                                                '$empleado','$proyecto','$modalidad',
                                                                '$barrio_proyecto','$barrio','$acudiente',
                                                                '$parentezco','$cedula_acudiente','$cel_acudiente',
                                                                '$correo_acudiente','$cedula_adjunto_acudiente','$cuadro_informativo_acudiente')")
                                                    or die('error '.mysqli_error($mysqli)); 
                    if ($query) {
                        //header("location: ../../main.php?module=usuarios&alert=1");
                        header("location: ../../register.php?alert=1");
                    }
                    
                    
                }

                        
            }else {
                echo 'no hay foto adjunta';
                return ;
            }
        }else{
            if($proyecto == 2){ // si es escuelas populares del deporte
                $identificacion  = mysqli_real_escape_string($mysqli, trim($_POST['identificacion_pd']));
                if($_FILES["cedulapdf_pd"]["name"] != '' && $_FILES["file_pd"]["name"] != '' && $_FILES["documento_menor_pdf_pd"]["name"] != '') {
                     $newFilenameCedula = time() . "_" . $_FILES["cedulapdf_pd"]["name"];
                     $newFilenameFoto = time() . "_" . $_FILES["file_pd"]["name"];
                     $newFilenameTI = time() . "_" . $_FILES["documento_menor_pdf_pd"]["name"];

                     $cedula_adjunto_acudiente = 'documentos/'.$identificacion.'/'.$newFilenameCedula;
                     $foto = 'images/'.$identificacion.'/'. $newFilenameFoto;  
                     $copia_identidad_menor = 'documentos/'.$identificacion.'/'.$newFilenameTI;
                    
                     $pathDocuments = "documentos/$identificacion";
                     $pathUpload = "images/$identificacion";
                     
                     if(!file_exists($pathDocuments)){
                        mkdir($pathDocuments, 0777, true); 
                     }
                     move_uploaded_file($_FILES["cedulapdf_pd"]["tmp_name"], $cedula_adjunto_acudiente);
                     move_uploaded_file($_FILES["documento_menor_pdf_pd"]["tmp_name"], $copia_identidad_menor);

                     if(!file_exists($pathUpload)){
                        mkdir($pathUpload, 0777, true); 
                     }
                     move_uploaded_file($_FILES["file_pd"]["tmp_name"], $foto);

                     $modalidad = mysqli_real_escape_string($mysqli, trim($_POST['modalidad']));
                     $cedula_acudiente = mysqli_real_escape_string($mysqli, trim($_POST['cedula_acudiente_pd']));
                     $acudiente = mysqli_real_escape_string($mysqli, trim($_POST['acudiente_pd']));
                     $cel_acudiente = mysqli_real_escape_string($mysqli, trim($_POST['cel_acudiente_pd']));
                     $cuadro_informativo_acudiente = 'Acepto terminos y condiciones';

                     //$identificacion  = mysqli_real_escape_string($mysqli, trim($_POST['identificacion_pd']));
                     $nombre  = mysqli_real_escape_string($mysqli, trim($_POST['nombre_pd']));
                     $apellido  = mysqli_real_escape_string($mysqli, trim($_POST['apellido_pd']));
                     $talla = mysqli_real_escape_string($mysqli, trim($_POST['talla_pd']));
                     $genero  = mysqli_real_escape_string($mysqli, trim($_POST['genero_pd']));
                     $nacimiento  = mysqli_real_escape_string($mysqli, trim($_POST['nacimiento_pd']));
                     $edad  = mysqli_real_escape_string($mysqli, trim($_POST['edad_pd']));
                     $direccion_domicilio = mysqli_real_escape_string($mysqli, trim($_POST['direccion_pd']));
                     $barrio  = mysqli_real_escape_string($mysqli, trim($_POST['barrio_pd']));
                     $grado_escolaridad = mysqli_real_escape_string($mysqli, trim($_POST['grado_escolaridad_pd']));
                     $institucion_educativa = mysqli_real_escape_string($mysqli, trim($_POST['institucion_educativa_pd']));
                     $poblacion_menor = mysqli_real_escape_string($mysqli, trim($_POST['poblacion_menor_pd']));
                     $internet = mysqli_real_escape_string($mysqli, trim($_POST['internet_pd']));

                     if(!$_POST['lesion_efermedad_deportiva']==''){
                        $lesion_efermedad_deportiva = mysqli_real_escape_string($mysqli, trim($_POST['lesion_efermedad_deportiva']));
                     }  
                    if(!$_POST['medicamentos']==''){
                        $medicamentos = mysqli_real_escape_string($mysqli, trim($_POST['medicamentos']));
                    }

                     if(!$_POST['sisben']==''){
                        $sisben = mysqli_real_escape_string($mysqli, trim($_POST['sisben']));
                     } 
                     if(!$_POST['eps']==''){
                        $salud = mysqli_real_escape_string($mysqli, trim($_POST['eps']));
                     } 
                     if(!$_POST['discapacidad']==''){
                        $discapacidad = mysqli_real_escape_string($mysqli, trim($_POST['discapacidad']));
                     } 
                     $empleado = 123456789;
                    // convertir a mayuscula solo el primer caracter
                    $nombre = ucwords(strtolower($nombre));
                    $apellido = ucwords(strtolower($apellido));

                    $sql= mysqli_query($mysqli,"SELECT * FROM usuarios WHERE identificacion='$identificacion'")
                    or die("hubo un error al consultar si el usuario existe".mysql_error($sql));

                    $row  = mysqli_num_rows($sql);
                    
                    if($row > 0){

                    // header("location: ../../register.php");
                    header("location: ../../register.php?alert=2");
                        
                    }else{
                        $query = mysqli_query($mysqli, "INSERT INTO usuarios(identificacion,nombre,apellido,
                                                                    grupo_sanguineo,caracterizacion,telefono,
                                                                    celular,foto,talla,copia_identidad_menor,
                                                                    lesion_efermedad_deportiva,medicamentos,sisben,
                                                                    eps,correo,fecha_nacimiento,edad,genero,
                                                                    direccion_domicilio,grado_escolaridad,
                                                                    institucion_educativa,poblacion_menor,discapacidad,
                                                                    ocupacion,barrio_ms,internet,
                                                                    empleados,idproyecto,modalidad,
                                                                    barrio_proyecto,idbarrio,acudiente,
                                                                    parentezco,cedula_acudiente,cel_acudiente,
                                                                    correo_acudiente,cedula_adjunto_acudiente,cuadro_informativo_acudiente)
                                                        VALUES('$identificacion','$nombre','$apellido',
                                                                    '$grupo_sanguineo','$caracterizacion','$telefono',
                                                                    '$celular','$foto','$talla','$copia_identidad_menor','$lesion_efermedad_deportiva',
                                                                    '$medicamentos','$sisben','$salud','$correo','$nacimiento',
                                                                    '$edad','$genero','$direccion_domicilio','$grado_escolaridad','$institucion_educativa',
                                                                    '$poblacion_menor','$discapacidad','$ocupacion','$barrio_ms','$internet',
                                                                    '$empleado','$proyecto','$modalidad',
                                                                    '$barrio_proyecto','$barrio','$acudiente',
                                                                    '$parentezco','$cedula_acudiente','$cel_acudiente',
                                                                    '$correo_acudiente','$cedula_adjunto_acudiente','$cuadro_informativo_acudiente')")
                                                        or die('error '.mysqli_error($mysqli)); 
                        if ($query) {
                            //header("location: ../../main.php?module=usuarios&alert=1");
                            header("location: ../../register.php?alert=1");
                        }
                    }


                }
            }else {
                echo $proyecto;
                return ;
            }
        }
       
    }
?>