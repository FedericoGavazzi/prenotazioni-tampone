<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prenotazioni</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
</head>
<body>
    <h1>Portale prenotazioni</h1>
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
                <td><?php echo $row['giorno'] ?> </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>