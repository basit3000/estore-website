<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<header>
        <div class="container">
            <div id="branding">
            <?php 
			
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

			if(isset($_SESSION['username'])){
				echo "Welcome user: ".$_SESSION['username'];
			}
			?>
                <a href="index.php"><h1>Estore Pakistan</h1></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <?php 
			
			if(!isset($_SESSION['username'])){
				echo "<li>"."<a href="."login.php".">"."Login/Signup"."</a>"."</li>";
			}
                    if(isset($_SESSION['username'])){
				echo "<li>"."<a href="."manage.php".">"."MY ACCOUNT"."</a>"."</li>";
			}
			if(isset($_SESSION['username'])){
				echo "<li>"."<a href="."logout.php".">"."LOGOUT"."</a>"."</li>";
			}
                    ?>
                 
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>