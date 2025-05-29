<!DOCTYPE html>
<html>
  <head>
    <title>Knjiga utisaka</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    />
  </head>
  <body class="loggedin">
    <div class="bibl">
      <h1>Knjiga utisaka</h1>
    </div>
    <nav class="navtop">
      <div>
        <a href="index.php"></i>Pocetna</a>
		<a href="o_autoru.html"></i>O autoru</a>
		<a href="uputstvo.html"></i>Uputstvo</a>
      </div>
    </nav>
    <div class="content">
    <form action="" method="POST">
        <label for="ime">Ime:</label>
        <input type="text" name="ime"  />
        <label for="email">Email:</label>
        <input type="email" name="email"  />
        <label for="komentar">Komentar:</label>
        <textarea name="komentar" cols="30" rows="10"></textarea>
        <input type="submit" value="Dodaj komentar" />
      </form>
    </div>
    <footer>Knjiga utisaka</footer>
  </body>
</html>

<?php
// konekcija sa bazom
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mojabaza";


$conn = mysqli_connect($servername, $username, $password, $dbname);

// Provera konekcije
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['ime'], $_POST['email'], $_POST['komentar'])) {
  // Vrednosti iz forme
  $ime = $_POST['ime'];
  $email = $_POST['email'];
  $komentar = $_POST['komentar'];
  
  //Sprecavanje unosa praznih polja
  if (empty($ime) || empty($email) || empty($komentar)) {
    echo "Morate popuniti sva polja";
  } else {
  // SQL za unos podataka u tabelu
  $sql = "INSERT INTO utisak (ime, email, komentar) VALUES ('$ime', '$email', '$komentar')";

  // Izvrsavanje SQL-a
  if (mysqli_query($conn, $sql)) {
    echo "Komentar je unet u bazu";
  } else {
    echo "Greska: " . mysqli_error($conn);
    }
  }
}
?>