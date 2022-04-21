<!-- clients.php->index.html -->
<?php 
session_start();
include('admin/config/dbcon.php');
 



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
// extract($_POST);
// $info=$_POST['id'];
// $banks =  array_map("mysql_real_escape_string", $_POST['person_bankName']);
// $accounts =  array_map("mysql_real_escape_string", $_POST['person_accountNumber']);
// $branch =   array_map("mysql_real_escape_string", $_POST['person_accountBranch']);
// $beneficiary_fullname =   array_map("mysql_real_escape_string", $_POST['beneficiary_fullname']);
// $beneficiary_address =   array_map("mysql_real_escape_string", $_POST['beneficiary_address']);
// $beneficiary_phone =   array_map("mysql_real_escape_string", $_POST['beneficiary_phone']);
// $beneficiary_email =   array_map("mysql_real_escape_string", $_POST['beneficiary_email']);
// $beneficiary_shareValues =   array_map("mysql_real_escape_string", $_POST['beneficiary_shareValues']);

// $banks =  implode("mysql_real_escape_string",$person_bankName);
// $accounts =  implode("mysql_real_escape_string",$person_accountNumber);
// $branch =  implode("mysql_real_escape_string",$person_accountBranch);
// $beneficiary_fullname =  implode("mysql_real_escape_string",$beneficiary_fullname);
// $beneficiary_address =  implode("mysql_real_escape_string",$beneficiary_address);
// $beneficiary_phone =  implode("mysql_real_escape_string",$beneficiary_phone);
// $beneficiary_email =  implode("mysql_real_escape_string",$beneficiary_email);
// $beneficiary_shareValues =  implode("mysql_real_escape_string",$beneficiary_shareValues);
// $db_emails = array_map("mysql_real_escape_string", $_POST["emails"]);

   $sql = "INSERT INTO Profile (person_title, person_surname, person_firstname, person_othername, person_phone, person_address, person_company, person_companyAddress, person_means_of_id, person_idNumber, person_pfa, person_rsaNumber, will_executors, will_executors_others)  VALUES ('$person_title', '$person_surname', '$person_firstname', '$person_othername','$person_phone', '$person_address', '$person_company', '$person_companyAddress', '$person_means_of_id', '$person_idNumber', '$person_pfa','$person_rsaNumber', '$will_executors', '$will_executor_others')";
   mysqli_query($con, $sql);
  //  '" . $profile_id . "',  
 
  $query = "SELECT * FROM Profile WHERE person_surname = '$person_surname' AND person_firstname = '$person_firstname' AND person_othername = '$person_othername'";
   if ($result = mysqli_query($con, $query)) {
    $row = mysqli_fetch_assoc($result);
    $profile_id = $row['profile_id'];
   }

   
  foreach ($_POST['person_bankName'] as $key => $value) {

    $sql2 = "INSERT INTO Bank (profile_id, banks, accounts, branch) VALUES ('".$profile_id."','" . $_POST['person_bankName'][$key] . "', '" . $_POST['person_accountNumber'][$key] . "','" . $_POST['person_accountBranch'][$key] . "')";
    mysqli_query($con, $sql2);
    // $profile_id = $con->insert_id;
  //  $profile_id = $pdo->lastInsertId();
  // '" . $profile_id . "',
  }
  

  foreach ($_POST['beneficiary_fullname'] as $key => $value) {

    $sql3 = "INSERT INTO  Beneficiary (profile_id, beneficiary_fullname, beneficiary_address, beneficiary_phone,beneficiary_email, beneficiary_shareValues) VALUES ('".$profile_id."','" . $_POST['beneficiary_fullname'][$key] . "','" . $_POST['beneficiary_address'][$key] . "','" . $_POST['beneficiary_phone'][$key] . "','" . $_POST['beneficiary_email'][$key] . "','" . $_POST['beneficiary_shareValues'][$key] . "')";
    mysqli_query($con, $sql3);
  }
  
  

  
//   // $sql = mysqli_multi_query($con, $query);
//   if ($con->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $con->error;
// }

// $con->close();
// }





if (mysqli_query($con, $sql)) {
  echo "record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


mysqli_close($con);





}
  ?>
  
  <!-- https://www.sitepoint.com/community/t/for-loop-in-mysql-query/39649/7 -->
   

