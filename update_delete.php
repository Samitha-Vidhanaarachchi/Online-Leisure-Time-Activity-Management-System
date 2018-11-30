<title>Update &amp; Delete</title>
<?php
   include('session.php');
?>

<?php
   $con=mysqli_connect("localhost","root","","finepets"); //Create connection
   
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }

if (mysqli_connect_errno())    // Check connection
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM product");

?>
<!-- create table to show the results -->
<table cellpadding="0" cellspacing="0" width="843" height="450" align="center" border="1">

	<tr>
	
<td colspan="5" ><strong>List data from Database table </strong> </td>
</tr>

<tr >
<td align="center"><strong>Product Name</strong></td>
<td align="center"><strong>Price</strong></td>
<td align="center"><strong>Category Name</strong></td>
<td align="center"><strong>Update</strong></td>
<td align="center"><strong>Delete</strong></td>
</tr>

<?php
while($rows=mysqli_fetch_array($result)){
?>

<tr>
<td align="center"><?php echo $rows['Proname']; ?></td>
<td align="center"><?php echo $rows['Price']; ?></td>
<td align="center"><?php echo $rows['Categoryname']; ?></td>

<!-- link to update.php and send value of id -->
<td align="center"><a href="update22.php?id=<?php echo $rows['Proid']; ?>">update</a></td>

<!-- link to delete.php and send value of id -->
<td align="center"><a href="delete.php?id=<?php echo $rows['Proid']; ?>" onclick="return confirm('Are you sure to delete this Record?');"> Delete</a></td>
</tr>
<?php
}
?></td></tr><?php
mysqli_close($con);
?>