<section class="content-header">
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Programas Sociales
    <a class="btn btn-primary btn-social pull-right" href="?module=form_medicines&form=add" title="agregar" data-toggle="tooltip">
      <i class="fa fa-plus "></i> Agregar

    </a> 
   <!-- <p class=" pull-right"> &nbsp &nbsp &nbsp &nbsp &nbsp </p>
    <a class="btn btn-success btn-social pull-right" href="../../ongnios/crearexcel.php" title="exportar" data-toggle="tooltip">
      <i class="fa fa-print" aria-hidden="true"></i>
       Exportar
    </a>-->
  </h1>

</section>


<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php  
    if (empty($_GET['alert'])) {
        
    }
    elseif($_GET['alert'] == 2){?>

      <script>
        editar_registro()
      </script>

    <?php  
    }elseif($_GET['alert'] == 1){?>

      <script>
        nuevo_registro()
      </script>

    <?php  

    }elseif($_GET['alert'] == 3){?>

      <script>
        borrar_registro()
      </script>

    <?php  

    }elseif($_GET['alert'] == 5){?>

      <script>
        buscar()
      </script>

    <?php  

    }elseif($_GET['alert'] == 6){?>

      <script>
        nuevo_reporte()
      </script>

    <?php  

    }
 
    ?>
      <div class="box box-primary">
        <div class="box-body">
    
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
      
            <thead>
              <tr>
                <th >No.</th>
                <th >Identificacion</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th >Genero</th>
                <th>Caracterizacion</th>
                <th >Barrio</th>
                <th >Proyecto</th>
                <th >Edad</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
           // $query = mysqli_query($mysqli, "SELECT * FROM usuarios ORDER BY apellido DESC")
                                            //or die('error: '.mysqli_error($mysqli));

            $query = mysqli_query($mysqli,"SELECT usuarios.identificacion AS identificacion, 
                                                  usuarios.nombre AS nombre,
                                                  usuarios.apellido AS apellido,
                                                  usuarios.genero AS genero,
                                                  usuarios.edad AS edad,
                                                  barrios.nombre AS barrio,
                                                  proyectos.nombre AS proyecto,
                                                  proyectos.idproyecto AS idproyecto,
                                                  usuarios.caracterizacion AS caracterizacion
                                                  FROM usuarios INNER JOIN barrios ON usuarios.idbarrio = barrios.idbarrios 
                                                                INNER JOIN proyectos ON usuarios.idproyecto = proyectos.idproyecto ");

            while ($data = mysqli_fetch_assoc($query)) {    
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='80'>$data[identificacion]</td>
                      <td width='80'>$data[nombre]</td>
                      <td width='80'>$data[apellido]</td>
                      <td width='10'>$data[genero]</td>
                      <td width='10'>$data[caracterizacion]</td>
                      <td width='10'>$data[barrio]</td>
                      <td width='80'>$data[proyecto]</td>
                      <td width='10'>$data[edad]</td>
                      <td class='center' width='150'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Detalles' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_medicines&form=detalles&id=$data[identificacion]'>
                              <i style='color:#fff' class='glyphicon glyphicon-search'></i>
                          </a>"?> 
                          <?php if($_SESSION['permiso_acceso']!=3){ ?>
                          
                          <a data-toggle='tooltip' data-placement='top' title='modificar' style='margin-right:5px' class='btn btn-primary btn-sm' href="?module=form_medicines&form=edit&id=<?php echo $data['identificacion'];?>">
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>

                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/usuarios/proses.php?act=delete&id=<?php echo $data['identificacion'];?>&pr=<?php echo $data['idproyecto']?>" onclick="return confirm('estas seguro de eliminar<?php echo $data['nombre']; ?> ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a>
                          <?php }
              echo "    </div>
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