<?php
   include('session.php');
?>
<?php

//create connection_aborted
$con=mysqli_connect("localhost", "root","","finepets");

//connection check
if(!$con)
{
die("connection Failed:" . mysqli_connect_error());
}
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 
//insert data SQL 
$sql= "INSERT INTO product (Proname,Price,Categoryname,picture)
VALUES ('$_POST[Pname]','$_POST[Price]','$_POST[Cname]','$file')";

If(mysqli_query($con,$sql))
{
echo "data inserted";
}
else
{
echo "ERROR:". mysqli_error($con);
}
//close connectionmysqli_close($con);







?>