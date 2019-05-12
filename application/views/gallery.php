<!--Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>gallery</h2> 
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
		<!-- gallery Start -->
        <div class="teacher-area pb-50 pt-100">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked" style="margin-bottom: 20px;">
                    <li role="presentation" class="<?php if(!$album_id){ echo 'active'; }?>"><a href="<?php echo base_url();?>gallery/">Latest Gallery</a></li>
                </ul>
                <?php echo form_open('gallery/album');?>
                    <select class="form-control" name="album" onchange="this.form.submit();">
                    <?php foreach($albums as $album):?>
                      <option value="<?php echo $album->id?>" <?php if($album_id == $album->id){ echo 'selected'; }?>><?php echo $album->title;?></option>
                    <?php endforeach;?>
                    </select>
                </form>
                    <!-- <ul class="nav nav-pills nav-stacked">
                    <?php foreach($albums as $album):?>
                      <li role="presentation" class="<?php if($album->id == $album_id){ echo 'active'; }?>"><a href="<?php echo base_url();?>gallery/album/<?php echo $album->id?>"><?php echo $album->title;?></a></li>
                    <?php endforeach;?>
                    </ul> -->
                </div>
                <div class="col-md-10">
                <div class="row">
                    <?php if($gallery):?>
                    <?php foreach($gallery as $g):?>
                    <div class="col-sm-4 col-xs-12">
                        <div class="single-teacher mb-45">
                            <div class="single-teacher-img">
                                <a href="<?php echo base_url();?>uploads/gallery/<?php echo $g->image;?>" target="_blank"><img src="<?php echo base_url();?>uploads/gallery/<?php echo $g->image;?>" alt="gallery"></a>  
                            </div>
                            <div class="single-teacher-content text-center">
                                <h2><a href="#"><?php echo $g->title;?></a></h2>
                                <h4><?php echo $g->caption;?></h4>
                                <small><?php echo $g->date;?></small>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?> 
                    <?php else:?>
                        <p style="text-align: center;">No gallery found.</p>
                    <?php endif;?>
                </div>
                </div>
                </div>
            </div>
        </div>
        <!-- gallery End -->