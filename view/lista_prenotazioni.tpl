<?php this -> layout('main', ['argomento'=> 'Lista delle prenotazioni']); ?>
    <table>
        <caption>Lista prenotazioni</caption>
        <thead>
        <tr>
            <th>Codice fiscale</th>
            <th>Data del tampone prenotato</th>
            <th>Codice prenotazione</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach( $result as $row): ?>
            <tr>
                <td><strong><?php echo $row['codice_fiscale'] ?></strong>  </td>
                <td><?php echo $row['giorno'] ?>  </td>
                <td><?php echo $row['codice_prenotazione'] ?> </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
