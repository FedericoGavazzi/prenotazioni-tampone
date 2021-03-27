<?php $this -> layout('main', ['argomento'=>'Lista prenotazioni giornaliere'] ?>
<h1>Portale prenotazioni</h1>
<table>
    <caption>Lista prenotazioni <?php echo date("d/m/Y"); ?></caption>
    <thead>
    <tr>
        <th>Codice fiscale</th>
        <th>Codice prenotazione</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach( $result as $row): ?>
    <tr>
        <td><strong><?php echo $row['codice_fiscale'] ?></strong>  </td>
        <td><?php echo $row['codice_prenotazione'] ?> </td>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>
