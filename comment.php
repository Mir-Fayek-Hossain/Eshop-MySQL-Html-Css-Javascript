<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$uname=$_SESSION['username'];
   extract($_POST);
   if(isset($_POST['submit'])){
      $reg="insert into comment (uname ,cmnt,img )values('$uname','$pass','$image')";
      mysqli_query($con,$reg);
      header('location:index.php');
   }
?>