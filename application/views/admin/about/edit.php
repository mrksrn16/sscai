<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>" button type="button" class="btn btn-info btn-xs">Back</a>	
	<h3 style="text-transform: capitalize;">Edit About</h3>
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
	    <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
	    <div class="col-sm-10">
	    	<input type="text" class="form-control" id="inputEmail3" placeholder="Title" name="title" required="" value="<?php echo $result->title;?>" readonly>
	    </div>
	</div>
	<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Content</label>
	    <div class="col-sm-10">
	    	<textarea class="form-control" id="inputEmail3" placeholder="Content" name="content" required=""><?php echo $result->content;?></textarea>
	    </div>
	</div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <input type="submit" name="submit" class="btn btn-primary" value="Save">
	    </div>
	  </div>
	</form>
</div>
<script>
        CKEDITOR.replace( 'content' );
</script>