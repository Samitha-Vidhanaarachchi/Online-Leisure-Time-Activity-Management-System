
<?php
// code credits to http://www.tutorialspoint.com/php/php_mysql_login.htm
$db=mysqli_connect("localhost","root","","finepets"); //Create connection
 
   
  if(isset($_POST)& !empty($_POST)){
	$username = $_POST['uname'];
	$password = $_POST['psw'];
	
	$sql = "SELECT * FROM login WHERE l_name='$username' AND l_password='$password'";
	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);
	if($count == 1){
		echo "successfully logged in";
	}
	else{
		echo "Invalid username or password";
	}
}
?>

<!DOCTYPE html>

<html>

<head>
	<meta http-equiv="Content-Language" content="en-us">
	<title>Home Page</title>
	
	
	
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
	<button class ="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login / Sign up</button>
	
<div id="id01" class="modalx">
  
  &nbsp;<form class="modal-contentx animatex" >
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
       <button type="button" class="signInx"><a class ="empty" href ="register.html"> Sign Up </a></button>
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

else if(xval !== '' && yval == '')
{
alert("password is required");
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
		
<div class="slideshow-container">


  <div class="mySlides fade">
    <img src="Pictures/photo-1484482340112-e1e2682b4856.jpeg" style="width:100%">
    
  </div>

  <div class="mySlides fade">
    <img src="Pictures/Untitled-2.jpg" style="width:100%">
    
  </div>

  <div class="mySlides fade">
    <img src="Pictures/3.jpg" style="width:100%">
    
  </div>
  
  <div class="mySlides fade">
    <img src="Pictures/Guildford-Bowling-SHARE-FB.jpg" style="width:100%">
    
  </div>
  
  <div class="mySlides fade">
    <img src="Pictures/Untitled-5.jpg" style="width:100%">
    
  </div>
  
   <div class="mySlides fade">
    <img src="Pictures/Untitled-6.jpg" style="width:100%">
    
  </div>

  

</div>
<br>


<div class ="dot1" style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>


</div> 


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds


}
</script>


<p><b><font class = "topic">Newely Added Activities</font></b></p>
<div class="allxx">	

 
<?php
	// create connection to the database
$con = mysqli_connect("localhost","root","","finepets");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql="SELECT * FROM product ORDER BY Time desc LIMIT 5 ";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
   
              
              <div align="center" >

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
</div>

<p><b><font class = "topic1">Most Popular Activities</font></b></p>
<div class ="allxx2">

<?php
	// create connection to the database
$con = mysqli_connect("localhost","root","","finepets");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql="SELECT * FROM product WHERE Categoryname='indoorG' ORDER BY Time desc LIMIT 5 ";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
   
              
              <div align="center"  >

	<table cellpadding="0" cellspacing="10px" width="20%" height="248" align="left"  border="1" style="background-color:#69696990;" >
        <tr>
        <td  width="200" height="248" align="center">
		<a href="uploads/<?php echo $row['Picture'] ?>" >
        <img src="uploads/<?php echo $row['Picture'] ?>" alt=" " style="width:200px;"></a><hr>		
		<p style="font-size:28px; font-weight:bold;"><?php echo $row['Proname'] ?>
		<p style="font-size:18px;"><?php echo  "Rs: ". number_format($row['Price'],2) ?>
		
		<form method="POST" action="order.php">
			<!--webbot bot="SaveResults" U-File="fpweb:///_private/form_results.csv" S-Format="TEXT/CSV" S-Label-Fields="TRUE" -->
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
</div>


<p><b><font class = "topic2">Special Offers</font></b></p>
<div class ="allxx3">

<?php
	// create connection to the database
$con = mysqli_connect("localhost","root","","finepets");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql="SELECT * FROM product WHERE Categoryname='Discount' ORDER BY Time desc LIMIT 5 ";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
   
              
              <div align="center"  >

	<table cellpadding="0" cellspacing="10px" width="20%" height="248" align="left"  border="1" style="background-color:#69696990;">
        <tr>
        <td  width="200" height="248" align="center">
		<a href="uploads/<?php echo $row['Picture'] ?>" >
        <img src="uploads/<?php echo $row['Picture'] ?>" alt=" " style="width:200px;"></a><hr>	
		<p style="font-size:28px; font-weight:bold;"><?php echo $row['Proname'] ?>
		<p style="font-size:18px;"><?php echo  "Rs: ". number_format($row['Price'],2) ?>
		
		<form method="POST" action="order.php">
			<!--webbot bot="SaveResults" U-File="fpweb:///_private/form_results.csv" S-Format="TEXT/CSV" S-Label-Fields="TRUE" -->
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
</div>




		 
		 
<div class ="footer">
<hr>
</div>


</body>

</html>