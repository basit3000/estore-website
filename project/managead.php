<style type="text/csss">
              table, th, td {
               border: 1px solid;
              }
              
              tr.hide_all > td, td.hide_all{
                 border: 0;
                
              }
          }
        </style>

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
    $username = $_SESSION['username'];
$con = mysqli_connect("localhost","root","")or die("cannot connect to my sql");
mysqli_select_db($con, "project")or die("cannot connect database project");
$sql = "Select * FROM ad where user = '$username'";
$result = mysqli_query($con, $sql);
$count=mysqli_num_rows($result);


	echo "<br> <br> <br>";
	
	echo '<center>';
	echo '<table width="60%" border="1">';
	while($_row = mysqli_fetch_array($result)){
	?>   <td height="200" width="250"><center><img src= <?php echo 'images/'.$_row["images"];?>  height="200" width="200"></center> <?php echo "</td>"?> <td height="200" width = "300"><center>  <?php echo $_row['text'] ?>  </center></td><td width = "80" height = "200"><center><?php echo "Rs. ".$_row['price']?><form action="" name="get"><button>Delete this ad</button> </form> <form action="" name="get"><button>Update information</button> </form><?php echo "</td>"?> </center>  <?php echo '</tr>';
	}echo '</center>'.'</table>';
	
?>
    <br>
    <input type="button" value="Go back" onclick="history.back()">
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
