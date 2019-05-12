<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>" class="btn btn-xs btn-info">Back</a>	
	<h3 style="text-transform: capitalize;"><?php echo substr_replace($page, "", -1);?> - <?php echo $result->id;?></h3>

</div>
<div>
	<a href="<?php echo base_url();?>admin/admissions/edit/<?php echo $id;?>" class="btn btn-xs btn-primary">Edit</a>
	<h3 style="color:<?php if($result->status == 'pending') { echo 'orange'; } if($result->status == 'accepted') { echo 'green'; } if($result->status == 'rejected') { echo 'red'; }?>;"><?php echo strtoupper($result->status); ?></h3>
	<?php if($this->session->flashdata('message')):?>
	<div style="background: #f5f5f5;padding: 10px;margin-bottom: 10px;">
		<?php echo $this->session->flashdata('message');?>
	</div>
	<?php endif;?>
	<table class="table table-bordered" style="margin-top: 20px;">
		<tr>
			<td style="width: 200px;"><b>Name</b></td>
			<td><?php echo $result->firstname . ' '. $result->middlename . ' '. $result->lastname;?></td>
		</tr>
		<tr>
			<td style="width: 200px;"><b>Gender</b></td>
			<td><?php echo $result->gender;?></td>
		</tr>
		<tr>
			<td style="width: 200px;"><b>Address</b></td>
			<td><?php echo $result->house_number . ' ' . $result->house_street . ' ' . $result->house_brgy . ' ' . $result->house_city;?></td>
		</tr>
		<tr>
			<td style="width: 200px;"><b>Date of Birth</b></td>
			<td><?php echo $result->dob;?></td>
		</tr>
		<tr>
			<td style="width: 200px;"><b>Email</b></td>
			<td><a href="mailto:<?php echo $result->email;?>" target="_blank"><?php echo $result->email;?></a></td>
		</tr>
		<tr>
			<td style="width: 200px;"><b>Contact Number</b></td>
			<td><?php echo $result->contact;?></td>
		</tr>
		<tr>
			<td style="width: 200px;"><b>Grade Level</b></td>
			<td><?php echo $result->grade_level;?></td>
		</tr>
		<tr>
			<td style="width: 200px;"><b>Fathers Name</b></td>
			<td><?php echo $result->father_name;?></td>
		</tr>
		<tr>
			<td style="width: 200px;"><b>Fathers Occupation</b></td>
			<td><?php echo $result->father_occupation;?></td>
		</tr>
		<tr>
			<td style="width: 200px;"><b>Fathers Mobile Number</b></td>
			<td><?php echo $result->father_number;?></td>
		</tr>
		<tr>
			<td style="width: 200px;"><b>Mothers Name</b></td>
			<td><?php echo $result->mother_name;?></td>
		</tr>
		<tr>
			<td style="width: 200px;"><b>Mothers Occupation</b></td>
			<td><?php echo $result->mother_occupation;?></td>
		</tr>
		<tr>
			<td style="width: 200px;"><b>Mothers Mobile Number</b></td>
			<td><?php echo $result->mother_number;?></td>
		</tr>

	</table>

	<?php if($result->status == 'pending'):?>
	<div style="margin-bottom: 50px;">
		<a href="<?php echo base_url();?>admin/admissions/accept/<?php echo $result->id;?>" class="btn btn-primary" onclick="return confirm('Accept admission?')">Accept</a>
		<a href="<?php echo base_url();?>admin/admissions/reject/<?php echo $result->id;?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to reject this admission?')">Reject</a>
	</div>
	<?php endif;?>

</div>