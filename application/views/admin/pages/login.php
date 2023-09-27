<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Portfollio |Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/toastr.min.css">
    </head>

    <body>

        <!-- Loader -->
            <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

         <!-- Begin page -->
         <div class="accountbg" ></div>

        <div class="account-pages mt-2 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-5 col-xl-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="text-center mt-1">
                                    <div class="mb-3">
                                        <a href="#"><img src="images/logo.jpg" height="70px" width="100px" alt="logo"></a>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h4 class="font-size-18 mt-2 text-center">Welcome Back !</h4>
                                    <p class="text-muted text-center mb-4">Sign in to continue to Neways PORTFOLLIO ADMIN-Dashboard</p>
    
                                    <form action="<?php echo base_url('loginController/authenticate'); ?>" method="post">
    
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                                        </div>
                                        <div>
                                                                                    </div>
    
                                        <div class="row mt-4">
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="customControlInline">
                                                    <label class="form-check-label" for="customControlInline">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <button type="submit" name="login" class="btn btn-primary w-md waves-effect waves-light" >Log In</button>
                                            </div>
                                        </div>
    
                                        <div class="mb-0 row">
                                            <div class="col-12 mt-4">
                                            <?php
        // Check if flash data 'error' exists
        if($this->session->flashdata('error')) {
            echo '<div style="color:red">'.$this->session->flashdata('error').'</div>';
        }
    ?>
                                            </div>
                                        </div>
                                    </form>
    
                                </div>
    
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

                             
        <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script> >
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="assets/js/toastr.init.js"></script>


    <script src="assets/js/app.js"></script>
    <script type="text/javascript">
        <?php 
        
        
        // Check if flash data 'error' exists
        
        
        ?>
        toastr.error($error);
    //  $(document).ready(function(){
    //     $("#loginBtnConfirm").click(function(){
    //     var username=$("#username").val();
    //     var password=$("#password").val();

    //     if (username.length==0) {
    //         toastr.warning("Username is require");
    //     }else if(password.length==0){
    //         toastr.warning("Password is require");
    //     }else{
    //         //loginFunction(userEmail,userPassword);
    //         loginFunction(username,password);
    //     }

    // });
    // function loginFunction(username,password){
    //     $.ajax({
    //         url:'include/login.php',
    //         type:'POST',
    //         data:{username:username,password:password},
    //         success:function(response){
    //             if (response==1) {
    //                 toastr.success("Login Successful");
    //                 toastr.success("Thank You");
    //                 setTimeout(()=>{
    //                   location.href="index.php";
    //                 },1000);
    //             }else{
    //                 toastr.error("Email Or Password Wrong!");
    //                 //toastr.error("Please Try Again");
    //             }
    //         }
    //     });
    // }
    //  }); 
</script>
    </body>
</html>
