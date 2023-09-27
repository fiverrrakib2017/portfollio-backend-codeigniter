
<!DOCTYPE html>
<html lang="en" class="max-width-d">
  
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
  <body class="max-width-d">

    <!-- Preloader -->
    <div id="line-loader">
      <div class="middle-line"></div>
    </div>

    <!--   Menu Overlay Mobile -->
    <div class="menu-overlay d-none"></div>
 <!--   Right Side Start  -->
    <div class="right-side d-none d-lg-block">
      <div id="date"></div>
      <div class="social-box">
        <div class="follow-label">
          <span>Follow Me</span>
        </div>
        <div class="social d-none d-lg-block">
        <?php foreach($social_icon as $item):?>
          <a href="javascript:void(0);">
            <i class="<?php echo  $item->name; ?>"></i>
          </a>

          <?php endforeach; ?>

        </div>
      </div>
      <div class="next-prev-page">
        <button type="button" class="prev-page bg-base-color hstack">
          <i class="bi bi-chevron-compact-up mx-auto"></i>
        </button>
        <button type="button" class="next-page bg-base-color mt-3 hstack">
          <i class="bi bi-chevron-compact-down mx-auto"></i>
        </button>
      </div>
    </div>
     <!--   Right Side End  -->
     <!--  Left Side Start  -->
    <div class="left-side  nav-close">
      <?php foreach($profile as $item):?>
      <div class="menu-content-align">
        <div class="left-side-image">
          <img src="<?php echo base_url() . '/' . $item->image; ?>" alt="/">
        </div>
        <h1 class="mt-1"><?php echo  $item->name;?></h1>
        <a class="download-cv primary-button d-none d-lg-inline-block" href="javascript:void(0);">Download CV</a>
        <div class="container d-lg-none d-inline-block">
          <div class="row">
            <div class="col-12 text-center">
              <p class="text-muted mb-0"><?php echo  $item->name;?></p>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

      <div class="menu-align">
        <ul class="list-group menu text-center " id="menu">
          <li class="list-group-item">
            <a href="<?php echo base_url();?>">
              <i class="bi bi-house"></i>
              <span>home</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="<?php echo base_url();?>#about" class="custom-btn">
              <i class="bi bi-person"></i>
              <span>about</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="<?php echo base_url();?>#resume">
              <i class="bi bi-clipboard-check"></i>
              <span>resume</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="<?php echo base_url();?>#portfolio">
              <i class="bi bi-collection"></i>
              <span>works</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="<?php echo base_url();?>#blog">
              <i class="bi bi-book"></i>
              <span>blog</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="<?php echo base_url();?>#contact">
              <i class="bi bi-geo-alt"></i>
              <span>contact</span>
            </a>
          </li>
        </ul>
        <div class="menu-footer">
          <a class="download-cv primary-button mt-3 mb-4 d-lg-none" href="javascript:void(0);">Download CV</a>
          <div class="social d-lg-none d-block">
            <a href="javascript:void(0);" class="d-inline-block">
              <i class="bi bi-whatsapp t-green"></i>
            </a>
            <a href="javascript:void(0);" class="d-inline-block mx-4">
              <i class="bi bi-instagram t-purple"></i>
            </a>
            <a href="javascript:void(0);" class="d-inline-block">
              <i class="bi bi-dribbble t-red"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--  Left Side End  -->

    <!--  Main Start  -->
    <main id="main" class="main-2">
 <!--  blog Single Start  -->
 <section id="blog-single" class="blog-single section py-6">
        <div class="container">  
          <div class="row">
            <div class="col-lg-12 mt-3">
                    <?php foreach($blog_post as $item):?>
                        <h2 class="header-title"><?php echo $item->title; ?></h2>
                    <?php endforeach; ?>
                <div class="entry-meta">
                    <ul class="list-inline">
                        <li class="list-inline-item mb-3">
                            <a href="#">
                                <i class="bi bi-calendar-check"></i>
                                <?php foreach($blog_post as $item):?>
                                    <?php
                                    $date = "$item->create_date";
                                    $timestamp = strtotime($date);
                                    $formatted_date = date("d F Y", $timestamp);
                                        echo $formatted_date;   
                                    // output will be like  24 September 2023
                                    ?>
                                <?php endforeach; ?>   
                            </a>
                        </li>
                        <li class="list-inline-item mb-3">
                            <a href="#">
                                <i class="bi bi-person-fill"></i>
                                Admin
                            </a>
                        </li>
                        <li class="list-inline-item mb-4">
                            <a href="#">
                                <i class="bi bi-chat-left-text-fill"></i>
                              
                                
                                <?php 
                                
                                if (isset($post_comment_count)) {
                                   echo $post_comment_count." "."Comments";
                                }else{
                                    echo "0". "Comments";
                                }
                                
                                
                                ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="row row-sticky">
                <div class="col-12 post-content">
                    <div class="single-post">
                        <div class="entry-image">
                        <?php foreach($blog_post as $item):?>
                            <img src="<?php echo base_url() . '/' . $item->image; ?>" alt="/">
                            <?php endforeach; ?>  
                        </div>
                        <div class="entry-content">
                        <?php foreach($blog_post as $item):?>
                            <p class="mb-0"><?php echo  $item->description; ?></p>
                            <?php endforeach; ?>  
                        </div>
                    </div>
                    <!--   Comments Start  -->
                    <div class="comments mt-5">
                        <h3>Comments</h3>
                        <ul class="list-inline comments-list">
                            <!--  Item 01  -->
                            <?php foreach($post_comment as $item):?>
                            <li class="list-inline-item">
                                <div class="comment-wrap">
                                    <div class="image-comment">
                                        <img src="<?php echo base_url();?>/assets/Frontend/img/colorfull/man.png" alt="/">
                                    </div>
                                   
                                    <div class="comment-content">
                                        <div class="comment-author">
                                            <?php echo $item->first_name; ?>
                                            <p class="text-muted"><?php
                                                $date = "$item->create_date";
                                                $timestamp = strtotime($date);
                                                $formatted_date = date("d F Y", $timestamp);

                                                // output will be like  24 September 2023
                                                ?>
                                                <a href="#"><?php echo $formatted_date; ?></a>
                                            </p>
                                        </div>
                                        <p class="mb-0"><?php echo $item->message; ?></p>
                                        <a href="#" class="comment-reply-link">
                                            <i class="lni lni-reply"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!--Blog Reply-->
                    <div class="contact-01">
                        <div class="contact mb-5">
                            <div class="contact-form">
                                <h3 class="text-left mb-4">Leave a comment</h3>
                                <div class="contact-box">
                                    <div class="contact-form">
                                        <form id="contactForm">
                                            <div class="row">
                                                <div class="col-lg-6 form-item">
                                                    <div class="form-group">
                                                        <?php foreach($blog_post as $item):?>
                                                        <input class="d-none"  id="post_id" type="text" value="<?php echo $item->id?>">
                                                         <?php endforeach; ?>   
                                                        <input name="name" id="name" type="text" class="form-control" placeholder="First name*"  >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 form-item">
                                                    <div class="form-group">
                                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your email*"  >
                                                    </div>
                                                </div>
                                                <div class="col-12 form-item">
                                                    <div class="form-group">
                                                        <textarea name="comments" id="message" rows="4" class="form-control textarea" placeholder="Your message..." ></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 text-left">
                                                    <button class="primary-button border-0" id="submit-btn">Send Message</button>
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
        </div>
    </section>
    <!--  blog Single End  -->

    </main>
    <!--  Main End  -->

    <!--  Mobile Next and Prev Button Start -->
    <div class="next-prev-page d-block d-lg-none">
      <button type="button" class="prev-page bg-base-color hstack">      
        <i class="bi bi-chevron-compact-left mx-auto"></i>
      </button>
      <button type="button" class="next-page bg-base-color mt-1 mt-lg-3 hstack">
        <i class="bi bi-chevron-compact-right mx-auto"></i>
      </button>
    </div>
    <!--  Mobile Next and Prev Button End -->

    <!--  Navbar Button Mobile Start -->
    <div class="menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <!--  Navbar Button Mobile End -->

    <!--  Background Shapes Start  -->
    <div class="area">
      <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <!--  Background Shapes End  -->
    <!--  Color Pallet  -->
    <div id="color-switcher" class="color-switcher">
      <div class="text-center color-pallet hide">
        <h6 class="theme-skin-title">Light &amp; Dark</h6>
        <ul class="color-scheme mb-0 list-inline">
            <li class="list-inline-item">
                <a href="javascript:void(0)" class="light-scheme"><i class="bi bi-brightness-high"></i> Light</a>
            </li>
            <li class="list-inline-item">
                <a href="javascript:void(0)" class="dark-scheme active"><i class="bi bi-moon"></i> Dark</a>
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
    <script type="text/javascript">
      $(document).ready(function(){
       $(document).on('submit','#contactForm',function(e){
        e.preventDefault();



          var post_id=$("#post_id").val();
          var name=$("#name").val();
          var email=$("#email").val();
          var message=$("#message").val();
          var add_data=0;

          if (name.length==0) {
            toastr.error("Name is required");
          } else if(email.length==0){
             toastr.error("Email Address is required");
          }else if(message.length==0){
             toastr.error("Type Your Message");
          }else{
              var form_data = new FormData();
              form_data.append('post_id', post_id);
              form_data.append('name', name);
              form_data.append('email', email);
              form_data.append('message', message);
              form_data.append('add_data', add_data);
              /*Ajax calll Request Start */
                $.ajax({
                  type: 'POST',
                  url:'<?=base_url('blog/comment/add')?>',
                  data: form_data,
                  dataType: 'script',
                  cache: false,
                  contentType: false,
                  processData: false,
                  success: function(response) {
                    if (response==1) {
                      toastr.success("Send Successfully");
                    $("#name").val('');
                    $("#email").val('');
                    $("#message").val('');
                      setTimeout(() => {
                        location.reload();
                      }, 2000);
                    }else{ 
                      toastr.error("Please Try Again");
                      
                    }
                  }
                });
              /*Ajax calll Request End */
          }
         

       });
      });
    </script>

   
  </body>
</html>