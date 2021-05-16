<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="./css/style.css">
</head>

<body>
<?php
include("header.php");
$name =$_GET['username'];
$pass =$_GET['password'];
$username2 =$_GET['uname'];
$dob = $_GET['dob'];
$email = $_GET['email'];
$con = mysqli_connect("localhost","root","","project");
if(mysqli_connect_errno()){
		echo "Database not found";
	}
mysqli_select_db($con,"project");	
$reg = "INSERT INTO registeration(name, password, username, dob, email) VALUES('$name','$pass','$username2','$dob','$email')";
mysqli_query($con, $reg);
$sql = "INSERT INTO login(username, password) VALUES('$username2', '$pass')";
mysqli_query($con, $sql);
echo "<center>"."<br>"."<br>"."<br>"."<br>"."REGISTERATION SUCCESSFUL"."</center>";
header( "refresh:3;url=/project/login.php" );
?>
<footer>
        <p>Estore Pakistan, Copyright &copy;2019 </p>
    </footer>
</body>
</html>