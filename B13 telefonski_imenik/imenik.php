<?php
    include_once "config.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="navigacija">
        <h1 class="naslov1">Zadatak 6</h1>
        <h2 class="naslov2">Telefonski imenik</h2>
    </div>
    <p>Parametri za pretragu:</p>
    <form action = '' method="POST">
        <label for="ime">Ime:</label>
            <input type="text" id="ime" name="ime">
        <label for="adresa">Adresa:</label>
            <input type="text" id="adresa" name="adresa">
        <label for="telefon">Telefon:</label>
            <input type="text" id="telefon" name="telefon">
        <label for="prezime">Prezime:</label>
            <input type="text" id="prezime" name="prezime">
        <label for="mesto">Mesto:</label>
            <select type="text" id="mesto" name="mesto">
                <option></option>
                <option>Beograd</option>
                <option>Nis</option>
            </select>
        <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <input type="submit" name="trazi" value="Trazi">
    </form>
    <br>
    <hr>
    <br>
    <table>
        <tr>
            <td>Rbr</td>
            <td>Ime</td>
            <td>Prezime</td>
            <td>Adresa</td>
            <td>Telefon</td>
            <td>E-mail</td>
            <td>Mesto</td>
        </tr>
        <?php

        if(isset($_POST['trazi']))
        {
            $ime = $_POST["ime"];
            $prezime = $_POST["prezime"];
            $adresa = $_POST["adresa"];
            $telefon = $_POST["telefon"];
            $email = $_POST["email"];
            $mesto = $_POST["mesto"];

            if($ime == '' && $prezime == '' && $adresa == '' && $telefon == '' && $email == '' && $mesto == '')
            {
                $query = "SELECT * FROM korisnici";
            }
            else if($ime != '')
            {
                $query = "SELECT * FROM korisnici WHERE Ime Like '".$ime."%';";
            }
            else if($adresa != '')
            {
                $query = "SELECT * FROM korisnici WHERE Adresa Like '".$adresa."%';";
            }
            else if($telefon != '')
            {
                $query = "SELECT * FROM korisnici WHERE Telefon Like '".$telefon."%';";
            }
            else if($prezime != '')
            {
                $query = "SELECT * FROM korisnici WHERE Prezime Like '".$prezime."%';";
            }
            else if($mesto != '')
            {
                $query = "SELECT * FROM korisnici WHERE Mesto Like '".$mesto."%';";
            }
            else if($email != '')
            {
                $query = "SELECT * FROM korisnici WHERE Email Like '".$email."%';";
            }
            $data = mysqli_query($conn, $query);
            $result = mysqli_num_rows($data);
            if($result)
            {
                while($row = mysqli_fetch_array($data))
                {
                    echo '<tr>';
                    echo '<td>'.$row['sifraKorisnika'].'</td>';
                    echo '<td>'.$row['Ime'].'</td>';
                    echo '<td>'.$row['Prezime'].'</td>';
                    echo '<td>'.$row['Adresa'].'</td>';
                    echo '<td>'.$row['brojTelefona'].'</td>';
                    echo '<td>'.$row['Email'].'</td>';
                    echo '<td>'.$row['Mesto'].'</td>';
                    echo '</tr>';
                }
            }
        }
        ?>
        </table>
        <div class="navigacija2">
            <h3>Elektrotehnicka skola "Nikola Tesla" Nis</h3>
            <a class="a1" href="vazni_telefoni.html">Vazni telefoni</a>
            <a class="a2" href="uputstvo.html">Uputstvo</a>
            <a class="a3" href="o_autoru.html">O autoru</a>
</body>
</html>