<?php
 include('session.php');
if (!$con)  //Check connection  
  {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }


// get value of id that sent from address bar
$id=$_GET['id'];

// Retrieve data from database
$sql="SELECT * FROM product WHERE Proid='$id'";
$result=mysqli_query($con, $sql);

$rows=mysqli_fetch_array($result);
?>


<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form1" method="post" action="update_ac22.php">
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3"><strong>Update data in mysql</strong> </td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>Product Name</strong></td>
<td align="center"><strong>Price </strong></td>
<td align="center"><strong>Category Name</strong></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">
<input name="pname" type="text" id="pname" value="<?php echo $rows['Proname']; ?>">
</td>
<td align="center">
<input name="price" type="text" id="price" value="<?php echo $rows['Price']; ?>" size="15">
</td>
<td>
<input name="cname" type="text" id="cname" value="<?php echo $rows['Categoryname']; ?>" size="15">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input name="id" type="hidden" id="id" value="<?php echo $rows['Proid']; ?>">
</td>
<td align="center">
<input type="submit" name="Submit" value="Update">
</td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<?php
// close connection
mysqli_close($con);
?>