<?php
require('../vendor/autoload.php');
include_once 'config.php';

use League\Plates\Engine;
//viene creato l'oggetto engine per la gestione dei template
$templates = new Engine('../view', 'tpl');

$sql = "SELECT * FROM utenti WHERE usurname = :usurname";
$stmt = $pdo->prepare($sql);

$usurname = $_POST['usurname'];
$password = $_POST['password'];

$stmt->execute(['usurname'=>$usurname]);

$riga = $stmt->fetch();

if($riga === false){
    echo $templates -> render('login_fallito',['usurname'=>$usurname]);
} else {
    $pass_hash = $riga['password'];
    if(password_verify($password, $pass_hash)){
        echo $templates -> render('login_avvenuto',[]);
    } else {
        echo $templates -> render('login_fallito',['usurname'=>$usurname]);
    }
}

$templates->render();