<?php
session_start();
$_SESSION['username']="";
 $con=mysqli_connect('localhost','root','');    
 mysqli_select_db($con,'userregistration');
?>