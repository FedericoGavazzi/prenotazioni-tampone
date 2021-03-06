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

//variabili da mettere nella query
$codice_fiscale = 'BGTLSN00N00B157H';
$data_scelta = '2021-03-06';

//preset query di inserimento
$sql = "INSERT INTO prenotazioni VALUES (null, :codice_fiscale, :giorno)";

//invio query al db che la tiene in attesa
$stmt = $pdo ->prepare($sql);

//invio i dati concreti
$stmt -> execute(['codice_fiscale' => $codice_fiscale, 'giorno' => $data_scelta]);



