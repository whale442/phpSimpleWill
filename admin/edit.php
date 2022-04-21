<?php 
include('authentication.php');  //db include in authentication.php
include('includes/header.php'); 
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>



<script type="text/javascript" src="static/js/home.js"></script>
<!-- <div class="container-fluid px-4">
    <h4 class="mt-4">Simple Will </h4>
    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    <li class="breadcrumb-item ">Clients</li>
    </ol>
    <div class="row">

</div> -->

    <div class="col-md-12">

    <!-- <div class="row justify-content-center"> -->
        <div class="card justify-content-center">
            <div class="card-header ">
                <h4>Registered Client</h4>
                <a href="simple-will-view.php" class="btn btn-primary float-end">Back</a>

                <button onclick ="myfun()" class="btn btn-primary float-end mb-2">print</button>
            </div>
            <div class="card-body">
                <!-- <table id="myTable" class="table table-bordered"> -->
               
                    <thead>

                    <!-- <table id="myTable"  class="table table-striped table-bordered"> -->

    

                            <?php
                            
                             if(isset($_GET['id']))
                                        {
                                            $user = htmlentities(addslashes($_GET['id']));
                                            $sql = "SELECT * from clients where id=$user";
                                            $result = $con->query($sql);
                                            $row = $result->fetch_assoc();
                                            
                                             $beneficiary_fullname = explode("#", $row["beneficiary_fullname"]);
                                             
                                            	$beneficiary_address = explode("#", $row["beneficiary_address"]);
                                            	$beneficiary_phone = explode("#", $row["beneficiary_phone"]);
                                            	$beneficiary_email = explode("#", $row["beneficiary_email"]);
                                            	$shares = explode("#", $row["beneficiary_shareValues"]);
                                            	$beneficiary_email = explode("#", $row["beneficiary_email"]);

                                                $banks =  explode("#", $row["banks"]);
                                                $accounts =  explode("#", $row["accounts"]);
                                                $branch =  explode("#", $row["branch"]);
                                                                                            
                                            ?>
                                    
              
                        			<h4 >Simple Will  - Details for <?php echo "<span style='color:'>".$row["person_title"]. "  ". $row["person_firstname"]." ".$row["person_surname"] ."</span>"  ?></h4>
                                   
                                    
                                    <hr/>
<!-- 
                                    <table id="myTable"  class="table table-striped table-bordered"> -->
                                      
                                  
           <form action="code.php" method="POST">
            <input type="hidden" name="user_id" value="<?=$row['id']?>">
        
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label for="">Title</label>
                    <input type="text" name="person_title" value="<?=$row['person_title'];?>"   class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Surname</label>
                    <input type="text" name="person_surname" value="<?=$row['person_surname'];?>"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">First Name</label>
                    <input type="text"  name="person_firstname" value="<?=$row['person_firstname'];?>" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Othername</label>
                    <input type="text" ame="person_othername" value="<?=$row['person_othername'];?>"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Phone Number</label>
                    <input type="text" name="person_phone" value="<?=$row['person_phone'];?>"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Address</label>
                    <input type="text" name="person_address" value="<?=$row['person_address'];?>" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Company Name</label>
                    <input type="text" name="person_company"  value="<?=$row['person_company'];?>"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Company Address</label>
                    <input type="text" name="person_companyAddress" value="<?=$row['person_companyAddress'];?>" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                <label for="">Mean of Identification</label>
                <select name="person_means_of_id" r value="<?=$row['person_means_of_id'];?>" equired class="form-control">
                    <option value="">--Select Role--</option>
                    <option value=""> --Mean of Identification -- </option>
                        <option value="Voter Card" <?= $row['role_as'] == 'Voter Card' ? 'selected':''?> >voter </option>
                        <option value="International Passport"<?= $row['role_as'] == 'International Passport' ? 'selected':''?>>internal</option>
                        <option value="Driver's Licence"><?= $row['role_as'] == 'Drivers Licence' ? 'selected':''?>>driver</option>
                        <option value="Others" <?= $row['role_as'] == 'Others' ? 'selected':''?>>Other</option>
                </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Mean of Identification</label>
                    <input type="text" name="person_idNumber"  value="<?=$row['person_idNumber'];?>"   class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">PFA</label>
                    <input type="text" name="person_pfa"  value="<?=$row['person_pfa'];?>" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Rsa-Number</label>
                    <input type="text"  name="person_rsaNumber"  value="<?=$row['person_rsaNumber'];?>"  class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                <label for="">Will Executor</label>
                <select name="will_executors" value="<?=$row['"will_executors'];?>"  required class="form-control">
                    <option value=""> -- Select Will Executor -- </option>
                    <option value="Meristem Trustees">Meristem Trustees</option>
                    <option value="Trustees">Trustees</option>
                    <option value="Others">Others</option>
                </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">If Others, Please Specify</label>
                    <input type="text" name="will_executors_others" value="<?=$row['will_executors_others'];?>" class="form-control">
                </div>

                </div>
                <div class="col-md-12 mb-3">
                   
               <br>
               <br>
               <br>
              
                                    <?php
                                       	
                                    
                                                
                                            
                                        echo "</td><td>
                                        <td>Beneficiary Fullname</td><td>";
                                                foreach($beneficiary_fullname as $each ){
                                                          echo "<input ".$each . ' value="' . $row["beneficiary_fullname"] .'">';
                                                }
                                                          
                                        
                                        echo "</td><td>
                                        <td>Beneficiaries address</td><td>";
                                                foreach($beneficiary_address as $each){
                                                          echo "<input ".$each . ' value="' . $row["beneficiary_address"] .'">';
                                                }
                                        
                                            
                                        echo "</td><td>
                                                    <td>Beneficiaries Phone</td><td>";
                                                            foreach($beneficiary_phone as $each){
                                                                      echo "<input ".$each . ' value="' . $row["beneficiary_phone"] .'">';
                                                            }

                                        echo "</td><td>
                                                    <td>Beneficiaries Email</td><td>";
                                                            foreach($beneficiary_email as $each ){
                                                                     echo "<input ".$each . ' value="' . $row["beneficiary_email"] .'">';
                                                            }
                                        echo "</td><td>
                                        <td>Beneficiaries Share</td><td>";
                                                foreach($shares as $each){
                                                          echo "<input ".$each . ' value="' . $row["beneficiary_email"] .'">';
                                                }
                                                          
                                            // bank
                                        echo "</td></tr>
                                                    <tr><td>Bank Names:  </td><td>";
                                                            foreach($banks as $each ){
                                                                     echo "<input ".$each . ">";
                                                            }
                                        
                                        echo "</td></tr>
                                                    <tr>
                                                        <td>Bank Account Numbers</td>:  </td><td>";
                                                            foreach($accounts as $each ){
                                                                     echo "<li>".$each . "</li><br />";
                                                            }
                                        echo "</td><tr>
                                                    <td>Bank Branch:  </td><td>";
                                                            foreach($branch as $each ){
                                                                     echo "<li>".$each . "</li><br />";
                                                            }
                                        // echo "</td></tr>
                                        //             <tr>
                                        //             <td>Date:  </td><td>".$row["date"]."</td></tr></table>";
                                        
                                        }
                                      else{

    echo "No Record Found";
}

                                    ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->
                    <!-- <td><a href="simple-will-view.php" class="btn btn-success">Back</a></td> -->
                    <!-- <a href="simple-will-view.php" class="btn btn-primary float-end">Create Simple Will</a> -->
                   

                </div> <!-- content -->
              
<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>

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

