<?php 
include('authentication.php');  //db include in authentication.php
include('includes/header.php'); 
?>

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
                <table id="myTable" class="table table-bordered">
                <!-- <td><a href="simple-will-view.php" class="btn btn-success">Back</a></td> -->
                    <thead>

                    <table id="myTable"  class="table table-striped table-bordered">

   

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
                                     <hr>
              
                        			<h4 >Simple Will  - Details for <?php echo "<span >".$row["person_title"]. "  ". $row["person_firstname"]." ".$row["person_surname"] ."</span>"  ?></h4>                                
                                    
                                    <hr/>
                                      
                                    <?php
                                        echo " <tr>
                                                    <td>Title: </td><td>".$row["person_title"]."</td>
                                                </tr>
                                                <tr>
                                                    <td>Fullname:  </td><td>".$row["person_firstname"]." ".$row["person_surname"]."</td>
                                                </tr>
                                                <tr>
                                                    <td>Phone:  </td><td>".$row["person_phone"]."</td>
                                                </tr>
                                                <tr>
                                                    <td>Address:  </td><td>".$row["person_address"]."</td>
                                                </tr>
                                                <tr>
                                                    <td>Company:  </td><td>".$row["person_company"]."</td>
                                                </tr>
                                                <tr>
                                                    <td>Company Address:  </td><td>".$row["person_companyAddress"]."</td>
                                                </tr>
                                                <tr>
                                                    <td>RSA Number:  </td><td>".$row["person_rsaNumber"]."</td>
                                                </tr>
                                                <tr>
                                                    <td>Beneficiaries Fullname:  </td><td>";
                                                            foreach($beneficiary_fullname as $each ){
                                                                     echo "<li>".$each . "</li><br />";
                                                            }
                                        echo "</td></tr>
                                                    <tr><td>Beneficiaries Address:  </td><td>";
                                                            foreach($beneficiary_address as $each ){
                                                                     echo "<li>".$each . "</li><br />";
                                                            }
                                        
                                        echo "</td></tr>
                                                    <tr>
                                                        <td>Beneficiaries Phone:  </td><td>";
                                                            foreach($beneficiary_phone as $each ){
                                                                     echo "<li>".$each . "</li><br />";
                                                            }
                                        echo "</td><tr>
                                                    <td>Beneficiaries Email:  </td><td>";
                                                            foreach($beneficiary_email as $each ){
                                                                     echo "<li>".$each . "</li><br />";
                                                            }
                                        echo "</td><tr>
                                                    <td>Beneficiaries Shares:  </td><td>";
                                                            foreach($shares as $each ){
                                                                     echo "<li>".$each . "</li><br />";
                                                            }
                                                            // bank
                                        echo "</td></tr>
                                                    <tr><td>Bank Names:  </td><td>";
                                                            foreach($banks as $each ){
                                                                     echo "<li>".$each . "</li><br />";
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

<script type="text/javascript">
    function myfun() { 
        window.print();
    }
</script>
 