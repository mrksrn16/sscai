<div>
	<h3 style="text-transform: capitalize;"><?php echo $page;?></h3> 
</div>
<div style="margin-top: 10px;">
	<table class="table table-bordered">

		<tr>
			<th>Date</th>
			<th>Name</th>
			<th>Message</th>
			<th style="min-width:150px;">Action</th>
		</tr>
		<!-- <?php var_dump($result);?> -->
		<?php if(count($result)):?>
		<?php foreach($result as $r):?>
		<tr style="background: <?php if($r->status == 'pending'){ echo '#f5f5f5';  } ?>">
			<td><?php echo $r->date;?></td>
			<td><?php echo $r->name;?></td>
			<td><div style=""><?php echo $r->message;?></div></td>
			<td>
				<a href="<?php echo base_url();?>admin/<?php echo $page;?>/view/<?php echo $r->id;?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-eye-open"></a>
				<!-- <a href="<?php echo base_url();?>admin/<?php echo $page;?>/edit/<?php echo $r->id;?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></a> -->
				<a href="<?php echo base_url();?>admin/<?php echo $page;?>/delete/<?php echo $r->id;?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this?');"><span class="glyphicon glyphicon-trash"></a>
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