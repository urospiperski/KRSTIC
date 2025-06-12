<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skola";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Razred, ProsOcena FROM uspeh";
$result = $conn->query($sql);

$data = array();
$data[] = array('Razred', 'ProsOcena');

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = array($row["Razred"], (float)$row["ProsOcena"]);
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css">
    <title>Grafika</title>
    <h1>Uspeh učenika</h1>
    <nav>
        <a href="index.php">Početna</a>
        <a href="grafika.php" class="active">Grafika</a>
        <a href="oautoru.html">O autoru</a>
    </nav>
</head>
<body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable(<?php echo json_encode($data); ?>);

var options = {
            hAxis: {title: ''},
            vAxis: {title: ''},
            legend: { position: 'none' }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
    </script>
<footer>&copy; Osnovna škola "Sonja Marinković"</footer>
</body>
</html>