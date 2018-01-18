
<?php require 'add.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>InsertDate</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
<style type="text/css">
	.error{
		color: red;
	}
	label{
		letter-spacing: 1px;font-size: 1em;
	}
	h3,h5{
		letter-spacing: 2px;
	}
	input{

	}


</style>
		
</head>
<body>
	
	<div class="container-fluid  bg-primary" >
		<center><h3 style="margin-top: 6px;">Welcome To <span style="color: #5cb85c;">DATA-ENTRY</span> Zone</h3>
		<h5 >Please fill the valid information</h5></center><hr>
		<div class="row" > 

			<div class="col-md-9 col-md-offset-3">
		
<form  action="" method="POST" >
	<div class="form-group">
		<div class="row">
		<div class="col-md-4">
		<label>FirstName:</label>
	</div>
</div>
	<div class="row">
		<div class="col-md-6">
		<input type="text" name="firstname" class="form-control">
	</div>
	<div class="col-md-4">
	<span class="error"> <?php echo $Errfirstname; ?></span>
</div>
</div>
	</div>
	<div class="form-group">
			<div class="row">
		<div class="col-md-4">
		<label>LastName:</label>
	</div>
</div>
	<div class="row">
		<div class="col-md-6">
		<input type="text" name="lastname" class="form-control">
	</div>
	<div class="col-md-4">
	<span class="error"> <?php echo $Errlastname; ?></span>
</div>
</div>
	</div>
	<div class="form-group">
			<div class="row">
		<div class="col-md-4">
		<label>Email:</label>
	</div>
</div>
	<div class="row">
		<div class="col-md-6">
		<input type="text" name="email" class="form-control">
	</div>
	<div class="col-md-4">
	<span class="error"> <?php echo $Erremail; ?></span>
</div>
</div>
	</div>
	<div class="form-group">
	<div class="row">
		<div class="col-md-4">
		<label>Address:</label>
	</div>
</div>
	<div class="row">
		<div class="col-md-6">
		<input type="text" name="address" class="form-control">
	</div>
	<div class="col-md-4">
	<span class="error"> <?php echo $Erraddress; ?></span>
</div>
</div>
	</div>
	<div class="form-group">
			<div class="row">
		<div class="col-md-4">
		<label>PhoneNo:</label>
	</div>
</div>
	<div class="row">
		<div class="col-md-6">
		<input type="number" name="phoneno" class="form-control">
	</div>
	<div class="col-md-4">
	<span class="error"> <?php echo $Errphoneno; ?></span>
</div>
</div>
	</div>
	<div class="form-group">
	<div class="row">
		<div class="col-md-4">
		<label>Password:</label>
	</div>
</div>
	<div class="row">
		<div class="col-md-6">
		<input type="password" name="password" class="form-control">
	</div>
	<div class="col-md-4">
	<span class="error"> <?php echo $Errpassword; ?></span>
</div>
</div>
	</div>
	<div class="radio">
		
		<label><input type="radio" name="gender"  value="male"    checked="checked">Male</label>
	<label><input type="radio" name="gender"  value="female" >Female</label>
	</div>

<div style="padding-bottom: 2px;" >
   
    <input type="submit" class="btn btn-success"  value="INSERT DATA" name="add">
<button type="button" class="btn btn-success" onclick="Javascript:window.location.href = 'view.php';">VIEW DATA</button>
  <!--the onclick is used to redirect to a new page when a button is clicked-->
  </div>
</form>
</div>
</div>

</div>


</body>
</html>