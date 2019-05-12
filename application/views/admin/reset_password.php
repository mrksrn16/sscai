<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SSCAI</title>
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
  </head>

<div class="container flex-center h100">
	<div class="login-container">
		<h3>Reset Password</h3>
		<?php echo form_open();?>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required="">
		  </div>
		  <div class="form-group" style="text-align: right;">
		    <p class="help-block"><a href="<?php echo base_url();?>admin/user/login">Back</a></p>
		  </div>
		  <input type="submit" class="btn btn-primary" name="submit" value="Send">
		</form>
	</div>
</div>

<script src="<?php echo base_url();?>/assets/vendors/bootstrap/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>