<div>
	<h3 style="text-transform: capitalize;">Facilities/ Virtual Tour</h3> <a href="<?php echo base_url();?>admin/<?php echo $page;?>/add" button type="button" class="btn btn-info">Add new</a>	
</div>
<div style="margin-top: 10px;">
	<table class="table table-bordered">

		<tr>
			<th>Title</th>
			<th>Description</th>
			<th style="min-width: 150px;">Show</th>
			<th style="min-width: 150px;">Action</th>
		</tr>
		<!-- <?php var_dump($result);?> -->
		<?php if(count($result)):?>
		<?php foreach($result as $r):?>
		<tr>
			<td><?php echo $r->title;?></td>
			<td><?php echo $r->description;?></td>
			<td>
				<?php echo form_open('admin/virtualtour/isShow/' . $r->id);?>
				<select class="form-control" onchange="this.form.submit()" name="status">
					<option value="yes" <?php if($r->isShow == 'yes'){ echo 'selected'; }?>>Yes</option>
					<option value="no" <?php if($r->isShow == 'no'){ echo 'selected'; }?>>No</option>
				</select>
				</form>
			</td>
			<td>
				<a href="<?php echo base_url();?>admin/<?php echo $page;?>/view/<?php echo $r->id;?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-eye-open"></a>
				<a href="<?php echo base_url();?>admin/<?php echo $page;?>/edit/<?php echo $r->id;?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></a>
				<a href="<?php echo base_url();?>admin/<?php echo $page;?>/delete/<?php echo $r->id;?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this?');"><span class="glyphicon glyphicon-trash"></a>
			</td>
		</tr>
		<?php endforeach;?>
		<?php else: ?>
			<tr>
				<td colspan="3">No results found.</td>
			</tr>
		<?php endif;?>
	</table>
</div>