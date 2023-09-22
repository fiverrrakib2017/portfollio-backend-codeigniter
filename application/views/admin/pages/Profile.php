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
                                        <div class="card-header">
                                            <h3>Profile Information</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group mb-3 d-none">
                                                <label for="">Id</label>
                                                <input type="text" id="update_id" class="form-control" placeholder="Enter Title" value="<?php echo $item->id;?>">
                                            </div>
                                            <div class="form-group mb-3 ">
                                                <label for="">Name</label>
                                                <input type="text" id="update_name" class="form-control" placeholder="Enter Title" value="<?php echo $item->name;?>">
                                            </div>
                                            <div class="form-group mb-3 ">
                                                <label for="image">Profile Image</label>
                                                <input type="file" id="update_image" class="form-control">
                                            </div>
                                            <div class="form-group mb-3 ">
                                                <img src="<?php echo base_url() . '/' . $item->image; ?>" alt="" class="img-fluid img-thumbnail" id="old_image" style="max-width: 200px; height: 100px;">
                                            </div>
                                            <div class="form-group mb-3 ">
                                                <label for="Status">Status</label>
                                                <select id="update_status"  class="form-select">
                                                    
                                                        <?php if ($item->status == 1) : ?>
                                                            <option value="1" selected>Active</option>
                                                            <option value="0">inActive</option>
                                                        <?php else : ?>
                                                            <option value="0" selected>inActive</option>
                                                            <option value="1" >Active</option>
                                                        <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" id="updateBtnConfirm" class="btn  btn-success">Update</button>
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
    $("#template_table").DataTable();
    //preview image beore uploaded
    update_image.onchange = evt => {
			const [file] = update_image.files
			if (file) {
				old_image.src = URL.createObjectURL(file)
			}
    	}

    /* Profile Update Ajax call  */
	$(document).on('click', '#updateBtnConfirm', function (e) {
    e.preventDefault();

    // GET the form data
   var update_id= $('#update_id').val();
   var update_name= $('#update_name').val();
   var update_status= $('#update_status').val();

    var update_image = $("#update_image").prop('files')[0];
	var update_data=0;


	var old_image = $("#old_image").attr("src");
	//console.log(old_image);
		var imageName = old_image.replace("<?=base_url()?>/", "");
        
        // remove localhost:8000/ new name image/asasd43.jpg
        $("#old_image").attr("src", imageName);

		//console.log("Image Name: " + imageName);

    /* Validation rules */
    if (update_name.length == 0) {
        toastr.error('Name is required');
    } else {
        // Create a FormData object and append the data
        var form_data = new FormData();
        form_data.append('update_image', update_image);
        form_data.append('old_image', imageName);
        form_data.append('update_id', update_id);
        form_data.append('update_name', update_name);
        form_data.append('update_status', update_status);
        form_data.append('update_data', update_data);
        // AJAX call to update the student data
        $.ajax({
            type: 'POST',
            url: '<?=base_url('setting/profile/add')?>', 
            data: form_data,
            dataType: 'script',
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response == 1) {
                    $("#editModal").modal('hide');
                        toastr.success('Update Successfull');
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