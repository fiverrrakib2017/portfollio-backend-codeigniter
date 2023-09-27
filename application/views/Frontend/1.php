
<!DOCTYPE html>
<html lang="en" class="max-width-d">
  
<!-- Mirrored from retrina.com/demo/arshia/arshia-plus/webdesigner-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 05:36:51 GMT -->
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Arshia - Fully Responsive Personal Template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Retrina Group" />
    <!--  FavIcon  -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/Frontend/img/favicon.png');?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/bootstrap.css');?>">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/bootstrap-icons.css')?>">
    <!-- Malihu Jquery Custom ScrollBar Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/jquery.mCustomScrollbar.css')?>">
    <!-- Animate Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/animate.min.css')?>">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/owl.carousel.min.css')?>">
    <!-- Magnific Popup Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/magnific-popup.css');?>">
    <!--  Custom Style Css  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/css/style.css');?>">
    <!--  Color Css  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Frontend/colors/golden.css');?>"  id="option-color">

    <link href="<?=base_url('assets/css/toastr.min.css')?>"  rel="stylesheet" type="text/css">
  </head>
  <body class="dark-arshia max-width-d">

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
    <!--  Right Side End  -->

    <!--  Left Side Start  -->
    <div class="left-side  nav-close">
    <?php foreach($profile as $item):?>
      <div class="menu-content-align">
        <div class="left-side-image">
        <img src="<?php echo base_url() . '/' . $item->image; ?>" alt="/">
        </div>
        <h1 class="mt-1"><?php echo  $item->name;?></h1>
        <a class="download-cv primary-button d-none d-lg-inline-block" href="<?php echo base_url(). $item->resume_upload; ?>" download>Download CV</a>
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
            <a href="#hero">
              <i class="bi bi-house"></i>
              <span>home</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="#about" class="custom-btn">
              <i class="bi bi-person"></i>
              <span>about</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="#resume">
              <i class="bi bi-clipboard-check"></i>
              <span>resume</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="#portfolio">
              <i class="bi bi-collection"></i>
              <span>works</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="#blog">
              <i class="bi bi-book"></i>
              <span>blog</span>
            </a>
          </li>
          <li class="list-group-item">
            <a href="#contact">
              <i class="bi bi-geo-alt"></i>
              <span>contact</span>
            </a>
          </li>
        </ul>
        <div class="menu-footer">
          <?php foreach($profile as $item):?>
          <a class="download-cv primary-button mt-3 mb-4 d-lg-none" href="<?php echo base_url() . '' . $item->resume_upload; ?>" download>
            Download CV</a>
            <?php endforeach; ?>
          <div class="social d-lg-none d-block">
            <a href="javascript:void(0);" class="d-inline-block">
              <i class="bi bi-whatsapp"></i>
            </a>
            <a href="javascript:void(0);" class="d-inline-block mx-4">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="javascript:void(0);" class="d-inline-block">
              <i class="bi bi-dribbble"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--  Left Side End  -->

    <!--  Main Start  -->
    <main id="main" class="main-2">

      <!--  Hero Start  -->
      <section id="hero" class="section hero w-100">
      <?php foreach ($home as $item): ?>
        <img class="extend-icon" src="<?php echo base_url() . '/' . $item->banner; ?>" alt="/">
        <div class="hero-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center text-lg-start">
                <div class="hero-image d-inline-block d-lg-none">
                <img src="<?php echo base_url() . '/' . $item->banner; ?>" alt="/">
                </div>
                <div class="hero-content mt-4 mx-auto mx-lg-0 text-lg-left mt-lg-none">
                <p class="base-color"><?php echo $item->title;?></p>
                  <h2><?php echo $item->description; ?></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <div class="hero-footer d-block d-lg-none">
        <?php foreach($profile as $item):?>
          <a class="download-cv primary-button mt-3 mb-4 d-lg-none" href="<?php echo base_url() . '' . $item->resume_upload; ?>" download>
            Download CV</a>
            <?php endforeach; ?>
          <div class="social d-lg-none mb-4 d-block">
            <a href="javascript:void(0);" class="d-inline-block">
              <i class="bi bi-whatsapp"></i>
            </a>
            <a href="javascript:void(0);" class="d-inline-block mx-4">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="javascript:void(0);" class="d-inline-block">
              <i class="bi bi-dribbble"></i>
            </a>
          </div>
        </div>
      </section>
      <!--  Hero End  -->

      <!--  About Start  -->
      <section id="about" class="section about">
        <div class="container">
        <?php foreach ($about as $item): ?>
          <!-- Introducce Me -->
          <div class="about-boxes">
            <div class="row">
              <div class="col-lg-5">
                <div class="about-img">
                <img src="<?php echo base_url() . '/' . $item->image; ?>" alt="/">
                  <div class="border-img"></div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="about-description">
                  <h3 class="mb-3"><?php echo $item->title; ?></h3>
                  <p class="about-text"><?php echo $item->description; ?></p>
                </div>
                <!-- Personal Info -->
                <div class="row">
                  <div class="col-lg-6">
                    <ul class="list-unstyled personal-info">
                        <li>Website : <small><a target="__blank" href="<?php echo $item->website; ?>" class="__cf_email__"><?php echo $item->website; ?></a></small>
                      </li>
                      <li>Phone : <small><?php echo $item->phone; ?></small>
                      </li>
                      <li>City : <small><?php echo $item->city; ?></small>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <ul class="list-unstyled personal-info">
                    <li>Age : <small><?php echo $item->age; ?></small>
                      </li>
                      <li>Degree : <small><?php echo $item->degree; ?></small>
                      </li>
                      <li>Freelance : <small>Available</small>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12">
                    <a href="#contact" class="to-contact primary-button mt-2">Hire me</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          <!--  Count up  -->
          <div id="count-up" class="count-up text-center box-border">
            <div class="row">
                <?php  foreach($section1 as $item ):?>
              <!-- Item-01 -->
              <div class="col-6 col-lg-3 my-4 count-item">
                <div class="count-icon">
                  <i class="<?php echo $item->icon; ?>"></i>
                </div>
                <span class="timer count-number" data-from="0" data-to="<?php echo $item->complete_count;?>" data-speed="5000">0</span>
                <p class="mb-0"><?php echo $item->title; ?></p>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <!--  Skills  -->
          <div class="skills">
            <div class="row pt-5">
              <div class="col-lg-7">
              <?php foreach($section2 as $item):?>
                <div class="skill-description">
                    <h3 class="mb-3"><?= $item->title; ?></h3>
                     <p class="mb-0"><?php echo $item->description;  ?></p>
                </div>
                <?php endforeach; ?>
              </div>
              <div class="col-lg-5">
                <ul class="knowledge-item">
                    <?php foreach($section3 as $item):?>
                        <li><?php echo $item->item; ?></li>
                    <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
          <!--  Skillbar  -->
          <div class="row mt-5 skills">
            <div class="col-lg-6">
              <h3 class="subtitle">Design Skills</h3>
             
              <div id="skills"> 
                <?php foreach($design_skill as $item):?>
                <!-- Item 01 -->
                <div class="col-lg-12 skill-box">
                    <div class="skill-text">
                        <div class="skillbar-title"><?php echo $item->item; ?></div>
                        <div class="skill-bar-percent"><span data-from="0" data-to="<?php echo $item->percentage;?>" data-speed="4000"><?php echo $item->percentage;?></span>%</div>
                  </div>
                    <div class="skillbar clearfix" data-percent="<?php echo $item->percentage;?>%">
                        <div class="skillbar-bar"></div>
                    </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="col-lg-5 ms-auto mt-5 mt-lg-0">
              <h3 class="subtitle">Language</h3>
              <div class="language-bar">
              <?php foreach($language as $item):?>
                <!-- Item 01 -->
                <div class="language-skill">
                  <h6 class="mb-0"><?php echo $item->item; ?> <span> Fluent</span>
                  </h6>

                      <?php if ($item->percentage > 90) : ?>
                        <ul class="list-inline text-right">
                      <li class="list-inline-item">
                        <i class="bi bi-circle-fill"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="bi bi-circle-fill"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="bi bi-circle-fill"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="bi bi-circle-fill"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="bi bi-circle-fill"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="bi bi-circle-fill"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="bi bi-circle-fill"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="bi bi-circle-fill"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="bi bi-circle-fill"></i>
                      </li>
                      <li class="list-inline-item">
                        <i class="bi bi-circle-half"></i>
                      </li>
                    </ul>
                      <?php elseif($item->percentage> 50) : ?>
                        <ul class="list-inline text-right">
                    <li class="list-inline-item">
                      <i class="bi bi-circle-fill"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle-fill"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle-fill"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle-fill"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle-fill"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle-fill"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle-fill"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle"></i>
                    </li>
                  </ul>
                  <?php else : ?>
                    <ul class="list-inline text-right">
                    <li class="list-inline-item">
                      <i class="bi bi-circle-fill"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle-fill"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle-fill"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle-fill"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle-fill"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="bi bi-circle"></i>
                    </li>
                  </ul>
                      <?php endif; ?>
                    
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <!--  Client  -->
          <div class="testimonial mt-5">
            <div class="owl-carousel">
              <!-- Item 01 -->
              <?php foreach($testimonial as $item):?>
              <div class="testimonial-box">
                <p class="testimonial-comment"><?php echo $item->mouth_word; ?></p>
                <div class="testimonial-item">
                  <div class="testimonial-image">
                    <img src="<?php echo base_url() . '/' . $item->image; ?>" alt="/">
                  </div>
                  <div class="testimonial-info">
                    <p class="mb-0"><?php echo $item->name; ?></p>
                    <small class="testimonial-jub"><?php echo $item->designation;?></small>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>
      <!--  About End  -->

      <!--  Resume Start  -->
      <section id="resume" class="section">
        <div class="container">
          <!-- Servises -->
          <div class="services  mb-6">
            <div class="boxes">
              <h3 class="subtitle">Services</h3>
              <div class="row vertical-line">
              <?php foreach($services as $item):?>
                <!-- Item 01 -->
                <div class="col-md-6">
                  <div class="services-box">
                        <img src="<?php echo base_url() . '/' . $item->icon; ?>" alt="/">
                    <div class="services-content">
                      <h6 class="services-head"><?php echo $item->title; ?></h6>
                      <p class="services-description mb-0"><?php echo $item->description; ?></p>
                    </div>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
          </div>
          <!--  Resume  -->
          <div class="resume">
            <!--  TimeLine Education  -->
            <div class="boxes my-6">
              <h3 class="subtitle">Education</h3>
              <div class="row vertical-line">
              <?php foreach($education as $item):?>
                <!--  Item 01  -->
                <div class="col-md-6">
                  <div class="timeline-box">
                    <div class="time-line-header">
                      <p class="timeline-year">
                      <?php  

                            $dateString = "$item->start_date";
                            $year = date("Y", strtotime($dateString));
                            echo $year; // get the year 

                            ?> 


                            - 
                            <?php  

                            $dateString = "$item->end_date";
                            $year = date("Y", strtotime($dateString));
                            echo $year; // get the year 

                            ?> 
                      </p>
                      <h6 class="timeline-title"><?php echo $item->title; ?></h6>
                    </div>
                    <div class="timeline-content">
                        <p><?php echo $item->description; ?></p>
                    </div>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
            <!--  TimeLine Experience  -->
            <div class="boxes mt-6 mb-3">
              <h3 class="subtitle">Experience</h3>
              <div class="row vertical-line">
              <?php foreach($experience as $item):?>
                <!--   Item 01   -->
                <div class="col-md-6">
                  <div class="timeline-box">
                    <div class="time-line-header">
                      <p class="timeline-year">
                      <?php  

                            $dateString = "$item->start_date";
                            $year = date("Y", strtotime($dateString));
                            echo $year; // get the year 

                            ?> 


                            - 
                            <?php  

                            $dateString = "$item->end_date";
                            $year = date("Y", strtotime($dateString));
                            echo $year; // get the year 

                            ?> 
                      </p>
                      <h6 class="timeline-title"><?php echo $item->title; ?></h6>
                    </div>
                    <div class="timeline-content">
                        <p><?php echo $item->description; ?></p>
                    </div>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--  Resume End  -->

      <!--  Portfolio Start  -->
      <section id="portfolio" class="section portfolio">
        <div class="container">
          <div class="heading-meta-container">
            <h2 class="heading-title">Portfolio</h2>
            <h6 class="description">See My Ausome Work</h6>
          </div>
          <div class="row">
            <!--   Portfolio Filters   -->
            <ul id="portfolio-filter" class="list-inline col-lg-12 portfolio-filter text-center">
              <li class="list-inline-item">
                <a href="javascript:void(0)" data-filter="*" class="active">All</a>
              </li>
              <?php foreach($category as $item):?>
              <li class="list-inline-item">
                <a href="javascript:void(0)" data-filter=".category<?php echo $item->id;?>"><?php echo $item->name;?></a>
              </li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="portfolio-items border-line-v row">
          <?php foreach($works as $item):?>
            <!-- Item  Start -->
            <div class="col-md-6 col-lg-4 portfolio-item category<?php echo $item->category_id;?>">
              <div class="portfolio-box">
                <div class="portfolio-image">
                  <img src="<?php echo base_url() . '/' . $item->image; ?>" alt="/">
                  <div class="portfolio-icon">
                  <a href="
                  <?php if($item->link_type==3):?>
                    <?php echo  base_url('/portfollio/works/details/'.$item->id)?>
                   <?php else:?>
                    <?php echo $item->link; ?>
                  <?php endif; ?>
                    " class="
                        <?php if($item->link_type==1): ?>
                            portfolio-magnific mfp-iframe
                        <?php elseif($item->link_type==2): ?>
                            portfolio-magnific mfp-iframe
                        <?php elseif($item->link_type==3): ?>
                            ajax-page-load
                        <?php endif; ?>
                    ">

                    <?php if($item->link_type==1): ?>
                      <i class="bi bi-music-note-beamed"></i>
                    <?php elseif($item->link_type==2): ?>
                      <i class="bi bi-camera-video"></i>
                    <?php else: ?>
                        <i class="bi bi-file-earmark-text"></i>
                    <?php endif; ?>
                      

                    </a>
                  </div>
                </div>
                <div class="portfolio-content">
                  <h6 class="blog-header"><?php echo $item->title; ?></h6>
                  <p class="mb-0">image</p>
                </div>
              </div>
            </div>
          <?php endforeach;?>
            
          </div>
        </div>
      </section>
      <!--  Portfolio End  -->

      <!--  Blog Start  -->
      <section id="blog" class="section blog">
        <div class="container">
          <h3 class="subtitle">Latest News</h3>
          <div class="boxes">
          <div class="row vertical-line">
              <?php foreach($blog_post as $item):?>
              <!-- Item 01 -->
              <div class="col-md-6">
                <a href="<?=base_url('blog/details/'.$item->id);?>" class="blog-box">
                  <div class="blog-image">
                    <img src="<?php echo base_url() . '/' . $item->image; ?>" alt="/">
                    <div class="blog-icon">
                      <i class="bi bi-journal-text"></i>
                    </div>
                  </div>
                  <div class="blog-post-content">
                    <div class="blog-dates">
                      <span>
                        <?php
                          $date = "$item->create_date";
                          $timestamp = strtotime($date);
                          $formatted_date = date("d F Y", $timestamp);

                          echo $formatted_date; // output will be like  24 September 2023

                        ?>

                      </span>
                    </div>
                    <h6 class="blog-header"><?php echo $item->title; ?></h6>
                    <p class="mb-0">
                  
                    <?php
                     $new_base_url=base_url();
                      $link = $item->description; 
                      $maxChars = 50;
                      if (strlen($link) > $maxChars) {
                        echo $link = substr($link, 0, $maxChars).'';
                      } else {
                        echo $link;
                      }
                    ?>
                  
                  </p>
                  </div>
                </a>
              </div>
                <?php endforeach; ?>
              
            </div>
          </div>
        </div>
      </section>
      <!--  Blog End  -->

      <!-- Contact Start -->
      <section id="contact" class="section contact w-100">
      <div class="container">
          <h3 class="subtitle">Get in Touch</h3>
          <!-- Map -->
          <div class="row mt-5">

             <div class="col-lg-12">
             <?php foreach($contracts as $item):?>
              <div calss="row">
                <iframe src="<?php echo $item->map_link; ?>" style="width:100%;"></iframe>
                
              </div>
             <?php endforeach; ?>
            </div>
          </div>
          <div class="row mt-4">
            <!-- Address Info -->
            <div class="col-12 col-xl-5">
              <div class="row">

              <?php foreach($contracts as $item):?>
                <!--  Item 01 -->
                <div class="col-lg-12">
                  <div class="info-box">
                    <div class="item-icon">
                      <img src="<?= base_url('assets/Frontend/img/colorfull/message.svg');?>" alt="/">
                    </div>
                    <div class="info-text">
                      <h5>Mail Me</h5>
                      <small><?php echo $item->email_address; ?></small>
                    </div>
                  </div>
                </div>
                <!--  Item 02 -->
                <div class="col-lg-12">
                  <div class="info-box">
                    <div class="item-icon">
                      <img src="<?= base_url('assets/Frontend/img/colorfull/phone-call.svg');?>" alt="/">
                    </div>
                    <div class="info-text">
                      <h5>Call Us On</h5>
                      <small><?php echo $item->phone_number; ?></small>
                    </div>
                  </div>
                </div>
                <!--  Item 03 -->
                <div class="col-lg-12">
                  <div class="info-box">
                    <div class="item-icon">
                      <img src="<?= base_url('assets/Frontend/img/colorfull/location.svg');?>" alt="/">
                    </div>
                    <div class="info-text">
                      <h5>Visit office</h5>
                      <small><?php echo $item->location; ?></small>
                    </div>
                  </div>
                </div>

                <?php endforeach; ?>

              </div>
            </div>
            <!-- Contact Form -->
            <div class="col-12 col-xl-7">
              <div class="contact-box">
                <div class="contact-form">
                  <form id="contactForm">
                    <div class="row">
                      <div class="col-lg-12 form-item">
                        <div class="form-group">
                          <input name="name" id="name" type="text" class="form-control" placeholder="Complate Name*" >
                        </div>
                      </div>
                      <div class="col-lg-12 form-item">
                        <div class="form-group">
                          <input name="email" id="email" type="email" class="form-control" placeholder="Email Address*" >
                        </div>
                      </div>
                      <div class="col-lg-12 form-item">
                        <div class="form-group">
                          <input name="phone_number" id="phone_number" type="tel" class="form-control" placeholder="Phone number*" >
                        </div>
                      </div>
                      <div class="col-12 form-item">
                        <div class="form-group">
                          <textarea name="comments" id="comments" rows="3" class="form-control textarea" placeholder="Your message..."></textarea>
                        </div>
                      </div>
                      <div class="col-sm-12 text-left">
                        <div class="pill-btn mt-4 mb-3">
                          <button type="submit" class="secondary-button"> Send Message </button>
                        </div>
                        
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--  Contact End  -->

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
  </body>
  <script type="text/javascript">
      $(document).ready(function(){
       $(document).on('submit','#contactForm',function(e){
        e.preventDefault();



          var name=$("#name").val();
          var email=$("#email").val();
          var phone_number=$("#phone_number").val();
          var comments=$("#comments").val();
          var add_data=0;

          if (name.length==0) {
            toastr.error("Name is required");
          } else if(email.length==0){
             toastr.error("Email Address is required");
          }else if(phone_number.length==0){
             toastr.error("Phone Number is required");
          }
          else if(comments.length==0){
             toastr.error("Please Type Your Message");
          }else{
              var form_data = new FormData();
              form_data.append('name', name);
              form_data.append('email', email);
              form_data.append('phone_number', phone_number);
              form_data.append('comments', comments);
              form_data.append('add_data', add_data);
              /*Ajax calll Request Start */
                $.ajax({
                  type: 'POST',
                  url:'<?=base_url('message/add')?>',
                  data: form_data,
                  dataType: 'script',
                  cache: false,
                  contentType: false,
                  processData: false,
                  success: function(response) {
                    if (response==1) {
                      toastr.success("Send Successfully");
                      var name=$("#name").val('');
                      var email=$("#email").val('');
                      var phone_number=$("#phone_number").val('');
                      var comments=$("#comments").val('');
                    }else{ 
                      toastr.error("Please Try Again");
                      
                    }
                  }
                });
              /*Ajax calll Request End */
          }
         

       });
      });


       document.addEventListener('DOMContentLoaded', function() {
        var elements = document.querySelectorAll('.ajax-page-load');

        elements.forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault();
                window.open(this.href, '_blank');
            });
        });
      });
    </script>
</html>