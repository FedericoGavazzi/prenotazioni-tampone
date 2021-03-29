<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Prenotazioni</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
</head>
<body>
<header>
    <a href="../php/prenota_tampone.php" class="logo">Portale prenotazioni</a>
    <a href="../html/verifica_prenotazione.html" class="button">Verifica prenotazione</a>
    <a href="../php/prenotazioni_giornaliere.php" class="button">Prenotazioni giornaliere</a>
    <a href="../html/seleziona_date.html" class="button">Prenotazioni tra 2 date</a>
    <a href="../html/esegui_tampone.html" class="button">Registra tampone</a>
</header>

   <?= $this -> section('content'); ?>


</body>
</html>
