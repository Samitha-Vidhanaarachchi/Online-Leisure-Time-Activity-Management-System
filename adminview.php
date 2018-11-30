<?php
   include('session.php');
?>

<!DOCTYPE html>
<html>

<head>
		
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<meta http-equiv="Content-Language" content="en-us">
	<title>Admin View</title>
	
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
		<a href="gallery.php">Gallery</a>
		<a href="aboutUs.php">About Us</a>
		<a href="adminhome.php">Admin</a></div>
		
		







<div align="center" style="background-color:#69696990;">

<div align="center" >

<table cellpadding="0" cellspacing="0" width="100%" height="257">
	<!-- MSTableType="layout" --><tr>
		<td valign="top" height="27">
		&nbsp;</td>
	</tr>
</table>
</div>
	<table cellpadding="0" cellspacing="1px" width="100%" height="" align="center" border="1">
	<tr >
	<tr >
    <td valign="top" align="center" bgcolor="orange"><b><font size="4" color="#GGGGGG">&nbsp;Order ID</font></b></td>
	<td valign="top" align="center" bgcolor="orange"><b><font size="4" color="#GGGGGG">&nbsp;Time</font></b></td>
    <td valign="top" align="center" bgcolor="orange"><b><font size="4" color="#GGGGGG">&nbsp;Product ID</font></b></td>
	<td valign="top" align="center" bgcolor="orange"><b><font size="4" color="#GGGGGG">&nbsp;Product Name</font></b></td>
	<td valign="top" align="center" bgcolor="orange"><b><font size="4" color="#GGGGGG">&nbsp;Unit Price</font></b></td>
    <td valign="top" align="center" bgcolor="orange"><b><font size="4" color="#GGGGGG">&nbsp;Quantity</font></b></td>
	<td valign="top" align="center" bgcolor="orange"><b><font size="4" color="#GGGGGG">&nbsp;Picture</font></b></td>
<td valign="top" align="center" bgcolor="orange"><b><font size="4" color="#GGGGGG">&nbsp;Customer Name</font></b></td>
 <td valign="top" align="center" bgcolor="orange"><b><font size="4" color="#GGGGGG">&nbsp;Telephone No.</font></b></td>
 <td valign="top" align="center" bgcolor="orange"><b><font size="4" color="#GGGGGG">&nbsp;Address</font></b></td>
  <td valign="top" align="center" bgcolor="orange"><b><font size="4" color="#GGGGGG">&nbsp;Email</font></b></td>


    </tr>

</div>

  <?php
	// create connection to the database
$con = mysqli_connect("localhost", "root", "","finepets");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql="SELECT * FROM orderitem ORDER by Time ";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
      
        <tr>
        <td align="center"><?php echo $row['Orderid'] ?></td>
		<td><?php echo $row['Time'] ?></td>
        <td><?php echo $row['Proid'] ?></td>
		 <td><?php echo $row['Proname'] ?></td>
		 <td><?php echo "Rs:".$row['Unitprice'] ?></td>
		<td><?php echo $row['Quantity'] ?></td>
        <td align="center"><a href="uploads/<?php echo $row['Picture'] ?>" >
        <img src="uploads/<?php echo $row['Picture'] ?>" alt=" " style="width:100px;"></a><hr>	
		<td><?php echo $row['Custname'] ?></td>
		<td><?php echo $row['Telno'] ?></td>
		<td><?php echo $row['Address'] ?></td>
		<td><?php echo $row['Email'] ?></td>
        </tr>
        <?php
 }
 // Close connection
	mysqli_close($con);
 ?>	
	</tr>
	</table>
	</body>
	</html>