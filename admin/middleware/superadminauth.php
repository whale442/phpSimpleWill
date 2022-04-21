<?php 

if( $_SESSION['auth_role'] != "2")
{
    $_SESSION['message'] = "You're not Authorised as SuperAdmin";
    header("Location: simple-will-view.php");
    exit(0);
}
else
{ 
    if( $_SESSION['auth_role'] != "2")
{
    $_SESSION['message'] = "You're not Authorised as SuperAdmin";
    header("Location: simple-will-view.php");
    exit(0);
}
}
?>