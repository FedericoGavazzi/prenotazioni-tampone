<?php

function guidv4($data = null) {
    // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    // Output the 36 character UUID.
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

include_once 'config.php';
//variabili da mettere nella query
$codice_fiscale = $_POST['codice'];
$data_scelta = $_POST['giorno'];

//preset query di inserimento
$sql = "INSERT INTO prenotazioni VALUES (null, :codice_fiscale, :giorno, :codice_prenotazione)";

//invio query al db che la tiene in attesa
$stmt = $pdo ->prepare($sql);
$codice_prenotazone = guidv4();
//invio i dati concreti
$stmt -> execute(['codice_fiscale' => $codice_fiscale,
    'giorno' => $data_scelta, 'codice_prenotazione' => $codice_prenotazone]);

header('Location:codice_prenotazione.php?codice_prenotazione='. $codice_prenotazone);
exit(0);
