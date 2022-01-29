<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name=$_SESSION['username']; 
$s="delete from usertable where name='$name'";
$result=mysqli_query($con,$s);
session_unset();
header('location:form.php');
?>