<?php
require_once "config/database.php";
require_once "config/fungsi_tanggal.php";
require_once "config/fungsi_rupiah.php";


if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else { // vista de inicio
	if ($_GET['module'] == 'start') {
		include "modules/start/view.php";
	}

	// vista de usuarios
	elseif ($_GET['module'] == 'usuarios') {
		include "modules/usuarios/view.php";
	}

	elseif ($_GET['module'] == 'form_medicines') {
		include "modules/usuarios/form.php";
	}
	// vista para cambiar el password
	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}

	//vista para los empleados
	elseif($_GET['module']=='emp' && $_SESSION['permiso_acceso']==1){
		include "modules/empleados/view.php";
	}
	elseif($_GET['module']=='form_emp'&& $_SESSION['permiso_acceso']==1){
		include "modules/empleados/form.php";
	}

	// vista para los barrios

	elseif($_GET['module']=='barrios'&& $_SESSION['permiso_acceso']==1){
		include "modules/barrios/view.php";
	}
	elseif($_GET['module']=='form_bar'&& $_SESSION['permiso_acceso']==1){
		include "modules/barrios/form.php";
	}

	// vista para los proyectos

	elseif($_GET['module']=='proyect'&& $_SESSION['permiso_acceso']==1){
		include "modules/proyect/view.php";
	}
	elseif($_GET['module']=='form_proy'&& $_SESSION['permiso_acceso']==1){
		include "modules/proyect/form.php";
	}
		
	
}
?>