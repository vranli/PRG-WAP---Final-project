<?php
$servername = "sql4.webzdarma.cz";

$dbname = "ukfotbalwzcz8545";

// Navázání spojení s databází

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,"SET CHARACTER SET utf8");


// Kontrola spojení s databází

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

