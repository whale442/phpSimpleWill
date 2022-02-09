
<?php require_once "connect.php"; 

?>


<?php
if(isset($_POST['submit']))
{
    $person_title = filter_var($_POST['person_title'], FILTER_SANITIZE_STRING);
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
    $will_executor =  filter_var($_POST['will_executors'], FILTER_SANITIZE_STRING);
    $will_executor_others =  filter_var($_POST['will_executors_others'], FILTER_SANITIZE_STRING);

$banks="";
extract($_POST);

$banks =  implode("#",$person_bankName);
$accounts =  implode("#",$person_accountNumber);
$branch =  implode("#",$person_accountBranch);
$beneficiary_fullname =  implode("#",$beneficiary_fullname);
$beneficiary_address =  implode("#",$beneficiary_address);
$beneficiary_phone =  implode("#",$beneficiary_phone);
$beneficiary_email =  implode("#",$beneficiary_email);
$beneficiary_shareValues =  implode("#",$beneficiary_shareValues);

   $sql = "INSERT INTO clients (person_title, person_surname, person_firstname,person_othername person_phone, person_address, person_company, person_companyAddress, person_pfa, rsa_number,person_bankName,person_accountNumber,person_means_of_id,person_means_of_id_number, beneficiary_fullname beneficiary_address,beneficiary_phone,beneficiary_email,shares,person_accountBranch,will_executor will_executor_others) 
        VALUES ('$person_title', '$person_surname', '$person_firstname','$person_othername','$person_phone','$person_address','$person_company', '$person_companyAddress','$person_pfa','$person_rsaNumber','$banks','$accounts','$person_means_of_id','$person_idNumber', '$beneficiary_fullname','$beneficiary_address', '$beneficiary_phone','$beneficiary_email','$beneficiary_shareValues','$branch','$will_executor','$will_executor_others')";

 
 
    if (mysqli_query($conn, $sql)) {
      
  
    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
   
    
    mysqli_close($conn);

}
 
?>



