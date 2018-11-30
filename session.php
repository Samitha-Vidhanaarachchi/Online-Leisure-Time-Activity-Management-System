<?php
   session_start();

   $con=mysqli_connect("localhost","root","","finepets"); //Create connection
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"select username from admin where username = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      mysqli_close($con);
      header("location:login.php");
   }
?>