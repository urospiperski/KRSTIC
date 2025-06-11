<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "knjigaUtisaka";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['ime'], $_POST['email'], $_POST['komentar'])) {

  $ime = $_POST['ime'];
  $email = $_POST['email'];
  $komentar = $_POST['komentar'];
  

  if (empty($ime) || empty($email) || empty($komentar)) {
    echo "Morate popuniti sva polja";
  } else {
  $sql = "INSERT INTO utisak (ime, email, komentar) VALUES ('$ime', '$email', '$komentar')";

  if (mysqli_query($conn, $sql)) {
    echo "Komentar je unet u bazu";
  } else {
    echo "Greska: " . mysqli_error($conn);
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pocetna</title>
</head>
<body>
    <h1>Knjiga utisaka</h1>
    <nav>
        <a href="index.php" class="active">Pocetna</a>
        <a href="oautoru.html">O autoru</a>
        <a href="uputstvo.html">Uputstvo</a>
    </nav>
    <form action="index.php" method="POST">
        <label for="ime">Ime:</label>
        <input type="text" id="ime" name="ime" required>
        <br>
        <label for="email">Email:</label>
<input type="email" id="email" name="email" required>
<br>
<label for="komentar">Komentar:</label>
<textarea id="komentar" name="komentar" rows="5" cols="40" required></textarea>
<br>
<input type="submit" value="Dodaj komentar">
    </form>

</body>
</html>