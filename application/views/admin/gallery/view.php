<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>"class="btn btn-xs btn-info">Back</a>	
	<h3 style="text-transform: capitalize;">Image - <?php echo $result->title;?></h3>
</div>
<div>
	<a href="<?php echo base_url();?>admin/gallery/edit/<?php echo $id;?>" class="btn btn-xs btn-primary">Edit</a>
	<table class="table table-bordered" style="margin-top: 20px;">
	<tr>
			<td><b>Date</b></td>
			<td><?php echo $result->date;?></td>
		</tr>
		<tr>
			<td><b>Title</b></td>
			<td><?php echo $result->title;?></td>
		</tr>
		<tr>
			<td><b>Caption</b></td>
			<td><?php echo $result->caption;?></td>
		</tr>
		<tr>
			<td><b>Image</b></td>
			<td>
				<a href="<?php echo base_url();?>uploads/gallery/<?php echo $result->image;?>" target="_blank">
				<img src="<?php echo base_url();?>uploads/gallery/<?php echo $result->image;?>" style="height:250px; width: 250px; object-fit: cover;">
				</a>
			</td>
		</tr>
		
	</table>
</div>