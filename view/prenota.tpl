<?php this -> layout('main', ['argomento'=> 'Portale prenotazioni']); ?>

<form action="prenota.php" method="post">
    <fieldset>
        <legend>Inserisci la prenotazione</legend>
        <label for="Codice">Codice fiscale</label>
        <input type="text" id="Codice" placeholder="Codice fiscale" name="codice"/>
        <label for="giorno">Giorno</label>
        <input type="date" id="giorno" placeholder="AAAA-MM-GG" name="giorno"
               min=<?= date("Y-m-d", $min) ?> max=<?= date("Y-m-d", $max)?> />
        <input type="submit" value="Invia la richieste"/>
    </fieldset>
</form>