<?php
    session_start();
    $_SESSION = array();
	$_SESSION['username'] = "";
    session_destroy();
	header("Location: index.php"); 
?>
