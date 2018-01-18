<?php
if(isset($_SESSION['msg'])){

	echo "<p>";
   echo $_SESSION['msg'];
   unset($_SESSION['msg']);
  echo "</p>";

}


?>