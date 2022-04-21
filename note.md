https://stackoverflow.com/questions/25386119/whats-the-difference-between-a-onetoone-manytomany-and-a-foreignkey-field-in-d




INSERT INTO user_details (person_title, person_surname, person_firstname, person_other, person_phone, person_address, person_company, person_companyAddress, person_means_of_id, person_idNumber, person_pfa, person_rsaNumber, will_executors, will_executors_others)
    VALUES ("Mr", "Adebayo", "adewale", "adewuju", "7654-876-76", "yaba-lagos", "Aliencompany", "Abuja-nigeria", "Voters-Card", "D4563T63", "6764", "76ghd64", "Meristem Trustees", "allience") ;





     $sql = "INSERT INTO clients (person_title, person_surname, person_firstname, person_othername person_phone, person_address, person_company, person_companyAddress, person_means_of_id, person_idNumber, person_pfa, person_rsaNumber, will_executors, will_executor_others, person_bankName, person_accountNumber, person_accountBranch, beneficiary_fullname beneficiary_address,beneficiary_phone,beneficiary_email,beneficiary_shareValue) 
        VALUES ('$person_title', '$person_surname', '$person_firstname', '$person_othername','$person_phone', '$person_address', '$person_company', '$person_companyAddress', '$person_means_of_id', '$person_idNumber', '$person_pfa','$person_rsaNumber', '$will_executors', '$will_executor_others', '$banks','$accounts', '$branch', '$beneficiary_fullname','$beneficiary_address', '$beneficiary_phone','$beneficiary_email','$beneficiary_shareValues')";

 INSERT INTO details (`primary`, `username`, `password`, `password2`)
VALUES (null, 'hello', 'hello', 'hello')

 

  <form action="code-superadmin.php" method="POST">
<td><button type="submit" name="delete-clients" value="<?=$row['id'];?>"  class="btn btn-danger">Delete</button></td>

$mail->addBCC('abayomiadebayo@meristemng.com');
$mail->addCC('adedejiadelanwa@meristemng.com');




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
      <form action="code-superadmin.php" method="POST">
         <td><button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Add Admin Profile 
        </button>
        </form>
        </td>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="delete-clients" value="<?=$row['id'];?>" class="btn btn-primary" >Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

https://meristemng1-my.sharepoint.com/personal/abayomiadebayo_meristemng_com/_layouts/15/onedrive.aspx?ct=1648039646078&or=OWA%2DNT&cid=454ba3f9%2De3d6%2D0444%2D6a4b%2D003d04c03be3

modal
// var myModal = document.getElementById('myModal')
// var myInput = document.getElementById('myInput')

// myModal.addEventListener('shown.bs.modal', function () {
//   myInput.focus()
// })


var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})





stackover
https://stackoverflow.com/questions/27272645/how-to-create-multiple-dynamic-form-fields-and-insert-in-mysql-database



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


 <input id="country1" name="person_bankName[]"  class="person_bankName" style="height:35px;border-radius:0px">


<form id="userForm">
  <input type="text" />
</form>




        const userForm = document.getElementById("userForm");

const users = [{name: "Wale", address: "Norman Williams", beneficiaries: [{beneFullname: "Favour", benAddress: "Ikoyi"},{beneFullname: "Emma", benAddress: "Ikorodu"}]}, {name: "Dotun", address: "Norman Williams", beneficiaries: [{beneFullname: "Wife", benAddress: "Egbeda"},{beneFullname: "Son", benAddress: "Egbeda"}]}];



users.map(user => {
   const newInput = document.createElement("input")
   const addressInput = document.createElement("input")
   
   
  user.beneficiaries.map(ben =>{
    newInput.value = ben.beneFullname;
    addressInput.value = ben.benAddress
  })
    
  userForm.appendChild(addressInput)
  
  userForm.appendChild(newInput)
})

form
https://stackoverflow.com/questions/39068334/dynamically-add-remove-multiple-input-fields-in-php-with-jquery-ajax



join tables
https://stackoverflow.com/questions/12635714/php-mysql-joining-three-tables-and-merging-results


https://github.com/alipadron/res-education

array
https://stackoverflow.com/questions/5345859/php-access-all-post-variables-into-an-array

array2
https://stackoverflow.com/questions/21750478/retrieve-post-array-values


https://stackoverflow.com/questions/58133709/dynamic-input-fields-with-non-dynamic-input-fields-insert-into-two-mysql-tables







$sql1 = "INSERT INTO Profile (person_title, person_surname, person_firstname, person_othername, person_phone, person_address, person_company, person_companyAddress, person_means_of_id, person_idNumber, person_pfa, person_rsaNumber, will_executors, will_executors_others) VALUES ('$person_title', '$person_surname', '$person_firstname', '$person_othername','$person_phone', '$person_address', '$person_company', '$person_companyAddress', '$person_means_of_id', '$person_idNumber', '$person_pfa','$person_rsaNumber', '$will_executors', '$will_executor_others')";
   mysqli_query($con, $sql1);
 
  //  $sql2 = "INSERT INTO Bank (banks, accounts, branch)  VALUES('$banks','$accounts', '$branch')";
  foreach ($_POST['person_bankName'] as $key => $value) {

    $sql2 = "INSERT INTO Bank (banks, accounts, branch) VALUES ('" . $_POST['person_bankName'][$key] . "','" . $_POST['person_accountNumber'][$key] . "','" . $_POST['person_accountBranch'][$key] . "')";
   mysqli_query($con, $sql2);
  }
  

  foreach ($_POST['beneficiary_fullname'] as $key => $value) {

    $sql3 = "INSERT INTO  Beneficiary (beneficiary_fullname, beneficiary_address, beneficiary_phone,beneficiary_email, beneficiary_shareValues) VALUES ('" . $_POST['beneficiary_fullname'][$key] . "','" . $_POST['beneficiary_address'][$key] . "','" . $_POST['beneficiary_phone'][$key] . "','" . $_POST['beneficiary_email'][$key] . "','" . $_POST['beneficiary_shareValues'][$key] . "')";
    mysqli_query($con, $sql3);
  }




  https://rathorji.in/p/add_or_remove_input_fields_dynamically_in_php_using_jquery
  https://www.youtube.com/watch?v=wuE6-gyW4bA&t=123s


  https://www.codingcage.com/2014/12/fetch-data-from-multiple-tables-in-php.html


   // $query = "  SELECT t1.col, t3.col
                                            // FROM table1
                                            // JOIN table2 ON table1.primarykey = table2.foreignkey
                                            // JOIN table3 ON table2.primarykey = table3.foreignkey";


                                             $profile_id = htmlentities(addslashes($_GET['profile_id']));
                                            $sql = "SELECT * from beneficiary where profile_id=$profile_id";
                                            $result = $con->query($sql);
                                            $row = $result->fetch_assoc();
                                            




UPDATE stpersonal
    INNER JOIN steducation ON steducation.stID = stpersonal.stID
    INNER JOIN staddress ON staddress.stID = stpersonal.stID
 SET stpersonal.stname = @stname,
    stpersonal.stdateofbirth = @stdateofbirth,
    stpersonal.stgender = @stgender,
    steducation.stcollege = @stcollege,
    steducation.stgradyear = @stgradyear,
    staddress.stAddress = @stAddress
 WHERE stpersonal.stID = @ID    



 UPDATE Profile
      INNER JOIN Bank ON Bank.profile_id = Profile.profile_id
      INNER JOIN Beneficiary ON Beneficiary.profile_id = Profile.profile_id
    SET Profile.person_title = @person_title,
        Profile.person_surname = @person_surname,
        Profile.person_firstname = @person_firstname,
        Profile.person_othername = @person_othername, 
        Profile.person_phone = @person_phone,
        Profile.person_address = @person_address,
        Profile.person_company = @person_company,
        Profile.person_companyAddress = @person_companyAddress,
        Profile.person_means_of_id = @person_means_of_id,
        Profile.person_idNumber = @person_idNumber,
        Profile.person_pfa = @person_pfa,
        Profile.person_rsaNumber = @person_rsaNumber,
        Profile.will_executors = @will_executors,
        Profile.will_executor_others = @will_executor_others,
        Bank.banks = @banks,
        Bank.accounts = @accounts,
        Bank.branch = @branch,
        Beneficiary.beneficiary_fullname = @beneficiary_fullname,
        Beneficiary. beneficiary_address = @beneficiary_address,
        Beneficiary.beneficiary_phone = @beneficiary_phone,
        Beneficiary.beneficiary_email = @beneficiary_email,
        Beneficiary.beneficiary_shareValues = @beneficiary_shareValues
  WHERE Profile.profile_id = @profile_id


select *
from users
inner join profile on profile.userid = users.id
inner join comments on comments.userid = users.id
where users.id = $id
order by users.id

from profile
inner join bank on bank.profile_id = profile.profile_id
inner join benecifiary on benecifiary.profile_id = profile.profile_id
where profile.profile_id = $profile_id
order by profile.profile_id