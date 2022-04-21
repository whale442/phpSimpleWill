<?php 
session_start();
include('config/dbcon.php');

if(!isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Login to Access Dashboard";
    header("Location: ../login.php");
    // header('Location: reset.php?username='.$username);
    exit(0);
}
else
{ 
    if($_SESSION['auth_role'] != "1" && $_SESSION['auth_role'] != "2")
    {
        $_SESSION['message'] = "You're not Authorised as ADMIN";
        header("location: ../login.php");
        // header('Location: reset.php?username='.$username);
        exit(0);
    }
}
?>