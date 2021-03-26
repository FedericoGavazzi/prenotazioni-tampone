<?php

include_once 'config.php';

$sql ="SELECT date_format(giorno, '%d') as giorno, COUNT(*) as n_prenotazioni FROM prenotazioni 
WHERE giorno BETWEEN :dataDa AND :dataA GROUP BY giorno ORDER BY giorno DESC";
$stmt = $pdo ->prepare($sql);

$dataDa = $_POST['dataDa'];
$dataA = $_POST['dataA'];

$stmt->execute(['dataDa' => $dataDa, 'dataA' => $dataA]);
$result = $stmt -> fetchAll();
$dataPoints = [];
$conta = 0;
foreach ($result as $row){
    $dataPoints[]  = [ "x" =>intval($row['giorno']), "y" => $row['n_prenotazioni']];
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <script>
        window.onload = function () {

            let chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: false,
                theme: "light1", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "Simple Column Chart with Index Labels"
                },
                axisY:{
                    includeZero: true
                },
                data: [{
                    type: "column", //change type to bar, line, area, pie, etc
                    //indexLabel: "{y}", //Shows y value on all Data Points
                    indexLabelFontColor: "#000000",
                    indexLabelPlacement: "outside",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
</head>
<body>
<h1>Portale prenotazioni</h1>
<table>
    <caption>Lista prenotazioni tra i giorni <?php echo '<strong>'. $dataDa .'</strong>' . ' e ' . '<strong>' . $dataA . '</strong>'; ?></caption>
    <thead>
    <tr>
        <th>Data</th>
        <th>Numero prenotazione</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach( $result as $row): ?>
        <tr>
            <td><strong><?php echo $row['giorno'] ?></strong>  </td>
            <td><?php echo $row['n_prenotazioni'] ?> </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<center>
    <button class="primary">
        <a style="text-decoration: none; color: #000000" href="../prenotazioni_tamponi/seleziona_date.html">Indietro</a>
    </button>
</center>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>