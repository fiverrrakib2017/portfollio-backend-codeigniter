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
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow">
                                
                                <div class="card-body">
                                    <div class="table-responsive" id="tableStyle">
                                        <table id="template_table" class="table table-striped table-bordered" cellspacing="0"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm">ID</th>
                                                    <th class="th-sm">Template Image</th>
                                                    <th class="th-sm">Template Name</th>
                                                    <th class="th-sm">Status</th>
                                                    <th class="th-sm">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table_data">
                                               
                                            <?php foreach ($template_data as $item): ?>
                                                    <tr>
                                                    <td><?php echo $item->id; ?></td>
                                                        <td><img src=" <?php echo base_url();?>/<?php echo $item->template_image;?>" height="50px" width="100px" class="rounded"/></td>
                                                        <td><?php echo $item->template_name; ?></td>
                                                        <td>
                                                            <?php 
                                                            if ($item->status==1) {
                                                               echo '<span class="badge bg-success">Active</span>'; 
                                                            }else{
                                                                echo '<span class="badge bg-danger">inActive</span>'; 
                                                            }
                                                            
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#approveModal<?php echo  $item->id;?>">Approve</button>
                                                        </td>
                                                    </tr>
                                                      
                                                    
                                                    <div id="approveModal<?php echo  $item->id;?>" class="modal fade">
                                                        <div class="modal-dialog modal-confirm">
                                                            <div class="modal-content">
                                                                <div class="modal-header flex-column">
                                                                    <div class="icon-box" style="background: #062418;">
                                                                    <i class="fas fa-solid fa-check" style="color:#32bb77"></i>
                                                                    </div>
                                                                    <h4 class="modal-title w-100">Are you sure?</h4>
                                                                    <h4 class="modal-title w-100 d-none" id="deleteId"></h4>
                                                                    <a class="close" data-bs-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></a>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Do you really want to Approve these records? This process cannot be undone.</p>
                                                                </div>
                                                                <div class="modal-footer justify-content-center">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="button" data-id="<?php echo  $item->id;?>" class="btn btn-success" id="ConfirmBtn">Approve</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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




    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Template </h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body card shadow">
			<form id="addForm" enctype="multipart/form-data">
                    <div class="form-group mb-3 ">
                        <label for="name">Template Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter Template Name" class="form-control">
                    </div>
                    <div class="form-group mb-3 ">
                        <label for="image">Template Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>
					<div class="form-group mb-3 ">
                        <img src="https://www.pngitem.com/pimgs/m/35-350426_profile-icon-png-default-profile-picture-png-transparent.png" alt="" class="img-fluid img-thumbnail" id="imgPreview" style="max-width: 200px; height: 100px;">
                    </div>
                    <div class="form-group mb-3 ">
                        <label for="Status">Status</label>
                        <select id="template_status" name="template_status" class="form-select">
                            <option >----Select---</option>
                            <option value="1">Active</option>
                            <option value="0">inActive</option>
                        </select>
                    </div>
                </form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">Close</button>
				<button type="button" id="addBtn"  class="btn btn-success">Add Template</button>
			</div>
		</div>
	</div>
</div>



 <!----Script code----->
 <?php echo $js;?>

<script type="text/javascript">
    $("#template_table").DataTable();
    //preview image beore uploaded
    image.onchange = evt => {
			const [file] = image.files
			if (file) {
				imgPreview.src = URL.createObjectURL(file)
			}
    	}
    /* TEMPLATE Add Ajax call  */
	$(document).on('click','#addBtn',function(){
		// GET the form data
		var template_name=$("#name").val();
		var imageData = $("#image").prop('files')[0];
		var template_status=$("#template_status").val();
        

        
		
		/* Validation ruls  */
		if (template_name.length==0) {
			toastr.error('Template Name is Require');
		}else if(template_status.length==0){
			toastr.error('Status is Require');
		}else{
			var add_template_data = "0";
            $('#addBtn').html('<div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div>')
			/* Create a Form Data and append this  */
			var form_data = new FormData();
			form_data.append('file', imageData);
			form_data.append('template_name', template_name);
			form_data.append('template_status', template_status);
			form_data.append('add_template_data', add_template_data);
			/*Ajax calll Request Start */
			$.ajax({
				type: 'POST',
				url:'<?=base_url('template/add')?>',
				data: form_data,
				dataType: 'script',
				cache: false,
				contentType: false,
				processData: false,
				success: function(response) {
					if (response == 1) {
                        $("#addModal").modal('hide');
                        toastr.success('Template Added');
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
					}else if(response == 2){
                        toastr.error("Large file not allow");
                        $('#addBtn').html('Add Template');
                    }
					else if(response == 3){
                        toastr.error("Error moving the uploaded file");
                        $('#addBtn').html('Add Template');
                    }
					else if(response == 0){
                        toastr.error("Invalid file extension");
                        $('#addBtn').html('Add Template');
                    }
					else {
						toastr.error('Something was wrong!! ');
                        $('#addBtn').html('Add Template');
					}
				}
			});
			/*Ajax calll Request End */
		}
	});

    /* Student Update Ajax call  */
	$(document).on('click', '#updateBtn', function (e) {
    e.preventDefault();

    // GET the form data
    var update_template_id = $("#update_template_id").val();
    alert(update_template_id);
    var template_name = $("#update_name").val();
    var template_status = $("#update_status").val();
    var update_image = $("#update_image").prop('files')[0];

	var update_data=0;


	var old_image = $("#old_image").attr("src");
	//console.log(old_image);
		var imageName = old_image.replace("<?=base_url()?>/", "");
        
        // remove localhost:8000/ new name image/asasd43.jpg
        $("#old_image").attr("src", imageName);

		//console.log("Image Name: " + imageName);

    /* Validation rules */
    if (template_name.length == 0) {
        toastr.error('Template Name is required');
    } else if (template_status.length == 0) {
        toastr.error('Status  is required');
    } else {
        // Create a FormData object and append the data
        var form_data = new FormData();
        form_data.append('update_image', update_image);
        form_data.append('old_image', imageName);
        form_data.append('template_name', template_name);
        form_data.append('template_status', template_status);
        form_data.append('update_template_id', update_template_id);
        form_data.append('update_data', update_data);

        // AJAX call to update the student data
        $.ajax({
            type: 'POST',
            url: '<?=base_url('template/update')?>', 
            data: form_data,
            dataType: 'script',
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                // if (response == 1) {
                //     $("#editModal"+update_template_id).modal('hide');
                //         toastr.success('Template Update');
                //         setTimeout(() => {
                //             location.reload();
                //         }, 1000);
                // } else {
                //     alert('Something went wrong: ' + response);
                // }
            },
            error: function (xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    }
});









    /* Delete Template Script */
    $(document).on('click','#ConfirmBtn',function(){
		var template_id=$(this).data('id');
		$.ajax({
            url: '<?=base_url('template/approve')?>', 
            type: 'POST',
            data: { id: template_id , approve_template:0},
            success: function(response) {
                if (response==1) {
					$("#deleteModal"+template_id).modal('hide');
                        toastr.success('Template Approve');
                        setTimeout(() => {
                            location.reload();
                    }, 1000);
                } else {
                    // Error occurred
                    toastr.error('Error deleting ');
                }
            },
            error: function(xhr, status, error) {
                // Handle AJAX errors here
                toastr.error('AJAX Error: ' + error);
            }
        });
	});

</script>




</body>

</html>