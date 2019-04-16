<?php
 require 'vendor/autoload.php';
 use PhpOffice\PhpSpreadsheet\Spreadsheet;

 // establecemos la ruta
 $ruta = "precios.xlsx";

 // para extension especifica
 $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
 $spreadsheet = $reader->load($ruta);

 $sheet = $spreadsheet->getActiveSheet();

 echo '<table border="1">';
    foreach($sheet->getRowIterator() as $row){
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false);
        echo '<tr>';
            foreach($cellIterator as $cell){
                if(!is_null($cell)){
                    $value = $cell->getCalculatedValue();
                    echo '<td>'.$value.'</td>';
                }
            }
        echo '</tr>';
    }
    echo '</table>'
?>