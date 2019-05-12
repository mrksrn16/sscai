<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Activity / <?php echo $activity->name;?></h2> 
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
                            <div class="event-details-img">
                                <img src="<?php echo base_url();?>uploads/activities/<?php echo $activity->image;?>" alt="<?php echo $activity->image;?>">
                                <div class="event-date">
                                    <h3><?php echo date('d', strtotime($activity->date))?> <span><?php echo date('M', strtotime($activity->date))?></span></h3>  
                                </div>
                            </div>
                            <div class="event-details-content">
                                <h2><?php echo $activity->name;?></h2>
                                <p>
                                	<?php echo $activity->content;?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details End -->