<div>
	<h3 style="text-transform: capitalize;"><?php echo $page;?></h3> <a href="<?php echo base_url();?>admin/<?php echo $page;?>/add" button type="button" class="btn btn-info">Add new</a>
</div>
<div style="margin-top: 10px;">
	<table class="table table-bordered">

		<tr>
			<th>Title</th>
			<th>Content</th>
			<th style="min-width: 150px;">Date</th>
			<!-- <th>Date Modified</th> -->
			<th style="min-width:150px;">Action</th>
		</tr>
		<!-- <?php var_dump($result);?> -->
		<?php if(count($result)):?>
		<?php foreach($result as $r):?>
		<tr>
			<td><?php echo $r->title;?></td>
			<td><div style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;"><?php echo $r->content;?></div></td>
			<td><?php echo $r->date;?></td>
			<!-- <td><?php echo $r->date_modified;?></td> -->
			<td>
				<a href="<?php echo base_url();?>admin/<?php echo $page;?>/view/<?php echo $r->id;?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-eye-open"></a>
				<a href="<?php echo base_url();?>admin/<?php echo $page;?>/edit/<?php echo $r->id;?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></a>
				<a href="<?php echo base_url();?>admin/<?php echo $page;?>/delete/<?php echo $r->id;?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this?');"><span class="glyphicon glyphicon-trash"></a>
			</td>
		</tr>
		<?php endforeach;?>
		<?php else: ?>
			<tr>
				<td colspan="5">No results found.</td>
			</tr>
		<?php endif;?>
	</table>
</div>