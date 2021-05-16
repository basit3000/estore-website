<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title> <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<?php
include("headere.php");
    ?>
<center>
<br>
<br/>
<br/>
<?php
echo "Login Failure for user: ";
echo $_SESSION['username'];
echo "<br>";
session_destroy();
?></center>
<form action="login.php" method="get">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class='button_1'>Click here to reattempt Login</button>
</form>
<footer>
        <p>Estore Pakistan, Copyright &copy;2019 </p>
    </footer>
</body>
</html>