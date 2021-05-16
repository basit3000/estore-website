<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>

<?php
$link1 = mysqli_connect("localhost","root","","project")or die("cannot connect to my sql");
mysqli_select_db($link1, "project")or die("cannot connect database project");
$sql1 = "Select * FROM login";
$result1 = mysqli_query($link1, $sql1);
$count=mysqli_num_rows($result1);

function isLoggedIn(){
	if(isset($_SESSION['username'])){
		return true;
	}
}

function isAdmin(){
	while($rows = mysqli_fetch_array($result1)){
	if($_SESSION['username'] == $rows['username'] && $_SESSION['password'] == $rows['password']){
		return true;}
}
}

?>