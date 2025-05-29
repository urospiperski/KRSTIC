<?php

    include_once 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ='stylesheet' type="text/css" href="style.css">
    <title>TV Program</title>
</head>
<body>
    <nav>
        <div class = 'navigacija'>
            <h3>TV Program</h3>
        </div>
    </nav>
    <br>
    <form method="POST" action=''>
        <label for="datum">Datum : </label>
        <select name = 'datum'>
            <option>-Izaberite datum-</option>
            <option>2023-03-01</option>
            <option>2023-03-02</option>
            <option>2023-03-03</option>
        </select>
        <label for="tip">  Tip emisije : </label>
        <select name = 'tip'>
            <option>-Izaberite tip-</option>
            <option>Film</option>
            <option>Crtac</option>
            <option>Serija</option>
            <option>Rijaliti Show</option>
            <option>Informativni</option>
        </select>

        <input type="submit" value="Pronadji" name = 'pronadji'>
    </form>
    <br>
    <hr>
    <div class="tabela">
        <center><table>
            <tr>
                <th class="vreme">Vreme</th>
                <th class="naziv">Naziv emisije</th>
                <th class="tip">Tip emisije</th>
            </tr>
            <?php
            //Provera da li je kliknuto dugme
                if(isset($_POST['pronadji']))
                {
                //Uslov u kojem se proverava da li je izabran datum i tip, ako nije, izvrsava se sledeci kod
                    if($_POST['datum'] == "-Izaberite datum-" && $_POST['tip'] == "-Izaberite tip-")
                    {
                        //Obican SQL query, gde se prikazuju ovi podaci : dan, vremeEmitovanja, naziv, tipSlika, i sortiraju se prema podatku vremeEmitovanja
                        $query = "SELECT dan, vremeEmitovanja, naziv, tipSlika FROM program ORDER by vremeEmitovanja;";
                        $data = mysqli_query($conn, $query);
                        $result = mysqli_num_rows($data);
                        if($result)
                        {
                            while($row = mysqli_fetch_array($data))
                            {
                                //Upis podataka u tabelu
                                echo '<tr>';
                                echo '<td>'.$row['dan'].'<br>'.$row['vremeEmitovanja'].'</td>';
                                echo '<td>'.$row['naziv'].'</td>';
                                echo '<td><img src = "'.$row['tipSlika'].'"</td>';
                                echo '</tr>';
                            }
                        }
                    }
                    //U ovom uslovu se proverava da li je samo dan odabran, ako jeste, sledeci kod se izvrsava
                    else if($_POST['datum'] != "-Izaberite datum-" && $_POST['tip'] == "-Izaberite tip-")
                    {
                        $datum = $_POST['datum'];
                        //U ovom SQL query-ju se ne prikazuje dan, zato sto je vec odabran, ali se koristi kao uslov u where
                        $query = "SELECT vremeEmitovanja, naziv, tipSlika FROM program where dan = '".$datum."' ORDER by vremeEmitovanja;";
                        $data = mysqli_query($conn, $query);
                        $result = mysqli_num_rows($data);
                        if($result)
                        {
                            while($row = mysqli_fetch_array($data))
                            {
                                echo '<tr>';
                                echo '<td>'.$row['vremeEmitovanja'].'</td>';
                                echo '<td>'.$row['naziv'].'</td>';
                                echo '<td><img src = "'.$row['tipSlika'].'"</td>';
                                echo '</tr>';
                            }
                        }
                    }
                    //Ovde se proverava da li je samo tip odabran
                    else if($_POST['datum'] == "-Izaberite datum-" && $_POST['tip'] != "-Izaberite tip-")
                    {
                        $tip = $_POST['tip'];
                        //Po istom principu radi kao prosli sql query, samo sto je ovde uslov tip, a ne dan
                        $query = "SELECT dan, vremeEmitovanja, naziv, tipSlika FROM program where tipTekst = '".$tip."' ORDER by vremeEmitovanja;";
                        $data = mysqli_query($conn, $query);
                        $result = mysqli_num_rows($data);
                        if($result)
                        {
                            while($row = mysqli_fetch_array($data))
                            {
                                echo '<tr>';
                                echo '<td>'.$row['dan'].'<br>'.$row['vremeEmitovanja'].'</td>';
                                echo '<td>'.$row['naziv'].'</td>';
                                echo '<td><img src = "'.$row['tipSlika'].'"</td>';
                                echo '</tr>';
                            }
                        }
                    }
                    //Ako su odabrani i tip i dan
                    else
                    {
                        $datum = $_POST['datum'];
                        $tip = $_POST['tip'];
                        //Query u kojem se koriste i tip i dan kao uslov
                        $query = "SELECT vremeEmitovanja, naziv, tipSlika FROM program where tipTekst = '".$tip."' AND dan = '".$datum."' ORDER by vremeEmitovanja;";
                        $data = mysqli_query($conn, $query);
                        $result = mysqli_num_rows($data);
                        if($result)
                        {
                            while($row = mysqli_fetch_array($data))
                            {
                                echo '<tr>';
                                echo '<td>'.$row['vremeEmitovanja'].'</td>';
                                echo '<td>'.$row['naziv'].'</td>';
                                echo '<td><img src = "'.$row['tipSlika'].'"</td>';
                                echo '</tr>';
                            }
                        }
                    }
                
                }

            ?>
        </table></center>
    </div>
    <footer><p>Elektrotehnicka Skola "Nikola Tesla" Nis</p><br>
        <p class="links"><a href="uputstvo.html">Uputstvo</a>|<a href="oautoru.html">O autoru</a></p>
    </footer>
</body>
</html>