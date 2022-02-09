<?php

$conn = new mysqli( $host ="localhost", $username ="root", $passwd ="root", $dbname= "clients");


if ($conn -> connect_error) {
    echo "Faild to connect to MYSQL: " . $conn -> connect_error;
    exit();
}

?>

 <!-- database name => staff
        $conn = mysqli_connect("localhost", "root", "", "staff");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error()); -->
