

<!DOCTYPE html>
<html>
  <head>
    <title>Client Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"  />

<link rel="stylesheet" href="static/css1/home.css">
<!-- <link rel="stylesheet" href="static/css1/modal.css"> -->
<!-- <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'> -->
<!-- table -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


<script type="text/javascript" src="static/js/home.js"></script>

<!-- <link href="static/css/meris.css" rel='stylesheet' type='text/css' /> -->

<!-- <link rel="stylesheet" href="static/css/styled.css"> -->

  </head>
  <body>


  <!-- script end -->
    <div class="testbox">
    <!-- <form method="post" action="client.php"> -->
    <form action="clients.php" method="post" enctype="multipart/form-data">
      <div class="banner">
        <h1>Client Information </h1>
      </div>
      <br/>
      <fieldset>
        <legend>Client Details</legend>
        <div class="colums">
          <div class="phone_email">
            <label>Title<span>*</span></label>
            <input type="text" name="person_title" id="person_title" placeholder="e.g Mr." />
          </div>
          <div class="phone_email phone_email1">
            <label> Surname<span>*</span></label>
            <input type="text" id="person_surname" name="person_surname" placeholder="" />
          </div>
          <div class="phone_email">
            <label>Firstname<span>*</span></label>
            <input type="text" id="person_firstname" name="person_firstname" placeholder="" />
          </div>
          <div class="phone_email phone_email1">
            <label>Othername<span>*</span></label>
            <input type="text" id="person_othername" name="person_othername" placeholder="" />
          </div>
          <div class="phone_email">
            <label>Phone Number<span>*</span> </label>
            <input type="number"  id="person_phone" name="person_phone" placeholder=""  />
          </div>
          <div class="phone_email phone_email1">
            <label>Address<span>*</span></label>
            <input type="text" id="person_address" name="person_address" placeholder="" />
          </div>
          <div class="phone_email">
            <label>Company Name<span>*</span></label>
            <input type="text" id="person_company" name="person_company" placeholder=""  />
          </div>
          <div class="phone_email phone_email1">
            <label>Company Address<span>*</span></label>
            <input type="text" id="person_companyAddress" name="person_companyAddress" placeholder=""  />
          </div>
          
            <div class="item position-item">
            <label>Mean of Identification<span>*</span></label>
            <select id="country1" name="person_means_of_id" required class="frm-field required sect" style="height:40px;border-radius:0px">
                <option value=""> --Mean of Identification -- </option>
                <option value="Voter Card">Voter Card</option>
                <option value="International Passport">International Passport</option>
                <option value="Driver's Licence">Driver's Licence</option>
                <option value="Other">Other</option>
              </select>
            </div>
          <div class="item">
            <label>Identification Number<span>*</span></label>
            <input  id="person_idNumber" name="person_idNumber" type="text" value="">
          </div>
          <div class="item">
            <label>PFA<span>*</span></label>
            <input  id="person_pfa" name="person_pfa" type="text" value="">
          </div>
          <div class="item">
            <label>Rsa-Number<span>*</span></label>
            <input  id="person_rsaNumber" name="person_rsaNumber" type="text" value="">
          </div>
          <div class="item position-item">
            <label> Will Executor<span>*</span></label>
            <select id="country1" name="will_executors" required class="frm-field required sect" style="height:40px;border-radius:0px">
                <option value=""> -- Select Will Executor -- </option>
                <option value="Meristem Trustees">Meristem Trustees</option>
                <option value="Trustees">Trustees</option>
                <option value="Others">Others</option>
              </select>
            </div>
          <div class="item">
            <label>If Others, Please Specify</label>
            <input  id="will_executors_others" name="will_executors_others" type="text" value="">
          </div>
      </fieldset>
      <br/>
      <fieldset>
        <legend>Bank Details</legend>
        <div class="container">
          <table id="bankDetails">
            <thead>
              <tr>
                <th>Bank Name</th>
                <th>Account Number</th>
                <th>Branch</th>
                <!-- <th width="50px"> -->
                  <div class="action_container">
                    <!-- <div class="succes" id="addBankbtn"> -->
                      <!-- <i class="fa fa-plus"></i> -->
                    </div>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="book_date">
                    <select id="country1" name="person_bankName[]"  class="person_bankName frm-field required sect" style="height:40px;border-radius:0px">
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
                <td>
                  <input  id="person_accountNumber" name="person_accountNumber[]" type="number" class="person_moreAccountNumber"  value="" >
                </td>
                <td>
                  <input  id="person_accountBranch" name="person_accountBranch[]" type="text"  value="" class="person_moreBranch" >
                </td>
                <!-- <td>
                  <div class="action_container">
                    <button class="danger" id="addBankbtn">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                </td> -->
              </tr>
            </tbody>
          </table>
          <center>  <br /><div class="button_ button_5" id="addBankbtn"> Add more Bank </div><br /> 
          <br /></center> 
        </div>
      </fieldset>
      <br/>
      <fieldset>
        <legend>Beneficiary Details</legend>
        <div class="container">
          <table id="beneficiaryTable">
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
                <!-- <td>
                  <div class="action_container">
                    <button class="danger" onclick="remove_tr(this)">
                      <i class="fa fa-close"></i>
                    </button>
                  </div>
                </td> -->
              </tr>
            </tbody>
          </table>
          <center>  <br /><div class="button_ button_5" id="addBeneficiarybtn"> Add more Beneficiary </div><br /> 
            <br /></center> 

        </div>
      </fieldset>
      
   <br /> 
   <center> 
   <a href="javascript:void(0)" >
       
        <div class="button_button_5">
        <span id="submitReviewbtn"> <input type="button" name="submit"  value="Submit"  /> </span>
      </div>
    </a>
    </center>

<div id="light" class="white_content"><span style="color:greenyellow">Kindly review before submitted ..... </span>
<a href="javascript:void(0)" id="close"  style="float:right">Cancel</a>
<br /><br />
<table style="width:100%;font-size:13px">
  <tr>
      <td>
          <table>
              
             <tr>
                <td colspan="2"><b>DETAILS...</b></td>
             </tr>
             <tr>
                <td>Title:</td>
                <td><p id="person_title_review"></p></td>
             </tr>
             <tr>
                <td>Surname:</td>
                <td><p id="person_surname_review"></p></td>
             </tr>
             <tr>
                <td>Othernames: </td>
                <td><p id="person_othername_review"></p></td>
             </tr>
             <tr>
                <td>Phone: </td>
                <td><p id="person_phone_review"></td>
             </tr>
             <tr>
                <td>Address: </td>
                <td><p id="person_address_review"></td>
             </tr>
             <tr>
                <td>Company Name: </td>
                <td><p id="person_companyName_review"></td>
             </tr>
             <tr>
                <td>Company Address: </td>
                <td><p id="person_companyAddress_review"></td>
             </tr>
          </table> 
          <br />
          <table id="beneficiaryReviewDetails">
              <tr>
                  <td colspan="5">BENEFICIARIES</td>
              </tr>
              
              
          </table>
      </td>
     <td>
         
          <table>
             <tr>
                <td colspan="2">IDENTIFICATION</td>
             </tr>
             <tr>
                <td>TYPE:</td>
                <td><p id="person_idtype_review"></td>
             </tr>
             <tr>
                <td>ID-Number:</td>
                <td><p id="person_idnumber_review"></td>
             </tr>
             
          </table> 
          <br />
          <table>
             <tr>
                  <td colspan="2">OTHERS</td>
              </tr>
             <tr>
                <td>PFA: </td>
                <td><p id="person_pfa_review"></td>
             </tr>
             <tr>
                <td>RSA-Number: </td>
                <td><p id="person_rsaNumber_review"></td>
             </tr>
             
          </table> 
          <br />
          
          <table id="bankReviewDetails">
             <tr>
                <td colspan="3">BANK DETAILS</td>
             </tr>
             
             
          </table> 
         
      </td>
  </tr>
</table>
<br />	
<center> <input type="submit" name="submit" value="Proceed"  > </center>	

</form>
</div>
<div id="fade" class="black_overlay"></div>
 </div>

<script src="static/js/bank.js"></script>

<!-- <script>
$(document).ready(function(){

 $("#table_body").on('click','.create_tr',function(){
       $(this).closest('tr').add();
      
     });

});


$(document).ready(function(){

$("#table").on('click','.create_table',function(){
      $(this).closest('tr').add();
    });

});
</script> -->


<script type="text/javascript" src="static/js/jquery-2.1.4.min.js"></script>
<!-- Calendar -->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <!-- <script src="static/js/jquery-ui.js"></script> -->
<script>
    $(function() {
      $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
    });
</script>
</body>
</html>


