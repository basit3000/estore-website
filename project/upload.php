<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Estore Pakistan | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    
    
    <?php
	include("header.php");

  $db = mysqli_connect("localhost", "root", "", "project");
  mysqli_select_db($db, "project") or die ("cannot connect database project");
  $msg = "";
  $a = $_SESSION['username'];
  if (isset($_POST['upload'])) {
  	$image = $_FILES['image']['name'];
  	$image_text = $_POST['image_text'];
	$price = $_POST['price'];	
  	$target = "images/".basename($image);
  	$sql = "INSERT INTO ad (images, price, text, user) VALUES ('$image', '$price', '$image_text', '$a')";
  	mysqli_query($db, $sql);
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM ad");
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <form method="POST" action="upload.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
    <div>
    	<textarea
        id="text"
        cols="40"
        rows="1"
        name="price"
        placeholder="price"></textarea>
        </div>
  	<div>
  		<button type="submit" name="upload">POST</button>
        </div>
    <div>
    
  </form><center>
  <form action="ad.php" method="POST" >
    <button type="text" name="Done">Done</button>
	</form>  
      <input type="button" value="Go back" onclick="history.back()"></center></form>  
      
</div>
</body>
</html>

    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <p>Estore Pakistan, Copyright &copy;2019 </p>
    </footer>

</body>

</html>
