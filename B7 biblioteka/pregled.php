<!DOCTYPE html>
<html>
  <head>
    <title>O autoru</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    />
  </head>
  <body class="loggedin">
    <div class="bibl">
      <h1>Biblioteka</h1>
    </div>
    <nav class="navtop">
      <div>
        <a href="pocetna.html"></i>Pocetna</a>
        <a href="pregled.php"></i>Pregled</a>
		<a href="o_autoru.html"></i>O autoru</a>
		<a href="uputstvo.html"></i>Uputstvo</a>
      </div>
    </nav>
    <div class="content">
      <?php

$xml = simplexml_load_file('biblioteka.xml');
$json = json_encode($xml);
$data = json_decode($json, true);

function cmp($a, $b)
{
    if ($a['citano'] == $b['citano']) {
        return 0;
    }
    return ($a['citano'] < $b['citano']) ? 1 : -1;
}

usort($data['knjiga'], 'cmp');

// print the sorted data as a table
echo "<table> <style>
table {
    border-collapse: collapse;
    width: 100%;
    margin:20px;
  }
  
  th, td {
    text-align: center;
    border: 1px solid black;
    padding: 8px;
  }
</style>";
echo "<tr><th>ISBN</th><th>Naslov</th><th>Stanje</th><th>Čitano</th></tr>";
foreach ($data['knjiga'] as $knjiga) {
    echo "<tr><td>" . $knjiga['@attributes']['ISBN'] . "</td><td>" . $knjiga['naslov'] . "</td><td>" . $knjiga['stanje'] . "</td><td>" . $knjiga['citano'] . "</td></tr>";
}
echo "</table>";
?>
    </div>
    <footer>Ⓒ Gradska Bibilioteka</footer>
  </body>
</html>

