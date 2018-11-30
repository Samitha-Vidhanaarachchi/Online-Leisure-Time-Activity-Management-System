<!DOCTYPE html>

<html>

<head>
	<meta http-equiv="Content-Language" content="en-us">
	<title>Indoor Games</title>
	
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/slide.js"></script>

	<link rel = "stylesheet" href ="css/style.css"> 
	<link rel = "stylesheet" href ="css/tableDis.css"> 
	<link rel = "stylesheet" href ="css/login.css"> 
<link rel = "stylesheet" href ="css/all.css"> 

</head>

<style>

	body {
			background-image: url("Pictures/Wallpaper_HD_03.png");
			background-repeat: repeat-x;
			background-repeat: repeat-y;
			background-attachment: fixed;
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
	<img border="0" src="Pictures/my_profile_icon_white.png" width="100" height="100" align="right"></font></b></p>
	<p align="right">&nbsp;</p>
	<button class ="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login / Sign In</button>
	
<div id="id01" class="modalx">
  
  &nbsp;<form class="modal-contentx animatex" action="/action_page.php">
    <div class="imgcontainerx">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Pictures/LOGO.png" alt="Avatar" class="avatarx">
    </div>

    <div class="containerx">
      <label for="uname" style="color:black; font-size: 18px; "><b>Username</b></label>
      <input class ="logx" type="text" placeholder="Enter Username" name="uname" id="value1" required >
<br>
      <label for="psw"  style="color:black; font-size: 18px;"><b>Password</b></label>
      <input class ="logx" type="password" placeholder="Enter Password" name="psw" id="value2" >
        
      <button class="Iloginx" type="submit" id="btn">Login</button>
    </div>

    <div class="containerx" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtnx">Cancel</button>
       <button type="button" class="signInx"><a class ="empty" href ="register.html"> Sign In </a></button>
    </div>
  </form>
</div>
<script>
$(document).ready(function(){
$("#btn").click(function(){
var xval = $("#value1").val();
var yval = $("#value2").val();

if(xval == '' && yval == '')
{
alert("Please fill out the form");
}

else if(xval == '' && yval !== '')
{
alert("Username is required");
}

else{
alert("Password is required");
}
});
});
</script>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalx) {
        modalx.style.display = "none";
    }
}





</script>

	
	
	
	
	
	
	
	
	</b><br><br><br><br>
	</p>
	<fieldset ><form  method="POST" action="search.php" > 
	<p align="right"> 
	<input  type="text" name="searchString" Placeholder="Search Games and Activities" size="50">
	  <input  type="submit" name="submit" value="Search">
	  </p>
	  </form></fieldset >




























<div class="topnav" >
		<a class="active" href="index.php">Home</a>
		<a href="View.php">Activities</a>
		<a href="gallery.html">Gallery</a>
		<a href="aboutUs.html">About Us</a>
		<a href="adminhome.php">Admin</a></div>
 	
 	
	
<div class="container">

  

  <img src="Pictures/badminton.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><b><font size="6">Indoor Games</font></b></div>
  </div>
  <h1 class ="h1"><a href="View.php">Indoor Games</a></h1>
  </div>

<div class="container2">
 
  
  <img src="Pictures/Indoor-Games-3.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><b><font size="6">Outdoor Games</font></b></div>
  </div>
  <h1 class ="h1"><a href="ViewOutdoorGames.php">Outdoor Games</a></h1>
  </div>

<div class="container3">

  <img src="Pictures/filmcity-170i.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><b><font size="6">Kids Games</font></b></div>
  </div>
  <h1 class ="h1"><a href="ViewKidsGames.php">Kids Games</a></h1>
  </div>

<div class="container4">
  
  <img src="Pictures/surf-n-slide-water-park.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><b><font size="6">Water Games</font></b></div>
  </div>
  <h1 class ="h1"><a href="ViewWaterGames.php">Water Games</a></h1>
  </div>

</div>

	
	
<?php
	// create connection to the database
$con = mysqli_connect("localhost","root","","finepets");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql="SELECT * FROM product WHERE Categoryname='waterG' ORDER BY Time desc LIMIT 15 ";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
   
              
             <div class="allxx4">
		 

	<table cellpadding="0" cellspacing="10px" width="20%" height="248" align="left"  border="1"  style="background-color:#69696990;">
        <tr>
        <td  width="200" height="248" align="center">
		<a href="uploads/<?php echo $row['Picture'] ?>" >
        <img src="uploads/<?php echo $row['Picture'] ?>" alt=" " style="width:200px;"></a><hr>		
		<p style="font-size:28px; font-weight:bold;"><?php echo $row['Proname'] ?>
		<p style="font-size:18px;"><?php echo  "Rs: ". number_format($row['Price'],2) ?>
		
		<form method="POST" action="order.php">
			
			<p>
			
			<input type="hidden" value="<?php echo $row['Proid']?>" name="proid">
			<input type="hidden" value="<?php echo $row['Price']?>"  name="price">
			<input type="hidden" value="<?php echo $row['Proname']?>" name="proname">
			<input type="submit" value="Buy Now" name="B1" style="border: 2px solid #008000"></p>
			
					
		</form></td></tr></table>
		 
		 </div>
		 
	 
				 

<?php
 }
 // Close connection
	mysqli_close($con);
 ?>	


<div class ="footer">
<hr>
</div>

</body>

</html>