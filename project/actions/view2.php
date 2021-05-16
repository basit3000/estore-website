<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
echo "Welcome User :";
echo $_SESSION['username'];
$con = mysqli_connect("localhost","root","")or die("cannot connect to my sql");
mysqli_select_db($con, "project")or die("cannot connect database project");
$sql = "Select * FROM login";
$_this = 0;
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
while ($_row = mysqli_fetch_array($result)){
if($_row['username'] == $_SESSION['username'])
$_this = $_row;}
if($count) 
{
	echo '<center>';
	echo "VIEW ALL RECORDS";
	echo '</center>';
	echo "<br> <br> <br>";
	echo '<center>';
	echo "USERNAME";
	echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
	echo "PASSWORD";
	echo '<table width="45%" border="1">';
	echo '<tr>'."<td>".$_this['username']."</td>"."<td>".$_this['password']."</td>".'</tr>';
	echo '</center>'.'</table>';
	}
else 
{
	echo "<br> NO RECORDS TO DISPLAY";
}		
?>

</body>
</html>