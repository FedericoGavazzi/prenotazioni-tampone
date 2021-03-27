<?php
    $min = date("Y-m-d");
    $min = strtotime($min);
    $max = strtotime("+7 day", $min);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prenotazioni</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
</head>
<body>
<script>

</script>
<h1>Portale prenotazioni</h1>
<form action="prenota.php" method="post">
    <fieldset>
        <legend>Inserisci la prenotazione</legend>
        <label for="Codice">Codice fiscale</label>
        <input type="text" id="Codice" placeholder="Codice fiscale" name="codice"/>
        <label for="giorno">Giorno</label>
        <input type="date" id="giorno" placeholder="AAAA-MM-GG" name="giorno" min= <?= date("Y-m-d", $min) ?>
        max=<?= date("Y-m-d",$max)?> />
        <input type="submit" value="Invia la richieste"/>
    </fieldset>
</form>
</body>
</html>