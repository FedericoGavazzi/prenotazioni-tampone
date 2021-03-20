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
$NUM_MAX = 3;
$codice_prenotazone = '';
$err = 0;
$sql = "SELECT COUNT(*) as giorni FROM prenotazioni WHERE giorno = :data_scelta";
$sql2 = "INSERT INTO prenotazioni VALUES (null, :codice_fiscale, :giorno, :codice_prenotazione)";

$stmt = $pdo-> prepare($sql);
$stmt -> execute(['data_scelta' => $data_scelta]);
$conteggio = $stmt ->fetchAll(pdo::FETCH_ASSOC);
if($conteggio[0]['giorni'] >= $NUM_MAX) {
    $codice_prenotazone = "Numero massimo di prenotazioni raggiunte per questo giorno. Scegli una data diversa";
    $err = 1;
} else {
    $codice_prenotazone = guidv4();
    $stmt2 = $pdo ->prepare($sql2);
    $stmt2 -> execute(['codice_fiscale' => $codice_fiscale,
    'giorno' => $data_scelta, 'codice_prenotazione' => $codice_prenotazone]);
}

header('Location:codice_prenotazione.php?codice_prenotazione='.$codice_prenotazone.'&err='. $err);
exit(0);
