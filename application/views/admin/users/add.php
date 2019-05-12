<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>" class="btn btn-xs btn-info">Back</a>	
	<h3 style="text-transform: capitalize;">Add <?php echo substr_replace($page, "", -1);?></h3>
</div>
<div>
	<?php if($this->session->flashdata('message')):?>
	<div style="background: #f5f5f5;padding: 10px;margin-bottom: 10px;">
		<?php echo $this->session->flashdata('message');?>
	</div>
	<?php endif;?>
	<?php $attr = array('class'=>'form-horizontal');?>
	<?php echo form_open('', $attr);?>
	<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
	    <div class="col-sm-10">
	    	<input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="name" required="">
	    </div>
	</div>
	<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Contact</label>
	    <div class="col-sm-10">
	    	<input type="text" class="form-control" id="inputEmail3" placeholder="Contact" name="contact" maxlength="11" pattern="^(09|\+639)\d{9}$" required="">
	    </div>
	</div>
	<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
	    <div class="col-sm-10">
	    	<textarea class="form-control" id="inputEmail3" placeholder="Address" name="address" required=""></textarea>
	    </div>
	</div>
	<div class="form-group">
	    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
	    <div class="col-sm-10">
	    	<input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
	    </div>
	</div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <input type="submit" name="submit" class="btn btn-primary" value="Save">
	    </div>
	  </div>
	</form>
</div>