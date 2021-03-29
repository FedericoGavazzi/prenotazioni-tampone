<?php

require ('vendor/autoload.php');
include_once 'config.php';

use League\Plates\Engine;
//viene creato l'oggetto engine per la gestione dei template
$templates = new Engine('./view', 'tpl');

$sql ="SELECT * FROM prenotazioni";

$stmt = $pdo ->query($sql);

$result = $stmt -> fetchAll();

echo $templates -> render('lista_prenotazioni', ['result' => $result]);
