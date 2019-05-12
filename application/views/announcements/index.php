<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Announcements</h2> 
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
        </style>
        <!-- Event Start -->
        <div class="event-area three text-center pt-50 pb-150">
            <div class="container">
            <div class="row">
                <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked" style="margin-bottom: 20px;">
                    <li role="presentation" class="<?php if(!$filter_month){ echo 'active'; }?>"><a href="<?php echo base_url();?>announcements/">Latest Announcements</a></li>
                </ul>
                <?php 
                            $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
                            $years = array('2019', '2018', '2017', '2016', '2015', '2014', '2013', '2012', '2011', '2010' );
                        ?>
                        <?php echo form_open('announcements/filter');?>
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
                    <!-- <?php 
                        $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
                    ?>
                    <ul class="nav nav-pills nav-stacked">
                    <?php foreach($months as $num => $value):?>
                      <li role="presentation" class="<?php if($num == $filter_month){ echo 'active'; }?>"><a href="<?php echo base_url();?>announcements/filter_date/<?php echo $num?>"><?php echo $value;?></a></li>
                    <?php endforeach;?>
                    </ul> -->
                </div>
                <div class="col-md-10">
                <div class="row">

                    <?php if(count($announcements)):?>
                        <?php foreach($announcements as $announcement):?>
                            <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: left">
                                <div class="single-notice-left mb-25 pb-25" style="height: 161px;">
                                <h4><?php echo date('d, M Y', strtotime($announcement->date))?></h4>
                                <div style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;"><?php echo $announcement->content;?></div>
                                <a class="default-btn" href="<?php echo base_url();?>announcements/view/<?php echo $announcement->slug;?>" style="padding: 10px;margin-top: 10px;">Read More</a>
                            </div>
                            </div>
                        <?php endforeach;?>
                    <?php else:?>
                        <p>No announcements found.</p>
                    <?php endif;?>
                    
                </div>  

                <?php if(count($announcements)):?>
                    <div style="text-align: center;">
                        <?php echo $this->pagination->create_links();?>
                    </div>
                    <?php endif;?>
                    
                </div>
            </div>
            </div>
        </div>      
        <!-- Event End -->