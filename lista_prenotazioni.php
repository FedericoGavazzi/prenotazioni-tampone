<?php
ini_set('display_errors',1);
ini_set('log_errors',0);

$host = 'localhost';
$db = 'prenotazioni_tamponi';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $pass);

$sql = "SELECT * FROM prenotazioni";

$stmt  = $pdo -> query($sql);

var_dump($stmt->fetchAll());
