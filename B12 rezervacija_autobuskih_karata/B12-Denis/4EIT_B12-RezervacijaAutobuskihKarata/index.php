<?php

    include_once "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Rezervacija autobuskih karata</title>
</head>
<body>
    <div class="naslov">
        <h1>Rezervacija autobuskih karata</h1>
    </div>
    <nav class="navtop">
        <div class="content">
            <a href="index.php"><button>Pocetna</button></a>
            <a href="oautoru.html"><button>O Autoru</button></a>
            <a href="uputstvo.html"><button>Uputstvo</button></a>
        </div>
    </nav>
    <h2>Prikaz sedista autobusa : </h2>
    <?php

    echo "<table>";
    $count = 2;
    for($i = 1; $i < 14; $i++)
    {
        echo "<tr>";
        for($j = 1; $j < 6; $j++)
        {
            if($j % 3 == 0)
            {
                echo "<td class='empty'></td>";
            }
            else
            {
                $query = 'SELECT * FROM sedista WHERE BrojSedista = '.$count.';';
                $data = mysqli_query($conn, $query);
                $result = mysqli_num_rows($data);
                if($result)
                {
                    while($row = mysqli_fetch_array($data))
                    {
                        if($row['Rezervacija'] == 0)
                        {
                            echo "<td class='sedista'>";
                            echo "<button class='free'>".$count."</button>";
                            echo "</td>";
                        }
                        else
                        {
                            echo "<td class='sedista'>";
                            echo "<button class='taken'>".$count."</button>";
                            echo "</td>";
                        }
                    }
                }
                $count++;
            }
        }
        echo "</tr>";
    }

    echo "</table>";

    ?>
    <br><br>
    <form method='POST' action=''>
        <table>
        <tr>
        <td class = 'podaci'><label for='bSedista'>Broj sedista : </label></td>
        <td><input type = 'text'  name='bSedista'></td>
        </tr>
        <tr>
        <td class = 'podaci'><label for='imePrezime'>Ime i prezime : </label></td>
        <td><input type = 'text'  name='imePrezime'></td>
        </tr>
        <tr>
        <td class = 'podaci'><label for='email'>E-mail : </label></td>
        <td><input type = 'text'  name='email'></td>
        </tr>
        <tr>
        <td><input type = 'submit' value = 'Rezervisi' name='rezervisi'></td>
        </tr>
        </table>
    </form>
    <?php

    if(isset($_POST['rezervisi']))
    {
        $brojsedista = $_POST['bSedista'];
        $query = 'SELECT * FROM sedista WHERE BrojSedista = '.$brojsedista.';';
        $data = mysqli_query($conn, $query);
        $result = mysqli_num_rows($data);
        if($result)
        {
            while($row = mysqli_fetch_array($data))
            {
                if($row['Rezervacija'] == 1)
                {
                    echo '<script>alert("Sediste broj '.$brojsedista.' je zauzeto. Molimo Vas, odaberite drugo sediste")</script>';
                }
                else
                {
                    $sql = "UPDATE sedista SET Rezervacija = b'1' WHERE BrojSedista = '$brojsedista'";
                    $query = mysqli_query($conn, $sql);
                }
            }
        }
    }
    ?>
</body>
</html>