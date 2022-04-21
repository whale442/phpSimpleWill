</main>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2021</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
    </footer>
    </div>
</div>



<script>
$(document).ready(function() {

    $('.delete_btn_ajax').click(function (e) { 
        e.preventDefault();
        // console.log("hello");

        var deleteid = $(this).closest("tr").find('.delete_id_value').val();
        // console.log(deleteid);

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this User!",
            icon: "warning",
          
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {

                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        "delete_btn_set": 1,
                        "delete_id": deleteid,

                    },
                    success: function (response) {
                        swal("Admin User Delete Successfully.!", {
                            icon: "success",
                        })  .then((result) => { 
                            location.reload();
                        });
                        
                    }
                });
              
            } 
            });


    });

});
</script>
