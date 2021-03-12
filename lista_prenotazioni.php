<?php
ini_set('display_errors',1);
ini_set('log_errors',0);

$host = 'localhost';
$db = 'prenotazioni_tamponi';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $pass);

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



echo "
<table>
    <td></td>
</table>";
