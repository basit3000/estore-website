<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$newpwd1 = "newpassword";
$pk1=$_SESSION['username'];
$con = mysqli_connect("localhost","root","")or die("cannot connect to my sql");
mysqli_select_db($con, "project")or die("cannot connect database project");
$sql="UPDATE login SET password = '$newpwd1' where username = $pk1 ";
$result=mysqli_query($con, $sql);

if($result)
{
echo "You have successfully changed your password";
}
else
{
echo "Operation Failure please re-attempt";
}

?>  
<a href="view.php">1. View reports</a> 
<br>
<b><a href="updateform.php">2. Update your Password</a><b> 
<br>
<a href="insertform.php">3. Create New account</a> 
<br>
<a href="delete.php">4. Delete your Account</a> 
<br>
<a href="logout.php">5. Logout</a>
<br>
<a href="index1.php">6. Upload new ad </a>

</body>
</html>