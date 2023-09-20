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
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="btn-sm btn btn-success mb-2">
                                         Add New Experience 
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive" id="tableStyle">
                                        <table id="template_table" class="table table-striped table-bordered" cellspacing="0"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm">ID</th>
                                                    <th class="th-sm">Template Name</th>
                                                    <th class="th-sm">Title</th>
                                                    <th class="th-sm">Description</th>
                                                    <th class="th-sm">Start Date</th>
                                                    <th class="th-sm">End Date</th>
                                                    <th class="th-sm">Status</th>
                                                    <th class="th-sm">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table_data">
                                            <?php foreach ($data as $item): ?>
                                                
                                                <tr>
                                                    <td><?php echo $item->id; ?></td>
                                                    <td><?php echo $item->template_name; ?></td>
                                                    <td><?php echo $item->title; ?></td>
                                                        <td>
                                                        
                                                            <?php 
                                                                $description = $item->description; 
                                                                $maxChars = 50;
                                                                if (strlen($description) > $maxChars) {
                                                                    echo $trimmedDescription = substr($description, 0, $maxChars).'...........';
                                                                } else {
                                                                    echo $description;
                                                                }
                                                                ?>
                                                
                                                        </td>
                                                    <td><?php echo $item->start_date; ?></td>
                                                    <td><?php echo $item->end_date; ?></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Update Experience </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                <form id="editForm" enctype="multipart/form-data">
                        <div class="form-group d-none">
                            <label >ID</label>
                            <input type="text" id="update_experience_id"class="form-control" value="">
                        </div>
                        <div class="form-group mb-3 ">
                        <label for="name">Select Template</label>
                            <select type="text" id="update_template_id" class="form-select">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="title">Title</label>
                            <input type="text" id="update_title" class="form-control" placeholder="Enter Title">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="description">Description</label>
                            <textarea type="text" id="update_description" class="form-control" placeholder="Enter Description"></textarea>
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="sdate">Start Date</label>
                            <input type="date" id="update_sdate" class="form-control" placeholder="Start Date">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="edate">End Date</label>
                            <input type="date" id="update_edate" class="form-control" placeholder="End Date">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="Status">Status</label>
                            <select id="update_status"  class="form-select">
                                
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
                    <h5 class="modal-title" id="exampleModalLabel">Add New Experience</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body card shadow">
                <form id="addForm" enctype="multipart/form-data">
                        <div class="form-group mb-3 ">
                            <label for="name">Select Template</label>
                            <select type="text" id="template_id" class="form-select">
                                <option value="">----Select----</option>
                            </select>
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="title">Title</label>
                            <input type="text" id="title" class="form-control" placeholder="Enter Title">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="description">Description</label>
                            <textarea type="text" id="description" class="form-control" placeholder="Enter Description"></textarea>
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="sdate">Start Date</label>
                            <input type="date" id="sdate" class="form-control" placeholder="Start Date">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="edate">End Date</label>
                            <input type="date" id="edate" class="form-control" placeholder="End Date">
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
                    <button type="button" id="addBtn"  class="btn btn-success">Add New Experience</button>
                </div>
            </div>
        </div>
    </div>



 <!----Script code----->
 <?php echo $js;?>

<script type="text/javascript">
    $("#template_table").DataTable();
        /* Get template data Ajax call  */
    get_template();
        function get_template(){
            $.ajax({
            type: 'GET',
            url:'<?=base_url('template/get')?>',
            data: {get_template:0},
            cache: false,
                success: function(response) {
                    var templates = JSON.parse(response);

                    var selectElement = document.getElementById('template_id');
                    //var selectElement = document.getElementById('update_template_id');

                    // Loop through the templates
                    for(var i = 0; i < templates.length; i++) {
                        var template = templates[i];
                        var option = document.createElement('option');
                        option.value = template.id;
                        option.textContent = template.template_name;
                        selectElement.appendChild(option);
                    }
                }
            });
        }
    /* Contract Add Ajax call  */
	$(document).on('click','#addBtn',function(){
		// GET the form data
		var template_id=$("#template_id").val();
		var title=$("#title").val();
		var description=$("#description").val();
		var sdate=$("#sdate").val();
		var edate=$("#edate").val();
		var status=$("#_status").val();
        

        
		
		/* Validation ruls  */
		if (template_id.length==0) {
			toastr.error('Please Template Select');
		}else if(title.length==0){
			toastr.error('Title  Require');
		}else if(description.length==0){
			toastr.error('Description  Require');
		}else if(sdate.length==0){
			toastr.error('Start Date Require');
		}else if(edate.length==0){
			toastr.error('End Date Require');
		}else if(status.length==0){
			toastr.error('Status is Require');
		}
        
        else{
			var add_data = "0";
            $('#addBtn').html('<div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div>')
			/* Create a Form Data and append this  */
			var form_data = new FormData();
			form_data.append('template_id', template_id);
			form_data.append('title', title);
			form_data.append('description', description);
			form_data.append('sdate', sdate);
			form_data.append('edate', edate);
			form_data.append('status', status);
			form_data.append('add_data', add_data);
			/*Ajax calll Request Start */
			$.ajax({
				type: 'POST',
				url:'<?=base_url('experience/add')?>',
				data: form_data,
				dataType: 'script',
				cache: false,
				contentType: false,
				processData: false,
				success: function(response) {
					if (response==1) {
					$("#addModal").modal('hide');
                        toastr.success('Add Successful');
                        setTimeout(() => {
                            location.reload();
                    }, 1000);
                    } else {
                        // Error occurred
                        toastr.error('Error');
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
   var update_experience_id= $('#update_experience_id').val();
   var update_template_id= $('#update_template_id').val();
   var update_title= $('#update_title').val();
   var update_description= $('#update_description').val();
   var update_sdate= $('#update_sdate').val();
   var update_edate= $('#update_edate').val();
   var update_status= $('#update_status').val();

	var update_data=0;


	
    /* Validation rules */
    if (update_title.length == 0) {
        toastr.error('Title is required');
    } else if (update_description.length == 0) {
        toastr.error('Description is required');
    } else if (update_sdate.length == 0) {
        toastr.error('Start Date is required');
    } else if (update_edate.length == 0) {
        toastr.error('End Date is required');
    } else {
        $('#updateBtn').html('<div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div>')
        // Create a FormData object and append the data
        var form_data = new FormData();
        form_data.append('update_experience_id', update_experience_id);
        form_data.append('update_template_id', update_template_id);
        form_data.append('update_title', update_title);
        form_data.append('update_description', update_description);
        form_data.append('update_sdate', update_sdate);
        form_data.append('update_edate', update_edate);
        form_data.append('update_status', update_status);
        form_data.append('update_data', update_data);

        // AJAX call to update the student data
        $.ajax({
            type: 'POST',
            url: '<?=base_url('experience/update')?>', 
            data: form_data,
            dataType: 'script',
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response == 1) {
                        toastr.success('Update Successfully');
                        $("#editModal").modal('hide'); 
                        $('#updateBtn').html(`Update Now`);
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
            url: '<?=base_url('experience/delete')?>', 
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

/* Edit Home section Script */
$(document).on('click','#editModalBtn',function(){
    $('#editModal').modal('show');
    var dataId=$(this).data('id');
   $("#update_status").html(' ');
    $.ajax({
        type: 'GET',
        url:'<?=base_url('experience/get')?>',
        data: {get_experience_data:0,id:dataId},
        cache: false,
        success: function(response) {
             var jsonData = JSON.parse(response);
            
            for(var i = 0; i < jsonData.length; i++) {
                var data = jsonData[i];

                $('#update_experience_id').val(data.id);

                $("#update_title").val(data.title);
                $("#update_description").val(data.description);
                $("#update_sdate").val(data.start_date);
                $("#update_edate").val(data.end_date);


                    if (data.status == '1') {
                        $('#update_status').append('<option value="1" selected>Active</option>'); // Set to "active"
                        $('#update_status').append('<option value="0" >inActive</option>');
                    } else {
                        // Set to "active"
                        $('#update_status').append('<option value="0" selected>inActive</option>');
                        $('#update_status').append('<option value="1" >Active</option>'); 
                    }
                    
                // Fetch template name based on template_id
                $.ajax({
                    type: 'GET',
                    url:'<?=base_url('template/get')?>',
                    data: { template_id: data.template_id },
                    cache: false,
                    success: function (response) {
                        var templateData = JSON.parse(response);
                        // Populate the select element with options

                        for(var i=0; i<templateData.length; i++){
                            var template_data=templateData[i];
                            var selectElement = $('#update_template_id');
                            selectElement.empty(); 

                            // Add the selected option
                            var selectedOption = $('<option></option>');
                            selectedOption.val(template_data.id).text(template_data.template_name);
                            selectElement.append(selectedOption);
                        }
                        //Fetch and add other template names
                        $.ajax({
                            type: 'GET',
                            url: '<?=base_url('template/get')?>', 
                            data: { get_template: 0 },
                            cache: false,
                            success: function (responsedata) {
                                var data = JSON.parse(responsedata);
                                data.forEach(function (template) {
                                    var option = $('<option></option>');
                                    option.val(template.id).text(template.template_name);
                                    selectElement.append(option);
                                });
                            }
                        });
                    }
                });

                
                
            }
            
        }
    });

});
    

</script>




</body>

</html>