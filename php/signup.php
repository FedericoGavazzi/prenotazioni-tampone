<?php
require('../vendor/autoload.php');
include_once 'config.php';

use League\Plates\Engine;
//viene creato l'oggetto engine per la gestione dei template
$templates = new Engine('../view', 'tpl');
$sql = "SELECT usurname FROM utenti WHERE usurname = :usurname";
$sql2 = "INSERT INTO utenti (usurname, password) VALUES (:usurname, :password)";
$stmt = $pdo->prepare($sql2);

$usurname = $_POST['usurname'];
$password = $_POST['password'];
$conferma_password = $_POST['password2'];

//$pdo->query("SELECT usurname FROM utenti WHERE usurname = :usurname");
if($password === $conferma_password){
    $stmt->execute(['usurname'=>$usurname,'password'=>password_hash($password, PASSWORD_DEFAULT)]);
    $result = ['message'=>'Registrazione avvenuta con successo'];

    echo $templates->render('../view/signup_success', $result);
} else {
    //$templates->render();
}

