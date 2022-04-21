<?php 

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "clients_user";
// $dbname = "will";
// $dbname = "info";

 

$con= mysqli_connect($host, $username, $password, $dbname);

if(!$con)
// if ($con->connect_error)
{
    header("Location: ./errors/dberror.php");
        die();
}

?>