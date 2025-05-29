<?php

    include_once 'config.php';

    $brojsedista = $_POST['bSedista'];
    $sql = "UPDATE sedista SET Rezervacija = b'1' WHERE BrojSedista = '$brojsedista'";
    $query = mysqli_query($conn, $sql);

?>