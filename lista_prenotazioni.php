<?php

include_once 'config.php';

$sql = "SELECT * FROM prenotazioni";
echo '<table>
<tr>
<td>id</td>
<td>codice fiscale</td>
<td>data</td>
</tr>';

$stmt  = $pdo -> query($sql);
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $id = $row['id'];
    $cod = $row['codice_fiscale'];
    $data = $row['giorno'];
    echo "<tr>
          <td>$id</td>
          <td>$cod</td>
          <td>$data</td>
          </tr>";
}
echo '</table>';
