<?php
session_start();?>
<?php
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost", "root", "", "sitedb");
	$result = mysqli_query($conn, "SELECT login, password FROM employees WHERE login ='" . $_POST["login"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
header ("Location: http://www.site/index.php");	
	} else {
	 $_SESSION['login'] = $login;
  	  $_SESSION['success'] = "You are now logged in";
header ("Location: http://www.site/employees.php");
	}
}
?>
