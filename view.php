<?php require 'config.php' ?>


<!DOCTYPE html>
<html>
<head>
	<title>VIEW</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style type="text/css">
		body{
			background-color: #337ab7;
		}

	</style>
</head>
<body>
	<center><h1 style="color: white;">Welcome To <span style="color: #5cb85c;">VIEW</span> Zone</h1></center>
<br>
<center><h2 style="color: red;"><?php require 'showmessage.php' ?></h2></center>
<center><button  class="btn btn-success"   onclick="Javascript:window.location.href = 'index.php';">INSERT  DATA</button></center>	
<div class="container-fluid"> 
	<div class="row">
		<div class="col-md-6  col-md-offset-2">
<?php

$sql="SELECT * FROM userinfo";
$result=mysqli_query($con,$sql);
echo "<br>";
echo "<center>";
echo "<table  border='1 px' >";
echo "<tr> <th>Id</th> <th>Firstname</th> <th>Lastname</th> <th>Email</th>  <th>Address</th>  <th>PhoneNo</th> <th>Password</th>  <th>Action</th>   </tr>  ";
while($row = mysqli_fetch_assoc($result))
{
	
echo "<tr><td>";	
echo $row['Id'];
echo "</td>";
echo "<td>";
echo $row['FirstName'];
echo "</td>";
echo "<td>";
echo $row['LastName'];
echo "</td>";
echo "<td>";
echo $row['Email'];
echo "</td>";
echo "<td>";
echo $row['Address'];
echo "</td>";
echo "<td>";
echo $row['PhoneNo'];
echo "</td>";
echo "<td>";
echo $row['Password'];
echo "</td>";
echo "</td><td>";
?>
<a href="edit.php?id=<?=$row['Id'];?>" style="color: white;">Edit</a> &nbsp;
<a href="delete.php?id=<?=$row['Id'];?>" onclick= "return confirm('Are you sure?');" style="color: white;">Delete</a>
</td></tr>
<?php

}
echo "</center>";
?>
</div>
</div>
</div>
</body>
</html>
