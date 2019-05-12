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
        	#banner {
        		height: 100vh;
        		background: #ccc;
        		display: flex;
        		align-items: center;
        		justify-content: center;
        	}
        	.banner-details {
			    max-width: 500px;
			    width: 80%;
			}
			.banner-buttons {
			    display: flex;
			    justify-content: space-between;
			    margin: 20px 0;
			}
			.banner-buttons a {
			    width: 48%;
			    background: #093a1d;
			    color: #fff;
			    border-radius: 3px;
			    padding: 20px;
			    text-align: center;
			    font-weight: bold;
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
        </style>

    </head>
    <body>
    	<aside class="sidebar">
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
    	</button>
        <div id="banner">
        	<div class="banner-details">
        		<img src="<?php echo base_url();?>assets/frontend/img/logo/footer-sscai.png">
        		<div class="banner-buttons">
	        		<a href="<?php echo base_url();?>enrollment">Be an SSCAI</a>
	        		<a href="<?php echo base_url();?>home">Learn more about SSCAI</a>
        		</div>
        	</div>
        </div>


<script src="<?php echo base_url();?>assets/frontend/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/jquery.meanmenu.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/jquery.magnific-popup.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/ajax-mail.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/jquery.mb.YTPlayer.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/plugins.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/main.js"></script>


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
