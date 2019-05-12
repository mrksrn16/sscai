<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>" class="btn btn-xs btn-info">Back</a>	
	<h3 style="text-transform: capitalize;">Add Albums</h3>
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
	    	<input type="text" class="form-control" id="inputEmail3" placeholder="Title" name="title" required="">
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