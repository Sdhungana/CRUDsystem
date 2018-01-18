<?php require 'config.php';  ?>
<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];

$sql="DELETE FROM userinfo WHERE Id= '$id' ";
mysqli_query($con,$sql);

//Reset MySQL AUTO_INCREMENT after a row is deleted
$alter= "ALTER TABLE userinfo
DROP COLUMN Id ";
mysqli_query($con,$alter);

$ad="ALTER TABLE userinfo
ADD Id INT(20) AUTO_INCREMENT PRIMARY KEY";

if($result=mysqli_query($con,$ad)){
	header('location:view.php');
	$_SESSION['msg']="DATA DELETED SUCCESSFULLY!!";
}



}


?>