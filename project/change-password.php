<?php
include("header.php");
$database_connection = mysqli_connect("localhost", "root", "") or die();
$select_database = mysqli_select_db($database_connection, "project") or die();
$username = $_SESSION['username'];    
?>
<?php
 
if (isset($_POST['re_password']))
	{
	$old_pass = $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$re_pass = $_POST['re_pass'];
	$result = mysqli_query($database_connection, "select * from login where username ='$username'");
	$password_row = mysqli_fetch_array($result);
	$database_password = $password_row['password'];
	if ($database_password == $old_pass)
		{
		if ($new_pass == $re_pass)
			{
			$update_pwd = mysqli_query($database_connection, "update login set password = '$new_pass' where username = '$username'");
            $update_pwd1 = mysqli_query($database_connection, "update registeration set password = '$new_pass' where username = '$username'");
			echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
			}
		  else
			{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
			}
		}
	  else
		{
		echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
		}
	}
 
?>