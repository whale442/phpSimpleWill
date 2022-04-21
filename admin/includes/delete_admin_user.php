<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registered Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
        <form action="code.php" method="POST">
        <!-- <p>Are you sure to delete this client's detail ? </p> -->
        <h4  style="text-align:center"> Are you sure ? </h4>
        <p style="text-align:center">Once deleted, you will not able to recover this Data?</p>

        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="delete-clients" value="<?=$row['id'];?>" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>
