<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>">Back</a>	
	<h3 style="text-transform: capitalize;">Virtual Tour - <?php echo $result->title;?></h3>
</div>
<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>/edit/<?php echo $id;?>" class="btn btn-xs btn-primary">Edit</a>
	<table class="table table-bordered" style="margin-top: 20px;">
		<tr>
			<td><b>Title</b></td>
			<td><?php echo $result->title;?></td>
		</tr>
		<tr>
			<td><b>Description</b></td>
			<td><?php echo $result->description;?></td>
		</tr>
		<tr>
			<td><b>Image</b></td>
			<td>
				<a href="<?php echo base_url();?>uploads/virtualtour/<?php echo $result->image;?>" target="_blank">
				<img src="<?php echo base_url();?>uploads/virtualtour/<?php echo $result->image;?>" style="height:500px; width: 100%; object-fit: cover;">
				</a>
			</td>
		</tr>
		
	</table>
</div>