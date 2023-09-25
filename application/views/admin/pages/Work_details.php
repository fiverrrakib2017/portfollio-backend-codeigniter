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
                                        Add Details Work 
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive" id="tableStyle">
                                        <table id="template_table" class="table table-striped table-bordered" cellspacing="0"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm">ID</th>
                                                    <th class="th-sm">Category Name</th>
                                                    <th class="th-sm">Title</th>
                                                    <th class="th-sm">Image</th>
                                                    <th class="th-sm">Project Details</th>
                                                    <th class="th-sm">Client Name</th>
                                                    <th class="th-sm">Project Value</th>
                                                    <th class="th-sm">Status</th>
                                                    <th class="th-sm">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table_data">
                                            <?php foreach ($data as $item): ?>
                                                
                                                <tr>
                                                    <td><?php echo $item->id; ?></td>
                                                    <td><?php echo $item->name; ?></td>
                                                    <td><?php echo $item->title; ?></td>
                                                    
                                                    <td><img src="<?php echo base_url() . '/' . $item->image1; ?>" height="50px" width="100px" class="rounded" /><img src="<?php echo base_url() . '/' . $item->image2; ?>" height="50px" width="100px" class="rounded" /><img src="<?php echo base_url() . '/' . $item->image3; ?>" height="50px" width="100px" class="rounded" /></td>
                                                    <td>
                                                    <?php
                                                         $link = $item->project_details; 
                                                        $maxChars = 50;
                                                        if (strlen($link) > $maxChars) {
                                                            echo $link = substr($link, 0, $maxChars).'...........';
                                                        } else {
                                                            echo $link;
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $item->client_name; ?></td>
                                                    <td><?php echo $item->project_value; ?></td>
                                                    
                                                    <td>
                                                        <?php if ($item->status == 1) : ?>
                                                            <span class="badge bg-success">Active</span>
                                                        <?php else : ?>
                                                            <span class="badge bg-danger">inActive</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <!-- <button type="button" data-id="<?php echo $item->id; ?>" class="btn btn-primary"  id="editModalBtn"><i class="fas fa-edit"></i></button> -->

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

    <div class="modal  fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog card shadow">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Work</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                <form id="addForm" enctype="multipart/form-data">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3 ">
                                    <label for="work">Select Work</label>
                                    <select type="text" id="update_work_id" class="form-select">
                                        <option value="">----Select----</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3 ">
                                    <label for="">Client Name</label>
                                    <input type="text" id="update_client_name" class="form-control" placeholder="Enter Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                                <div class="form-group mb-3 ">
                                    <label for="">Project Value</label>
                                    <input type="text" id="update_project_value" class="form-control" placeholder="Enter Project Value">
                                </div>
                                <div class="form-group mb-3 ">
                                    <label for="">Location </label>
                                    <input type="text" id="update__location" class="form-control" placeholder="Enter Location">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3 ">
                                    <label for="">Designer</label>
                                    <input type="text" id="update_designer" class="form-control" placeholder="Enter Designer">
                                </div>

                                <div class="form-group mb-3 ">
                                    <label for="">Image 1</label>
                                    <input type="file" id="update_image1" class="form-control">
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                                
                                <div class="form-group mb-3 ">
                                    <label for="">Image 2</label>
                                    <input type="file" id="update_image2" class="form-control">
                                </div>
                                <div class="form-group mb-3 ">
                                    <label for="">Image 3</label>
                                    <input type="file" id="update_image3" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 ">
                                <label for="">Project Details</label>
                                <textarea type="text" id="update_project_details" class="form-control" placeholder="Enter Project Details"></textarea>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 ">
                                <label for="">Project Overview</label>
                                <textarea type="text" id="update_project_overview" class="form-control" placeholder="Enter Project Overview"></textarea>
                            </div>    
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Work Details </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body card shadow">
                <form id="addForm" enctype="multipart/form-data">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3 ">
                                    <label for="work">Select Work</label>
                                    <select type="text" id="work_id" class="form-select">
                                        <option value="">----Select----</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3 ">
                                    <label for="">Client Name</label>
                                    <input type="text" id="client_name" class="form-control" placeholder="Enter Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                                <div class="form-group mb-3 ">
                                    <label for="">Project Value</label>
                                    <input type="text" id="project_value" class="form-control" placeholder="Enter Project Value">
                                </div>
                                <div class="form-group mb-3 ">
                                    <label for="">Location </label>
                                    <input type="text" id="add_location" class="form-control" placeholder="Enter Location">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3 ">
                                    <label for="">Designer</label>
                                    <input type="text" id="designer" class="form-control" placeholder="Enter Designer">
                                </div>

                                <div class="form-group mb-3 ">
                                    <label for="">Image 1</label>
                                    <input type="file" id="image1" class="form-control">
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                                
                                <div class="form-group mb-3 ">
                                    <label for="">Image 2</label>
                                    <input type="file" id="image2" class="form-control">
                                </div>
                                <div class="form-group mb-3 ">
                                    <label for="">Image 3</label>
                                    <input type="file" id="image3" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 ">
                                <label for="">Project Details</label>
                                <textarea type="text" id="project_details" class="form-control" placeholder="Enter Project Details"></textarea>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="form-group mb-3 ">
                                <label for="">Project Overview</label>
                                <textarea type="text" id="project_overview" class="form-control" placeholder="Enter Project Overview"></textarea>
                            </div>    
                        </div>

                       
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"  data-bs-dismiss="modal">Close</button>
                    <button type="button" id="addBtn"  class="btn btn-success">Add Work Details</button>
                </div>
            </div>
        </div>
    </div>



 <!----Script code----->
 <?php echo $js;?>

<script type="text/javascript">
    $("#template_table").DataTable();
    

    /* Get Work details data Ajax call  */
        get_work()
      
        function get_work(){
            $.ajax({
            type: 'GET',
            url:'<?=base_url('work/get')?>',
            data: {get_docs_work:0},
            cache: false,
                success: function(response) {
                    var response_data = JSON.parse(response);
                    console.log(response_data);
                    var selectElement = document.getElementById('work_id');

                    // Loop 
                    for(var i = 0; i < response_data.length; i++) {
                        var data = response_data[i];
                        var option = document.createElement('option');
                        option.value = data.id;
                        option.textContent = data.title;
                        selectElement.appendChild(option);
                    }
                }
            });
        }



   
    /*  Add data Ajax call  */
	$(document).on('click','#addBtn',function(){
		// GET the form data
		var work_id = $('#work_id').val();
        var client_name = $('#client_name').val();
        var project_value = $('#project_value').val();
        var add_location = $('#add_location').val();
        var designer = $('#designer').val();
        var image1 = $('#image1')[0].files[0]; 
        var image2 = $('#image2')[0].files[0]; 
        var image3 = $('#image3')[0].files[0]; 
        var project_details = $('#project_details').val();
        var project_overview = $('#project_overview').val();

        
        //  frontend validation
        if (work_id.trim() === '') {
            toastr.error('Please select a work');
            return;
        }
        if (client_name.trim() === '') {
            toastr.error('Please enter client name');
            return;
        }
        if (project_value.trim() === '') {
            toastr.error('Please enter Project Value');
            return;
        }
        if (add_location.trim() === '') {
            toastr.error('Please enter Location');
            return;
        }
        if (!image1 || !image2 || !image3) {
            toastr.error('Please select all three images');
            return;
        }
        // Check if the file type is an image
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if (!allowedExtensions.exec(image1.name) || !allowedExtensions.exec(image2.name) || !allowedExtensions.exec(image3.name)) {
            toastr.error('Please upload images only');
            return;
        }
        // Check if the file size is within a specific limit (e.g., 5MB)
        var maxSize = 5 * 1024 * 1024; // 5MB in bytes
        if (image1.size > maxSize || image2.size > maxSize || image3.size > maxSize) {
            toastr.error('File size should not exceed 5MB');
            return;
        }
		
        else{
			var add_data = "0";
            $('#addBtn').html('<div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div>')
			/* Create a Form Data and append this  */
			var formData = new FormData();
                formData.append('work_id', work_id);
                formData.append('client_name', client_name);
                formData.append('project_value', project_value);
                formData.append('add_location', add_location);
                formData.append('designer', designer);
                formData.append('image1', image1);
                formData.append('image2', image2);
                formData.append('image3', image3);
                formData.append('project_details', project_details);
                formData.append('project_overview', project_overview);
                formData.append('add_data', add_data);
			/*Ajax calll Request Start */
			$.ajax({
				type: 'POST',
				url:'<?=base_url('work/details/add')?>',
				data: formData,
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

    /* service Update Ajax call  */
	$(document).on('click', '#updateBtn', function (e) {
    e.preventDefault();

    // GET the form data
    var update_work_id= $('#update_work_id').val();
    var update_category_id= $('#update_category_id').val();
    var update_title= $('#update_title').val();
    var update_link= $('#update_link').val();
    var update_link_type= $('#update_link_type').val();
   
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
    if(update_category_id.length == 0){
        toastr.error('Category is required');
    }
    else if (update_link_type.length == 0) {
        toastr.error('Link Type is required');
    } else if (update_link_type != 3 && update_link.length == 0) {
        toastr.error('Link is required');
    } 
     else {
        // Create a FormData object and append the data
        var form_data = new FormData();
        form_data.append('update_image', update_image);
        form_data.append('old_image', imageName);
        form_data.append('update_work_id', update_work_id);
        form_data.append('update_category_id', update_category_id);
        form_data.append('update_title', update_title);
        form_data.append('update_link', update_link);
        form_data.append('update_link_type', update_link_type);
        form_data.append('update_status', update_status);
        form_data.append('update_data', update_data);

        // AJAX call to update the Blog data
        $.ajax({
            type: 'POST',
            url: '<?=base_url('work/update')?>', 
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
            url: '<?=base_url('work/details/delete')?>', 
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
    $('#update_status').html('');
    $.ajax({
        type: 'GET',
        url:'<?=base_url('work/details/get')?>',
        data: {get_work_details_data:0,id:dataId},
        cache: false,
        success: function(response) {
             var data = JSON.parse(response);
            console.log(data);
            // for(var i = 0; i < data.length; i++) {
            //     var data = data[i];

            //     $('#update_work_id').val(data.id);
            //     $('#update_title').val(data.title);
            //     $('#update_link').val(data.link);
            //     $('#update_link_type').val(data.link_type);
                
            //     if (data.link_type==3) {
            //         $("#update_link").attr('disabled','disabled');
            //     }else{
            //         $("#update_link").removeAttr('disabled');
            //     }
               
            //     $('#old_image').attr('src', data.image);


            //         if (data.status === '1') {
            //             $('#update_status').html('<option value="1" selected>Active</option>');
            //             $('#update_status').append('<option value="0" >inActive</option>');
            //         } else {
            //             $('#update_status').html('<option value="0" selected>inActive</option>'); 
            //             $('#update_status').append('<option value="1">Active</option>');
            //         }
            //     // Fetch template name based on category_id
            //     $.ajax({
            //         type: 'GET',
            //         url:'<?=base_url('category/get')?>',
            //         data: { 
            //             get_category_data:0,
            //             id:data.category_id 
            //         },
            //         cache: false,
            //         success: function (response) {
            //             var Data = JSON.parse(response);
            //             // Populate the select element with options

            //             for(var i=0; i<Data.length; i++){
            //                 var category_data=Data[i];
            //                 var select_category_Element = $('#update_category_id');
            //                 select_category_Element.empty(); 

            //                 // Add the selected option
            //                 var selectedOption = $('<option></option>');
            //                 selectedOption.val(category_data.id).text(category_data.name);
            //                 select_category_Element.append(selectedOption);
            //             }
            //             //Fetch and add other category names
            //             $.ajax({
            //                 type: 'GET',
            //                 url: '<?=base_url('category/get')?>', 
            //                 data: { get_all_category: 0 },
            //                 cache: false,
            //                 success: function (responsedata) {
            //                     var data = JSON.parse(responsedata);
            //                     data.forEach(function (response) {
            //                         var option = $('<option></option>');
            //                         option.val(response.id).text(response.name);
            //                         select_category_Element.append(option);
            //                     });
            //                 }
            //             });
            //         }
            //     });               
                
            // }
            
        }
    });

});
    

</script>




</body>

</html>