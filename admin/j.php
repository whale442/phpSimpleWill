<?php 
include('authentication.php'); 
// include('middleware/superadminauth.php'); 
include('includes/header.php'); 
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Simple Will </h4>
    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    <li class="breadcrumb-item ">Clients</li>
    </ol>
    <div class="row">

</div>

    <div class="col-md-12">
        <?php// include('message.php');?>

        <div class="card">
            <div class="card-header">
                <h4>Registered Client</h4>
                <a href="create-simplewill.php" class="btn btn-primary float-end">Create Simple Will</a>
            </div>
            <div class="card-body">
                <table id="myTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>First Name</th>
                            <th>Surname</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Detail</th>

                            <?php if($_SESSION['auth_role'] == '2') : ?>
                            <th>Delete</th> 
                            <?php endif; ?>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM profile_id  FROM profile ORDER BY
                        create_date DESC";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $row)
                            { 
                                ?>
                                <tr>
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['person_title']; ?></td>
                                <td><?= $row['person_surname']; ?></td>
                                <td><?= $row['person_firstname']; ?></td>
                                <td><?= $row['person_phone']; ?></td>
                                <td><?= $row['create_date']; ?></td>
                            
                                <td><a href="simple-will-edit.php?id=<?=$row['id'];?>" class="btn btn-success">Edit</a></td>
                                <td><a href="simple-will-details.php?id=<?=$row['id'];?>" class="btn btn-success">details</a></td>

                                <?php if($_SESSION['auth_role'] == '2') : ?>
                                    
                                <td><?php include('includes/delete.php'); ?>
                            
                            </td>
  
                                </tr>
                                <?php endif; ?>

                                <?php
                            }
                        }
                        else
                        { 
                        ?>
                            <tr>
                                <td colspan="6">No Record Found</td>
                            </tr>
                        <?php   
                        }
                        ?>
                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>



<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>


