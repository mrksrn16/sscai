<style>

input.reply-btn {
    background: #093a1d;
    color: #fff;
    text-transform: uppercase;
    font-family: 'Open Sans', sans-serif;
    padding: 8px 25px;
    font-weight: 700;
    display: inline-block;
    width: auto !important;
}
</style>
<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>contact</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
        <!-- Contact Start -->
        <div class="contact-area pt-150 pb-50"> 
            <div class="container">     
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="contact-contents text-center">
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="<?php echo base_url();?>assets/frontend/img/contact/contact1.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>address</h3>
                                    <p><?php echo $address->content;?></p>
                                </div>
                            </div>
                            <div class="single-contact mb-65">
                                <div class="contact-icon">
                                    <img src="<?php echo base_url();?>assets/frontend/img/contact/contact2.png" alt="contact">
                                </div>
                                <div class="contact-add">
                                    <h3>telephone</h3>
                                    <p><?php echo $telephone->content;?></p>
                                    <br>
                                    <h3>phone number</h3>
                                    <p><?php echo $phone->content;?></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>    

                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="reply-area">
                            <h3>LEAVE A message</h3>
                            <?php echo form_open();?>
                            <!-- <form id="contact-form" action="mail.php" method="post"> -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Name</p>
                                        <input type="text" name="name" id="name" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Email</p>
                                        <input type="text" name="email" id="email" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Subject</p>
                                        <input type="text" name="subject" id="subject">
                                        <p>Message</p>
                                        <textarea name="message" id="message" cols="15" rows="10" required=""></textarea>
                                    </div>
                                </div>
                                <input type="submit" name="submit" value="Send Message" class="reply-btn">
                                

                                <?php if($this->session->flashdata('message')):?>
			                    <p class="form-messege">
			                    	<?php echo $this->session->flashdata('message');?>	
			                    </p>
				                <?php endif;?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-area">
            <!-- google-map-area start -->
            <div class="google-map-area">
                <!--  Map Section -->
                <div id="contacts" class="map-area">
                    <div id="googleMap" style="width:100%;height:440px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.0132940740823!2d120.92130931431846!3d14.42639718519082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d2e94745d97d%3A0x2386ce297c1bb057!2sSaint+Simon+of+Cyrene+Academy%2C+Inc.!5e0!3m2!1sen!2sph!4v1551575878064" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>