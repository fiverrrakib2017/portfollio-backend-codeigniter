
<!DOCTYPE html>
<html lang="en" class="max-width-d">
  
<!-- Mirrored from retrina.com/demo/arshia/arshia-plus/portfolio-01-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 05:37:13 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Arshia - Fully Responsive Personal Template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Retrina Group" />
    <!--  FavIcon  -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/bootstrap.css');?>">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/bootstrap-icons.css');?>">
    <!-- Malihu Jquery Custom ScrollBar Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/jquery.mCustomScrollbar.css');?>">
    <!-- Animate Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/animate.min.css');?>">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/owl.carousel.min.css');?>">
    <!-- Magnific Popup Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/magnific-popup.css');?>">
    <!--  Custom Style Css  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/style.css');?>">
    <!--  Color Css  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/colors/colorfull.css');?>">

    <link href="<?=base_url('assets/css/toastr.min.css')?>"  rel="stylesheet" type="text/css">
  </head>
  <body class="ajax-page-visible dark-arshia max-width-d">
    <div id="ajax-page" class="ajax-page-content">
      <div class="single-portfolio-wrapper">
        <div class="container">
          <!-- Ajax-page-nav Start -->
          <div class="ajax-page-nav">
            <div class="nav-item ajax-page-prev-next">
              
            </div>
            <div class="nav-item ajax-page-close-button">
              <a class="ajax-page-close-button"  href="<?php echo base_url();?>">
                <i class="bi bi-x"></i>
              </a>
            </div>
          </div>
          <!-- Ajax-page-nav End -->
          <!--  Single Portfolio Start  -->
          <div class="portfolio-page-title">
          <?php foreach($work_details as $item):?>
            <h1><?php echo $item->title?></h1>
            <?php endforeach; ?>
          </div>
          <div class="row">
            <div class="col-lg-7 post-content">
              <div class="single-post">
                <div class="owl-carousel portfolio-page-carousel">
                <?php foreach($work_details as $item):?>
                  <!-- Item 01 -->
                  <div class="entry-image">
                    <img src="<?php echo base_url() . '/' . $item->image1; ?>" alt="/">
                  </div>
                  <!-- Item 02 -->
                  <div class="entry-image">
                    <img src="<?php echo base_url() . '/' . $item->image2; ?>" alt="/">
                  </div>
                  <!-- Item 03 -->
                  <div class="entry-image">
                    <img src="<?php echo base_url() . '/' . $item->image3; ?>" alt="/">
                  </div>
                  <?php endforeach; ?>
                </div>
                <div class="entry-content">
                  <h2>Project Overview</h2>
                  <?php foreach($work_details as $item):?>
                  <p class="mb-0"><?php echo  $item->project_overview;?></p>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
            <aside class="col-lg-4 ms-auto sidebar mt-5 mt-lg-0">
              <div class="sidbar-wrap">
                <!-- Categories -->
                <div class="aside-box">
                  <div class="aside-title">
                    <h6>Project Details</h6>
                  </div>
                  <?php foreach($work_details as $item):?>
                  <p ><?php echo  $item->project_details;?></p>
                  <?php endforeach; ?>
                  <div class="aside-item-portfolio">
                  <ul class="list-unstyled">
                      <li>
                        <a href="#">Category: </a>
                        <?php foreach($work_details as $item):?>
                        <span> <?php echo ($item->name) ?></span>
                        <?php endforeach; ?>
                      </li>
                      <li>
                        <a href="#">Client:</a>
                        <?php foreach($work_details as $item):?>
                        <span> <?php echo ($item->client_name) ?></span>
                        <?php endforeach; ?>
                      </li>
                      <li>
                        <a href="#">Date:</a>
                        <?php foreach($work_details as $item):?>
                        <span> <?php echo  $item->date; ?></span>
                        <?php endforeach; ?>
                      </li>
                      <li>
                        <a href="#">Project Value:</a>
                        <?php foreach($work_details as $item):?>
                        <span> <?php echo ($item->project_value) ?></span>
                        <?php endforeach; ?>
                      </li>
                      <li>
                        <a href="#">Location: </a>
                        <?php foreach($work_details as $item):?>
                        <span> <?php echo ($item->location) ?></span>
                        <?php endforeach; ?>
                      </li>
                      <li>
                        <a href="#">Designer: </a>
                        <?php foreach($work_details as $item):?>
                        <span> <?php echo ($item->designer) ?></span>
                        <?php endforeach; ?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </aside>
          </div>
          <!--  Single Portfolio End  -->
        </div>
      </div>
    </div>

    <!--  Color Pallet  -->
    <div id="color-switcher" class="color-switcher">
      <div class="text-center color-pallet hide">
        <h6 class="theme-skin-title">Light &amp; Dark</h6>
        <ul class="color-scheme list-inline">
            <li class="list-inline-item">
                <a href="javascript:void(0)" class="light-scheme"><i class="bi bi-brightness-high"></i> Light</a>
            </li>
            <li class="list-inline-item">
                <a href="javascript:void(0)" class="dark-scheme active"><i class="bi bi-moon"></i> Dark</a>
            </li>
          </ul>
          <h6 class="text-center mt-3 text-dark">Select your color</h6>
          <ul class="pattern">
              <li>
                  <a class="color1" href="javascript:void(0)"></a>
              </li>
              <li>
                  <a class="color2" href="javascript:void(0)"></a>
              </li>
              <li>
                  <a class="color3" href="javascript:void(0)"></a>
              </li>
              <li>
                  <a class="color4" href="javascript:void(0)"></a>
              </li>
              <li>
                  <a class="color5" href="javascript:void(0)"></a>
              </li>
              <li>
                  <a class="color6" href="javascript:void(0)"></a>
              </li>
              <li>
                  <a class="color7" href="javascript:void(0)"></a>
              </li>
              <li>
                  <a class="color8" href="javascript:void(0)"></a>
              </li>
              <li>
                  <a class="color9" href="javascript:void(0)"></a>
              </li>
          </ul>
      </div>
      <div class="pallet-button hide">
          <a href="javascript:void(0)" class="cp-toggle"><i class="bi bi-gear"></i></a>
      </div>
    </div>
    
    <!-- Mouase Magic Cursor Start -->
    <div class="m-magic-cursor mmc-outer"></div>
	  <div class="m-magic-cursor mmc-inner"></div>
    <!-- Mouase Magic Cursor End -->

    <!--  JavaScripts  -->
    <!--  Jquery 3.4.1  -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="<?php echo base_url('assets/Frontend/js/jquery-3.4.1.min.js');?>"></script>
    <!--  Bootstrap Js  -->
    <script src="<?php echo base_url('assets/Frontend/js/bootstrap.js');?>"></script>
    <!--  Malihu ScrollBar Js  -->
    <script src="<?php echo base_url('assets/Frontend/js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
    <!--  CountTo Js  -->
    <script src="<?php echo base_url('assets/Frontend/js/jquery.countTo.js');?>"></script>
    <!--  Swiper Js  -->
    <script src="<?php echo  base_url('assets/Frontend/js/owl.carousel.min.js');?>"></script>
    <!--  Isotope Js  -->
    <script src="<?php echo  base_url('assets/Frontend/js/isotope.pkgd.min.js');?> "></script>
    <!--  Magnific Popup Js  -->
    <script src="<?php echo base_url('assets/Frontend/js/jquery.magnific-popup.min.js');?>"></script>
    <!-- Map Js -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRemITiP7JRWpZwLhVt-T2x5MeUFE2KWs"></script> 
    <!--  Arshia Js  -->
    <script src="<?php echo base_url('assets/Frontend/js/arshia.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/toastr.min.js')?>"></script>
    
   
    <script src="assets/js/arshia.js"></script>
  </body>

<!-- Mirrored from retrina.com/demo/arshia/arshia-plus/portfolio-01-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 05:37:15 GMT -->
</html>