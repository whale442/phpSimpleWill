<?php 
include('authentication.php');  //db include in authentication.php
include('includes/header.php'); 
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>



<script type="text/javascript" src="static/js/home.js"></script>
<div class="container-fluid px-4">
    <h4 class="mt-4">Admin</h4>
    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    <li class="breadcrumb-item ">Create Simple Will</li>
    </ol>
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Create Simple Will
                <a href="simple-will-view.php" class="btn btn-primary float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                
                
        
            <form action="code.php" method="POST">
        
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label for="">Title</label>
                    <input type="text" name="person_title" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Surname</label>
                    <input type="text" name="person_surname"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">First Name</label>
                    <input type="text"  name="person_firstname" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Othername</label>
                    <input type="text" ame="person_othername"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Phone Number</label>
                    <input type="text" name="person_phone"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Address</label>
                    <input type="text" name="person_address"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Company Name</label>
                    <input type="text" name="person_company" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Company Address</label>
                    <input type="text" name="person_companyAddress" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                <label for="">Mean of Identification</label>
                <select name="person_means_of_id" required class="form-control">
                    <option value="">--Select Role--</option>
                    <option value=""> --Mean of Identification -- </option>
                        <option value="Voter Card">Voter Card</option>
                        <option value="International Passport">International Passport</option>
                        <option value="Driver's Licence">Driver's Licence</option>
                        <option value="Other">Other</option>
                </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Mean of Identification</label>
                    <input type="text" name="person_idNumber"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">PFA</label>
                    <input type="text" name="person_pfa" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Rsa-Number</label>
                    <input type="text"  name="person_rsaNumber" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                <label for="">Will Executor</label>
                <select name="will_executors" required class="form-control">
                    <option value=""> -- Select Will Executor -- </option>
                    <option value="Meristem Trustees">Meristem Trustees</option>
                    <option value="Trustees">Trustees</option>
                    <option value="Others">Others</option>
                </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">If Others, Please Specify</label>
                    <input type="text" name="will_executors_others" class="form-control">
                </div>

                </div>
                <div class="col-md-12 mb-3">
                   
               <br>
               <br>
               <br>



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
                                <select id="country1" name="person_bankName[]" required class="form-control" class="person_bankName frm-field required sect">
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

                                <td><input  id="person_accountNumber" name="person_accountNumber[]" type="number" class="form-control" class="person_moreAccountNumber" class="form-control"  value="" ></td>
                                <td><input  id="person_accountBranch" name="person_accountBranch[]" type="text"  value="" class="person_moreBranch form-control" ></td>
                            </tr>
                       
                    </tbody>
                </table>
                <center>  <br /><div class="button_ button_5 btn " id="addBankbtn" > Add more Bank </div><br /> 
          <br /></center> 

            </div>


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
                  <input type="text" id="beneficiary_fullname" name="beneficiary_fullname[]" class="beneficiary_fullname"   style="padding-left:5px;" placeholder="" >
                </td>
                <td>
                  <input type="text" id="beneficiary_address" name="beneficiary_address[]" class="beneficiary_address" style="padding-left:5px;" required="" placeholder="" >
                </td>
                <td>
                  <input type="number" id="beneficiary_phone" name="beneficiary_phone[]" class="beneficiary_phone" placeholder=""   style="padding-left:5px;">
                </td>
                <td>
                  <input type="text" id="beneficiary_email" name="beneficiary_email[]" class="beneficiary_email" style="padding-left:5px;" placeholder="">
                </td>
                <td>
                  <input type="text" id="beneficiary_shareValues" name="beneficiary_shareValues[]" class="beneficiary_shares" style="padding-left:5px;" placeholder="">
                </td>
               
              </tr>
            </tbody>
          </table>
          <center>  <br /><div class="button_ button_5" id="addBeneficiarybtn"> Add more Beneficiary </div><br /> 
            <br /></center> 
        </div>
      
        <div class="button_button_5">
        <div class="col-md-12 mb-3">
            <button type="submit" name="add_client" class="btn btn-primary">Create</button>
        </div>
      </div>

        </form>
        


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
