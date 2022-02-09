<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "clients_user";

 

$conn = mysqli_connect($servername, $username, $password, $myDB);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
 
}
?>


<!-- $pdo = new PDO('mysql:host=localhost;port=3306;dbname=clients_user', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); -->



