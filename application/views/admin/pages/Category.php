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
                                         Add New Category 
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
                                                    <th class="th-sm">Status</th>
                                                    <th class="th-sm">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table_data">
                                            <?php foreach ($data as $item): ?>
                                                
                                                <tr>
                                                    <td><?php echo $item->id; ?></td>
                                                    <td><?php echo $item->name; ?></td>
                                                       
                                                   
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
                    <h5 class="modal-title" id="exampleModalLabel">Update Category </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                <form id="editForm" enctype="multipart/form-data">
                        <div class="form-group d-none">
                            <label >ID</label>
                            <input type="text" id="update_category_id"class="form-control" value="">
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="categoryname">Category Name</label>
                            <input type="text" id="update_category" class="form-control" placeholder="Enter Title">
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
                    <button type="button" id="updateBtn"  class="btn btn-success">Update Category</button>
                </div>
            </div>
        </div>
	</div>


    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body card shadow">
                <form id="addForm" enctype="multipart/form-data">
                        
                        <div class="form-group mb-3 ">
                            <label for="category name">Category Name</label>
                            <input type="text" id="category_name" class="form-control" placeholder="Enter Category Name">
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
                    <button type="button" id="addBtn"  class="btn btn-success">Add New Category</button>
                </div>
            </div>
        </div>
    </div>



 <!----Script code----->
 <?php echo $js;?>

<script type="text/javascript">
    $("#template_table").DataTable();
     
    /* Contract Add Ajax call  */
	$(document).on('click','#addBtn',function(){
		// GET the form data
		var category_name=$("#category_name").val();
		var status=$("#_status").val();
		
		/* Validation ruls  */
		if (template_id.length==0) {
			toastr.error('Please Template Select');
		}else if(category_name.length==0){
			toastr.error('Category Name is Require');
		}
        
        else{
			var add_data = "0";
            $('#addBtn').html('<div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div>')
			/* Create a Form Data and append this  */
			var form_data = new FormData();
			form_data.append('category_name', category_name);
			form_data.append('status', status);
			form_data.append('add_data', add_data);
			/*Ajax calll Request Start */
			$.ajax({
				type: 'POST',
				url:'<?=base_url('category/add')?>',
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

    /* Update Ajax call  */
	$(document).on('click', '#updateBtn', function (e) {
    e.preventDefault();

    // GET the form data
   var update_category_id= $('#update_category_id').val();
   var update_category= $('#update_category').val();
   var update_status= $('#update_status').val();

	var update_data=0;


	
    /* Validation rules */
    if (update_category.length == 0) {
        toastr.error('Category Name is required');
    } else if (update_status.length == 0) {
        toastr.error('Status is required');
    } else {
        $('#updateBtn').html('<div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div>')
        // Create a FormData object and append the data
        var form_data = new FormData();
        form_data.append('update_category_id', update_category_id);
        form_data.append('update_category', update_category);
        form_data.append('update_status', update_status);
        form_data.append('update_data', update_data);

        // AJAX call to update the student data
        $.ajax({
            type: 'POST',
            url: '<?=base_url('category/update')?>', 
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
            url: '<?=base_url('category/delete')?>', 
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
    $('#update_status').html(' ');
    $.ajax({
        type: 'GET',
        url:'<?=base_url('category/get')?>',
        data: {get_category_data:0,id:dataId},
        cache: false,
        success: function(response) {
             var jsonData = JSON.parse(response);
            
                for(var i = 0; i < jsonData.length; i++) {
                    var data = jsonData[i];

                    $('#update_category_id').val(data.id);

                    $("#update_category").val(data.name);
                    if (data.status === '1') {
                        $('#update_status').append('<option value="1" selected>Active</option>'); // Set to "active"
                        $('#update_status').append('<option value="0" >inActive</option>');
                    } else {
                        $('#update_status').append('<option value="1" >Active</option>'); // Set to "active"
                        $('#update_status').append('<option value="0" selected>inActive</option>');
                    }               
                
                }
            
        }
    });

});
    

</script>




</body>

</html>