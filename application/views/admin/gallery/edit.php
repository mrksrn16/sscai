<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>" class="btn btn-xs btn-info">Back</a>	
	<h3 style="text-transform: capitalize;">Edit Image</h3>
</div>
<div>
	<?php if($this->session->flashdata('message')):?>
	<div style="background: #f5f5f5;padding: 10px;margin-bottom: 10px;">
		<?php echo $this->session->flashdata('message');?>
	</div>
	<?php endif;?>
	<?php $attr = array('class'=>'form-horizontal');?>
	<?php echo form_open_multipart('', $attr);?>
	<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Album</label>
	    <div class="col-sm-10">
	    	<select class="form-control" name="album">
	    		<?php if(count($albums)):?>
	    		<?php foreach($albums as $album):?>
	    		<option value="<?php echo $album->id;?>" <?php if($result->album == $album->id){ echo 'selected'; }?>><?php echo $album->title;?></option>
	    		<?php endforeach;?>
	    		<?php endif;?>
	    	</select>
	    </div>
	</div>
	<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
	    <div class="col-sm-10">
	    	<input type="date" class="form-control" id="" placeholder="Date" name="date" required="" value="<?php echo $result->date;?>">
	    </div>
	</div>
	<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
	    <div class="col-sm-10">
	    	<input type="text" class="form-control" id="inputEmail3" placeholder="Title" name="title" required="" value="<?php echo $result->title;?>">
	    </div>
	</div>
	<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Caption</label>
	    <div class="col-sm-10">
	    	<textarea class="form-control" id="inputEmail3" placeholder="Caption" name="caption"><?php echo $result->caption;?></textarea>
	    </div>
	</div>
	<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
	    <div class="col-sm-10">
	    	<input type="file" class="form-control" id="inputEmail3" placeholder="" name="picture">
	    </div>
	</div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <input type="submit" name="submit" class="btn btn-primary" value="Save">
	    </div>
	  </div>
	</form>
</div>
<!-- <script>
        CKEDITOR.replace( 'caption' );
</script> -->