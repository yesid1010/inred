<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($mysqli,"SELECT 
    usuarios.identificacion AS identificacion, 
    usuarios.nombre AS nombre,
    usuarios.apellido AS apellido,
    usuarios.fecha_nacimiento AS nacimiento,
    usuarios.edad AS edad,
    usuarios.genero AS genero,
    usuarios.caracterizacion AS caracterizacion,
    usuarios.grupo_sanguineo AS tipo_sangre,
    barrios.nombre AS barrio,
    usuarios.correo AS correo,
    usuarios.celular AS celular,
    usuarios.telefono  AS telefono,
    usuarios.lesion_efermedad_deportiva AS lesion,
    usuarios.medicamentos AS medicamentos,
    usuarios.sisben AS sisben,
    usuarios.eps AS eps,
    proyectos.nombre AS proyecto,
    usuarios.modalidad AS modalidad,
    usuarios.barrio_proyecto AS barrio_proyecto,
    usuarios.acudiente AS acudiente,
    usuarios.cedula_acudiente AS cedula_acudiente,
    usuarios.cel_acudiente AS cel_acudiente,
    usuarios.parentezco AS parentezco,
    usuarios.correo_acudiente AS correo_acudiente,
    localidad.nombre AS localidad,
    comunas.nombre AS comuna,
    proyectos.idproyecto AS idproyecto,
    usuarios.talla AS talla,
    usuarios.direccion_domicilio AS direccion_domicilio,
    usuarios.grado_escolaridad AS grado_escolaridad,
    usuarios.institucion_educativa AS institucion_educativa,
    usuarios.poblacion_menor AS poblacion_menor,
    usuarios.discapacidad AS discapacidad,
    usuarios.ocupacion AS ocupacion,
    usuarios.barrio_ms AS barrio_ms,
    usuarios.internet AS internet,
    usuarios.fecha_registro AS fecha_registro,
    usuarios.foto AS foto,
    usuarios.copia_identidad_menor AS copia_identidad_menor,
    usuarios.cedula_adjunto_acudiente AS cedula_adjunto_acudiente
    FROM usuarios INNER JOIN barrios ON usuarios.idbarrio = barrios.idbarrios 
                  INNER JOIN proyectos ON usuarios.idproyecto = proyectos.idproyecto 
                  INNER JOIN comunas ON barrios.idcomuna = comunas.idcomuna
                  INNER JOIN localidad ON comunas.idlocalidad = localidad.idlocalidad
                  WHERE usuarios.identificacion = '$id'");

    $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Detalles de Usuario
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=usuarios"> Usuario </a></li>
      <li class="active"> Detalles </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box box-primary">
        <div class="box-body">
            
            <?php
                if($data['idproyecto'] == 3){ // si es muevete samario
                    include('modules/usuarios/details/details_ms.php');
                }else{
                    if($data['idproyecto'] == 2){ // si es escuelas popolares del deporte
                        include('modules/usuarios/details/details_pd.php');
                    }
                }
            ?>
            <div class="row">
                <div class="col-sm-3">
                  <a href="?module=usuarios"  class="btn btn-primary ">Atras</a>
                </div>
             </div>
        </div> <!-- box-body -->

    <div> <!-- box box-primary -->
  </section><!-- /.content -->