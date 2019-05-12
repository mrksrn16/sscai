<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>" class="btn btn-xs btn-info">Back</a>	
	<h3 style="text-transform: capitalize;"><?php echo substr_replace($page, "", -1);?></h3>
</div>
<div>
	<?php if($this->session->flashdata('message')):?>
	<div style="background: #f5f5f5;padding: 10px;margin-bottom: 10px;">
		<?php echo $this->session->flashdata('message');?>
	</div>
	<?php endif;?>
	
	<table class="table table-bordered" style="margin-top: 20px;">
		<tr>
			<td><b>Name</b></td>
			<td><?php echo $result->name;?></td>
		</tr>
		<tr>
			<td><b>Email</b></td>
			<td><a href="mailto:<?php echo $result->email;?>" target="_blank"><?php echo $result->email;?></a></td>
		</tr>
		<tr>
			<td><b>Subject</b></td>
			<td><?php echo $result->subject;?></td>
		</tr>
		<tr>
			<td><b>Message</b></td>
			<td><?php echo $result->message;?></td>
		</tr>
		
	</table>
	<?php echo form_open('admin/messages/reply/' . $result->id);?>
	<textarea class="form-control" id="" placeholder="Content" name="content" required=""></textarea>
	<input type="submit" name="submit" value="Reply" class="btn btn-primary" style="margin-top: 10px;">
	</form>
</div>
<script>
        CKEDITOR.replace( 'content' );
</script>