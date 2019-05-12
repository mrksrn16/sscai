<div>
	<a href="<?php echo base_url();?>admin/<?php echo $page;?>" class="btn btn-xs btn-info">Back</a>	
	<h3 style="text-transform: capitalize;"><?php echo substr_replace($page, "", -1);?> - <?php echo $result->id;?></h3>
</div>
<div>
	<?php if($this->session->flashdata('message')):?>
    <div style="background:#f5f5f5;padding: 10px;margin-bottom: 10px;">
        <?php echo $this->session->flashdata('message');?>
    </div>
    <?php endif;?>
	<?php echo form_open();?>
	<table class="table table-bordered" style="margin-top: 20px;">
		<tr>
			<td><b>Lastname</b></td>
			<td><input type="text" value="<?php echo $result->lastname;?>" class="form-control" name="lastname" required></td>
		</tr>
		<tr>
			<td><b>Firstname</b></td>
			<td><input type="text" value="<?php echo $result->firstname;?>" class="form-control" name="firstname" required></td>
		</tr>
		<tr>
			<td><b>Middlename</b></td>
			<td><input type="text" value="<?php echo $result->middlename;?>" class="form-control" name="middlename" required></td>
		</tr>
		<tr>
			<td><b>Gender</b></td>
			<td>
				<input type="radio" name="gender" value="Male" required <?php if($result->gender == 'Male'){ echo 'checked'; }?>> Male
				<input type="radio" name="gender" value="Female" <?php if($result->gender == 'Female'){ echo 'checked'; }?>> Female
			</td>
		</tr>
		<tr>
			<td><b>Address</b></td>
			<td>
				<!-- <textarea name="address" class="form-control" required=""><?php echo $result->address;?></textarea> -->
				<div class="" style="width: 323px;display:flex;flex-wrap: wrap;justify-content: space-between;">
                        <input type="text" name="house_number" class="form-control" placeholder="House No" style="width: 100px;margin-bottom: 10px;" value="<?php echo $result->house_number;?>">
                        <input type="text" name="house_street" class="form-control" placeholder="Street" style="
    width: calc(100% - 120px);" required="" value="<?php echo $result->house_street;?>">
                        <input type="text" name="house_brgy" class="form-control" placeholder="Brngy" style="margin-bottom: 10px;" required="" value="<?php echo $result->house_brgy;?>">
                        <input type="text" name="house_city" class="form-control" placeholder="City/Province" required="" value="<?php echo $result->house_city;?>">
                        
                    </div>
			</td>
		</tr>
		<tr>
			<td><b>Date of Birth</b></td>
			<td>
				<input type="date" name="dob" value="<?php echo $result->dob;?>" class="form-control" required>
			</td>
		</tr>
		<tr>
			<td><b>Email</b></td>
			<td>
				<input type="email" name="email" value="<?php echo $result->email;?>" required class="form-control"> 
			</td>
		</tr>
		<tr>
			<td><b>Contact Number</b></td>
			<td>
				<input type="text" name="contact" value="<?php echo $result->contact;?>" required class="form-control" maxlength="13" pattern="^(09|\+639)\d{9}$"> 
			</td>
		</tr>
		<tr>
			<td><b>Grade Level</b></td>
			<td>
				<select class="form-control" name="grade_level" required="">
                    <optgroup label="select Grade Level">
                        <option value="Grade 1" <?php if($result->grade_level == 'Grade 1'){ echo 'selected'; }?>>Grade 1</option>
                        <option value="Grade 2" <?php if($result->grade_level == 'Grade 2'){ echo 'selected'; }?>>Grade 2</option>
                        <option value="Grade 3" <?php if($result->grade_level == 'Grade 3'){ echo 'selected'; }?>>Grade 3</option>
                        <option value="Grade 4" <?php if($result->grade_level == 'Grade 4'){ echo 'selected'; }?>>Grade 4</option>
                        <option value="Grade 5" <?php if($result->grade_level == 'Grade 5'){ echo 'selected'; }?>>Grade 5</option>
                        <option value="Grade 6" <?php if($result->grade_level == 'Grade 6'){ echo 'selected'; }?>>Grade 6</option>
                        <option value="Grade 7" <?php if($result->grade_level == 'Grade 7'){ echo 'selected'; }?>>Grade 7</option>
                        <option value="Grade 8" <?php if($result->grade_level == 'Grade 8'){ echo 'selected'; }?>>Grade 8</option>
                        <option value="Grade 9" <?php if($result->grade_level == 'Grade 9'){ echo 'selected'; }?>>Grade 9</option>
                        <option value="Grade 10" <?php if($result->grade_level == 'Grade 10'){ echo 'selected'; }?>>Grade 10</option>
                        <option value="Grade 11" <?php if($result->grade_level == 'Grade 11'){ echo 'selected'; }?>>Grade 11</option>
                        <option value="Grade 12" <?php if($result->grade_level == 'Grade 12'){ echo 'selected'; }?>>Grade 12</option>
                    </optgroup>
                </select>
			</td>
		</tr>
		<tr>
			<td><b>Fathers Name</b></td>
			<td>
				<input type="text" name="father_name" value="<?php echo $result->father_name;?>" required class="form-control"> 
			</td>
		</tr>
		<tr>
			<td><b>Fathers Occupation</b></td>
			<td>
				<input type="text" name="father_occupation" value="<?php echo $result->father_occupation;?>" class="form-control"> 
			</td>
		</tr>
		<tr>
			<td><b>Fathers Mobile Number</b></td>
			<td>
				<input type="text" name="father_number" value="<?php echo $result->father_number;?>" class="form-control" maxlength="13" pattern="^(09|\+639)\d{9}$"> 
			</td>
		</tr>
		<tr>
			<td><b>Mothers Name</b></td>
			<td>
				<input type="text" name="mother_name" value="<?php echo $result->mother_name;?>" required class="form-control"> 
			</td>
		</tr>
		<tr>
			<td><b>Mothers Occupation</b></td>
			<td>
				<input type="text" name="mother_occupation" value="<?php echo $result->mother_occupation;?>" class="form-control"> 
			</td>
		</tr>
		<tr>
			<td><b>Mothers Mobile Number</b></td>
			<td>
				<input type="text" name="mother_number" value="<?php echo $result->mother_number;?>" class="form-control" maxlength="13" pattern="^(09|\+639)\d{9}$"> 
			</td>
		</tr>
	</table>
		<input type="submit" name="submit" value="Update" class="btn btn-primary pull-right" style="margin-bottom: 50px;">
	</form>
</div>