composer require phpoffice/phpspreadsheet
<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$cheminFichier = 'chemin/vers/votre_fichier.xlsx';
$cheminfichierenregistre = 'chemin/vers/votre fichier/enregistré.xlsx';

$spreadsheet = IOFactory::load($cheminFichier);
$sheet = $spreadsheet->getActiveSheet();

$id = $_POST['id'];
$count = $_POST['count'];
$Datum = $_POST['Datum'];
$Uhrzeit = $_POST['Startzeit'] . " / " . $_POST['Endzeit'];
$PA = $_POST["PA"];
$Stuckzahl = $_POST['Stuckzahl'];

$data = array(
    'id' => $id,
    'count' => $count
);

$lastRow = $sheet->getHighestDataRow() + 1;
$lastColumn = $sheet->getHighestDataColumn() + 5;
$nextColumn = ++$lastColumn;

$sheet->setCellValue($lastRow . '1', $Datum);
$sheet->setCellValue($lastRow . '2', $Uhrzeit);
$sheet->setCellValue($lastRow . '3', $PA);
$sheet->setCellValue($lastRow . '4', $Stuckzahl);
$sheet->setCellValue($lastRow . $nextColumn, $data['count']);

$writer = new Xlsx($spreadsheet);
$writer->save($cheminfichierenregistre);
?>