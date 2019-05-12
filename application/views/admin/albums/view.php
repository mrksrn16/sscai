<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>"class="btn btn-xs btn-info">Back</a>	
	<h3 style="text-transform: capitalize;">Album - <?php echo $result->title;?></h3>
</div>
<div>
	<a href="<?php echo base_url();?>admin/gallery/add/<?php echo $result->id;?>" class="btn btn-xs btn-primary">Add image</a>
	<table class="table table-bordered" style="margin-top: 20px;">
	<tr>
			<th>Title</th>
			<th>Caption</th>
			<th>Date</th>
			<th style="min-width:150px;">Action</th>
		</tr>
		<!-- <?php var_dump($result);?> -->
		<?php if(count($images)):?>
		<?php foreach($images as $r):?>
		<tr>
			<td><?php echo $r->title;?></td>
			<td><?php echo $r->caption;?></td>
			<td><?php echo $r->date;?></td>
			<td>
				<a href="<?php echo base_url();?>admin/gallery/view/<?php echo $r->id;?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-eye-open"></a>
				<a href="<?php echo base_url();?>admin/gallery/edit/<?php echo $r->id;?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></a>
				<a href="<?php echo base_url();?>admin/gallery/delete/<?php echo $r->id;?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this?');"><span class="glyphicon glyphicon-trash"></a>
			</td>
		</tr>
		<?php endforeach;?>
		<?php else: ?>
			<tr>
				<td colspan="4">No results found.</td>
			</tr>
		<?php endif;?>	
	</table>
</div>