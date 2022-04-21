<?php
include('authentication.php'); 
include('middleware/superadminauth.php'); 




//delete client
if(isset($_POST['delete-clients']))
{
    $user_id = $_POST['delete-clients'];
    $query =  "DELETE FROM clients  WHERE id ='$user_id' ";
    $query_run =mysqli_query($con, $query);

    if($query_run)
    {   
        $_SESSION['message'] = "Client deleted Successfully";
        header('Location: simple-will-view.php');
        exit(0);
    }
    else
    { 
        $_SESSION['message'] = "Something went wrong";
        header("Location: simple-will-view.php");
        exit(0);
    }
}

?>
