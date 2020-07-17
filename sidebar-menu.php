	<?php 
	if($_SESSION['permiso_acceso']==1){ /// si es el administrador

	?>
    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

	if ($_GET["module"]=="start") { 
		$active_home="active";
	} else {
		$active_home="";
	}
	?>
		<li class="<?php echo $active_home;?>">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php

  if ($_GET["module"]=="usuarios" || $_GET["module"]=="form_medicines") { ?>
    <li class="active">
      <a href="?module=usuarios"><i class="fa fa-folder"></i> Datos de Usuarios </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=usuarios"><i class="fa fa-folder"></i> Datos de Usuarios </a>
      </li>
  <?php
  }

	if ($_GET["module"]=="emp" || $_GET["module"]=="form_emp") { ?>
    <li class="active">
      <a href="?module=emp"><i class="fa fa-user icon-title"></i> Datos de Empleados </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=emp"><i class="fa fa-user icon-title"></i> Datos de Empleados </a>
      </li>
  <?php
	}

	if ($_GET["module"]=="barrios" || $_GET["module"]=="form_bar") { ?>
    <li class="active">
      <a href="?module=barrios"><i class="fa fa-user icon-title"></i> Información de Barrios </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=barrios"><i class="fa fa-user icon-title"></i> Información de Barrios</a>
      </li>
  <?php
	}

	
	if ($_GET["module"]=="proyect" || $_GET["module"]=="form_proy") { ?>
    <li class="active">
      <a href="?module=proyect"><i class="fa fa-user icon-title"></i> Información de Proyectos </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=proyect"><i class="fa fa-user icon-title"></i> Información de Proyectos</a>
      </li>
  <?php
	}

	if ($_GET["module"]=="reportes") { ?>
    <li class="active">
      <a href="?module=reportes"><i class="fa fa-user icon-title"></i> Reportes </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=reportes"><i class="fa fa-user icon-title"></i> Reportes</a>
      </li>
  <?php
	}


	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>
	<?php 
	} 
	else if($_SESSION['permiso_acceso']!=1){	// si no es administrador
	?>
	<ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

	if ($_GET["module"]=="start") { 
		$active_home="active";
	} else {
		$active_home="";
	}
	?>
		<li class="<?php echo $active_home;?>">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php

  if ($_GET["module"]=="usuarios" || $_GET["module"]=="form_medicines") { ?>
    <li class="active">
      <a href="?module=usuarios"><i class="fa fa-folder"></i> Datos de Usuarios </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=usuarios"><i class="fa fa-folder"></i> Datos de Usuarios </a>
      </li>
  <?php
  }
  if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	} ?>
	</ul>
	
	<?php
		}
	?>

<footer style="   position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
	 width:100%;
	 color : white;">
        <strong>Copyright &copy; <?php echo date('Y');?> - <a href="https://ionic-7288a.firebaseapp.com/" target="_blank" style="color:red;">ON-GNIOS</a></strong>
</footer>