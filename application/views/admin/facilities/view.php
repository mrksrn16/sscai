<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>" class="btn btn-xs btn-info">Back</a>	
	<h3 style="text-transform: capitalize;">Teacher - <?php echo $result->name;?></h3>
</div>
<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>/edit/<?php echo $id;?>" class="btn btn-xs btn-primary">Edit</a>
	<table class="table table-bordered" style="margin-top: 20px;">
		<tr>
			<td><b>Name</b></td>
			<td><?php echo $result->name;?></td>
		</tr>
		<tr>
			<td><b>Position</b></td>
			<td><?php echo $result->position;?></td>
		</tr>
		<tr>
			<td><b>Caption</b></td>
			<td><?php echo $result->caption;?></td>
		</tr>
		<tr>
			<td><b>Image</b></td>
			<td>
				<a href="<?php echo base_url();?>uploads/facilities/<?php echo $result->image;?>" target="_blank">
				<img src="<?php echo base_url();?>uploads/facilities/<?php echo $result->image;?>" style="height:250px; width: 250px; object-fit: cover;">
				</a>
			</td>
		</tr>
		
	</table>
</div>