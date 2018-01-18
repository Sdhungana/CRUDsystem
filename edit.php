<?php  require 'config.php'  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap.min.css">



	<style type="text/css">
	body{
		background-color: #337ab7;
	}	
.contact_form{
width: 300px;
height: 50px;
margin: auto;
padding: 10px;
margin-top: 40px;

}

input{

	margin:4px;padding: 10px;border-radius: 8px;box-sizing: content-box;outline:0;
}
input:focus{
background-color: #5cb85c;
color: black;
cursor: pointer;

}
input:hover{
	cursor: pointer;
}

	</style>
</head>
<body>
	<center><h1 style="color: white;">Welcome To <span style="color: #5cb85c;">EDIT</span> Zone</h1></center>
<?php

if(isset($_GET['id'])){

	$id=$_GET['id'];

	$sel= "SELECT * FROM userinfo WHERE Id='$id' ";
	if($result=mysqli_query($con,$sel)){

//$row = $result->fetch_array();
 $row=mysqli_fetch_assoc($result); ?>
<form  class="contact_form"  method="POST" action="update.php">
	<input type="hidden" name="id" value="<?=$row['Id'];?>">
<input type="text" name="FirstName"  value="<?=$row['FirstName'];?>" /><br>

<input type="text" name="LastName"  value="<?=$row['LastName'];?>" /><br>

<input type="email" name="Email"  value="<?=$row['Email'];?>"  /><br>

<input type="text" name="Address"  value="<?=$row['Address'];?>"   /><br>

<input type="number" name="Phone"  value="<?=$row['PhoneNo'];?>"   /><br>



<input type="submit" name="add" value="EDIT" class="btn btn-success" />
</form>

<?php
}
} 
?>
</body>
</html>

