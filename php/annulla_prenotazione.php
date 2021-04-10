<?php

include_once 'config.php';

$sql = "UPDATE prenotazioni SET annullato = true WHERE codice_prenotazione = :codice_prenotazione";
$stmt = $pdo->prepare($sql);

$codice_prenotazione = $_POST['codice_prenotazione'];

$stmt->execute(['codice_prenotazione' => $codice_prenotazione]);