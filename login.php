
<?php
// code credits to http://www.tutorialspoint.com/php/php_mysql_login.htm
$db=mysqli_connect("localhost","root","","finepets"); //Create connection
 session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = md5(mysqli_real_escape_string($db,$_POST['password'])); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
     
         $_SESSION['login_user'] = $myusername;
         
         header("location: adminhome.php");
      }else {
         $error = "incorrect username or password";
		 
      }
   }
?>
<!DOCTYPE html>
<html>

<head>
		
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<meta http-equiv="Content-Language" content="en-us">
	<title>Admin Login</title>
	
	<link rel = "stylesheet" href ="css/style.css"> 
	<link rel = "stylesheet" href ="css/all.css"> 
	
	<script src="js/formvalid.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<style>

	body {
			background-image: url("Pictures/Wallpaper_HD_03.png");
			background-repeat: repeat-x;
			background-repeat: repeat-y;
			background-attachment: fixed;
    		background-color: black;
		}




</style>
<body>

<form method="POST" >
	<p align="right"></p>
	<div></div>
	<p align="right"></p></div>
	<p align="right"><font color="#FFFFFF">
	<b><font size="5">
	<img border="0" src="Pictures/LOGO.png" width="278" height="206" align="left"></font></b></p>
	<p align="right"><b><font size="5">
	
	<p align="right">&nbsp;</p></form>
	
	<div class="topnav" >
		<a class="active" href="index.php">Home</a>
		<a href="View.php">Activities</a>
		<a href="gallery.html">Gallery</a>
		<a href="aboutus.php">About Us</a>
		<a href="adminhome.php">Admin</a></div>
		
		<div style = "margin:30px" align="center" class="no1" >
		<img border="0" src="Pictures/Untitled-21.jpg" width="278" height="339" align="left"></font></b></p>
		
		</div>
		

<div align="center" class="no" >
	

	
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <p>
                  <b><font size="5" face="Calibri">User Name: </font></b>
               	</p>
					<p>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type = "text" name = "username" class = "box" style="border: 3px solid #008080; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" size="47"/><br /><br />
                  <b><font size="5" face="Calibri">Password: &nbsp;&nbsp;</font></b></p>
					<p>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type = "password" name = "password" class = "box" size="47" style="border: 3px solid #008080; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" size="36" /><br/><br />
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               	</p>
					<p>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type = "submit" value = " Log In " style="font-size: 14pt; font-family: Calibri; font-weight: bold; border: 6px solid #0000FF"/><input type = "reset" value = " Reset " style="font-family: Calibri; font-weight: bold; font-size: 14pt; border: 5px solid #0000FF; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px"/><br />
               	</p>
               </form>
               
               <div style = "font-size:14px; color:#cc0000; margin-top:10px">
			   <?php  $error = "Incorrect Password or Username ";
						
						echo $error; ?></div>
					
            </div>
         </div>
 


<div class ="footer">
<hr>
</div>


		
	</body>
	</html>
	