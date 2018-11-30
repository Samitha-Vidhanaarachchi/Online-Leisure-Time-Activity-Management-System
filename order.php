<!DOCTYPE html>
<html>


 

<?php
//echo "ID ". $_POST['proid'] . "<br>";
//echo "Price: ". number_format($_POST['price'],2). "<br>";

$ID=$_POST['proid'];
$price=$_POST['price'];
$Name=$_POST['proname'];
?>
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
		<a href="aboutUs.html">About Us</a>
		<a href="adminhome.php">Admin</a></div>
		
		
		
		
<div align="center" class="no" style="position: absolute; left: 466px; top: 453px; height: 1157px" >

<table cellpadding="0" cellspacing="0" width="755" height="1074">
	<!-- MSTableType="layout" --><tr>
		<td valign="top" align="center" height="78" colspan="2">
		<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%" >
			<!-- MSCellFormattingTableID="1" --><tr>
				<td valign="top" align="center" height="100%" width="100%">
				<!-- MSCellFormattingType="content" --><p align="center">
				<font size="7" face="Arial Rounded MT Bold" color="white">Order</font></td>
			</tr>
		</table></td>
	</tr>
	<tr>
		<td valign="top" align="center" width="452"  >
		<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
			<!-- MSCellFormattingTableID="5" --><tr>
				<td bgcolor="#808080" colspan="2" height="5">
				<img alt="" width="1" height="5" src="MsSpacer.gif"></td>
			</tr>
			<tr>
				<td bgcolor="#808080" width="5">
				<img alt="" width="5" height="1" src="MsSpacer.gif"></td>
				<td valign="top" align="center" height="100%" width="100%">
				<!-- MSCellFormattingType="content" --><form method="POST" action="insert.php">
					<p align="left">&nbsp;<b><font size="5" face="Calibri">
					</font></b></p>
					<p align="left"><b><font size="5" face="Calibri">&nbsp; ID</font></b>:
					</p>
					<p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				
					<input type="text" 		name="ID" size="40" value="<?php echo $ID;?>" style="border: 5px solid #008080; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; font-size:10pt; font-weight:bold">
					</p>
					<p align="left"><b><font size="5" face="Calibri">&nbsp; Name</font></b>:
					</p>
					<p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				
					<input type="text" 		name="Name" size="40" value="<?php echo $Name;?>" style="border: 5px solid #008080; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; font-size:10pt; font-weight:bold"></p>
					<p align="left"><font size="5" face="Calibri"><b>&nbsp; Unit Price</b></font>:</p>
					<p align="left">&nbsp;Rs:
					<input type="text" 		name="UnitPrice" size="40" value="<?php echo number_format($price,2);?>" style="border: 5px solid #008080; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; font-size:10pt; font-weight:bold">
					</p>
					<p align="left"><b><font size="5" face="Calibri">&nbsp; Quantity</font></b>: 
					</p>
					<p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 			
					<input type="number" name="quantity" min="0" value="1" size="40" style="border: 5px solid #008080; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; font-size:10pt; font-weight:bold"></p>
					<p align="left"><b><font size="5" face="Calibri">&nbsp; Customer Name</font></b><font color="#000080">:</font></p>
					<p align="left"><font color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="Custname" size="40" style="border: 5px solid #008080; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; font-size:10pt; font-weight:bold"></p>
					<p align="left"></font><b><font size="5" face="Calibri">&nbsp; Telephone Number</font></b><font color="#000080">:</font></p>
					<p align="left"><font color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="Telno" size="40" style="border: 5px solid #008080; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; font-size:10pt; font-weight:bold"></p>
					</font>
					<p align="left"><b><font size="5" face="Calibri">&nbsp; Address</font></b><font color="#000080">:</font></p>
					<p align="left"><font color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="address" size="40" style="border: 5px solid #008080; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; font-size:10pt; font-weight:bold"></p>
					</font>
					<p align="left"><b><font size="5" face="Calibri">&nbsp; Email</font></b><font color="#000080">:</font></p>
					<p align="left"><font color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="email" size="40" style="border: 5px solid #008080; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; font-size:10pt; font-weight:bold"></font></p>
					<p align="left">&nbsp;</p>
					<p align="left"><font color="#000080"></p>
					<p align="center">
					<input type="submit" value="Submit" name="B1" style="font-size: 12pt; color: #000000; font-weight: bold; border: 5px solid #0000FF; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px"><input type="reset" value="Reset" name="B2" style="color: #000000; font-size: 12pt; font-weight: bold; border: 5px solid #0000FF; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px"></p>
				</form></font></td>
			</tr>
			<tr>
				<td bgcolor="#808080" colspan="2" height="5">
				<img alt="" width="1" height="5" src="MsSpacer.gif"></td>
			</tr>
		</table></td>
		<td valign="top" height="996" width="303">
		<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
			<!-- MSCellFormattingTableID="4" --><tr>
				<td bgcolor="#808080" colspan="2" height="5">
				<img alt="" width="1" height="5" src="MsSpacer.gif"></td>
			</tr>
			<tr>
				<td valign="top" width="100%">
				<!-- MSCellFormattingType="content" --><img border="0" src="Pictures/bsct.jpg" width="298" height="984"></td>
				<td bgcolor="#808080" height="100%" width="5">
				<img alt="" width="5" height="1" src="MsSpacer.gif"></td>
			</tr>
			<tr>
				<td bgcolor="#808080" colspan="2" height="5">
				<img alt="" width="1" height="5" src="MsSpacer.gif"></td>
			</tr>
		</table></td>
	</tr>
</table>
</div>

</div>

</body>

	

</html>