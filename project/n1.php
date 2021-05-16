<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<style type="text/css">
.a {
	text-align: center;
}
.test4334343 {
	text-align: right;
	button-align: right;
}
</style>
</head>

<body>

<h1 class="a">E-Store</h1>
<form action="login.html" method="get">
<div align="right">
<button> Upload an ad </button>
</div>
</form>


<?php
session_start();
$con = mysqli_connect("localhost","root","")or die("cannot connect to my sql");
mysqli_select_db($con, "project")or die("cannot connect database project");
$sql = "Select * FROM ad";
$result = mysqli_query($con, $sql);
$count=mysqli_num_rows($result);


	echo "<br> <br> <br>";
	echo '<center>';
	echo "ITEM";
	echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
	echo "Description";
	echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
	echo "Price";
	echo '<table width="45%" border="1">';
	while($_row = mysqli_fetch_array($result)){
	echo '<tr>'."<td>";?>"<center><img src= <?php echo $_row["images"];?>  height="200" width="200"></center>" <?php echo "</td>"."<td>".$_row['text']."</td>"."<td>".$_row['price']."</td>".'</tr>';
	}echo '</center>'.'</table>';
	
?>

</body>
</html>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>