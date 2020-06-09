<?php
    require_once "../../config/database.php";
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
        
        //$empleado = $_SESSION['identificacion'];
        $empleado = 123456789;
        // convertir a mayuscula solo el primer caracter
        $nombre = ucwords(strtolower($nombre));
        $apellido = ucwords(strtolower($apellido));

        //$created_user = $_SESSION['identificacion'];

        $sql= mysqli_query($mysqli,"SELECT * FROM usuarios WHERE identificacion='$identificacion'")
                or die("hubo un error al consultar si el usuario existe".mysql_error($sql));

        $row  = mysqli_num_rows($sql);
         
        if($row > 0){

           // header("location: ../../register.php");
           header("location: ../../register.php?alert=2");
            
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
                //header("location: ../../main.php?module=usuarios&alert=1");
                header("location: ../../register.php?alert=1");
            }
            
            
        }
    }
?>