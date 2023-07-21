composer require phpoffice/phpspreadsheet
<?php
require 'vendor/autoload.php'; // Charger les classes de PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

// Chemin vers le fichier Excel existant
$cheminFichier = 'chemin/vers/votre_fichier.xlsx';
$cheminfichiersave = 'chemin/vers/votre fichier/enregistré.xlsx'

// Charger le fichier Excel existant
$spreadsheet = IOFactory::load($cheminFichier);
$sheet = $spreadsheet->getActiveSheet();

// Récupérer les valeurs des compteurs (exemples)
$Datum = $_POST['Datum'];
$Uhrzeit = $_POST['Startzeit'] . " / " . $_POST['Endzeit'];
$PA = $_POST["PA"];
$Stuckzahl = $_POST['Stuckzahl'];

$id = $_POST['id']; 
$count = $_POST['count'];
$countid = $count . $id;
$id = $id + 5



// Ajouter les valeurs des compteurs aux cellules appropriées
$sheet->setCellValue('C1', $Datum);
$sheet->setCellValue('C2', $Uhrzeit);
$sheet->setCellValue('C3', $PA);
$sheet->setCellValue('C4', $Stuckzahl);
$sheet->setCellValue('C6', $compteur1);
$sheet->setCellValue('C7', $compteur2);
$sheet->setCellValue('C8', $compteur3);
$sheet->setCellValue('C9', $compteur4);
$sheet->setCellValue('C10', $compteur5);
$sheet->setCellValue('C11', $compteur6);
$sheet->setCellValue('C12', $compteur7);
$sheet->setCellValue('C13', $compteur8);
$sheet->setCellValue('C14', $compteur9);
$sheet->setCellValue('C15', $compteur10);
$sheet->setCellValue('C16', $compteur11);
$sheet->setCellValue('C17', $compteur12);
$sheet->setCellValue('C18', $compteur13);
$sheet->setCellValue('C19', $compteur14);
$sheet->setCellValue('C20', $compteur15);
$sheet->setCellValue('C21', $compteur16);
$sheet->setCellValue('C22', $compteur17);
$sheet->setCellValue('C23', $compteur18);
$sheet->setCellValue('C24', $compteur19);
$sheet->setCellValue('C25', $compteur20);
$sheet->setCellValue('C26', $compteur21);
$sheet->setCellValue('C27', $compteur22);


// Enregistrer le fichier Excel modifié
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save($cheminfichiersave);
?>