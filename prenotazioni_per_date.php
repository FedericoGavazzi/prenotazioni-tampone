<?php

require ('vendor/autoload.php');
include_once 'config.php';

use League\Plates\Engine;

$sql ="SELECT prenotazioni.codice_fiscale, prenotazioni.giorno, prenotazioni.codice_prenotazione
       FROM prenotazioni WHERE prenotazioni.giorno BETWEEN :dataDa AND :dataA";
$stmt = $pdo ->prepare($sql);

$dataDa = $_POST['dataDa'];
$dataA = $_POST['dataA'];

//viene creato l'oggetto engine per la gestione dei template
$templates = new Engine('./view', 'tpl');

$stmt->execute(['dataDa' => $dataDa, 'dataA' => $dataA]);
$result = $stmt -> fetchAll();

echo $templates -> render('prenotazioni_per_date', ['result' => $result]);
