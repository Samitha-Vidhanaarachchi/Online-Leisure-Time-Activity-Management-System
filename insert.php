<?php

//create connection_aborted
$con=mysqli_connect("localhost", "root","","finepets");

//connection check
if(!$con)
{
die("connection Failed:" . mysqli_connect_error());
}
 
$sql="INSERT INTO orderitem(Proid,Proname,Unitprice,Quantity,Custname,Telno,Address,Email)
 VALUES('$_POST[ID]','$_POST[Name]','$_POST[UnitPrice]','$_POST[quantity]','$_POST[Custname]','$_POST[Telno]','$_POST[address]','$_POST[email]')";
 

If(mysqli_query($con,$sql))
{
echo "data inserted";
}
else
{
echo "ERROR:". mysqli_error($con);
}

?>
