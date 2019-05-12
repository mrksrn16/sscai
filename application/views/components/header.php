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
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/Pretty-Registration-Form.css">

        <style type="text/css">
            .single-teacher-img img {
                height: 250px;
                width: 100%;
                object-fit: cover;
            }
            .header-area.two .main-menu nav > ul > li > a {
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
        	$segment = $this->uri->segment(1);
        	if($segment == '' || $segment == 'home' || $segment == 'virtualtour'):
        ?>
        <!-- Header Area Start -->
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
		<!-- Header Area End -->
		<?php else:?>
			<!-- Header Area Start -->
		<header class="top">
            <div class="header-area two header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="logo">
                                <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/frontend/img/logo/headerako.png" alt="eduhome" /></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-6">
                            <div class="content-wrapper text-right">
                                <!-- Main Menu Start -->
                                <div class="main-menu">
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
                                            <li><a href="<?php echo base_url();?>contact">inquiry</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!--Search Form Start-->
                                <!-- <div class="search-btn">
                                    <ul data-toggle="dropdown" class="header-search search-toggle">
                                        <li class="search-menu">
                                            <i class="fa fa-search"></i>
                                        </li>
                                    </ul>
                                    <div class="search">
                                        <div class="search-form">
                                            <form id="search-form" action="#">
                                                <input type="search" placeholder="Search here..." name="search" />
                                                <button type="submit">
                                                    <span><i class="fa fa-search"></i></span>
                                                </button>
                                            </form>                                
                                        </div>
                                    </div>
                                </div>   -->
                                <!--End of Search Form-->
                                <!-- Main Menu End -->
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div> 
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<!-- Header Area End -->
		<?php endif;?>