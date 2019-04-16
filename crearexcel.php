<?php
 require 'vendor/autoload.php';
 require 'config/database.php';


 use PhpOffice\PhpSpreadsheet\Spreadsheet;

 // clase para la esxcritura archivos xlsx
 use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

 use PhpOffice\PhpSpreadsheet\IOfactory;
 //ruta para guardar el archivo
 $ruta ='reportes/';

 // creamos un libro de trabajo
 $spreadsheet = new Spreadsheet();
 
 // accedemos al objeto hoja
 $sheet= $spreadsheet->getActiveSheet();

 $spreadsheet->getActiveSheet()
              ->getColumnDimension('A')//id
              ->setWidth(15);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('B')//nombre
            ->setWidth(15);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('C')//apellido
            ->setWidth(20);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('D')//fecha nacimiento
            ->setWidth(20);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('E')//edad
            ->setWidth(10);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('F')//genero
            ->setWidth(10);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('G')//caracterizacion
            ->setWidth(20);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('H')// tipo sangre
            ->setWidth(10);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('I')//barrio
            ->setWidth(15);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('J')//localidad
            ->setWidth(15);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('K')//comuna
            ->setWidth(20);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('L')//correo
            ->setWidth(30);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('M')//celular
            ->setWidth(15);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('N')//fijo
            ->setWidth(15);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('O')//lesion
            ->setWidth(15);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('P')//medicamentos
            ->setWidth(15);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('Q') //sisben
            ->setWidth(10);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('R')//eps
            ->setWidth(15);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('S') // proyecto
            ->setWidth(30);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('T') // deporte
            ->setWidth(20);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('U') // barrio proyecto
            ->setWidth(20);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('V') // parentezco
            ->setWidth(20);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('W') // cedula
            ->setWidth(20);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('X') // nombre
            ->setWidth(20);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('Y') // celular
            ->setWidth(20);
$spreadsheet->getActiveSheet()
            ->getColumnDimension('Z') // correo
            ->setWidth(20);

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
            proyectos.idproyecto AS idproyecto
            FROM usuarios INNER JOIN barrios ON usuarios.idbarrio = barrios.idbarrios 
                          INNER JOIN proyectos ON usuarios.idproyecto = proyectos.idproyecto 
                          INNER JOIN comunas ON barrios.idcomuna = comunas.idcomuna
                          INNER JOIN localidad ON comunas.idlocalidad = localidad.idlocalidad")
                          or die('error: '.mysqli_error($mysqli));


 $fecha = date("d/m/Y");
 $sheet->setCellValue('A2','Identificación');
 $sheet->setCellValue('B2','Nombres');
 $sheet->setCellValue('C2','Apellidos');
 $sheet->setCellValue('D2','fecha_nacimiento');
 $sheet->setCellValue('E2','edad');
 $sheet->setCellValue('F2','Genero');
 $sheet->setCellValue('G2','Caracterizacion');

 $sheet->setCellValue('H2','Localidad');
 $sheet->setCellValue('I2','Comuna');

 $sheet->setCellValue('J2','Tipo Sangre');
 $sheet->setCellValue('K2','Barrio');
 $sheet->setCellValue('L2','Correo');
 $sheet->setCellValue('M2','Celular');
 $sheet->setCellValue('N2','Telefono');
 $sheet->setCellValue('O2','Lesion');
 $sheet->setCellValue('P2','Medicamentos');

 $sheet->setCellValue('Q2','Sisben');
 $sheet->setCellValue('R2','Eps');
 $sheet->setCellValue('S2','Proyecto');
//  $sheet->setCellValue('T2','Modalidad');
 $sheet->setCellValue('T2','Barrio Proyecto');
 $sheet->setCellValue('U2','Acudiente');
 $sheet->setCellValue('V2','Cedula Acudiente');

 $sheet->setCellValue('W2','Celular Acudiente');
 $sheet->setCellValue('X2','Parentezco');
 $sheet->setCellValue('Y2','Correo Acudiente');


 $fila=3;
 while ($data = mysqli_fetch_assoc($query)) {
    $sheet->setCellValue('A'.$fila,$data['identificacion']);
    $sheet->setCellValue('B'.$fila,$data['nombre']);
    $sheet->setCellValue('C'.$fila,$data['apellido']);
    $sheet->setCellValue('D'.$fila,$data['nacimiento']);
    $sheet->setCellValue('E'.$fila,$data['edad']);
    $sheet->setCellValue('F'.$fila,$data['genero']);
    $sheet->setCellValue('G'.$fila,$data['caracterizacion']);
    
    $sheet->setCellValue('H'.$fila,$data['localidad']);
    $sheet->setCellValue('I'.$fila,$data['comuna']); 

    $sheet->setCellValue('J'.$fila,$data['tipo_sangre']);
    $sheet->setCellValue('K'.$fila,$data['barrio']);
    $sheet->setCellValue('L'.$fila,$data['correo']);
    $sheet->setCellValue('M'.$fila,$data['celular']);
    $sheet->setCellValue('N'.$fila,$data['telefono']);
    $sheet->setCellValue('O'.$fila,$data['lesion']);
    $sheet->setCellValue('P'.$fila,$data['medicamentos']); 

    $sheet->setCellValue('Q'.$fila,$data['sisben']);
    $sheet->setCellValue('R'.$fila,$data['eps']);
    $sheet->setCellValue('S'.$fila,$data['proyecto']);
    // $sheet->setCellValue('T'.$fila,$data['modalidad']);
    $sheet->setCellValue('T'.$fila,$data['barrio_proyecto']);
    $sheet->setCellValue('U'.$fila,$data['acudiente']);
    $sheet->setCellValue('V'.$fila,$data['cedula_acudiente']); 

    $sheet->setCellValue('W'.$fila,$data['cel_acudiente']);
    $sheet->setCellValue('X'.$fila,$data['parentezco']);
    $sheet->setCellValue('Y'.$fila,$data['correo_acudiente']);

    $fila++;
}

 $writer = new Xlsx($spreadsheet);

 try {
     $writer->save($ruta.'usuarios'.time().'.xlsx');
     echo 'archivo creado'; 
 } catch (Exception $e) {
     echo $e->getMessage();
 }

 
?>