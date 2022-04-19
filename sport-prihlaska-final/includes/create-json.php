<?php 

include 'config/config.php';


    //Výběr dat z databáze

    $sql = "SELECT * FROM teams";
    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($connection));


    //Vytváření json pole

    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

    
    //Zapisování dat do data.json

    $fp = fopen('data.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
?>

