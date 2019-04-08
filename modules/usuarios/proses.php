
<?php
session_start();


require_once "../../config/database.php";

/*if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {*/
    if ($_GET['act']=='insert') {
        if (isset($_POST['Guardar'])) {
            
            // campos no obligatorios
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
           
            if(!$_POST['telefono']==''){
                $telefono = mysqli_real_escape_string($mysqli, trim($_POST['telefono']));
            }
            if(!$_POST['celular']==''){
                $celular = mysqli_real_escape_string($mysqli, trim($_POST['celular']));
            }
            if(!$_POST['acudiente']==''){
                $acudiente  = mysqli_real_escape_string($mysqli, trim($_POST['acudiente']));
            }
            if(!$_POST['cedula_acudiente']==''){
                $cedula_acudiente  = mysqli_real_escape_string($mysqli, trim($_POST['cedula_acudiente']));
            }
            if(!$_POST['parentezco']==''){
                $parentezco  = mysqli_real_escape_string($mysqli, trim($_POST['parentezco']));
            }
            if(!$_POST['cel_acudiente']==''){
                $cel_acudiente  = mysqli_real_escape_string($mysqli, trim($_POST['cel_acudiente']));
            }
            if(!$_POST['correo_acudiente']==''){
                $correo_acudiente = mysqli_real_escape_string($mysqli, trim($_POST['correo_acudiente']));
            }
            if(!$_POST['modalidad']==''){
                $modalidad = mysqli_real_escape_string($mysqli, trim($_POST['modalidad']));
            }
            if(!$_POST['correo']==''){
                $correo = mysqli_real_escape_string($mysqli, trim($_POST['correo']));
            }
            if(!$_POST['lesion_efermedad_deportiva']==''){
                $lesion_efermedad_deportiva = mysqli_real_escape_string($mysqli, trim($_POST['lesion_efermedad_deportiva']));
            }
            if(!$_POST['medicamentos']==''){
                $medicamentos = mysqli_real_escape_string($mysqli, trim($_POST['medicamentos']));
            }
             

            $identificacion  = mysqli_real_escape_string($mysqli, trim($_POST['identificacion']));
            $nombre  = mysqli_real_escape_string($mysqli, trim($_POST['nombre']));
            $apellido  = mysqli_real_escape_string($mysqli, trim($_POST['apellido']));
            $nacimiento  = mysqli_real_escape_string($mysqli, trim($_POST['nacimiento']));
            $edad  = mysqli_real_escape_string($mysqli, trim($_POST['edad']));
            $genero  = mysqli_real_escape_string($mysqli, trim($_POST['genero']));
            $caracterizacion = mysqli_real_escape_string($mysqli,trim($_POST['caracterizacion']));
            $grupo_sanguineo = mysqli_real_escape_string($mysqli,trim($_POST['grupo_sanguineo']));
            $barrio  = mysqli_real_escape_string($mysqli, trim($_POST['barrio']));
            $correo  = mysqli_real_escape_string($mysqli, trim($_POST['correo']));

            $sisben = mysqli_real_escape_string($mysqli, trim($_POST['sisben']));
            $salud = mysqli_real_escape_string($mysqli, trim($_POST['eps']));
            $proyecto  = mysqli_real_escape_string($mysqli, trim($_POST['proyecto']));
            $barrio_proyecto = mysqli_real_escape_string($mysqli, trim($_POST['barrio_proyecto']));
            
            $empleado = $_SESSION['identificacion'];


           // $localidad = mysqli_query($mysqli,"SELECT localidad.idlocalidad FROM barrios INNER JOIN localidad ON localidad.idlocalidad = barrios.idlocalidad WHERE barrios.idbarrios = '$barrio'");

           // $data = mysqli_fetch_assoc($localidad);

          //  $localidad = $data['idlocalidad'];
            // convertir a mayuscula solo el primer caracter
            $nombre = ucwords(strtolower($nombre));
            $apellido = ucwords(strtolower($apellido));

            $created_user = $_SESSION['identificacion'];

            $sql= mysqli_query($mysqli,"SELECT * FROM usuarios WHERE identificacion='$identificacion'")
                    or die("hubo un error al consultar si el usuario existe".mysql_error($sql));

            $row  = mysqli_num_rows($sql);
             
            if($row > 0){

                header("location: ../../main.php?module=usuarios&alert=5");
                
            }else{
                $query = mysqli_query($mysqli, "INSERT INTO usuarios(identificacion,nombre,apellido,
                                                            grupo_sanguineo,caracterizacion,telefono,
                                                            celular,lesion_efermedad_deportiva,
                                                            medicamentos,sisben,eps,correo,fecha_nacimiento,
                                                            edad,genero,empleados,idproyecto,modalidad,
                                                            barrio_proyecto,idbarrio,acudiente,
                                                            parentezco,cedula_acudiente,cel_acudiente,
                                                            correo_acudiente)
                                                VALUES('$identificacion','$nombre','$apellido',
                                                            '$grupo_sanguineo','$caracterizacion','$telefono',
                                                            '$celular','$lesion_efermedad_deportiva',
                                                            '$medicamentos','$sisben','$salud','$correo','$nacimiento',
                                                            '$edad','$genero','$empleado','$proyecto','$modalidad',
                                                            '$barrio_proyecto','$barrio','$acudiente',
                                                            '$parentezco','$cedula_acudiente','$cel_acudiente',
                                                            '$correo_acudiente')")
                                                or die('error '.mysqli_error($mysqli)); 
                if ($query) {
                    header("location: ../../main.php?module=usuarios&alert=1");
                }
            }

        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['identificacion'])) {
                
                $parentezco = 'No';
                $cedula_acudiente = 'No';
                $acudiente='No';
                $cel_acudiente='No';
                $correo_acudiente = 'No';
                $modalidad = 'No';

                $identificacion  = mysqli_real_escape_string($mysqli, trim($_POST['identificacion']));
                $nombre  = mysqli_real_escape_string($mysqli, trim($_POST['nombre']));
                $apellido  = mysqli_real_escape_string($mysqli, trim($_POST['apellido']));
                $nacimiento  = mysqli_real_escape_string($mysqli, trim($_POST['nacimiento']));
                $edad  = mysqli_real_escape_string($mysqli, trim($_POST['edad']));
                $genero  = mysqli_real_escape_string($mysqli, trim($_POST['genero']));
                $caracterizacion = mysqli_real_escape_string($mysqli,trim($_POST['caracterizacion']));
                $grupo_sanguineo = mysqli_real_escape_string($mysqli,trim($_POST['grupo_sanguineo']));
                $barrio  = mysqli_real_escape_string($mysqli, trim($_POST['barrio']));
                $correo  = mysqli_real_escape_string($mysqli, trim($_POST['correo']));
                $telefono = mysqli_real_escape_string($mysqli, trim($_POST['telefono']));
                $celular = mysqli_real_escape_string($mysqli, trim($_POST['celular']));
                $lesion_efermedad_deportiva = mysqli_real_escape_string($mysqli, trim($_POST['lesion_efermedad_deportiva']));
                $medicamentos = mysqli_real_escape_string($mysqli, trim($_POST['medicamentos']));
                $sisben = mysqli_real_escape_string($mysqli, trim($_POST['sisben']));
                $salud = mysqli_real_escape_string($mysqli, trim($_POST['eps']));
                $proyecto  = mysqli_real_escape_string($mysqli, trim($_POST['proyecto']));
                $barrio_proyecto = mysqli_real_escape_string($mysqli, trim($_POST['barrio_proyecto']));

                if(!$_POST['acudiente']==''){
                    $acudiente  = mysqli_real_escape_string($mysqli, trim($_POST['acudiente']));
                }

                if(!$_POST['modalidad']==''){
                    $modalidad = mysqli_real_escape_string($mysqli, trim($_POST['modalidad']));
                }

             
                if(!$_POST['parentezco']==''){
                    $parentezco  = mysqli_real_escape_string($mysqli, trim($_POST['parentezco']));
                }
                if(!$_POST['cedula_acudiente']==''){
                    $cedula_acudiente  = mysqli_real_escape_string($mysqli, trim($_POST['cedula_acudiente']));
                }
                if(!$_POST['cel_acudiente']==''){
                    $cel_acudiente  = mysqli_real_escape_string($mysqli, trim($_POST['cel_acudiente']));
                }
                if(!$_POST['correo_acudiente']==''){
                    $correo_acudiente = mysqli_real_escape_string($mysqli, trim($_POST['correo_acudiente']));
                }

               /* $acudiente  = mysqli_real_escape_string($mysqli, trim($_POST['acudiente']));
                $cel_acudiente  = mysqli_real_escape_string($mysqli, trim($_POST['cel_acudiente']));
                $correo_acudiente = mysqli_real_escape_string($mysqli, trim($_POST['correo_acudiente']));
                */
                $empleado = $_SESSION['identificacion'];
    
                //BUSCAR LA  LOCALIDAD A LA QUE PERTENECE EL BARRIO DONDE VIVE EL USUARIO
               // $localidad = mysqli_query($mysqli,"SELECT localidad.idlocalidad FROM barrios INNER JOIN localidad ON localidad.idlocalidad = barrios.idlocalidad WHERE barrios.idbarrios = '$barrio'");
                
               // $data = mysqli_fetch_assoc($localidad);
    
              //  $localidad = $data['idlocalidad'];
                
                // NO CAMBIAR LA FECHA DE REGISTRO
                $fecha_registro = mysqli_query($mysqli,"SELECT * FROM usuarios WHERE identificacion = '$identificacion'");
                $data = mysqli_fetch_assoc($fecha_registro);
                $fecha_registro = $data['fecha_registro'];
              

                
                //  INGRESAR ESTOS CAMPOS SIEMPRE CON LA PRIMERA LETRA EN MAYÚSCULA
                $nombre = ucwords(strtolower($nombre));
                $apellido = ucwords(strtolower($apellido));

                $query = mysqli_query($mysqli, "UPDATE usuarios SET nombre              = '$nombre',
                                                                    apellido            = '$apellido',
                                                                    fecha_nacimiento    = '$nacimiento',
                                                                    edad                = '$edad',
                                                                    genero              = '$genero',
                                                                    caracterizacion     = '$caracterizacion',
                                                                    grupo_sanguineo     = '$grupo_sanguineo',
                                                                    idbarrio            = '$barrio',
                                                                    correo              = '$correo',
                                                                    celular             = '$celular',
                                                                    telefono            = '$telefono',
                                                           lesion_efermedad_deportiva   = '$lesion_efermedad_deportiva',
                                                                    medicamentos        = '$medicamentos',
                                                                    sisben              = '$sisben',
                                                                    eps                 = '$salud',
                                                                    idproyecto          = '$proyecto',
                                                                    modalidad           = '$modalidad',
                                                                    barrio_proyecto     = '$barrio_proyecto',
                                                                    acudiente           =  '$acudiente',
                                                                    parentezco          =  '$parentezco',
                                                                    cedula_acudiente    =  '$cel_acudiente',
                                                                    cel_acudiente       =  '$cel_acudiente',
                                                                    correo_acudiente     = '$correo_acudiente',
                                                                    fecha_registro      =  '$fecha_registro',
                                                                    empleados           = '$empleado'
                                                                    
                                                              WHERE identificacion  = '$identificacion'")
                                                or die('error: '.mysqli_error($mysqli));

    
                if ($query) {
                  
                    header("location: ../../main.php?module=usuarios&alert=2");
                }   
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $identificacion = $_GET['id'];
      
            $query = mysqli_query($mysqli, "DELETE FROM usuarios WHERE identificacion='$identificacion'")
                                            or die('error '.mysqli_error($mysqli));


            if ($query) {
     
                header("location: ../../main.php?module=usuarios&alert=3");
            }
        }
    }     
//}       
?>