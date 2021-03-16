<?php
include_once 'config.php';
//variabili da mettere nella query
$codice_fiscale = $_POST['codice'];
$data_scelta = $_POST['giorno'];

//preset query di inserimento
$sql = "INSERT INTO prenotazioni VALUES (null, :codice_fiscale, :giorno, :codice_prenotazione)";
$codice_prenotazone = random_int(0,1000000);
//invio query al db che la tiene in attesa
$stmt = $pdo ->prepare($sql);

//invio i dati concreti
$stmt -> execute(['codice_fiscale' => $codice_fiscale,
    'giorno' => $data_scelta, 'codice_prenotazione' => $codice_prenotazone]);

header('Location:codice_prenotazione.php?codice_prenotazione='. $codice_prenotazone);
exit(0);
