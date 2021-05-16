<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    
<?php
    include("header.php");?>
    <br><br>
        <div style="width:30%;">
   <form method="post" action="change-password.php">
      <div>
         <label style="color:blue;">Old Password</label>
         <input type="password" name="old_pass" placeholder="Old Password . . . . .">
      </div>
      <div>
         <label style="color:blue;">New Password</label>
         <input type="password" name="new_pass" placeholder="New Password . . . . .">
      </div>
      <div>
         <label style="color:blue;">Re-Type New Password</label>
         <input type="password" name="re_pass" placeholder="Re-Type New Password . . . . .">
      </div>
      <button type="submit" name="re_password">Submit</button>
   </form>
    </div>

</body>
</html>