
<?php
include '../config/config.php';

// Vkládání dat do databáze

if (isset($_POST['submit'])) 
{
    $name = $_POST["name"];
    $city = $_POST["city"]; 

    $insert_query = "INSERT INTO 
                    teams(name, city) 
                    VALUES('$name','$city')";
    mysqli_query($conn,$insert_query);
}
    header("Location: ../prihlaska.php");

?>
