<?php
 include('session.php');
 
// update data in mysql database
$id=$_GET['id'];
$sql="DELETE from product  WHERE Proid='$id'";
$result=mysqli_query($con, $sql);

// if successfully updated.
if($result){
echo "Successfully Deleted the Record";
echo "<BR>";
echo " <a href = 'logout.php'>Sign Out</a>";
}

else {
echo "ERROR";
}

?> 