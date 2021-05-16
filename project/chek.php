<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("header.php");
?>
</body>
</html>
<?php

session_start();
$con = mysqli_connect("localhost", "root", "") or die("cannot connect to mysql");
mysqli_select_db($con, "project") or die ("cannot connect database project");
$sql = "Select * FROM login WHERE username ='$username1' and password='$pwd1'";
$result = mysqli_query($con, $sql);
$row_count = mysqli_num_rows($result);
echo $_SESSION['username'];
if(isset($_SESSION['username'])) 
{
	$row = mysqli_fetch_array($result);
	$_SESSION['loginpk']= $row['loginpk'];
header("Location: ad.php"); 
}
else 
{
header("Location: login.php");
}

?>