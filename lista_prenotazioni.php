<?php

include_once 'config.php';

$sql = "SELECT * FROM prenotazioni
WHERE codice_fiscale = :codice_fiscale AND codice_prenotazione = :codice_prenotazione";
$stmt = $pdo -> prepare($sql);

$codice_fiscale = $_POST['codice'];
$codice_prenotazione = $_POST['codice_prenotazione'];

echo '<table>
<tr>
<td>id</td>
<td>codice fiscale</td>
<td>data</td>
<td>codice prenotazione</td>
</tr>';

$stmt -> execute(['codice_fiscale'=>$codice_fiscale,'codice_prenotazione'=>$codice_prenotazione]);

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $id = $row['id'];
    $cod = $row['codice_fiscale'];
    $data = $row['giorno'];
    $cod_pren = $row['codice_prenotazione'];
    echo "<tr>
          <td>$id</td>
          <td>$cod</td>
          <td>$data</td>
          <td>$cod_pren</td>
          </tr>";
}
echo '</table>';
