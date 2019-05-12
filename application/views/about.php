<!--Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>about us</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
        <!-- About Start -->
        <div class="about-area pt-145 pb-155">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-content">
                            <h2><?php echo $why_you_choose->title;?></h2>
                            <p>
                                <?php echo $why_you_choose->content;?>
                            </p>
                            <!-- <a class="default-btn" href="#">view courses</a> -->
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-sm-6">
                        <div class="about-img">
                            <img src="<?php echo base_url();?>assets/frontend/img/about/about.png" alt="about">
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                            
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="about-content">
                            <h2><?php echo $mission->title;?></h2>
                            <p><?php echo $mission->content;?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-content">
                            <h2><?php echo $vision->title;?></h2>
                            <p><?php echo $vision->content;?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                            
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="about-content">
                            <h2><?php echo $history->title;?></h2>
                            <p><?php echo $history->content;?></p>
                        </div>
                    </div>
                </div>
                <div clas
            </div>
        </div>
        <!-- About End -->
        <!-- Teacher Start -->
        <div class="teacher-area pb-105 pt-100">
            <h2 style="font-size: 34px;color: black;font-weight: 700;font-family: 'Open Sans', sans-serif;margin-top: 0;margin-bottom: 10px;text-transform: uppercase;text-align: center;">Our Teachers</h2>
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <?php if($teachers):?>
                    <?php foreach($teachers as $teacher):?>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="#"><img src="<?php echo base_url();?>uploads/facilities/<?php echo $teacher->image;?>" alt="teacher" onerror="this.src='<?php echo base_url();?>uploads/facilities/default.png';"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="javascript:void(0)"><?php echo $teacher->name;?></a></h2>
                                <h4><?php echo $teacher->position;?></h4>
                                <p><?php echo $teacher->caption;?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?> 
                    <?php endif;?>
                </div>
            </div>
        </div>
        <!-- Teacher End -->