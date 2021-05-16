<?php include("functions.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Login | Signup </title><link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
   	include("header.php");
   ?>


    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Login | Signup</h1>

            </article>
            <aside id="loginsidebar">
                <div class="dark2">
                    <h3>Join Us Now</h3>
                    <form method = "post" action="admincheck.php" class="loginform">
                        <div>
                            <label>Name</label><br>
                            <input name="username" type="text" placeholder="Enter Username">
                        </div>
                        <div>
                            <label>Password</label><br>
                            <input name="password" type="password" placeholder="Enter password">
                        </div><br />
                        <button class="button_1" type="submit">SUBMIT</button>
                    
                </div>

            </aside>
        </div>
    </section>
    <footer>
        <p>Estore Pakistan, Copyright &copy;2019 </p>
    </footer>

</body>

</html>
