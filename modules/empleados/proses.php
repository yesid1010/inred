<?php
session_start();

require_once "../../config/database.php";


if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {

	if ($_GET['act']=='insert') {
		if (isset($_POST['Guardar'])) {
			
			$tipo_identificacion = mysqli_real_escape_string($mysqli, trim($_POST['tipo_identificacion']));
			$identificacion  = mysqli_real_escape_string($mysqli, trim($_POST['identificacion']));
			$nombre  = mysqli_real_escape_string($mysqli, trim($_POST['nombre']));
			$apellido  = mysqli_real_escape_string($mysqli, trim($_POST['apellido']));
			$celular = mysqli_real_escape_string($mysqli, trim($_POST['celular']));
			$genero = mysqli_real_escape_string($mysqli, trim($_POST['genero']));
			$direccion = mysqli_real_escape_string($mysqli, trim($_POST['direccion']));
			$fecha_nacimiento = mysqli_real_escape_string($mysqli, trim($_POST['fecha_nacimiento']));
			$correo  = mysqli_real_escape_string($mysqli, trim($_POST['correo']));
			$usuario  = mysqli_real_escape_string($mysqli, trim($_POST['usuario']));
			$password  = md5(mysqli_real_escape_string($mysqli, trim($_POST['password'])));
			$permisos_acceso = mysqli_real_escape_string($mysqli, trim($_POST['rol']));
			$estado = 'activo';

			$nombre = ucwords(strtolower($nombre));
			$apellido = ucwords(strtolower($apellido));
			
            // comprobamos si el empleado ya se encuentra registrado
			$sql= mysqli_query($mysqli,"SELECT * FROM empleados WHERE identificacion='$identificacion'")
			or die("hubo un error al consultar si el usuario existe".mysql_error($sql));

			$row  = mysqli_num_rows($sql);
	 
			if($row > 0){

						header("location: ../../main.php?module=emp&alert=5");
			}else{

				$query = mysqli_query($mysqli, "INSERT INTO empleados(tipo_identificacion,identificacion,nombre,apellido,celular,genero,direccion,fecha_nacimiento,correo,usuario,password,estado,idrol)
												VALUES('$tipo_identificacion','$identificacion','$nombre','$apellido','$celular','$genero','$direccion','$fecha_nacimiento','$correo','$usuario','$password','$estado','$permisos_acceso')")
												or die('error: '.mysqli_error($mysqli));    

			
				if ($query) {
					header("location: ../../main.php?module=emp&alert=1");
				}
			}
		}	
	}
	
	elseif ($_GET['act']=='update') {
		if (isset($_POST['Guardar'])) {
			if (isset($_POST['identificacion'])) {
                
                
				$tipo_identificacion = mysqli_real_escape_string($mysqli, trim($_POST['tipo_identificacion']));
    			$identificacion      = mysqli_real_escape_string($mysqli, trim($_POST['identificacion']));
    			$nombre              = mysqli_real_escape_string($mysqli, trim($_POST['nombre']));
    			$apellido            = mysqli_real_escape_string($mysqli, trim($_POST['apellido']));
    			$celular             = mysqli_real_escape_string($mysqli, trim($_POST['celular']));
    			$genero              = mysqli_real_escape_string($mysqli, trim($_POST['genero']));
    			$direccion           = mysqli_real_escape_string($mysqli, trim($_POST['direccion']));
    			$fecha_nacimiento    = mysqli_real_escape_string($mysqli, trim($_POST['fecha_nacimiento']));
    			$correo              = mysqli_real_escape_string($mysqli, trim($_POST['correo']));
    			$usuario             = mysqli_real_escape_string($mysqli, trim($_POST['usuario']));
			    $permisos_acceso     = mysqli_real_escape_string($mysqli, trim($_POST['rol']));
			    
			    
			    
			    $query = mysqli_query($mysqli, "UPDATE empleados SET    tipo_identificacion 	= '$tipo_identificacion',
                    													nombre 	= '$nombre',
                    													apellido       = '$apellido',
                    													celular     = '$celular',
                    													genero   = '$genero',
                    													direccion 	= '$direccion',
                    													fecha_nacimiento       = '$fecha_nacimiento',
                    													correo     = '$correo',
                    													usuario   = '$usuario',
                    													idrol   = '$permisos_acceso'
                                                                        WHERE identificacion 	= '$identificacion'")
                                                    or die('error: '.mysqli_error($mysqli));
                
                
                    if ($query) {
                  
                        header("location: ../../main.php?module=emp&alert=2");
                    }
			}
		}
	}


	elseif ($_GET['act']=='on') {
		if (isset($_GET['id'])) {
			
			$id_user = $_GET['id'];
			$status  = "activo";

		
            $query = mysqli_query($mysqli, "UPDATE empleados SET estado  = '$status'
                                                          WHERE identificacion = '$id_user'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?module=emp&alert=3");
            }
		}
	}


	elseif ($_GET['act']=='off') {
		if (isset($_GET['id'])) {
			
			$id_user = $_GET['id'];
			$status  = "bloqueado";

		
            $query = mysqli_query($mysqli, "UPDATE empleados SET estado  = '$status'
                                                          WHERE identificacion = '$id_user'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?module=emp&alert=4");
            }
		}
	}		
}		
?>