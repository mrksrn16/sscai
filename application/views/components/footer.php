<!-- Footer Start -->
        <footer class="footer-area">
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
        </footer>

        <!-- Footer End -->

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
        
    </body>
</html>
