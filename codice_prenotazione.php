<?php

include_once 'config.php';
$codice_prenotazione = $_GET['codice_prenotazione'];
function back(){
    header('Location:prenota.html');
}

if($codice_prenotazione != "Numero massimo di prenotazioni raggiunte per questo giorno. Scegli una data diversa")
echo "<div>Il tuo codice della prenotazione è</div><br>
      <div><strong>$codice_prenotazione</strong></div><br>
      <div>ricordati di non perderlo</div>";
else
    echo "<div><strong>$codice_prenotazione</strong>
    <br>
    <a href='prenota.html'><button >Torna alla pagine per prenotare</button></a>
    </div>";