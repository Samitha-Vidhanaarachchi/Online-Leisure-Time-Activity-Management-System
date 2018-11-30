<?php
   include('session.php');
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
		<a href="aboutUs.html">About Us</a>
		<a href="adminhome.php">Admin</a></div>
		
	
<body>



<div align="center" class="no" style="position: absolute; left: 370px; top: 397px; width: 823px; height: 901px" >



<div align="center">
<table cellpadding="0" cellspacing="0" width="755" height="877">
	<!-- MSTableType="layout" -->
	<tr>
		<td valign="top" align="center" height="78" colspan="2">
		<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%" >
			<!-- MSCellFormattingTableID="1" -->
			<tr>
				<td valign="top" align="center" height="100%" width="100%">
				<!-- MSCellFormattingType="content" -->
				<p align="center">
		<font size="7" face="Arial Rounded MT Bold" color="white">Product</font></td>
			</tr>
		</table>
		</td>
		</tr>
	<tr>
		<td valign="top" align="center" height="702"  >
		<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
			<!-- MSCellFormattingTableID="5" -->
			<tr>
				<td bgcolor="#808080" colspan="2" height="5">
				<img alt="" width="1" height="5" src="MsSpacer.gif"></td>
			</tr>
			<tr>
				<td bgcolor="#808080" width="5">
				<img alt="" width="5" height="1" src="MsSpacer.gif"></td>
				<td valign="top" align="center" height="100%" width="100%">
				<!-- MSCellFormattingType="content" -->
				<form method="POST" enctype="multipart/form-data" action="upload.php">
			
			<p align="left">&nbsp;</p>
			<p align="left">&nbsp;</p>
			<blockquote>
				<p align="left"><b><font size="5" face="Calibri">Product Name</font></b>&nbsp;&nbsp;
					</p>
				<p align="left">&nbsp;
				<input type="text" name="Pname" size="43" style="border: 3px solid #008080"></p>
				<p align="left"><b><font size="5" face="Calibri">Price</font></b></p>
				<p align="left"><b>
				<font face="Calibri" size="5" color="#006699">&nbsp;</font></b><input type="text" name="Price" size="43" style="border: 3px solid #008080; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px"></p>
				<p align="left"><b><font face="Calibri"><font size="5">Category Name</font></font></b></p>
				<p align="left"><b>
				<font face="Calibri" size="5" color="#006699">&nbsp;</font></b><input type="text" name="Cname" size="44" style="border: 3px solid #008080"></p>
				<p align="left"><font size="5"><b><font face="Calibri">Picture</font></b></font></p>
				<p align="left"><b><font face="Calibri" size="5">&nbsp;</font></b><input type="file" name="file" size="24" style="font-family: Tempus Sans ITC; font-weight: bold; font-size: 12pt; border: 3px solid #008080; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px"></p>
				<p align="left">&nbsp;</p>
			</blockquote>
			<p>
			<input type="submit" value="Submit" name="B1" style="font-family: Calibri; font-size: 14pt; font-weight: bold; border: 4px solid #006699; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px"><input type="reset" value="Reset" name="B2" style="font-family: Calibri; font-size: 14pt; font-weight: bold; border: 5px solid #006699"></p>
		</form>
				</td>
			</tr>
			<tr>
				<td bgcolor="#808080" colspan="2" height="5">
				<img alt="" width="1" height="5" src="MsSpacer.gif"></td>
			</tr>
		</table>
		</td>
		<td valign="top" height="702">
		<table cellpadding="0" cellspacing="0" border="0" width="100%" height="100%">
			<!-- MSCellFormattingTableID="4" -->
			<tr>
				<td bgcolor="#808080" colspan="2" height="5">
				<img alt="" width="1" height="5" src="MsSpacer.gif"><font color="#FFFFFF"><b><font size="5" color="#FFFFFF"><img border="0" src="Pictures/bdmntn.jpg" width="294" height="727"></td>
			</tr>
			
			<tr>
				<td bgcolor="#808080" colspan="2" height="5">
				<img alt="" width="1" height="5" src="MsSpacer.gif"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td width="452">&nbsp;</td>
		<td height="97" width="303">&nbsp;</td>
	</tr>
</table>

</div>
<div class ="footer">
<hr>
</div>

</div>

</body>

</html>