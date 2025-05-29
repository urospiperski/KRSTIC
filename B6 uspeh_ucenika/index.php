<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uspeh ucenika</title>
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
    <?php
// Konekcija sa bazom
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skola";

$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Uzimanje podataka iz baze sortiranih po prosecnoj oceni u rastucem redosledu
$sql = "SELECT * FROM uspeh ORDER BY ProsOcena ASC";
$result = $conn->query($sql);

// Pravljenje HTML tabele
echo "<table>";
echo "<tr><th>Razred</th><th>Odlican</th><th>Vrlodobar</th><th>Dobar</th><th>Dovoljan</th><th>Nedovoljan</th><th>ProsOcena</th></tr>";

// Popunjavanje tabele podacima
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Razred"]."</td><td>".$row["Odlican"]."</td><td>".$row["Vrlodobar"]."</td><td>".$row["Dobar"]."</td><td>".$row["Dovoljan"]."</td><td>".$row["Nedovoljan"]."</td><td>".$row["ProsOcena"]."</td></tr>";
    }
}

echo "</table>";

// Zatvaranje konekcije
$conn->close();
?>


    <footer>&#169; Osnovna skola "Sonja Marinkovic"</footer>

  </body>
</html>
