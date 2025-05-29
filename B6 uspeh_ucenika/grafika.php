<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skola";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from database
$sql = "SELECT Razred, ProsOcena FROM uspeh";
$result = $conn->query($sql);

// Create an array to store the data
$data = array();
$data[] = array('Razred', 'ProsOcena');

// Populate the array with data from the database
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = array($row["Razred"], (float)$row["ProsOcena"]);
    }
}

// Close database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uspeh ucenika</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(<?php echo json_encode($data); ?>);

            var options = {
                title: 'ProsOcena by Razred',
                hAxis: {title: 'Razred'},
                vAxis: {title: 'ProsOcena'},
                legend: { position: 'none' }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Uspeh ucenika</h1>
    <nav>
      <ul>
        <li><a href="index.php">Pocetna</a></li>
        <li><a href="grafika.php">Grafika</a></li>
        <li><a href="oautoru.html">O autoru</a></li>
      </ul>
    </nav>

    <div id="chart_div" style="width: 100%; height: 500px;"></div>

    <footer>&#169; Osnovna skola "Sonja Marinkovic"</footer>
 
  </body>
</html>
