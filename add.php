<?php require 'config.php'; ?>

<?php
$Errfirstname = $Errlastname = $Erremail = $Erraddress = $Errphoneno = $Errpassword = "";


if(isset($_POST['add'])){

if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) ||  empty($_POST['address']) || empty($_POST['phoneno']) || empty($_POST['password'])) {

if(empty($_POST['firstname'])){

$Errfirstname="* FirstName is required";
}
else{
	if(strlen($_POST['firstname'])<4)
	{
		$Errfirstname="* Less than 4 letters";
	}

	$Firstname=test($_POST['firstname']);

}



if(empty($_POST['lastname'])){

$Errlastname="* LastName is required";
}



if(empty($_POST['email'])){

$Erremail="* Email is required";
}
else {
	
	$Email=test($_POST['email']);
if(!filter_var($Email,FILTER_VALIDATE_EMAIL))
{
	$Erremail="*Invalid Email";
}

}


if(empty($_POST['address'])){

$Erraddress="* Address is required";
}


if(empty($_POST['phoneno'])){

$Errphoneno="* PhoneNo is required";
}

if(empty($_POST['password'])){

$Errpassword="* Password is required";
}

}

else{


$Lastname=test($_POST['lastname']);
$Gender = $_POST['gender'];
$Address = test($_POST['address']);
$Phoneno = $_POST['phoneno'];
$Password = md5($_POST['password']);

	$result= "INSERT INTO userinfo(FirstName,LastName,Gender,Email,Address,PhoneNo,Password)
	VALUES ('$Firstname','$Lastname','$Gender','$Email','$Address','$Phoneno','$Password')";
	$query=mysqli_query($con,$result);
	header('location:view.php');
	$_SESSION['msg']="DATA ADDED SUCCESSFULLY!!";

}

}

	function test($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

?>