<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SSCAI</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/meanmenu.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/et-line-icon.css">
        <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/reset.css"> -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/responsive.css">
        <script src="<?php echo base_url();?>assets/frontend/js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/Pretty-Registration-Form.css">

        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

        <style type="text/css">
            body {
                /*height: 100vh;
                overflow: hidden;*/
            }
            .single-teacher-img img {
                height: 250px;
                width: 100%;
                object-fit: cover;
            }
            .header-area.two .main-menu nav > ul > li > a {
                font-size: 14px;
            }
            .topnav {
                    display: flex;
                }
                .topnav .logo-c {
                    display: none;
                }
            @media (max-width: 768px) {
                footer.footer-area.scroll-div > div {
                    position: relative !important;
                }
                .topnav {
                    display: block;
                }
                .topnav .logo-c {
                    display: block;
                }
            }
        </style>
    </head>
    <body>
        

<style>
.choose-area {
    background: #1B5E20;
}
.choose-area:before {
    display: none;
}
#banner {
    height: 100vh;
    position: absolute;
    z-index: 2;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.5);
}
.banner-details {
    max-width: 400px;
    width: 50%;
}
.banner-buttons {
    display: flex;
    justify-content: space-between;
    margin: 30px 0;
}
.banner-buttons a {
     border: 1px solid #fff;
   font-size: 20px;
    width: 49%;
    color: #fff;
     background: #none;
    text-align: center;
    font-weight: normal;
    height: 50px;
    display: flex;
    padding: 5px;
    align-items: center;
    justify-content: center;
    flex-direction: column; 
    transition: 0.8s;
    position: relative;
    overflow: hidden;
    cursor: pointer;
     margin: 10px;
}
.banner-buttons a:hover{
    color: #fff;
}
.banner-buttons a:before{
    content: "";
    position: absolute;
    left: 0;
     width: 100%;
  height: 0%;
  background: #0C4825;
  z-index: -1;
  transition: 0.8s;
  top: 0;
  border-radius: 0 0 50% 50%;
}
.banner-buttons a:hover::before{
    height: 180%;
}
.banner-buttons a span {
    margin-top: 10px;
    font-size: 14px;
    color: white;
}

button.toggle-menu-button {
    position: fixed;
    top: 20px;
    right: 20px;
    background: rgba(0, 0, 0, .6);
    padding: 20px;
    z-index: 11;
    min-width: 66px;
    display: flex;
    justify-content: center;
}
aside.sidebar {
    position: fixed;
    width: 300px;
    top: 0;
    right: 0;
    z-index: 10;
    background: rgb(12, 72, 37);
    height: 100vh;
    transform: translateX(300px);
    transition: all 300ms ease-in-out;
}
aside.sidebar.open {
    transform: translateX(0);
}
.sidebar .title {
    background: #093a1d;
    padding: 10px;
    color: #fff;
    font-size: 28px;
}
.sidebar a {
    display: block;
    padding: 15px;
    color: #fff;
    text-transform: uppercase;
}
.sidebar a:hover {
    background: #0d542a;
}
.carousel-inner .item {
    background-repeat: no-repeat;
    background-size: cover;
    transition: all .3s ease-in-out;
}
.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition-property: opacity;
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}

.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}

.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}

.carousel-fade .carousel-control {
  z-index: 2;
}
.scroll-controls {
    position: fixed;
    top: 50%;
    right: 20px;
    z-index: 11;
    display: flex;
    flex-direction: column;
}
#scrollUp {
    opacity: 0;
}
#scrollUpBtn, #scrollDownBtn{
    background: #093a1d;
}
html {
    overflow: hidden;
}
</style>

<!-- <aside class="sidebar">
                <div class="title">
                    SSCAI
                </div>
                <ul>
                    <li><a href="<?php echo base_url();?>home">Home</a></li>
                    <li><a href="<?php echo base_url();?>enrollment">Admission</a></li>
                    <li><a href="<?php echo base_url();?>activities">Activities</a></li>
                    <li><a href="<?php echo base_url();?>announcements">Announcements</a></li>
                    <li><a href="<?php echo base_url();?>virtualtour">Virtual Tour</a></li>
                    <li><a href="<?php echo base_url();?>gallery">Gallery</a></li>
                    <li><a href="<?php echo base_url();?>about">About</a></li>
                    <li><a href="<?php echo base_url();?>contact">Inquiry</a></li>
                </ul>
            </aside>
            <button class="toggle-menu-button" id="toggleBtn">
                <span class="zmdi zmdi-menu menu" style="color:#fff;font-size:30px;"></span>
                <span class="zmdi zmdi-close close" style="color:#fff;font-size:30px;"></span>
            </button> -->
            <!-- Header Area Start -->
        <header class="top">
            <div class="header-area header-sticky fixed">
                <div class="container">
                    <div class="row topnav">
                       <div class="col-md-3 col-sm-3 col-xs-6 logo-c">
                            <div class="logo">
                                <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/frontend/img/logo/sscai3.png" alt="sscai" /></a>
                            </div>
                    </div>
                        <div class="col-md-9 col-sm-9 col-xs-12" style="margin:0 auto;">
                            <div class="content-wrapper one">
                                <!-- Main Menu Start -->
                                <div class="main-menu one text-right">
                                    <nav>
                                        <ul>
                                            <li><a href="<?php echo base_url();?>home">Home</a>
                                            </li>
                                            <li><a href="<?php echo base_url();?>enrollment">Admission</a></li>
                                            <li>
                                                <a href="<?php echo base_url();?>activities">Activities</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>announcements">Announcements</a>
                                            </li>
                                            <li class="hidden-sm"><a href="<?php echo base_url();?>virtualtour">Virtual Tour</a>
                                            </li>
                                            <li><a href="<?php echo base_url();?>gallery">Gallery</a></li>
                                            <li><a href="<?php echo base_url();?>about">About</a></li>
                                            <li><a href="<?php echo base_url();?>contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu hidden-lg hidden-md one"></div>
                                <!-- Main Menu End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- controls -->
        <div class="scroll-controls">
            <button class="btn btn-success" id="scrollUpBtn" onclick="prevScroll()" style="margin-bottom: 10px;">
                <i class="fa fa-angle-up"></i>
            </button>
            <button class="btn btn-success" id="scrollDownBtn" onclick="nextScroll()">
                <i class="fa fa-angle-down"></i>
            </button>
        </div>

<!--Background Area Start -->
        <div id="banner">
            <div class="banner-details">
                <div align="center"><img src="<?php echo base_url();?>assets/frontend/img/logo/headersure.png"></div>
                <div class="banner-buttons">
                    <a href="<?php echo base_url();?>enrollment">Join SSCAI</a>
                    <a href="<?php echo base_url();?>about">About SSCAI</a>
                </div>
            </div>
        </div>

        <section id="slider-container" class="slider-area scroll-div" style="position: relative;"> 
        <!-- <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">

          <div class="carousel-inner" role="listbox">
            <?php if(count($slides)):?>
            <?php $count = 0;?>
            <?php foreach($slides as $slide):?>
            <?php $count++;?>
            <div class="item <?php if($count == 1){echo ' active';}?>" style="background-image: url('<?php echo base_url();?>uploads/virtualtour/<?php echo $slide->image;?>')">
              
            </div>
            <?php endforeach;?>                             
            <?php endif;?>
          </div>
        </div> -->
        <div class="slideshow">
          <div class="slider">
            <?php if(count($slides)):?>
            <?php foreach($slides as $slide):?>
            <div class="item">
              <img src="<?php echo base_url();?>uploads/virtualtour/<?php echo $slide->image;?>" style="height: 100%;object-fit: cover;width: 100%;" />
            </div>
            <?php endforeach;?>                             
            <?php endif;?>
            
          </div>
        </div>

            <!-- <div class="slider-owl owl-theme owl-carousel"> 
                <?php if(count($slides)):?>
                <?php foreach($slides as $slide):?>
                <div class="single-slide item" style="background-image: url('<?php echo base_url();?>uploads/virtualtour/<?php echo $slide->image;?>')">
                </div>
                <?php endforeach;?>                             
                <?php endif;?>
            </div> -->
        </section>

        <!-- Background Area End -->
        <!-- Notice Start -->
        <section class="notice-area scroll-div" style="height: 100vh;display: flex;align-items: center;" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="notice-left">
                            <h3>Announcements</h3>
                            <?php if(count($announcements)):?>
                            <?php foreach($announcements as $announcement):?>
                            <div class="single-notice-left mb-25 pb-25">
                                <h4><?php echo date('d, M Y', strtotime($announcement->date_created))?></h4>
                                <p style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient:vertical;overflow: hidden; "><?php echo $announcement->content;?></p>
                                <a class="default-btn" href="<?php echo base_url();?>announcements/view/<?php echo $announcement->slug?>" style="padding: 10px;margin-top: 10px;">Read More</a>
                            </div>
                            <?php endforeach;?>
                            <?php else:?>
                            <?php endif;?>
                            
                        </div>
                    </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="notice-left">
                            <h3>Activities</h3>
                            <?php if(count($activities)):?>
                            <?php foreach($activities as $activity):?>
                                <div class="col-xs-12">
                                    <div class="single-event mb-60" style="overflow: hidden;">
                                        <div class="event-img">
                                            <div class="event-date">
                                                <h3><?php echo date('d', strtotime($activity->date_created))?> <span><?php echo date('M', strtotime($activity->date_created))?></span></h3>  
                                            </div>
                                        </div>
                                        <div class="event-content text-left">
                                            <h4><a href="event-details.html"><?php echo $activity->name;?></a></h4>
                                            
                                            <div class="event-content-right">
                                                <a class="default-btn" href="<?php echo base_url();?>activities/view/<?php echo $activity->slug;?>">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        <?php else:?>
                            <p>No activities found.</p>
                        <?php endif;?>
                            
                        </div>
                    </div>
                    
                    </div>
                </div>


            </div>
        </section>
        <!-- Notice End -->
        <!-- Choose Start -->
        <section class="choose-area scroll-div" style="height: 100vh;display: flex;align-items: center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-left-4 col-sm-8 col-md-offset-left-4">
                        <div class="choose-content text-left">
                            <h2><?php echo $why_you_choose->title;?></h2>
                            <p>
                                <?php echo $why_you_choose->content;?>
                            </p>
                            <a class="default-btn" href="<?php echo base_url();?>about">Go to About</a>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- Choose Area End -->
        

<!-- Footer Start -->
        <footer class="footer-area scroll-div" style="position: relative;">
            <div style="    position: absolute;width: 100%;bottom: 0;">
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-widget pr-60">
                                <div class="footer-logo pb-25">
                                    <a href="index.html"><img src="<?php echo base_url();?>assets/frontend/img/logo/footerako.png" alt="eduhome"></a>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/Saint-Simon-of-Cyrene-Academy-Inc-536691843078909/" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>information</h3>
                                <ul>
                                    <li><a href="<?php echo base_url();?>enrollment">Admission</a></li>
                                    <li><a href="<?php echo base_url();?>activities">Activities</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>useful links</h3>
                                <ul>
                                    <!-- <li><a href="course.html">our courses</a></li> -->
                                    <li><a href="<?php echo base_url();?>about">about us</a></li>
                                    <li><a href="<?php echo base_url();?>contact">contact us</a></li>
                                    <li><a href="teacher.html"> </a></li>
                                </ul>
                            </div>
                        </div>
                        <?php 

                            $this->db->where('slug', 'address');
                            $address = $this->db->get('about')->row();

                            $this->db->where('slug', 'email');
                            $email = $this->db->get('about')->row();

                            $this->db->where('slug', 'website');
                            $website = $this->db->get('about')->row();

                            $this->db->where('slug', 'phone');
                            $phone = $this->db->get('about')->row();

                            $this->db->where('slug', 'telephone');
                            $telephone = $this->db->get('about')->row();

                        ?>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>get in touch</h3>
                                <p><?php echo $address->content;?></p>
                                <p><?php echo $phone->content;?><br><?php echo $telephone->content;?></p>
                                <p><?php echo $email->content;?><br><?php echo $website->content;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Copyright © <?php echo date('Y')?>. All Right Reserved.</p>
                        </div> 
                    </div>
                </div>    
            </div>
            </div>
        </footer>

        <!-- Footer End -->

        <script src="<?php echo base_url();?>assets/frontend/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/jquery.meanmenu.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/jquery.magnific-popup.js"></script>
        <!-- <script src="<?php echo base_url();?>assets/frontend/js/ajax-mail.js"></script> -->
        <script src="<?php echo base_url();?>assets/frontend/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/jquery.mb.YTPlayer.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/plugins.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript">
            $('.slider').slick({
                // draggable: true,
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: false,
                dots: true,
                fade: true,
                speed: 500,
                infinite: true,
                cssEase: 'ease-in-out',
                touchThreshold: 100
            });
            $('.slider-owl').owlCarousel({
                loop:true,
                nav:true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                smartSpeed: 2500,
                navigation : false,
                responsive:{
                    0:{
                        items:1
                    },
                    768:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
        </script>

        <script src="<?php echo base_url();?>assets/frontend/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.js"></script>

        <script type="text/javascript">
            $(function() {
              $.scrollify({
                section : ".scroll-div",
                interstitialSection : "",
                easing: "easeOutExpo",
                scrollSpeed: 1100,
                offset : 0,
                scrollbars: true,
                standardScrollElements: "",
                setHeights: true,
                overflowScroll: true,
                // updateHash: true,
                touchScroll:true,
                before:function() {},
                after:function() {},
                afterResize:function() {},
                afterRender:function() {}
              });
            });
            $('#carousel-example-generic').carousel({
              interval: 5000,
              cycle: true
            }); 
            function nextScroll() {
                $.scrollify.next();
            }
            function prevScroll() {
                $.scrollify.previous();
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                var menuOpen = true
                $('.close').hide();
                $('#toggleBtn').click(function() {
                    if(menuOpen) {
                        $('.close').show();
                        $('.menu').hide();
                        menuOpen = false
                        $('.sidebar').addClass('open');
                    } else {
                        $('.close').hide();
                        $('.menu').show();
                        menuOpen = true
                        $('.sidebar').removeClass('open');
                    }
                });
            });
        </script>

    </body>
</html>
