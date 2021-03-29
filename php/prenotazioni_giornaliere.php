<?php

require('vendor/autoload.php');
include_once 'config.php';

use League\Plates\Engine;
//viene creato l'oggetto engine per la gestione dei template
$templates = new Engine('./view', 'tpl');

$sql ="SELECT * FROM prenotazioni WHERE giorno = CURDATE()";

$stmt = $pdo ->query($sql);


$result = $stmt -> fetchAll();
echo $templates -> render('prenotazioni_giornaliere', ['result' => $result]);
