<?php
//Dice a livello dello script che gli errori verranno mostrati e che verranno loggati

ini_set('display_errors',1);
ini_set('log_errors',0);

$host = 'localhost';
$db = 'prenotazioni_tamponi';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $pass);

$codice_fiscale = 'BGTLSN00N00B157H';
$data_scelta = '2021-03-06';

$sql = "INSERT INTO prenotazioni VALUES (null, :codice_fiscale, :giorno)";





