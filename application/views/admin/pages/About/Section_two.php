        <!----Header css part code----->
        <?php echo $css;?>
        <!----Header code----->     
         <?php echo $header;?>

        <!----Sidebar code----->
          <?php echo $sidebar;?>

        <!-- ============================================================== -->
       <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">


                <div class="container-fluid">
                    
                    <div class="row ">
                        <div class="col-md-6 col-lg-6 col-xl-3 m-auto">
                            <div class="card">
                                <?php foreach ($data as $item): ?>
                                    <form action="">
                                        <div class="card-body">
                                            <div class="form-group mb-3 d-none">
                                                <label for="">Id</label>
                                                <input type="text" id="update_id" class="form-control" placeholder="Enter Title" value="<?php echo $item->id;?>">
                                            </div>
                                            <div class="form-group mb-3 ">
                                                <label for="">Title</label>
                                                <input type="text" id="update_title" class="form-control" placeholder="Enter Title" value="<?php echo $item->title;?>">
                                            </div>
                                            <div class="form-group mb-3 ">
                                                <label for="Status">Status</label>
                                                <textarea  id="update_description" name="" id="" cols="30" rows="10" class="form-control" placeholder="Enter Description"><?= $item->description;?></textarea>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" id="updateBtnConfirm" class="btn  btn-success">Save</button>
                                        </div>
                                    </form>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>                    
                    <!-- Modal -->


                      
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->



               <!----Footer code----->
               <?php echo $footer;?>
            </div>
            <!-- End Page-content -->

        </div>
    <!-- END layout-wrapper -->

  

   



 <!----Script code----->
 <?php echo $js;?>

<script type="text/javascript">
  
    /* Section two Update Ajax call  */
	$(document).on('click', '#updateBtnConfirm', function (e) {
    e.preventDefault();

    // GET the form data
   var update_id= $('#update_id').val();
   var update_title= $('#update_title').val();
   var update_description= $('#update_description').val();
	var update_data=0;



    /* Validation rules */
    if (update_title.length == 0) {
        toastr.error('Title is required');
    }else if(update_description.length == 0){
        toastr.error('Description is required');
    }
     else {
        // Create a FormData object and append the data
        var form_data = new FormData();
        form_data.append('update_id', update_id);
        form_data.append('update_title', update_title);
        form_data.append('update_description', update_description);
        form_data.append('update_data', update_data);
        // AJAX call to update the student data
        $.ajax({
            type: 'POST',
            url: '<?=base_url('about/section/two/update')?>', 
            data: form_data,
            dataType: 'script',
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response == 1) {
                    $("#editModal").modal('hide');
                        toastr.success('Save Successfull');
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                } else {
                    toastr.error('Something went wrong: ' + response);
                }
            },
            error: function (xhr, status, error) {
                toastr.error('Error: ' + error);
            }
        });
    }
});



</script>




</body>

</html>