<?php require 'config.php'  ?>


<?php

if(isset($_POST['add'])){

	
$id = $_POST['id'];
$Firstname=$con->real_escape_string($_POST['FirstName']);
$Lastname=$con->real_escape_string($_POST['LastName']);
$Email=$con->real_escape_string($_POST['Email']);
$Address=$_POST['Address'];
$Phone=$_POST['Phone'];

$sql="UPDATE  userinfo SET FirstName='$Firstname', LastName='$Lastname', Email='$Email', Address='$Address', PhoneNo='$Phone' WHERE Id='$id' ";

if(mysqli_query($con,$sql))
{

 header('location:view.php');
 $_SESSION['msg']="DATA EDITED SUCCESSFULLY!!";
	}
	else{
	echo "ERROR";
}

}

?>