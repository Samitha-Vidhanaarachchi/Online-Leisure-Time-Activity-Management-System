<?php
 include('session.php');

if (mysqli_connect_errno())    // Check connection
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// update data in mysql database
$sql="UPDATE product SET Proname='$_POST[pname]', Price='$_POST[price]', Categoryname='$_POST[cname]' WHERE Proid='$_POST[id]'";
$result=mysqli_query($con, $sql);

// if mysqli_query is successfully updated
if($result){
echo "Successfully updated the record";
}

else {
echo " Data Update Error";
}

?> 