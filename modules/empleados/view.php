

<section class="content-header">
  <h1>
    <i class="fa fa-user icon-title"></i> Gestión de Empleados

    <a class="btn btn-primary btn-social pull-right" href="?module=form_emp&form=add" title="Agregar" data-toggle="tooltip">
      <i class="fa fa-plus"></i> Agregar
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php  

    if (empty($_GET['alert'])) {
      echo "";
    } 

    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Los nuevos datos de usuario se ha registrado correcamente.
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
           Los datos de usuario ha sido cambiado satisfactoriamente.
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
            El usuario ha sido activado correctamente.
            </div>";
    }
 
    elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
             El usuario se bloqueó con éxito.
            </div>";
    }
   
    elseif ($_GET['alert'] == 5) { ?>
        <script>
           buscar()
        </script>
   <?php }

    elseif ($_GET['alert'] == 6) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
            Asegúrese de que la imagen no es más de 1 MB.
            </div>";
    }
 
    elseif ($_GET['alert'] == 7) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
             Asegúrese de que el tipo de archivo subido sea  *.JPG, *.JPEG, *.PNG.
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">
     
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
       
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Identificacion</th>
                <th class="center">Nombre</th>
                <th class="center">Apellido</th>
                <th class="center">Correo</th>
                <th class="center">Registrado</th>
                <th class="center">Permisos de acceso</th>
                <th class="center">Estado</th>
                <th class="center"></th>
              </tr>
            </thead>


                        <tbody>
            <?php  
            $no = 1;
      
            $query = mysqli_query($mysqli, "SELECT empleados.nombre AS nombre,
                                                   empleados.identificacion AS identificacion,
                                                   empleados.estado AS estado,
                                                   empleados.apellido AS apellido,
                                                   empleados.correo AS correo,
                                                   empleados.fecha_registro AS fecha,
                                                   roles.nombre AS rol
                                                   FROM empleados INNER JOIN roles ON empleados.idrol = roles.idrol WHERE roles.idrol!=1 ORDER BY apellido DESC")
                                            or die('error: '.mysqli_error($mysqli));


            while ($data = mysqli_fetch_assoc($query)) { 
  
              echo "<tr>
                      <td width='50' class='center'>$no</td>";

                    /*  if ($data['foto']=="") { ?>
                        <td class='center'><img class='img-user' src='images/user/user-default.png' width='45'></td>
                      <?php
                      } else { ?>
                        <td class='center'><img class='img-user' src='images/user/<?php echo $data['foto']; ?>' width='45'></td>
                      <?php
                      }*/

              echo "  <td>$data[identificacion]</td>
                      <td>$data[nombre]</td>
                      <td>$data[apellido]</td>
                      <td>$data[correo]</td>
                      <td>$data[fecha]</td>
                      <td>$data[rol]</td>
                      <td>$data[estado]</td>
                    

                      <td class='center' width='100'>
                          <div>";

                          if ($data['estado']=='activo') { ?>
                            <a data-toggle="tooltip" data-placement="top" title="Bloqueado" style="margin-right:5px" class="btn btn-warning btn-sm" href="modules/empleados/proses.php?act=off&id=<?php echo $data['identificacion'];?>">
                                <i style="color:#fff" class="glyphicon glyphicon-off"></i>
                            </a>
            <?php
                          } 
                          else { ?>
                            <a data-toggle="tooltip" data-placement="top" title="activo" style="margin-right:5px" class="btn btn-success btn-sm" href="modules/empleados/proses.php?act=on&id=<?php echo $data['identificacion'];?>">
                                <i style="color:#fff" class="glyphicon glyphicon-ok"></i>
                            </a>

                            <!--  <a data-toggle='tooltip' data-placement='top' title='Modificar' onclick='return alert(`EN manteniento`)' class='btn btn-primary btn-sm' href='?module=form_emp&form=edit&id=$data[identificacion]'>
                                <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                            </a>-->
            <?php
                          }

              echo "      <a data-toggle='tooltip' data-placement='top' title='Modificar' onclick='return alert(`EN manteniento`)' class='btn btn-primary btn-sm' href='?module=emp'>
                                <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                            </a>
                          </div>
                      </td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content