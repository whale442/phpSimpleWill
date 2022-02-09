
person_title		
person_surname		
person_firstname	
person_othername	
person_phone	
person_address
person_company	
person_companyAddress
person_idNumber
person_pfa	
person_rsaNumber	
will_executors
will_executors_others	
person_bankName	
person_accountNumber	
person_accountBranch	
beneficiary_fullname	
beneficiary_address	
beneficiary_phone	
beneficiary_email	
beneficiary_shareValues



<?php 

  if (isset($_POST['submit'])){
    // echo "hey guys";
   include_once "config.php";

   $person_title = mysqli_real_escape_string($conn, $_POST['person_title']);
   $person_surname = mysqli_real_escape_string($conn, $_POST['person_surname']);
   $person_firstname = mysqli_real_escape_string($conn, $_POST['person_firstname']);
   $person_othername = mysqli_real_escape_string($conn, $_POST['person_title']);
   $person_phone = mysqli_real_escape_string($conn, $_POST['person_phone']);
   $person_address = mysqli_real_escape_string($conn, $_POST['person_address']);
   $person_company = mysqli_real_escape_string($conn, $_POST['person_company']);
   $person_companyAddress = mysqli_real_escape_string($conn, $_POST['person_companyAddress']);
   $person_idNumber = mysqli_real_escape_string($conn, $_POST['person_idNumber']);
   $person_pfa = mysqli_real_escape_string($conn, $_POST['person_pfa']);
   $person_rsaNumber = mysqli_real_escape_string($conn, $_POST['person_rsaNumber']);
   $will_executors = mysqli_real_escape_string($conn, $_POST['will_executors']);
   $will_executors_others = mysqli_real_escape_string($conn, $_POST['will_executors_others']);
   $person_bankName	 = mysqli_real_escape_string($conn, $_POST['person_bankName	']);
   $person_accountNumber = mysqli_real_escape_string($conn, $_POST['person_accountNumber']);
   $person_accountBranch = mysqli_real_escape_string($conn, $_POST['person_accountBranch']);
   $beneficiary_fullname = mysqli_real_escape_string($conn, $_POST['beneficiary_fullname']);
   $beneficiary_address	 = mysqli_real_escape_string($conn, $_POST['beneficiary_address	']);
   $beneficiary_phone = mysqli_real_escape_string($conn, $_POST['beneficiary_phone']);
   $beneficiary_email	 = mysqli_real_escape_string($conn, $_POST['beneficiary_email	']);
   $beneficiary_shareValues	 = mysqli_real_escape_string($conn, $_POST['beneficiary_shareValues	']);

  
?>

 $query = $pdo->prepare("INSERT INTO clients (person_title, image, person_surname, person_firstname, person_othername, person_phone, 
  person_address, person_companyAddress, person_idNumber, person_pfa, person_rsaNumber, will_executors, will_executors_others,
  person_bankName, person_accountNumber, person_accountBranch, beneficiary_fullname, beneficiary_address, beneficiary_phone, beneficiary_email, beneficiary_shareValues
  person_company, create_date)
                  VALUES (:person_title, :image, :person_surname, :person_firstname, :person_othername, :person_phone, 
  :person_address, :person_companyAddress, :person_idNumber, :person_pfa, :person_rsaNumber, :will_executors, :will_executors_others,
  :person_bankName, :person_accountNumber, :person_accountBranch, :beneficiary_fullname, :beneficiary_address, :beneficiary_phone, :beneficiary_email, :beneficiary_shareValues
  :person_company)");



  <?php
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
  $person_bankName	 =  $_POST['person_bankName	'];
  $person_accountNumber =  $_POST['person_accountNumber'];
  $person_accountBranch =  $_POST['person_accountBranch'];
  $beneficiary_fullname =  $_POST['beneficiary_fullname'];
  $beneficiary_address	 =  $_POST['beneficiary_address	'];
  $beneficiary_phone =  $_POST['beneficiary_phone'];
  $beneficiary_email	 =  $_POST['beneficiary_email	'];
  $beneficiary_shareValues	 =  $_POST['beneficiary_shareValues	'];


  $sql = "INSERT INTO clients (person_title, person_surname, person_firstname, person_othername, person_phone, 
  person_address, person_company, person_companyAddress, person_idNumber, person_pfa, person_rsaNumber, will_executors, will_executors_others,
  person_bankName, person_accountNumber, person_accountBranch, beneficiary_fullname, beneficiary_address, beneficiary_phone, beneficiary_email, beneficiary_shareValues)
                  VALUES ('$person_title', '$person_surname', '$person_firstname', '$person_othername', '$person_phone', '$person_address', '$person_companyAddress', '$person_idNumber', '$person_pfa', '$person_rsaNumber', '$will_executors', '$will_executors_others', '$person_bankName', '$person_accountNumber', '$person_accountBranch', '$beneficiary_fullname', '$beneficiary_address', '$beneficiary_phone', '$beneficiary_email', '$beneficiary_shareValues','$person_company)";

  if (mysql_query($conn, $sql)) { 
    echo "New record added";

  }else{ 
    echo "Error : ". $sql . "<br>" . mysqli_error($conn);
} 

  mysqli_close($conn);

?>


 $sql_query = ("INSERT INTO clients VALUES ('".$person_title."', '".$person_surname."', '".$person_firstname."', '".$person_othername."', '".$person_phone."', '".$person_address."', '".$person_companyAddress."', '".$person_idNumber."', '".$person_pfa."', '".$person_rsaNumber."', '".$will_executors."', '".$will_executors_others."', '".$person_bankName."', '".$person_accountNumber."', '".$person_accountBranch."', '".$beneficiary_fullname."', '".$beneficiary_address."', '".$beneficiary_phone."', '".$beneficiary_email."', '".$beneficiary_shareValues."');"); 

mysql_query("INSERT INTO table1 VALUES ('".$gender."','".$name."');");



 $sql_query = "INSERT INTO clients (person_title, person_surname, person_firstname, person_othername, person_phone,person_address, person_company, person_companyAddress, person_idNumber, person_pfa, person_rsaNumber, will_executors, will_executors_others, person_bankName, person_accountNumber, person_accountBranch, beneficiary_fullname, beneficiary_address, beneficiary_phone, beneficiary_email, beneficiary_shareValues)
VALUES ('$person_title', '$person_surname', '$person_firstname', '$person_othername', '$person_phone', '$person_address', '$person_companyAddress', '$person_idNumber', '$person_pfa', '$person_rsaNumber', '$will_executors', '$will_executors_others', '$person_bankName', '$person_accountNumber', '$person_accountBranch', '$beneficiary_fullname', '$beneficiary_address', '$beneficiary_phone', '$beneficiary_email', '$beneficiary_shareValues)";




inserts.php
$servername = "localhost";
        $username = "root";
        $password = "root";
        $database  = "clients_user";

        $conn = mysqli_connect("localhost", "root", "root", "clients_user");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());

$sql = "INSERT INTO clients (person_title, person_surname, person_firstname, person_othername, person_phone,person_address, person_company, person_companyAddress, person_idNumber, person_pfa, person_rsaNumber, will_executors, will_executors_others, person_bankName, person_accountNumber, person_accountBranch, beneficiary_fullname, beneficiary_address, beneficiary_phone, beneficiary_email, beneficiary_shareValues)
                    VALUES ('$person_title', '$person_surname', '$person_firstname', '$person_othername', '$person_phone', '$person_address', '$person_companyAddress', '$person_idNumber', '$person_pfa', '$person_rsaNumber', '$will_executors', '$will_executors_others', '$person_bankName', '$person_accountNumber', '$person_accountBranch', '$beneficiary_fullname', '$beneficiary_address', '$beneficiary_phone', '$beneficiary_email', '$beneficiary_shareValues',')";

          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
           
            echo nl2br("\n$person_title\n $person_surname\n "
            . "$person_firstname\n $person_othername\n $person_phone");
        } else{
                echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);







        inserts2
        <?php
  
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database  = "clients_user";

        $conn = mysqli_connect("localhost", "root", "root", "clients_user");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
      
        // Taking all 5 values from the form data(input)
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
        $person_bankName	 =  $_POST['person_bankName	'];
        $person_accountNumber =  $_POST['person_accountNumber'];
        $person_accountBranch =  $_POST['person_accountBranch'];
        $beneficiary_fullname =  $_POST['beneficiary_fullname'];
        $beneficiary_address =  $_POST['beneficiary_address	'];
        $beneficiary_phone =  $_POST['beneficiary_phone'];
        $beneficiary_email =  $_POST['beneficiary_email'];
        $beneficiary_shareValues =  $_POST['beneficiary_shareValues'];
          
        // Performing insert query execution
        // here our table name is college
        mysql_query("INSERT INTO `clients` (person_title, person_surname, person_firstname, person_othername, person_phone,person_address, person_company, person_companyAddress, person_idNumber, person_pfa, person_rsaNumber, will_executors, will_executors_others, person_bankName, person_accountNumber, person_accountBranch, beneficiary_fullname, beneficiary_address, beneficiary_phone, beneficiary_email, beneficiary_shareValues)
        VALUES ('{$person_title}', '{$person_surname}', '{$person_firstname}', '{$person_othername}', '{$person_phone}', '{$person_address}', '{$person_companyAddress}', '{$person_idNumber}', '{$person_pfa}', '{$person_rsaNumber}', '{$will_executors}', '{$will_executors_others}', '{$person_bankName}', '{$person_accountNumber}', '{$person_accountBranch}', '{$beneficiary_fullname}', '{$beneficiary_address}', '{$beneficiary_phone}', '{$beneficiary_email}', '{$beneficiary_shareValues}')"); 
       
       
