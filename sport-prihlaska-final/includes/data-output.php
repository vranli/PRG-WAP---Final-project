<?php 

include 'config/config.php';

// Generování dat z databáze

$sql = "SELECT idTeams, name, city FROM teams";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>City</th><th>Name</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["idTeams"]."</td><td>".$row["name"]." ".$row["city"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();

?>