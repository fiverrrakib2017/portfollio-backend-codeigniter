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
                                <div class="card-header">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="btn-sm btn btn-success mb-2"><i class="mdi mdi-account-plus"></i>
                                        Add New Testimonial 
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive" id="tableStyle">
                                        <table id="template_table" class="table table-striped table-bordered" cellspacing="0"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm">ID</th>
                                                    <th class="th-sm">image</th>
                                                    <th class="th-sm">Name</th>
                                                    <th class="th-sm">Mouth Word</th>
                                                    <th class="th-sm">Designation</th>
                                                    <th class="th-sm">Status</th>
                                                    <th class="th-sm">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table_data">
                                            <?php foreach ($data as $item): ?>
                                                
                                                <tr>
                                                    <td><?php echo $item->id; ?></td>
                                                    <td><img src="<?php echo base_url() . '/' . $item->image; ?>" height="50px" width="100px" class="rounded" /></td>
                                                    <td><?php echo $item->name; ?></td>
                                                    <td>
                                                        <?php 
                                                        $description = $item->mouth_word; 
                                                        $maxChars = 50;
                                                        if (strlen($description) > $maxChars) {
                                                            echo $trimmedDescription = substr($description, 0, $maxChars).'...........';
                                                        } else {
                                                            echo $description;
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $item->designation; ?></td>
                                               
                                                    <td>
                                                        <?php if ($item->status == 1) : ?>
                                                            <span class="badge bg-success">Active</span>
                                                        <?php else : ?>
                                                            <span class="badge bg-danger">inActive</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <button type="button" data-id="<?php echo $item->id; ?>" class="btn btn-primary"  id="editModalBtn"><i class="fas fa-edit"></i></button>

                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $item->id; ?>"><i class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                      
                                                    
                                                    <div id="deleteModal<?php echo  $item->id;?>" class="modal fade">
                                                        <div class="modal-dialog modal-confirm">
                                                            <div class="modal-content">
                                                                <div class="modal-header flex-column">
                                                                    <div class="icon-box">
                                                                        <i class="fas fa-trash"></i>
                                                                    </div>
                                                                    <h4 class="modal-title w-100">Are you sure?</h4>
                                                                    <h4 class="modal-title w-100 d-none" id="deleteId"></h4>
                                                                    <a class="close" data-bs-dismiss="modal" aria-hidden="true"><i class="mdi mdi-close"></i></a>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                                </div>
                                                                <div class="modal-footer justify-content-center">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="button" data-id="<?php echo  $item->id;?>" class="btn btn-danger" id="deleteConfirmBtn">Delete</button>
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

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog card shadow">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Testimonial </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                <form id="editForm" enctype="multipart/form-data">
                        <div class="form-group d-none">
                            <label >ID</label>
                            <input type="text" id="update_testimonial_id"class="form-control" value="">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="image">Name</label>
                            <input type="text" id="update_name" class="form-control" placeholder="Enter Title">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="designation">Designation</label>
                            <input type="text" id="update_designation" class="form-control" placeholder="Enter Designation">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="mouth_word">Mouth Word</label>
                            <textarea type="text" id="mouth_word" class="form-control" placeholder="Enter Mouth Word"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="image">Image</label>
                            <input type="file" id="update_image"  class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <img src="" alt="" class="img-fluid img-thumbnail" id="old_image" style="max-width: 200px; height: 100px;">
                        </div>                               

                        <div class="form-group mb-3 ">
                            <label >Status</label>
                            <select id="update_status" class="form-select">
                                
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="updateBtn"  class="btn btn-success">Update Now</button>
                </div>
            </div>
        </div>
	</div>


    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Testimonial </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body card shadow">
                <form id="addForm" enctype="multipart/form-data">
                       
                        <div class="form-group mb-3 ">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="designation">Designation</label>
                            <input type="text" id="designation" class="form-control" placeholder="Enter Designation">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="mouth_word">Mouth Word</label>
                            <textarea type="text" id="mouth_word" class="form-control" placeholder="Enter Mouth Word"></textarea>
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="image">Upload Image</label>
                            <input type="file" id="image" class="form-control">
                        </div>
                        <div class="form-group mb-3 ">
                            <img src="https://www.pngitem.com/pimgs/m/35-350426_profile-icon-png-default-profile-picture-png-transparent.png" alt="" class="img-fluid img-thumbnail" id="imgPreview" style="max-width: 200px; height: 100px;">
                        </div>
                        
                        <div class="form-group mb-3 ">
                            <label for="Status">Status</label>
                            <select id="_status"  class="form-select">
                                <option >----Select---</option>
                                <option value="1">Active</option>
                                <option value="0">inActive</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"  data-bs-dismiss="modal">Close</button>
                    <button type="button" id="addBtn"  class="btn btn-success">Add New Testimonial</button>
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
    /* Blog Add Ajax call  */
	$(document).on('click','#addBtn',function(){
		// GET the form data
		var name=$("#name").val();
		var designation=$("#designation").val();
		var mouth_word=$("#mouth_word").val();
		var imageData = $("#image").prop('files')[0];
        var status=$("#_status").val();

        
		
		/* Validation ruls  */
		if (name.length==0) {
			toastr.error('Title is Require');
		}else if(designation.length==0){
			toastr.error('Designation is Require');
		}else if(mouth_word.length==0){
            toastr.error('Mounth Word is Require');
        }else if(status.length==0){
            toastr.error('Status is Require');
        }
        
        else{
			var add_data = "0";
            $('#addBtn').html('<div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div>')
			/* Create a Form Data and append this  */
			var form_data = new FormData();
			form_data.append('file', imageData);
			form_data.append('name', name);
			form_data.append('designation', designation);
			form_data.append('mouth_word', mouth_word);
			form_data.append('status', status);
			form_data.append('add_data', add_data);
			/*Ajax calll Request Start */
			$.ajax({
				type: 'POST',
				url:'<?=base_url('testimonial/add')?>',
				data: form_data,
				dataType: 'script',
				cache: false,
				contentType: false,
				processData: false,
				success: function(response) {
					if (response == 1) {
                        $("#addModal").modal('hide');
                        toastr.success('Added Successfully');
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
					}else if(response == 2){
                        toastr.error("Large file not allow");
                        $('#addBtn').html('Add Now');
                    }
					else if(response == 3){
                        toastr.error("Error moving the uploaded file");
                        $('#addBtn').html('Add Now');
                    }
					else if(response == 0){
                        toastr.error("Invalid file extension");
                        $('#addBtn').html('Add Now');
                    }
					else {
						toastr.error('Something was wrong!! ');
                        $('#addBtn').html('Add Now');
					}
				}
			});
			/*Ajax calll Request End */
		}
	});

    /* Blog Update Ajax call  */
	$(document).on('click', '#updateBtn', function (e) {
    e.preventDefault();

    // GET the form data
    var update_testimonial_id= $('#update_testimonial_id').val();
    var update_name=   $('#update_name').val();
    var update_designation=$('#update_designation').val();
    var mouth_word=$('#mouth_word').val();
   
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
    } else if (update_designation.length == 0) {
        toastr.error('Designation  is required');
    }else if (mouth_word.length == 0) {
        toastr.error('Mouth Word  is required');
    }
     else {
        // Create a FormData object and append the data
        var form_data = new FormData();
        form_data.append('update_image', update_image);
        form_data.append('old_image', imageName);
        form_data.append('update_testimonial_id', update_testimonial_id);
        form_data.append('update_name', update_name);
        form_data.append('update_designation', update_designation);
        form_data.append('mouth_word', mouth_word);
        form_data.append('update_status', update_status);
        form_data.append('update_data', update_data);

        // AJAX call to update the Blog data
        $.ajax({
            type: 'POST',
            url: '<?=base_url('testimonial/update')?>', 
            data: form_data,
            dataType: 'script',
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response == 1) {
                    $("#editModal").modal('hide');
                        toastr.success('Update Successfully');
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









    /* Delete Template Script */
    $(document).on('click','#deleteConfirmBtn',function(){
		var id=$(this).data('id');
		$.ajax({
            url: '<?=base_url('testimonial/delete')?>', 
            type: 'POST',
            data: { id: id , delete_data:0},
            success: function(response) {
                if (response==1) {
					$("#deleteModal"+id).modal('hide');
                        toastr.success('Delete Successful');
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

/* Edit Service section Script */
$(document).on('click','#editModalBtn',function(){
    $('#editModal').modal('show');
    var dataId=$(this).data('id');

    $.ajax({
        type: 'GET',
        url:'<?=base_url('testimonial/get')?>',
        data: {get_testimonial_data:0,id:dataId},
        cache: false,
        success: function(response) {
             var _data = JSON.parse(response);
            
            for(var i = 0; i < _data.length; i++) {
                var data = _data[i];

                $('#update_testimonial_id').val(data.id);
                $('#update_name').val(data.name);
                $('#update_designation').val(data.designation);
                $('#mouth_word').val(data.mouth_word);
               
                $('#old_image').attr('src', data.image);


                    if (data.status === '1') {
                        $('#update_status').html('<option value="1" selected>Active</option>');
                        $('#update_status').append('<option value="0" >inActive</option>');
                    } else {
                        $('#update_status').html('<option value="0" selected>inActive</option>'); 
                        $('#update_status').append('<option value="1">Active</option>');
                    }

                
                
            }
            
        }
    });

});
    

</script>




</body>

</html>