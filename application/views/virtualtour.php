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

            .slider-content-wrapper {
                    position: absolute;
                    bottom: 20px;
                    left: 20px;
                    /* right: 5px; */
                    /* width: 100%; */
                    /* overflow: auto; */
                    padding: 10px;
                    background: rgba(0, 0, 0, .4);
                    color: #fff !important;
                    border-radius: 5px;
                    max-width: 80%;
                }
                .banner-content-text, .banner-content-text p {
                    color: #FFF;
                }

        </style>
    </head>
    <body>
        

<style>
button.slick-next.slick-arrow {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    background: #0C4825;
    color: white;
    border-radius: 3px;
}
button.slick-prev.slick-arrow {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 2;
    background: #0C4825;
    color: white;
    border-radius: 3px;
}
</style>
        <header class="top">
            <div class="header-area header-sticky fixed">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="logo">
                                <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/frontend/img/logo/sscai3.png" alt="sscai" /></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
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
<!--Background Area Start -->
        <section id="slider-container" class="slider-area"> 
            <div class="slideshow">
              <div class="slider">
                <?php if(count($slides)):?>
                <?php foreach($slides as $slide):?>
                <div class="item">
                  <img src="<?php echo base_url();?>uploads/virtualtour/<?php echo $slide->image;?>" style="height: 100%;object-fit: cover;width: 100%;" />

                  <section class="slider-content-wrapper">  
                        <!-- <div class="container"> -->
                            <section class="row">
                                <section class="col-md-7 col-md-offset-left-5"> 
                                    <section class="slider-contents">
                                        <section class="slider-content" style="vertical-align: bottom;">
                                            <h3><?php echo $slide->title;?></h3>
                                            <div style="color: #fff;" class="banner-content-text"><?php echo $slide->description;?></div>
                                        </section>
                                    </section>
                                <!-- </section> -->
                            </section>
                        </section>
                    </section>
                </div>
                <?php endforeach;?>                             
                <?php endif;?>
                
              </div>
            </div>
            <!-- <div class="slider-owl owl-theme owl-carousel"> 
                <?php if(count($slides)):?>
                <?php foreach($slides as $slide):?>
                <div class="single-slide item" style="background-image: url('<?php echo base_url();?>uploads/virtualtour/<?php echo $slide->image;?>')">
                    <div class="slider-content-area">  
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-md-offset-left-5"> 
                                    <div class="slide-content-wrapper">
                                        <div class="slide-content" style="vertical-align: bottom;">
                                            <h3><?php echo $slide->title;?></h3>
                                            <p><?php echo $slide->description;?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>								
                <?php endif;?>
            </div> -->
        </section>
        

        <!-- Footer Start -->
        <!-- <footer class="footer-area scroll-div" style="position: relative;">
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
 -->
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
                draggable: true,
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: true,
                dots: false,
                fade: true,
                speed: 500,
                infinite: true,
                cssEase: 'ease-in-out',
                touchThreshold: 100
            });
            
        </script>

        <script src="<?php echo base_url();?>assets/frontend/js/main.js"></script>

    </body>
</html>
