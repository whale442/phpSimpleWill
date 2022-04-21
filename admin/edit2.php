<?php 
include('authentication.php');  //db include in authentication.php
include('includes/header.php'); 
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>



<script type="text/javascript" src="static/js/home.js"></script>
    <div class="container-fluid px-4"> 
     <h4 class="mt-4"></h4>
    <!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    <li class="breadcrumb-item ">Edit Simple Will</li>
    </ol> -->
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Simple Will
                <a href="simple-will-view.php" class="btn btn-primary float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                 
            <?php
                if(isset($_GET['profile_id']))
                {
                    $user_id = $_GET['profile_id'];
                    $clients = "SELECT * FROM profile WHERE profile_id='$user_id'";
                    $clients_run = mysqli_query($con, $clients);

                    //getting data from beneficiary table
                    $clients = "SELECT * FROM beneficiary WHERE profile_id='$user_id'";
                    $beneficiary_run = mysqli_query($con, $clients);

                    //getting data from bank table
                    $clients = "SELECT * FROM bank WHERE profile_id='$user_id'";
                    $bank_run = mysqli_query($con, $clients);


                    // to check if record exist in db
                    if(mysqli_num_rows($clients_run) > 0)
                   
                    { 
                            // if record fund
                            foreach($clients_run as $user)
                        
                        {
                           
                        ?>
                           
                
        
            <form action="code.php" method="POST">
            <input type="hidden" name="user_id" value="<?=$user['profile_id']?>">
        
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label for="">Title</label>
                    <input type="text" name="person_title" value="<?=$user['person_title'];?>"   class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Surname</label>
                    <input type="text" name="person_surname" value="<?=$user['person_surname'];?>"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">First Name</label>
                    <input type="text"  name="person_firstname" value="<?=$user['person_firstname'];?>" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Othername</label>
                    <input type="text" ame="person_othername" value="<?=$user['person_othername'];?>"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Phone Number</label>
                    <input type="text" name="person_phone" value="<?=$user['person_phone'];?>"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Address</label>
                    <input type="text" name="person_address" value="<?=$user['person_address'];?>" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Company Name</label>
                    <input type="text" name="person_company"  value="<?=$user['person_company'];?>"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Company Address</label>
                    <input type="text" name="person_companyAddress" value="<?=$user['person_companyAddress'];?>" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                <label for="">Mean of Identification</label>
                <select name="person_means_of_id" r value="<?=$user['person_means_of_id'];?>" equired class="form-control">
                    <option value="">--Select Role--</option>
                    <option value=""> --Mean of Identification -- </option>
                        <option value="Voter Card" <?= $user['role_as'] == 'Voter Card' ? 'selected':''?> >voter </option>
                        <option value="International Passport"<?= $user['role_as'] == 'International Passport' ? 'selected':''?>>internal</option>
                        <option value="Driver's Licence"><?= $user['role_as'] == 'Drivers Licence' ? 'selected':''?>>driver</option>
                        <option value="Others" <?= $user['role_as'] == 'Others' ? 'selected':''?>>Other</option>
                </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Mean of Identification</label>
                    <input type="text" name="person_idNumber"  value="<?=$user['person_idNumber'];?>"   class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">PFA</label>
                    <input type="text" name="person_pfa"  value="<?=$user['person_pfa'];?>" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Rsa-Number</label>
                    <input type="text"  name="person_rsaNumber"  value="<?=$user['person_rsaNumber'];?>"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                <label for="">Will Executor</label>
                <select name="will_executors" value="<?=$user['"will_executors'];?>"  required class="form-control">
                    <option value=""> -- Select Will Executor -- </option>
                    <option value="Meristem Trustees">Meristem Trustees</option>
                    <option value="Trustees">Trustees</option>
                    <option value="Others">Others</option>
                </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">If Others, Please Specify</label>
                    <input type="text" name="will_executors_others" value="<?=$user['will_executors_others'];?>" class="form-control">
                </div>

                </div>
                <div class="col-md-12 mb-3">
                   
               <br>
               <br>
               <br>
        
        <?php
            }
            // if record fund
            foreach($bank_run as $bank)
        
        {
            
        ?>

 <table class="table table-bordered" id="bankDetails">
                    <thead>
                        <tr>
                            <th>Bank Name</th>
                            <th>Account Number</th>
                            <th>Branch</th>
                        </tr>
                    </thead>
                    <tbody> 
                                <tr>
                                <td>
                                <div class="book_date">
                                <select id="country1" name="banks" value="<?=$bank['banks'];?>" required class="form-control" class="person_bankName frm-field required sect">
                                                    <option value=""> -- Select Bank -- </option>
                                                    <option value="Access Bank">Access Bank</option>
    												<option value="Diamond Bank">Diamond Bank</option>   
    												<option value="EcoBank">EcoBank</option>   
    												<option value="FirstBank">First Bank</option> 
    												<option value="FCMB Bank">FCMB Bank</option>  
    												<option value="Fidelity Bank">Fidelity Bank</option> 
    												<option value="GTBank">GTBank</option>  
    												<option value="Heritage Bank">Heritage Bank</option>
    												<option value="Polaris Bank">Polaris Bank</option>
    												<option value="Providus Bank">Providus Bank</option>
    												<option value="Stanbic IBTC Bank">Stanbic IBTC Bank</option> 
    												<option value="Sterling Bank">Sterling Bank</option>
    												<option value="SunTrust Bank">SunTrust Bank</option> 
    												<option value="Unity Bank">Unity Bank</option> 
    												<option value="Union Bank">Union Bank</option>  
    												<option value="UBA Bank">UBA Bank</option> 
    												<option value="Wema Bank">Wema Bank</option> 
    												<option value="Zenith Bank">Zenith Bank</option>
    												<option value="Others">Others</option>
                 
                                </select>
                                </td>

                                <td><input  id="person_accountNumber" value="<?=$bank['accounts'];?>" name="person_accountNumber[]" type="number" class="form-control" class="person_moreAccountNumber" class="form-control"  value="" ></td>
                                <td><input  id="person_accountBranch" name="person_accountBranch[]" type="text"  value="<?=$bank['branch'];?>" class="person_moreBranch form-control" ></td>
                            </tr>
                       
                    </tbody>
                </table>
                <center>  <br /><div class="button_ button_5 btn " id="addBankbtn" > Add more Bank </div><br /> 
          <br /></center> 

            </div>

        
            <?php

                }
                // if record fund
                foreach($beneficiary_run as $beneficiary)
             {
                
            ?>
          <table class="table table-bordered" id="beneficiaryTable">
            <thead>
              <tr>
                <th>Full Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Value or (%)</th>
                <!-- <th width="50px"> -->
                  <div class="action_container">
                    <!-- <div class="succes" id="addBeneficiarybtn"> -->
                      <!-- <i class="fa fa-plus"></i> -->
                    
                    </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <input type="text" id="beneficiary_fullname" name="beneficiary_fullname[]" class="beneficiary_fullname" value="<?=$beneficiary['beneficiary_fullname'];?>"   style="padding-left:5px;" placeholder="" >
                </td>
                <td>
                  <input type="text" id="beneficiary_address" name="beneficiary_address[]" class="beneficiary_address" style="padding-left:5px;" value="<?=$beneficiary['beneficiary_address'];?>"  required="" placeholder="" >
                </td>
                <td>
                  <input type="text" id="beneficiary_phone" name="beneficiary_phone[]" class="beneficiary_phone" placeholder=""  value="<?=$beneficiary['beneficiary_phone'];?>" style="padding-left:5px;">
                </td>
                <td>
                  <input type="text" id="beneficiary_email" name="beneficiary_email[]" class="beneficiary_email" style="padding-left:5px;" value="<?=$beneficiary['beneficiary_email'];?>" placeholder="">
                </td>
                <td>
                  <input type="text" id="beneficiary_shareValues" name="beneficiary_shareValues[]" class="beneficiary_shares" style="padding-left:5px;" value="<?=$beneficiary['beneficiary_shareValues'];?>" </td>
               
              </tr>
            </tbody>
          </table>
          <center>  <br /><div class="button_ button_5" id="addBeneficiarybtn"> Add more Beneficiary </div><br /> 
            <br /></center> 
        </div>
        <div class="col-md-12 mb-3">
            <button type="submit" name="update_client" class="btn btn-primary">Update </button>
        </div>
        </form>
        
        <?php
                    }
            } else{
                ?>
                    <h4>No Record Found</h4>
                <?php
            }
        }
                    
                ?>
        


            </div>
        </div>
    </div>
</div>
</div>
<link rel="stylesheet" href="static/css/form.css">

<<script type="text/javascript" src="static/js/jquery-2.1.4.min.js"></>
<!-- Calendar -->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <!-- <script src="static/js/jquery-ui.js"></script> -->
<script>
    $(function() {
      $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
    });
</script>


<?php 
// include('includes/footer.php');
include('includes/scripts.php');
?>
