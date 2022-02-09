<?php
  
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=clients_user', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!empty($_POST['submit'])) {
// if (isset($_POST['submit'])) {
  
  $person_title =  $_POST['person_title'];
  $person_surname =  $_POST['person_surname'];
  $person_firstname =  $_POST['person_firstname'];
  $person_othername =  $_POST['person_title'];
  $person_phone =  $_POST['person_phone'];
  $person_address =  $_POST['person_address'];
  $person_company =  $_POST['person_company'];
  $person_companyAddress =  $_POST['person_companyAddress'];
  $person_idNumber =  $_POST['person_idNumber'];
  $person_pfa =  $_POST['person_pfa'];
  $person_rsaNumber =  $_POST['person_rsaNumber'];
  $will_executors =  $_POST['will_executors'];
  $will_executors_others =  $_POST['will_executors_others'];
  $person_bankName =  $_POST['person_bankName'];
  $person_accountNumber =  $_POST['person_accountNumber'];
  $person_accountBranch =  $_POST['person_accountBranch'];
  $beneficiary_fullname =  $_POST['beneficiary_fullname'];
  $beneficiary_address	 =  $_POST['beneficiary_address	'];
  $beneficiary_phone =  $_POST['beneficiary_phone'];
  $beneficiary_email =  $_POST['beneficiary_email'];
  $beneficiary_shareValues =  $_POST['beneficiary_shareValues'];
  $date = date('Y-m-d H:i:s');


  $query = $pdo->prepare("INSERT INTO clients (person_title, person_surname, person_firstname, person_othername, person_phone, person_address, person_company, person_companyAddress, person_idNumber, person_pfa, person_rsaNumber, will_executors, will_executors_others, person_bankName, person_accountNumber, person_accountBranch, beneficiary_fullname, beneficiary_address, beneficiary_phone, beneficiary_email, beneficiary_shareValues, create_date)
                  VALUES ('$person_title', '$person_surname', '$person_firstname', '$person_othername', '$person_phone', '$person_address', '$person_companyAddress', '$person_idNumber', '$person_pfa', '$person_rsaNumber', '$will_executors', '$will_executors_others', '$person_bankName', '$person_accountNumber', '$person_accountBranch', '$beneficiary_fullname', '$beneficiary_address', '$beneficiary_phone', '$beneficiary_email', '$beneficiary_shareValues','$person_company')");

}

?> 