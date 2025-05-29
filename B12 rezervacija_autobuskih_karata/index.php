<?php
// Povezivanje sa bazom
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autobus";

$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezervacija autobuskih karata</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Rezervacija autobuskih karata</h1>
    <nav>
      <ul>
        <li><a href="index.php">Pocetna</a></li>
        <li><a href="oautoru.html">O Autoru</a></li>
        <li><a href="uputstvo.html">Uputstvo</a></li>
      </ul>
    </nav>
    <h3>Prikaz sedista autobusa:</h3>
    <div class="sadrzaj">

    
      <!-- Kako bi izgledalo rucno ispisivanje 

      <div class="seat-layout">
        <div class="seat-column">
          <div class="seat" data-seat-number="2">2</div>
          <div class="seat" data-seat-number="6">6</div>
          <div class="seat" data-seat-number="10">10</div>
          <div class="seat" data-seat-number="14">14</div>
          <div class="seat" data-seat-number="18">18</div>
          <div class="seat" data-seat-number="22">22</div>
          <div class="seat" data-seat-number="26">26</div>
          <div class="seat" data-seat-number="30">30</div>
          <div class="seat" data-seat-number="34">34</div>
          <div class="seat" data-seat-number="38">38</div>
          <div class="seat" data-seat-number="42">42</div>
          <div class="seat" data-seat-number="46">46</div>
          <div class="seat" data-seat-number="50">50</div>
        </div>
        <div class="seat-column">
          <div class="seat" data-seat-number="3">3</div>
          <div class="seat" data-seat-number="7">7</div>
          <div class="seat" data-seat-number="11">11</div>
          <div class="seat" data-seat-number="15">15</div>
          <div class="seat" data-seat-number="19">19</div>
          <div class="seat" data-seat-number="23">23</div>
          <div class="seat" data-seat-number="27">27</div>
          <div class="seat" data-seat-number="31">31</div>
          <div class="seat" data-seat-number="35">35</div>
          <div class="seat" data-seat-number="39">39</div>
          <div class="seat" data-seat-number="43">43</div>
          <div class="seat" data-seat-number="47">47</div>
          <div class="seat" data-seat-number="51">51</div>
        </div>
        <div class="seat-column2"></div>
        <div class="seat-column">
          <div class="seat" data-seat-number="4">4</div>
          <div class="seat" data-seat-number="8">8</div>
          <div class="seat" data-seat-number="12">12</div>
          <div class="seat" data-seat-number="16">16</div>
          <div class="seat" data-seat-number="20">20</div>
          <div class="seat" data-seat-number="24">24</div>
          <div class="seat" data-seat-number="28">28</div>
          <div class="seat" data-seat-number="32">32</div>
          <div class="seat" data-seat-number="36">36</div>
          <div class="seat" data-seat-number="40">40</div>
          <div class="seat" data-seat-number="44">44</div>
          <div class="seat" data-seat-number="48">48</div>
          <div class="seat" data-seat-number="52">52</div>
        </div>
        <div class="seat-column">
          <div class="seat" data-seat-number="5">5</div>
          <div class="seat" data-seat-number="9">9</div>
          <div class="seat" data-seat-number="13">13</div>
          <div class="seat" data-seat-number="17">17</div>
          <div class="seat" data-seat-number="21">21</div>
          <div class="seat" data-seat-number="25">25</div>
          <div class="seat" data-seat-number="29">29</div>
          <div class="seat" data-seat-number="33">33</div>
          <div class="seat" data-seat-number="37">37</div>
          <div class="seat" data-seat-number="41">41</div>
          <div class="seat" data-seat-number="45">45</div>
          <div class="seat" data-seat-number="49">49</div>
          <div class="seat" data-seat-number="53">53</div>
        </div>
      </div> -->

      <div class="seat-layout">
      <?php
// Uzimamo podatke o rezervaciji
$sql = "SELECT BrojSedista, Rezervacija FROM res";
$result = $conn->query($sql);

// Pravimo niz za ubacivanje rezervisanih mesta

$reserved_seats = array();

// Pravimo loop kroz rezultat upita i ubacujemo rezervisana mesta u niz
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if ($row["Rezervacija"] == 1) {
            $reserved_seats[] = $row["BrojSedista"];
        }
    }
}

// Prikazujemo sva sedista sa mestima koja su rezervisana 
// za svaku kolonu posebno, 4  kolone i seat-column2 kao prostor izmedju

echo '<div class="seat-layout">';
echo '<div class="seat-column">';
for ($i = 2; $i <= 50; $i += 4) {
    if (in_array($i, $reserved_seats)) {
        echo '<div class="seat reserved" data-seat-number="' . $i . '">' . $i . '</div>';
    } else {
        echo '<div class="seat" data-seat-number="' . $i . '">' . $i . '</div>';
    }
}
echo '</div>';

echo '<div class="seat-column">';
for ($i = 3; $i <= 51; $i += 4) {
    if (in_array($i, $reserved_seats)) {
        echo '<div class="seat reserved" data-seat-number="' . $i . '">' . $i . '</div>';
    } else {
        echo '<div class="seat" data-seat-number="' . $i . '">' . $i . '</div>';
    }
}
echo '</div>';

echo '<div class="seat-column2"></div>'; //razmak izmedju sedista, u css-u width samo

echo '<div class="seat-column">';
for ($i = 4; $i <= 52; $i += 4) {
    if (in_array($i, $reserved_seats)) {
        echo '<div class="seat reserved" data-seat-number="' . $i . '">' . $i . '</div>';
    } else {
        echo '<div class="seat" data-seat-number="' . $i . '">' . $i . '</div>';
    }
}
echo '</div>';

echo '<div class="seat-column">';
for ($i = 5; $i <= 53; $i += 4) {
    if (in_array($i, $reserved_seats)) {
        echo '<div class="seat reserved" data-seat-number="' . $i . '">' . $i . '</div>';
    } else {
        echo '<div class="seat" data-seat-number="' . $i . '">' . $i . '</div>';
    }
}
echo '</div>';
echo '</div>';

// Kraci kod, sa funkcijom
// function print_seats($start, $end, $reserved_seats) {
//   for ($i = $start; $i <= $end; $i += 4) {
//       $class = in_array($i, $reserved_seats) ? 'seat reserved' : 'seat';
//       echo "<div class=\"$class\" data-seat-number=\"$i\">$i</div>";
//   }
// }

// echo '<div class="seat-layout">';
// echo '<div class="seat-column">';
// print_seats(2, 50, $reserved_seats);
// echo '</div>';

// echo '<div class="seat-column">';
// print_seats(3, 51, $reserved_seats);
// echo '</div>';

// echo '<div class="seat-column2"></div>'; //razmak izmedju sedista, u css-u width samo

// echo '<div class="seat-column">';
// print_seats(4, 52, $reserved_seats);
// echo '</div>';

// echo '<div class="seat-column">';
// print_seats(5, 53, $reserved_seats);
// echo '</div>';
// echo '</div>';

?>

</div>
      <form
        class="reservation-form"
        action="submit_reservation.php"
        method="POST"
      >
        <div class="form-row">
          <label for="seat-number">Broj sedista:</label>
          <input
            type="text"
            id="seat-number"
            name="seat_number"
            required
            readonly
          />
        </div>
        <div class="form-row">
          <label for="first-name">Ime i prezime:</label>
          <input type="text" id="first-name" name="first_name" required />
        </div>
        <div class="form-row">
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" required />
        </div>
        <button type="submit">Posalji</button>
      </form>
    </div>
    <footer>&#169; Autobuska stanica</footer>
    <script src="script.js"></script>
  </body>
</html>

