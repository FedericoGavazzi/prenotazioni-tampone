<?php

include_once 'config.php';
include 'phpqrcode/qrlib.php';

$codice_prenotazione = $_GET['codice_prenotazione'];
$err = $_GET['err'];
QRcode::png($codice_prenotazione,'qrcode.png' , 1, 4, 2);


function back(){
    header('Location:prenota_tampone.php');
}

if($err != 1)
echo "<div>Il tuo codice della prenotazione è $codice_prenotazione</div><br>
      <img src='qrcode.png'/> <br>
      <div>ricordati di non perderlo</div>";
else
    echo "<div><strong>$codice_prenotazione</strong>
    <br>
    <a href='prenota_tampone.php'><button >Torna alla pagine per prenotare</button></a>
    </div>";