<?php 


session_start(); 

if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You're already Logged In";
    header("Location: index.php");
    exit(0);
}

include('authentication.php');  //db include in authentication.php
include('includes/header.php'); 

?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <!-- Alerts Message -->
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                    <form action="registercode.php" method="POST">
                        <div class="form-group mb-3">
                           <label>First Name</label>
                           <input required type="text" name="fname" placeholder="Enter First Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                           <label>Last Name</label>
                           <input required type="text" name="lname" placeholder="Enter Last Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email Address</label>
                            <input required type="email" name="email" placeholder="Enter Email Address" class="form-control">
                         </div>
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input required type="password" name="password" placeholder="Enter password" class="form-control">
                         </div>
                        <div class="form-group mb-3">
                            <label>Confirm Password</label>
                            <input required type="password" name="cpassword" placeholder="Enter Confirm password" class="form-control">
                         </div>
                        
                        <div class="form-group mb-3">
                           <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
                         </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>
