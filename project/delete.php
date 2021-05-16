<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><center>
<?php
    include("header.php");
$uname = $_SESSION['username'];
$link = mysqli_connect("localhost", "root", "", "project");
$sql = "DELETE FROM login WHERE username = '$uname'";
$sql1 = "DELETE FROM registeration WHERE username = '$uname'";
    echo "<br>";
if(mysqli_query($link, $sql) && mysqli_query($link,$sql1)){
    echo "Records were deleted successfully.";
    session_destroy();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
header( "refresh:3;url=/project/index.php" );
    ?></center>
</body>
</html>