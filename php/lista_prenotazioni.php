<?php

require('../vendor/autoload.php');
include_once 'config.php';

use League\Plates\Engine;
//viene creato l'oggetto engine per la gestione dei template
$templates = new Engine('../view', 'tpl');

$sql ="SELECT * FROM prenotazioni WHERE annullato = 0";

$stmt = $pdo ->query($sql);

$result = $stmt -> fetchAll();
if(isset($_SESSION['usurname'])) {
    $usurname = $_SESSION['usurname'];


    echo $templates->render('lista_prenotazioni', ['result' => $result, 'usurname' => $usurname]);
}