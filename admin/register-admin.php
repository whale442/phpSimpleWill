<?php
include('authentication.php'); //db include in authentication.php
include('middleware/superadminauth.php');  
include('includes/header.php'); 
?>

<div class="container-fluid px-4">
    <!-- <h4 class="mt-4">User</h4> -->
    <ol class="breadcrumb mb-4">
    <!-- <li class="breadcrumb-item active">Dashboard</li> -->
    <!-- <li class="breadcrumb-item ">Users</li> -->
    </ol>
    <div class="row">

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Profile</h5>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div  class="modal-body">

      <form action="code.php" method="POST" >
      <!-- <table id="myTable"  class="table table-striped table-bordered"> -->
      <div class="form-group">
                <label> First Name </label>
                <input type="text" name="fname" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Last Name </label>
                <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label>Email Address </label>
                <input type="email" name="email" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
      </div>
      </form>
    </div>
  </div>
</div>
     

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Admin Profile 
</button>
    </h6>
</div>

<?php include('includes/form.php'); ?>





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>