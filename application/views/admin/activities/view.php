<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>" class="btn btn-xs btn-info">Back</a>	
	<h3 style="text-transform: capitalize;"><?php echo substr_replace($page, "", -1);?> - <?php echo $result->name;?></h3>
</div>
<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>/edit/<?php echo $id;?>" class="btn btn-xs btn-primary">Edit</a>
	<table class="table table-bordered" style="margin-top: 20px;">
		<tr>
			<td><b>Date</b></td>
			<td><?php echo $result->date;?></td>
		</tr>
		<tr>
			<td><b>Name</b></td>
			<td><?php echo $result->name;?></td>
		</tr>
		<tr>
			<td><b>Content</b></td>
			<td><?php echo $result->content;?></td>
		</tr>
		<tr>
			<td><b>Image</b></td>
			<td>
				<a href="<?php echo base_url();?>uploads/activities/<?php echo $result->image;?>" target="_blank">
				<img src="<?php echo base_url();?>uploads/activities/<?php echo $result->image;?>" style="height:250px; width: 250px; object-fit: cover;">
				</a>
			</td>
		</tr>
		<tr>
			<td><b>Created by</b></td>
			<td>
				<?php 
					$res = $this->M_User->get_by_id($result->created_by);
					if($res) {
						echo $res->name;
					}
				?>
			</td>
		</tr>
		<tr>
			<td><b>Date Created</b></td>
			<td><?php echo $result->date_created;?></td>
		</tr>
		<tr>
			<td><b>Date Modified</b></td>
			<td><?php echo $result->date_modified;?></td>
		</tr>
		
	</table>
</div>