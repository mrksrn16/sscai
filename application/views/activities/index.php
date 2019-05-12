<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Activities</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		<!-- Banner Area End -->
                <style type="text/css">
            .nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
                background: #093a1d;
                border-radius: 0;
            }
            .nav-stacked>li {
                border: 1px solid #093a1d;
            }
            .event-img img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }
            .event-area.three .event-content h4 a {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
            .event-area.three .event-content {
                height: 168px;
            }
        </style>
        <!-- Event Start -->
        <div class="event-area three text-center pt-50 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked" style="margin-bottom: 20px;">
                        <li role="presentation" class="<?php if(!$filter_month){ echo 'active'; }?>"><a href="<?php echo base_url();?>activities/">Latest Activities</a></li>
                    </ul>
                        <?php 
                            $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
                            $years = array('2019', '2018', '2017', '2016', '2015', '2014', '2013', '2012', '2011', '2010' );
                        ?>
                        <?php echo form_open('activities/filter');?>
                        <div style="text-align: left;">
                            <small>Month:</small>
                            <select class="form-control" name="month" onchange="this.form.submit()">
                                <?php foreach($months as $num => $value):?>
                                <option value="<?php echo $num;?>" <?php if($filter_month == $num){ echo 'selected'; }?>><?php echo $value;?></option>
                                <?php endforeach;?>
                            </select>
                            <small>Year:</small>
                            <select class="form-control" name="year" onchange="this.form.submit()">
                                <?php foreach($years as $year):?>
                                <option value="<?php echo $year;?>" <?php if($filter_year == $year){ echo 'selected'; }?>><?php echo $year;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        </form>
                        <!-- <ul class="nav nav-pills nav-stacked">
                        <?php foreach($months as $num => $value):?>
                          <li role="presentation" class="<?php if($num == $filter_month){ echo 'active'; }?>"><a href="<?php echo base_url();?>activities/filter_date/<?php echo $num?>"><?php echo $value;?></a></li>
                        <?php endforeach;?>
                        </ul> -->
                    </div>
                    <div class="col-md-10">
                    <div class="row">

                        <?php if(count($activities)):?>
                        	<?php foreach($activities as $activity):?>
                        		<div class="col-md-4 col-sm-6 col-xs-12">
    		                        <div class="single-event mb-60">
    		                            <div class="event-img">
    		                                <a href="#">
    		                                    <img src="<?php echo base_url();?>uploads/activities/<?php echo $activity->image;?>" alt="<?php echo $activity->image;?>">
    		                                    <div class="course-hover">
    		                                        <i class="fa fa-link"></i>
    		                                    </div>
    		                                </a>
    		                                <div class="event-date">
    		                                    <h3><?php echo date('d', strtotime($activity->date))?> <span><?php echo date('M', strtotime($activity->date))?></span></h3>  
    		                                </div>
    		                            </div>
    		                            <div class="event-content text-left">
    		                                <h4><a href="#"><?php echo $activity->name;?></a></h4>
    		                                
    		                                <div class="event-content-right">
    		                                    <a class="default-btn" href="<?php echo base_url();?>activities/view/<?php echo $activity->slug;?>">View More</a>
    		                                </div>
    		                            </div>
    		                        </div>
    		                    </div>
                        	<?php endforeach;?>
                            
                        <?php else:?>
                        	<p>No activities found.</p>
                        <?php endif;?>
                        
                    </div>
                    <?php if(count($activities)):?>
                    <div style="text-align: center;">
                        <?php echo $this->pagination->create_links();?>
                    </div>
                    <?php endif;?>
                    </div>
                </div>
            </div>
        </div>      
        <!-- Event End -->