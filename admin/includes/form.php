<?php 

include('config/dbcon.php');
include('middleware/superadminauth.php'); 
?>
  <div class="card-body">
  <?php include('message.php');?>
            <div class="table-responsive">
           
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Roles</th>
                           
                            <th>Edit</th>
                            <th>Delete</th>
                            <!-- <th>Confirm</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                $query = "SELECT * FROM users  ORDER BY
                created_date ASC";
                $query_run = mysqli_query($con, $query);
                if(mysqli_num_rows($query_run) > 0) 
                     
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                    
                   

            ?>
                                <tr>
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['fname']; ?></td>
                                <td><?= $row['lname']; ?></td>
                               
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['created_date']; ?></td>
                                
                                
                                <td>
                                    <?php if ($row['role_as'] == '2'){
                                        echo 'SuperAdmin';
                                      }  elseif ($row['role_as'] == '1'){
                                            echo 'Admin';
                                        
                                    }elseif ($row['role_as'] == '0'){
                                        echo 'User';
                                    }
                                    ?>
                             
                                </td>
                               
                                <td><?php  ?></td>
                               
                                <td><a href="register-edit.php?id=<?=$row['id'];?>" class="btn btn-success">Edit</a></td>
                                
                                <?php if(  $_SESSION['auth_role'] == '2') : ?>
                                <!-- <form action="code.php" method="POST">
                                <td><button type="submit" name="delete-btn" value="<?=$row['id'];?>"  class="btn btn-danger">Delete</button>
                                </form>
                                </td> -->

                               <td>
                                   <input type="hidden" class="delete_id_value" value="<?=$row['id'];?>">
                                   <a href="javascript:void(0)" class="delete_btn_ajax btn btn-danger">Delete</a>
                               </td>
                                </tr>
                                <?php endif; ?>

                            <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>



