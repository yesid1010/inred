<?php
session_start();

include 'pdf.php';
require_once "../../../config/database.php";



    if ($_GET['act']=='insert') {
        if (isset($_POST['Guardar'])) {
            
            // campos no obligatorios

            $genero = '';
            $proyecto = '';
            $barrio = '';
            // sin filtro
            if($_POST['genero']=='' && $_POST['barrio']=='' &&$_POST['proyecto']==''){
                $query = mysqli_query($mysqli, "SELECT usuarios.identificacion as identificacion,
                                                       usuarios.nombre as nombres,
                                                       usuarios.apellido as apellido,
                                                       usuarios.edad as edad,
                                                       usuarios.celular as celular,
                                                       usuarios.genero as genero,
                                                       barrios.nombre as barrio,
                                                       proyectos.nombre as proyecto
                                                       FROM usuarios inner join proyectos on usuarios.idproyecto 
                                                       = proyectos.idproyecto inner join barrios on usuarios.idbarrio
                                                       = barrios.idbarrios")
                or die('error: '.mysqli_error($mysqli));

                

                $pdf =  new PDF();
              
                $pdf->AliasNbPages();
                $pdf->AddPage();

                $pdf->SetFillColor(232,232,232);
                $pdf->SetFont('Arial','B',8);
              
                $pdf->Cell(18,6,'DNI',1,0,'L',1);
                $pdf->Cell(49,6,'Nombres Y Apellidos',1,0,'L',1);
                $pdf->Cell(9,6,'Edad',1,0,'C',1);
                $pdf->Cell(9,6,'Sexo',1,0,'L',1);
                $pdf->Cell(18,6,'Celular',1,0,'C',1);
                $pdf->Cell(49,6,'Proyecto',1,0,'C',1);
                $pdf->Cell(40,6,'Barrio',1,0,'C',1);
                $pdf->Ln(6);
                $pdf->SetFillColor(255,255,255);
                $pdf->SetFont('Arial','',8);
                $i=0;
                while ($data = mysqli_fetch_assoc($query)) { 
                        $pdf->Cell(18,6,$data['identificacion'],1,0,'L',2);
                        $pdf->Cell(49,6,$data['nombres'].' '.$data['apellido'],1,0,'L',2);
                        $pdf->Cell(9,6,$data['edad'],1,0,'C',2);
                        $pdf->Cell(9,6,$data['genero'],1,0,'L',2);
                        $pdf->Cell(18,6,$data['celular'],1,0,'L',2);
                        $pdf->Cell(49,6,$data['proyecto'],1,0,'L',2);
                        $pdf->Cell(40,6,$data['barrio'],1,0,'L',2);
                        $i++;

                        $pdf->Ln(6);
                }
                $pdf->Ln(6);
                $pdf->SetFont('Arial','',10);
                $pdf->Cell(30,6,'Total registros :',0,0,'L',1);
                $pdf->Cell(10,6,$i,0,0,'L',1);
                $pdf->Output();
            }else{
                // si solo filtra por el genero
                if(!$_POST['genero']=='' && $_POST['barrio']=='' && $_POST['proyecto']==''){
                    $genero = mysqli_real_escape_string($mysqli, trim($_POST['genero']));
                    $query = mysqli_query($mysqli, "SELECT usuarios.identificacion as identificacion,
                    usuarios.nombre as nombres,
                    usuarios.apellido as apellido,
                    usuarios.edad as edad,
                    usuarios.celular as celular,
                    usuarios.genero as genero,
                    proyectos.nombre as proyecto,
                    barrios.nombre as barrio
                    FROM usuarios inner join proyectos on usuarios.idproyecto = proyectos.idproyecto 
                    inner join barrios on usuarios.idbarrio = barrios.idbarrios
                    where genero = '$genero'")
                    or die('error: '.mysqli_error($mysqli));


                    $pdf =  new PDF();
                    $pdf->AliasNbPages();
                    $pdf->AddPage();
    
                    $pdf->SetFillColor(232,232,232);
                    $pdf->SetFont('Arial','B',8);
                  
                    $pdf->Cell(18,6,'DNI',1,0,'L',1);
                    $pdf->Cell(49,6,'Nombres Y Apellidos',1,0,'L',1);
                    $pdf->Cell(9,6,'Edad',1,0,'C',1);
                    $pdf->Cell(9,6,'Sexo',1,0,'L',1);
                    $pdf->Cell(18,6,'Celular',1,0,'C',1);
                    $pdf->Cell(49,6,'Proyecto',1,0,'C',1);
                    $pdf->Cell(40,6,'Barrio',1,0,'C',1);
                    $pdf->Ln(6);
                    $pdf->SetFillColor(255,255,255);
                    $pdf->SetFont('Arial','',8);
                    $i=0;
                    while ($data = mysqli_fetch_assoc($query)) { 
                            $pdf->Cell(18,6,$data['identificacion'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['nombres'].' '.$data['apellido'],1,0,'L',2);
                            $pdf->Cell(9,6,$data['edad'],1,0,'C',2);
                            $pdf->Cell(9,6,$data['genero'],1,0,'L',2);
                            $pdf->Cell(18,6,$data['celular'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['proyecto'],1,0,'L',2);
                            $pdf->Cell(40,6,$data['barrio'],1,0,'L',2);
                            $i++;
    
                            $pdf->Ln(6);
                    }
                    $pdf->Ln(6);
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,6,'Total registros :',0,0,'L',1);
                    $pdf->Cell(10,6,$i,0,0,'L',1);
                    $pdf->Output();
                }
                // si solo filtra por el genero y el barrio
                if(!$_POST['genero']=='' && !$_POST['barrio']=='' && $_POST['proyecto']==''){
                    $genero = mysqli_real_escape_string($mysqli, trim($_POST['genero']));
                    $barrio = mysqli_real_escape_string($mysqli, trim($_POST['barrio']));
                    $query = mysqli_query($mysqli, "SELECT usuarios.identificacion as identificacion,
                    usuarios.nombre as nombres,
                    usuarios.apellido as apellido,
                    usuarios.edad as edad,
                    usuarios.celular as celular,
                    usuarios.genero as genero,
                    usuarios.caracterizacion as caracterizacion,
                    proyectos.nombre as proyecto,
                    barrios.nombre as barrio
                    FROM usuarios inner join proyectos on usuarios.idproyecto = proyectos.idproyecto
                    inner join barrios on usuarios.idbarrio = barrios.idbarrios
                    where genero = '$genero' AND usuarios.idbarrio = '$barrio'")
                    or die('error: '.mysqli_error($mysqli));

                    $pdf =  new PDF();

                    $pdf->AliasNbPages();
                    $pdf->AddPage();
    
                    $pdf->SetFillColor(232,232,232);
                    $pdf->SetFont('Arial','B',8);
                  
                    $pdf->Cell(18,6,'DNI',1,0,'L',1);
                    $pdf->Cell(49,6,'Nombres Y Apellidos',1,0,'L',1);
                    $pdf->Cell(9,6,'Edad',1,0,'C',1);
                    $pdf->Cell(9,6,'Sexo',1,0,'L',1);
                    $pdf->Cell(18,6,'Celular',1,0,'C',1);
                    $pdf->Cell(49,6,'Proyecto',1,0,'C',1);
                    $pdf->Cell(40,6,'Barrio',1,0,'C',1);
                    $pdf->Ln(6);
                    $pdf->SetFillColor(255,255,255);
                    $pdf->SetFont('Arial','',8);
                    $i=0;
                    while ($data = mysqli_fetch_assoc($query)) { 
                            $pdf->Cell(18,6,$data['identificacion'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['nombres'].' '.$data['apellido'],1,0,'L',2);
                            $pdf->Cell(9,6,$data['edad'],1,0,'C',2);
                            $pdf->Cell(9,6,$data['genero'],1,0,'L',2);
                            $pdf->Cell(18,6,$data['celular'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['proyecto'],1,0,'L',2);
                            $pdf->Cell(40,6,$data['barrio'],1,0,'L',2);
                            $i++;
    
                            $pdf->Ln(6);
                    }
                    $pdf->Ln(6);
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,6,'Total registros :',0,0,'L',1);
                    $pdf->Cell(10,6,$i,0,0,'L',1);
                    $pdf->Output();
                }
                // si filtra por el genero, proyecto y barrio
                if(!$_POST['genero']==''  && !$_POST['barrio']=='' && !$_POST['proyecto']==''){
                    $proyecto = mysqli_real_escape_string($mysqli, trim($_POST['proyecto']));
                    $genero = mysqli_real_escape_string($mysqli, trim($_POST['genero']));
                    $barrio = mysqli_real_escape_string($mysqli, trim($_POST['barrio']));

                    $query = mysqli_query($mysqli, "SELECT usuarios.identificacion as identificacion,
                    usuarios.nombre as nombres,
                    usuarios.apellido as apellido,
                    usuarios.edad as edad,
                    usuarios.celular as celular,
                    usuarios.genero as genero,
                    usuarios.caracterizacion as caracterizacion,
                    proyectos.nombre as proyecto,
                    barrios.nombre as barrio
                    FROM usuarios inner join proyectos on usuarios.idproyecto = proyectos.idproyecto
                    inner join barrios on usuarios.idbarrio = barrios.idbarrios
                    where genero = '$genero' AND barrios.idbarrios = '$barrio'
                    AND proyectos.idproyecto = '$proyecto'")
                    or die('error: '.mysqli_error($mysqli));

                    $pdf =  new PDF();

                    $pdf->AliasNbPages();
                    $pdf->AddPage();
    
                    $pdf->SetFillColor(232,232,232);
                    $pdf->SetFont('Arial','B',8);
                  
                    $pdf->Cell(18,6,'DNI',1,0,'L',1);
                    $pdf->Cell(49,6,'Nombres Y Apellidos',1,0,'L',1);
                    $pdf->Cell(9,6,'Edad',1,0,'C',1);
                    $pdf->Cell(9,6,'Sexo',1,0,'L',1);
                    $pdf->Cell(18,6,'Celular',1,0,'C',1);
                    $pdf->Cell(49,6,'Proyecto',1,0,'C',1);
                    $pdf->Cell(40,6,'Barrio',1,0,'C',1);
                    $pdf->Ln(6);
                    $pdf->SetFillColor(255,255,255);
                    $pdf->SetFont('Arial','',8);
                    $i=0;
                    while ($data = mysqli_fetch_assoc($query)) { 
                            $pdf->Cell(18,6,$data['identificacion'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['nombres'].' '.$data['apellido'],1,0,'L',2);
                            $pdf->Cell(9,6,$data['edad'],1,0,'C',2);
                            $pdf->Cell(9,6,$data['genero'],1,0,'L',2);
                            $pdf->Cell(18,6,$data['celular'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['proyecto'],1,0,'L',2);
                            $pdf->Cell(40,6,$data['barrio'],1,0,'L',2);
                            $i++;
    
                            $pdf->Ln(6);
                    }
                    $pdf->Ln(6);
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,6,'Total registros :',0,0,'L',1);
                    $pdf->Cell(10,6,$i,0,0,'L',1);
                    $pdf->Output();
                }
                // si solo filtra por el genero y el proyecto
                if(!$_POST['genero']=='' && $_POST['barrio']=='' && !$_POST['proyecto']==''){
                    $proyecto = mysqli_real_escape_string($mysqli, trim($_POST['proyecto']));
                    $genero = mysqli_real_escape_string($mysqli, trim($_POST['genero']));
                    $query = mysqli_query($mysqli, "SELECT usuarios.identificacion as identificacion,
                    usuarios.nombre as nombres,
                    usuarios.apellido as apellido,
                    usuarios.edad as edad,
                    usuarios.celular as celular,
                    usuarios.genero as genero,
                    usuarios.caracterizacion as caracterizacion,
                    proyectos.nombre as proyecto,
                    barrios.nombre as barrio
                    FROM usuarios inner join proyectos on usuarios.idproyecto = proyectos.idproyecto
                    inner join barrios on usuarios.idbarrio = barrios.idbarrios
                    where genero = '$genero' AND proyectos.idproyecto = '$proyecto'")
                    or die('error: '.mysqli_error($mysqli));

                    $pdf =  new PDF();

                    $pdf->AliasNbPages();
                    $pdf->AddPage();
    
                    $pdf->SetFillColor(232,232,232);
                    $pdf->SetFont('Arial','B',8);
                  
                    $pdf->Cell(18,6,'DNI',1,0,'L',1);
                    $pdf->Cell(49,6,'Nombres Y Apellidos',1,0,'L',1);
                    $pdf->Cell(9,6,'Edad',1,0,'C',1);
                    $pdf->Cell(9,6,'Sexo',1,0,'L',1);
                    $pdf->Cell(18,6,'Celular',1,0,'C',1);
                    $pdf->Cell(49,6,'Proyecto',1,0,'C',1);
                    $pdf->Cell(40,6,'Barrio',1,0,'C',1);
                    $pdf->Ln(6);
                    $pdf->SetFillColor(255,255,255);
                    $pdf->SetFont('Arial','',8);
                    $i=0;
                    while ($data = mysqli_fetch_assoc($query)) { 
                            $pdf->Cell(18,6,$data['identificacion'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['nombres'].' '.$data['apellido'],1,0,'L',2);
                            $pdf->Cell(9,6,$data['edad'],1,0,'C',2);
                            $pdf->Cell(9,6,$data['genero'],1,0,'L',2);
                            $pdf->Cell(18,6,$data['celular'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['proyecto'],1,0,'L',2);
                            $pdf->Cell(40,6,$data['barrio'],1,0,'L',2);
                            $i++;
    
                            $pdf->Ln(6);
                    }
                    $pdf->Ln(6);
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,6,'Total registros :',0,0,'L',1);
                    $pdf->Cell(10,6,$i,0,0,'L',1);
                    $pdf->Output();
                }

                // si solo filtra por el barrio
                if($_POST['genero']=='' && !$_POST['barrio']=='' && $_POST['proyecto']==''){
                    $barrio = mysqli_real_escape_string($mysqli, trim($_POST['barrio']));
                    $query = mysqli_query($mysqli, "SELECT usuarios.identificacion as identificacion,
                    usuarios.nombre as nombres,
                    usuarios.apellido as apellido,
                    usuarios.edad as edad,
                    usuarios.celular as celular,
                    usuarios.genero as genero,
                    usuarios.caracterizacion as caracterizacion,
                    proyectos.nombre as proyecto,
                    barrios.nombre as barrio
                    FROM usuarios inner join proyectos on usuarios.idproyecto = proyectos.idproyecto
                    inner join barrios on usuarios.idbarrio = barrios.idbarrios
                    where barrios.idbarrios = '$barrio'")
                    or die('error: '.mysqli_error($mysqli));

                    $pdf =  new PDF();

                    $pdf->AliasNbPages();
                    $pdf->AddPage();
    
                    $pdf->SetFillColor(232,232,232);
                    $pdf->SetFont('Arial','B',8);
                  
                    $pdf->Cell(18,6,'DNI',1,0,'L',1);
                    $pdf->Cell(49,6,'Nombres Y Apellidos',1,0,'L',1);
                    $pdf->Cell(9,6,'Edad',1,0,'C',1);
                    $pdf->Cell(9,6,'Sexo',1,0,'L',1);
                    $pdf->Cell(18,6,'Celular',1,0,'C',1);
                    $pdf->Cell(49,6,'Proyecto',1,0,'C',1);
                    $pdf->Cell(40,6,'Barrio',1,0,'C',1);
                    $pdf->Ln(6);
                    $pdf->SetFillColor(255,255,255);
                    $pdf->SetFont('Arial','',8);
                    $i=0;
                    while ($data = mysqli_fetch_assoc($query)) { 
                            $pdf->Cell(18,6,$data['identificacion'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['nombres'].' '.$data['apellido'],1,0,'L',2);
                            $pdf->Cell(9,6,$data['edad'],1,0,'C',2);
                            $pdf->Cell(9,6,$data['genero'],1,0,'L',2);
                            $pdf->Cell(18,6,$data['celular'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['proyecto'],1,0,'L',2);
                            $pdf->Cell(40,6,$data['barrio'],1,0,'L',2);
                            $i++;
    
                            $pdf->Ln(6);
                    }
                    $pdf->Ln(6);
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,6,'Total registros :',0,0,'L',1);
                    $pdf->Cell(10,6,$i,0,0,'L',1);
                    $pdf->Output();
                }
                // si solo filtra por el barrio y el proyecto
                if($_POST['genero']=='' && !$_POST['barrio']=='' && !$_POST['proyecto']==''){
                    $proyecto = mysqli_real_escape_string($mysqli, trim($_POST['proyecto']));
                    $barrio = mysqli_real_escape_string($mysqli, trim($_POST['barrio']));

                    $query = mysqli_query($mysqli, "SELECT usuarios.identificacion as identificacion,
                    usuarios.nombre as nombres,
                    usuarios.apellido as apellido,
                    usuarios.edad as edad,
                    usuarios.celular as celular,
                    usuarios.genero as genero,
                    usuarios.caracterizacion as caracterizacion,
                    proyectos.nombre as proyecto,
                    barrios.nombre as barrio
                    FROM usuarios inner join proyectos on usuarios.idproyecto = proyectos.idproyecto
                    inner join barrios on usuarios.idbarrio = barrios.idbarrios
                    where  barrios.idbarrios = '$barrio'
                    AND proyectos.idproyecto = '$proyecto'")
                    or die('error: '.mysqli_error($mysqli));

                    $pdf =  new PDF();

                    $pdf->AliasNbPages();
                    $pdf->AddPage();
    
                    $pdf->SetFillColor(232,232,232);
                    $pdf->SetFont('Arial','B',8);
                  
                    $pdf->Cell(18,6,'DNI',1,0,'L',1);
                    $pdf->Cell(49,6,'Nombres Y Apellidos',1,0,'L',1);
                    $pdf->Cell(9,6,'Edad',1,0,'C',1);
                    $pdf->Cell(9,6,'Sexo',1,0,'L',1);
                    $pdf->Cell(18,6,'Celular',1,0,'C',1);
                    $pdf->Cell(49,6,'Proyecto',1,0,'C',1);
                    $pdf->Cell(40,6,'Barrio',1,0,'C',1);
                    $pdf->Ln(6);
                    $pdf->SetFillColor(255,255,255);
                    $pdf->SetFont('Arial','',8);
                    $i=0;
                    while ($data = mysqli_fetch_assoc($query)) { 
                            $pdf->Cell(18,6,$data['identificacion'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['nombres'].' '.$data['apellido'],1,0,'L',2);
                            $pdf->Cell(9,6,$data['edad'],1,0,'C',2);
                            $pdf->Cell(9,6,$data['genero'],1,0,'L',2);
                            $pdf->Cell(18,6,$data['celular'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['proyecto'],1,0,'L',2);
                            $pdf->Cell(40,6,$data['barrio'],1,0,'L',2);
                            $i++;
    
                            $pdf->Ln(6);
                    }
                    $pdf->Ln(6);
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,6,'Total registros :',0,0,'L',1);
                    $pdf->Cell(10,6,$i,0,0,'L',1);
                    $pdf->Output();
                }
                // si solo filtra por el proyecto
                if($_POST['genero']=='' && $_POST['barrio']=='' && !$_POST['proyecto']==''){
                    $proyecto = mysqli_real_escape_string($mysqli, trim($_POST['proyecto']));

                    $query = mysqli_query($mysqli, "SELECT usuarios.identificacion as identificacion,
                    usuarios.nombre as nombres,
                    usuarios.apellido as apellido,
                    usuarios.edad as edad,
                    usuarios.celular as celular,
                    usuarios.genero as genero,
                    usuarios.caracterizacion as caracterizacion,
                    proyectos.nombre as proyecto,
                    barrios.nombre as barrio
                    FROM usuarios inner join proyectos on usuarios.idproyecto = proyectos.idproyecto
                    inner join barrios on usuarios.idbarrio = barrios.idbarrios
                    where proyectos.idproyecto = '$proyecto'")
                    or die('error: '.mysqli_error($mysqli));

                    $pdf =  new PDF();

                    $pdf->AliasNbPages();
                    $pdf->AddPage();
    
                    $pdf->SetFillColor(232,232,232);
                    $pdf->SetFont('Arial','B',8);
                  
                    $pdf->Cell(18,6,'DNI',1,0,'L',1);
                    $pdf->Cell(49,6,'Nombres Y Apellidos',1,0,'L',1);
                    $pdf->Cell(9,6,'Edad',1,0,'C',1);
                    $pdf->Cell(9,6,'Sexo',1,0,'L',1);
                    $pdf->Cell(18,6,'Celular',1,0,'C',1);
                    $pdf->Cell(49,6,'Proyecto',1,0,'C',1);
                    $pdf->Cell(40,6,'Barrio',1,0,'C',1);
                    $pdf->Ln(6);
                    $pdf->SetFillColor(255,255,255);
                    $pdf->SetFont('Arial','',8);
                    $i=0;
                    while ($data = mysqli_fetch_assoc($query)) { 
                            $pdf->Cell(18,6,$data['identificacion'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['nombres'].' '.$data['apellido'],1,0,'L',2);
                            $pdf->Cell(9,6,$data['edad'],1,0,'C',2);
                            $pdf->Cell(9,6,$data['genero'],1,0,'L',2);
                            $pdf->Cell(18,6,$data['celular'],1,0,'L',2);
                            $pdf->Cell(49,6,$data['proyecto'],1,0,'L',2);
                            $pdf->Cell(40,6,$data['barrio'],1,0,'L',2);
                            $i++;
    
                            $pdf->Ln(6);
                    }
                    $pdf->Ln(6);
                    $pdf->SetFont('Arial','',10);
                    $pdf->Cell(30,6,'Total registros :',0,0,'L',1);
                    $pdf->Cell(10,6,$i,0,0,'L',1);
                    $pdf->Output();$proyecto = mysqli_real_escape_string($mysqli, trim($_POST['proyecto']));
                }
                 
            }
           
            // $genero  = mysqli_real_escape_string($mysqli, trim($_POST['genero']));
            // $caracterizacion = mysqli_real_escape_string($mysqli,trim($_POST['caracterizacion']));
            // $barrio  = mysqli_real_escape_string($mysqli, trim($_POST['barrio']));

            // $proyecto  = mysqli_real_escape_string($mysqli, trim($_POST['proyecto']));
            
            $empleado = $_SESSION['identificacion'];


    
        //     $nombre = ucwords(strtolower($nombre));
        //     $apellido = ucwords(strtolower($apellido));

        //     $created_user = $_SESSION['identificacion'];

        //     $sql= mysqli_query($mysqli,"SELECT * FROM usuarios WHERE identificacion='$identificacion'")
        //             or die("hubo un error al consultar si el usuario existe".mysql_error($sql));

        //     $row  = mysqli_num_rows($sql);
             
        //     if($row > 0){

        //         header("location: ../../main.php?module=usuarios&alert=5");
                
        //     }else{
        //         $query = mysqli_query($mysqli, "INSERT INTO usuarios(identificacion,nombre,apellido,
        //                                                     grupo_sanguineo,caracterizacion,telefono,
        //                                                     celular,lesion_efermedad_deportiva,
        //                                                     medicamentos,sisben,eps,correo,fecha_nacimiento,
        //                                                     edad,genero,empleados,idproyecto,modalidad,
        //                                                     barrio_proyecto,idbarrio,acudiente,
        //                                                     parentezco,cedula_acudiente,cel_acudiente,
        //                                                     correo_acudiente)
        //                                         VALUES('$identificacion','$nombre','$apellido',
        //                                                     '$grupo_sanguineo','$caracterizacion','$telefono',
        //                                                     '$celular','$lesion_efermedad_deportiva',
        //                                                     '$medicamentos','$sisben','$salud','$correo','$nacimiento',
        //                                                     '$edad','$genero','$empleado','$proyecto','$modalidad',
        //                                                     '$barrio_proyecto','$barrio','$acudiente',
        //                                                     '$parentezco','$cedula_acudiente','$cel_acudiente',
        //                                                     '$correo_acudiente')")
        //                                         or die('error '.mysqli_error($mysqli)); 
        //         if ($query) {
        //             header("location: ../../main.php?module=usuarios&alert=1");
        //         }
        //     }

         }   
    }   
?>