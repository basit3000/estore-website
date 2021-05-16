<?php include("functions.php"); ?>

<?php
if(isLoggedin()){
header( "refresh:0;url=/project/loggedin.php" );
	echo (" LOGGED IN ") ;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Login | Signup </title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
	include("header.php");?>


    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Login | Signup</h1>

            </article>
            <aside id="loginsidebar">
                <div class="dark2">
                    <h3>Join Us Now</h3>
                    <form action="registration.php" class="loginform">
                        <div>
                            <label>Name</label><br>
                            <input name="username" type="text" >
                        </div>
                        <div>
                            <label>Username</label><br>
                            <input name="uname" type="text">
                        </div>
                        <div>
                            <label>Date Of Birth</label><br>
                            <input name="dob" type="text" >
                        </div>
                        <div>
                            <label>Email address</label><br>
                            <input name="email" type="text" >
                        </div>
                        <div>
                            <label>Password</label><br>
                            <input name="password" type="password" >
                        </div>
                        <div>
                        <br>
    <button class="button_1" type="submit">SIGN UP
    </button>
                       
                    </form>
                   
                    
                </div>

            </aside>
        </div>
    </section>
	<br>
    <br>
    <br><br><br>
    <br>
    <footer>
        <p>Estore Pakistan, Copyright &copy;2019 </p>
    </footer>

</body>

</html>
