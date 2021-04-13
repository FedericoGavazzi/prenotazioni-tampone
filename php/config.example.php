<?php

//esempio di file di configurazione

ini_set('display_errors',1);
ini_set('log_errors',0);

$host = 'host';
$db = 'database';
$user = 'user';
$pass = 'password';

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPT);
session_start();