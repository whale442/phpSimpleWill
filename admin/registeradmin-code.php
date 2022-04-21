<?php 
session_start();
include('admin/config/dbcon.php');


if(isset($_POST['register_btn']))
{
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname =mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    if($password == $cpassword)
    {
        // Check Email
        $checkemail = "SELECT email FROM users WHERE email = '$email'";
        $checkemail_run = mysqli_query($con,$checkemail);

        if(mysqli_num_rows($checkemail_run) > 0)
        { 
            //Email Exists
            $_SESSION['message'] = "Email Already Exists";
            header('Location: register-admin.php');
             exit(0);
        }
        else 
        { 
            $user_query = "INSERT INTO users (fname, lname, email, password) VALUES ('$fname','$lname','$email','$password')";
            $user_query_run = mysqli_query($con, $user_query);

            //checking for recored that already exist in db
            if($user_query_run)
            {
                $_SESSION['message'] = "Register Successfully";
                header('Location: register-admin.php');
                 exit(0);
            }
            else 
            {
                $_SESSION['message'] = "Something went Wrong";
                header('Location: register-admin.php');
                 exit(0);
            }
        }

    }
    else
    {       //redirect to register page
        $_SESSION['message'] = "Password and Confirm Password does not Match";
        header('Location: register-admin.php');
         exit(0);
    }
}
else
{ 
    header('Location: register-admin.php');
    exit(0);
}




?>