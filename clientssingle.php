<!-- this code is met for the single table  -->
<?php 
session_start();
include('admin/config/dbcon.php');
require('mail.php');  



if(isset($_POST['submit']))
{
    $person_title =  filter_var($_POST['person_title'],  FILTER_SANITIZE_STRING);
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
   
// $banks="";
extract($_POST);

$banks =  implode("#",$person_bankName);
$accounts =  implode("#",$person_accountNumber);
$branch =  implode("#",$person_accountBranch);
$beneficiary_fullname =  implode("#",$beneficiary_fullname);
$beneficiary_address =  implode("#",$beneficiary_address);
$beneficiary_phone =  implode("#",$beneficiary_phone);
$beneficiary_email =  implode("#",$beneficiary_email);
$beneficiary_shareValues =  implode("#",$beneficiary_shareValues);

   $sql = "INSERT INTO clients (person_title, person_surname, person_firstname, person_othername, person_phone, person_address, person_company, person_companyAddress, person_means_of_id, person_idNumber, person_pfa, person_rsaNumber, will_executors, will_executors_others,banks, accounts, branch, beneficiary_fullname, beneficiary_address,beneficiary_phone,beneficiary_email,	beneficiary_shareValues) VALUES ('$person_title', '$person_surname', '$person_firstname', '$person_othername','$person_phone', '$person_address', '$person_company', '$person_companyAddress', '$person_means_of_id', '$person_idNumber', '$person_pfa','$person_rsaNumber', '$will_executors', '$will_executor_others', '$banks','$accounts', '$branch', '$beneficiary_fullname','$beneficiary_address', '$beneficiary_phone','$beneficiary_email','$beneficiary_shareValues')";


 

   if (mysqli_query($con, $sql)) {
    // echo "record created successfully";
    
   
  
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
 
  
  mysqli_close($con);





}

?>
<style>

/* The Modal (background) */
.modal {
display: none; 
position: fixed; 
z-index: 1; 
padding-top: 190px; 
left: 0;
top: 0;
width: 100%;
height: 100%; 
overflow: auto; 
background-color: rgb(0,0,0); 
background-color: rgba(0,0,0,0.4); 

}

/* Modal Content */
.modal-content {
background-color: #fefefe;
margin: auto;
padding: 20px;
border: 1px solid #888;
width: 50%;
}

/* The Close Button */
.close {
color: #aaaaaa;
float: right;
font-size: 28px;
font-weight: bold;
}

.close:hover,
.close:focus {
color: #000;
text-decoration: none;
cursor: pointer;
}
</style>



<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content" style="text-align:center">
  <span class="close">&times;</span>
  <p><h1 > Thank you for filling out your information!</h1></p>
  <p> <?php echo "<b>".$person_firstname." ". $person_surname."</b>" ?> ,Your details have been submitted<p>
  <p> We have received your request and will call you back within 24 hours </p>
  <p>You means the world to us</p>
 
 </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the page loads and details submitted , open the modal 
window.onload = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
window.location = "http://localhost:8888/clientsimple/";
}


</script>
    

    
    
   



