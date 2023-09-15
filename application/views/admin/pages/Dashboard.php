
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
                    
                    <div class="row" id="fileterResponse">

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <a href="template.php">
                                    <div class="card-body">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-purple me-0 float-end"><i class=" fas fa-users"></i></span>
                                            <div class="mini-stat-info">
                                                <span class="counter text-teal" id="activeStd">
                                                    <?php

                                                    // if ($activeStd = $con->query("SELECT * FROM customers  ")) {
                                                    //     echo  $activeStd->num_rows;
                                                    // }
                                                        echo 0;

                                                    ?>
                                                </span>
                                                Total Template
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--End col -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <a href="expired_customer.php">
                                    <div class="card-body">
                                        <div class="mini-stat">
                                            <span class="mini-stat-icon bg-blue-grey me-0 float-end"><i class="fas fa-user"></i></span>
                                            <div class="mini-stat-info text-danger">
                                                <span class="counter " id="totalBatch">
                                                <?php 
                                                // if ($expire=$con->query("SELECT * FROM `customers` WHERE `expire_date`<NOW()")) {
                                                //    echo  $expire->num_rows;
                                                // }
                                                
                                                ?>00
                                                </span>
                                                Total Service
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> <!-- End col -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mini-stat">
                                        <span class="mini-stat-icon bg-teal me-0 float-end"><i class=" fas fa-dollar-sign"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-teal" id="totalDue">
                                                <?php 
                                                
                                                // if($allAmount=$con->query("SELECT SUM(due) as totalDue FROM customers "))
                                                // {
                                                //     while($rows=$allAmount->fetch_array()){
                                                //         echo  $totalDue= number_format($rows['totalDue']); 
                                                //     }
                                                // }
                                                
                                                ?>00
                                            </span>
                                            Total Blog
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col -->
                    </div> <!-- end row-->


                    

                      
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
</body>

</html>