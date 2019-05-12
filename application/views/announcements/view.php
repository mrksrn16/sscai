<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Announcement / <?php echo $announcement->title;?></h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
        <!-- Event Details Start -->
        <div class="event-details-area blog-area pt-50 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="event-details">
                            <img src="<?php echo base_url();?>uploads/announcements/<?php echo $announcement->image;?>" alt="<?php echo $announcement->image;?>">
                            <div class="event-details-content">
                                <h2><?php echo $announcement->title;?></h2>
                                <h4 style="margin-bottom: 50px;"><?php echo date('d, M Y', strtotime($announcement->date))?></h4>
                                <div><?php echo $announcement->content;?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details End -->