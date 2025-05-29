<?php
// Povezivanje sa bazom
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autobus";

// Nova konekcija
$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcija
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Vrednosti iz forme
$seat_number = $_POST['seat_number'];
$first_name = $_POST['first_name'];
$email = $_POST['email'];

// Azuriranje baze sa rezervacijom
$sql = "UPDATE res SET Rezervacija = 1 WHERE BrojSedista = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $seat_number);
$stmt->execute();

// Zatvaranje konekcije
$stmt->close();
$conn->close();

// Povratak na glavnu stranicu
header("Location: index.php");
exit();
?>