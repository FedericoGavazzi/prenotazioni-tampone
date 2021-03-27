<?php
require ('vendor/autoload.php');

use League\Plates\Engine;
//viene creato l'oggetto engine per la gestione dei template
$templates = new Engine('./view', 'tpl');


$min = date("Y-m-d");
$min = strtotime($min);
$max = strtotime("+7 day", $min);
echo $templates -> render('prenota', ['min' => $min, 'max' => $max]);
