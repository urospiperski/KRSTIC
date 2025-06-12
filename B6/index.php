<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Početna</title>
</head>
<body>
    <h1>Uspeh učenika</h1>
    <nav>
        <a href="index.php" class="active">Početna</a>
        <a href="grafika.php">Grafika</a>
        <a href="oautoru.html">O autoru</a>
    </nav>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skola";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM uspeh ORDER BY ProsOcena ASC";
$result = $conn->query($sql);

echo "<table>";
echo "<tr><th>Razred</th><th>Odlican</th><th>Vrlodobar</th><th>Dobar</th><th>Dovoljan</th><th>Nedovoljan</th><th>ProsOcena</th></tr>";


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Razred"]."</td><td>".$row["Odlican"]."</td><td>".$row["Vrlodobar"]."</td><td>".$row["Dobar"]."</td><td>".$row["Dovoljan"]."</td><td>".$row["Nedovoljan"]."</td><td>".$row["ProsOcena"]."</td></tr>";
    }
}

echo "</table>";

$conn->close();
?>
<footer>&copy; Osnovna škola "Sonja Marinković"</footer>
</body>
</html>