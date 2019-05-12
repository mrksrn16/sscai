
<?php 
	$user_accounts = $this->M_User->get_accounts($id);
	$user_details = $this->M_User->get_by_id($id);
?>
<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>">Back</a>	
	<h3 style="text-transform: capitalize;"><?php echo substr_replace($page, "", -1);?> - <?php echo $user_details->name;?></h3>
</div>
<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>/edit/<?php echo $id;?>" class="btn btn-xs btn-primary">Edit</a>
	<table class="table table-bordered" style="margin-top: 20px;">
		<tr>
			<td><b>Name</b></td>
			<td><?php echo $user_details->name;?></td>
		</tr>
		<tr>
			<td><b>Contact</b></td>
			<td><?php echo $user_details->contact;?></td>
		</tr>
		<tr>
			<td><b>Address</b></td>
			<td><?php echo $user_details->address;?></td>
		</tr>
		<tr>
			<td><b>Email</b></td>
			<td><?php echo $user_accounts->email;?></td>
		</tr>
	</table>
</div>