<?php  include('authentication.php'); 

//delete user
if(isset($_POST['delete-btn']))
{
    $user_id = $_POST['delete-btn'];
    $query =  "DELETE FROM users  WHERE id ='$user_id' ";
    $query_run =mysqli_query($con, $query);

    if($query_run)
    {   
        $_SESSION['message'] = "Admin User deleted Successfully";
        header('Location: register-admin.php');
        exit(0);
    }
    else
    { 
        $_SESSION['message'] = "Something went wrong";
        header("Location: register-admin.php");
        exit(0);
    }
}


// Ajax 

if(isset($_POST['delete_btn_set']))
{
    $del_id = $_POST['delete_id'];

    $query =  "DELETE FROM users  WHERE id ='$del_id' ";
    $query_run =mysqli_query($con, $query);

}



//add user admin
// if(isset($_POST['add_admin']))
// {
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $role_as = $_POST['role_as'];
//     $status = $_POST['status'] == true ? '1':'0';
  
    
//     $query  = "INSERT INTO users (fname, lname, email, password, role_as, status) 
//         VALUES ('$fname', '$lname', '$email', '$password', '$role_as' '$status')";

//     $query_run = mysqli_query($con, $query);

//     if($query_run)
//     {   
//         $_SESSION['message'] = "Admin User Added Successfully";
//         header('Location: view-register.php');
//         exit(0);
//     }
//     else
//     { 
//         $_SESSION['message'] = "Something went wrong";
//         header('Location: view-register.php');
//         exit(0);
//     }
// }




//Edit users

if(isset($_POST['update_user']))
{
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1':'0';

    $query = "UPDATE users SET fname='$fname', lname='$lname', email='$email', password='$password', role_as='$role_as', status='$status' WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    { 
        $_SESSION['message'] = "Updated Successfully";
        header("Location: register-admin.php");
        exit(0);
    }
}



if(isset($_POST['update_client']))
{
    $person_title = filter_var($_POST['person_title'],  FILTER_SANITIZE_STRING);
    $person_surname = filter_var($_POST['person_surname'], FILTER_SANITIZE_STRING);
    $person_firstname = filter_var($_POST['person_firstname'], FILTER_SANITIZE_STRING);
    $person_othername = filter_var($_POST['person_othername'], FILTER_SANITIZE_STRING);
    $person_phone = filter_var($_POST['person_phone'], FILTER_SANITIZE_STRING);
    $person_address = filter_var($_POST['person_address'], FILTER_SANITIZE_STRING);
    $person_bankName = filter_var($_POST['person_bankName'], FILTER_SANITIZE_STRING);
    $person_company = filter_var($_POST['person_company'], FILTER_SANITIZE_STRING);
    $person_companyAddress = filter_var($_POST['person_companyAddress'], FILTER_SANITIZE_STRING);
    $person_means_of_id = filter_var($_POST['person_means_of_id'], FILTER_SANITIZE_STRING);
    $person_idNumber = filter_var($_POST['person_idNumber'], FILTER_SANITIZE_STRING);
    $person_rsaNumber =  filter_var($_POST['person_rsaNumber'], FILTER_SANITIZE_STRING);
    $person_pfa =  filter_var($_POST['person_pfa'], FILTER_SANITIZE_STRING);
    $will_executors =  filter_var($_POST['will_executors'], FILTER_SANITIZE_STRING);
    $will_executor_others =  filter_var($_POST['will_executors_others'], FILTER_SANITIZE_STRING);
   
$banks="";
extract($_POST);

$banks =   explode("#",$person_bankName);
$accounts =   explode("#",$person_accountNumber);
$branch =   explode("#",$person_accountBranch);
$beneficiary_fullname =   explode("#",$beneficiary_fullname);
$beneficiary_address =   explode("#",$beneficiary_address);
$beneficiary_phone =   explode("#",$beneficiary_phone);
$beneficiary_email =   explode("#",$beneficiary_email);
$beneficiary_shareValues =   explode("#",$beneficiary_shareValues);

   $query = "UPDATE clients SET person_title='$person_title', person_surname='$person_surname', person_firstname='$person_firstname', person_othername='$person_othername', person_phone='$person_phone', person_address='$person_address',  person_company='$person_rsaNumber', person_companyAddress='$person_companyAddress', person_means_of_id='$person_means_of_id',  person_idNumber='$person_idNumber', person_pfa='$person_pfa', person_rsaNumber='$person_rsaNumber', will_executors='$will_executors', will_executors_others='$will_executor_others', banks='$banks', accounts='$accounts', branch='$branch',  beneficiary_fullname='$beneficiary_fullname', beneficiary_address='$beneficiary_address', beneficiary_phone='$beneficiary_phone',beneficiary_email='$beneficiary_email',	beneficiary_shareValues='$beneficiary_shareValues'  WHERE id='$user_id' ";

   $query_run = mysqli_query($con, $query);

   if($query_run)
   { 
       $_SESSION['message'] = "Updated Successfully";
       header("Location: simple-will-view.php");
       exit(0);
   }
}

// add

if(isset($_POST['add_client']))
{
    $person_title = filter_var($_POST['person_title'],  FILTER_SANITIZE_STRING);
    $person_surname = filter_var($_POST['person_surname'], FILTER_SANITIZE_STRING);
    $person_firstname = filter_var($_POST['person_firstname'], FILTER_SANITIZE_STRING);
    $person_othername = filter_var($_POST['person_othername'], FILTER_SANITIZE_STRING);
    $person_phone = filter_var($_POST['person_phone'], FILTER_SANITIZE_STRING);
    $person_address = filter_var($_POST['person_address'], FILTER_SANITIZE_STRING);
    $person_bankName = filter_var($_POST['person_bankName'], FILTER_SANITIZE_STRING);
    $person_company = filter_var($_POST['person_company'], FILTER_SANITIZE_STRING);
    $person_companyAddress = filter_var($_POST['person_companyAddress'], FILTER_SANITIZE_STRING);
    $person_means_of_id = filter_var($_POST['person_means_of_id'], FILTER_SANITIZE_STRING);
    $person_idNumber = filter_var($_POST['person_idNumber'], FILTER_SANITIZE_STRING);
    $person_rsaNumber =  filter_var($_POST['person_rsaNumber'], FILTER_SANITIZE_STRING);
    $person_pfa =  filter_var($_POST['person_pfa'], FILTER_SANITIZE_STRING);
    $will_executors =  filter_var($_POST['will_executors'], FILTER_SANITIZE_STRING);
    $will_executor_others =  filter_var($_POST['will_executors_others'], FILTER_SANITIZE_STRING);
   
$banks="";
extract($_POST);

$banks =   explode("#",$person_bankName);
$accounts =   explode("#",$person_accountNumber);
$branch =   explode("#",$person_accountBranch);
$beneficiary_fullname =   explode("#",$beneficiary_fullname);
$beneficiary_address =   explode("#",$beneficiary_address);
$beneficiary_phone =   explode("#",$beneficiary_phone);
$beneficiary_email =   explode("#",$beneficiary_email);
$beneficiary_shareValues =   explode("#",$beneficiary_shareValues);

   $sql = "INSERT INTO clients (person_title, person_surname, person_firstname, person_othername, person_phone, person_address, person_company, person_companyAddress, person_means_of_id, person_idNumber, person_pfa, person_rsaNumber, will_executors, will_executors_others,banks, accounts, branch, beneficiary_fullname, beneficiary_address,beneficiary_phone,beneficiary_email,	beneficiary_shareValues) VALUES ('$person_title', '$person_surname', '$person_firstname', '$person_othername','$person_phone', '$person_address', '$person_company', '$person_companyAddress', '$person_means_of_id', '$person_idNumber', '$person_pfa','$person_rsaNumber', '$will_executors', '$will_executor_others', '$banks','$accounts', '$branch', '$beneficiary_fullname','$beneficiary_address', '$beneficiary_phone','$beneficiary_email','$beneficiary_shareValues')";
 
 
   if (mysqli_query($con, $sql)) {
   
    {   
        $_SESSION['message'] = "Simple will added successfully.";
        header('Location: simple-will-view.php');
        exit(0);
    }
    
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
 
  
  mysqli_close($con);




}




//register admin


if(isset($_POST['register_btn']))
{
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname =mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    // $created_date = created_date('Y-m-d', strtotime(str_replace('-', '/', $created_date)));
    // $created_date = date('Y-m-d H:i:s', strtotime(str_replace('-', '/',  $created_date)));
    // date('d-m-Y', strtotime($date));
    // $date = date('Y-m-d H:i:sa', $timestamp)


 
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
            $user_query = "INSERT INTO users (fname, lname, email, password) VALUES ('$fname','$lname','$email', '$password')";
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













