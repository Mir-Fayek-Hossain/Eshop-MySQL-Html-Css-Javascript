<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$uname=trim($_POST['uname']);
$name=$_SESSION['username']; 
$pass=trim($_POST['pass']);
$s="select * from usertable where name='$uname'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($uname==$name){
	 echo "**You entered the same username that you have.**";
}else if($num==1){
	 echo "**Username isn't available.**";
}else{
	$s="select * from usertable where name='$name'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	if($num==1){
		$row = mysqli_fetch_assoc($result);
		$pass_hash=$row['password'];
		if(password_verify($pass,$pass_hash)){
			$reg="update usertable
			SET name = '$uname'
			WHERE name='$name'"; 
						mysqli_query($con,$reg);
				$_SESSION['username']=$uname;
				header('location:index.php');
		}else{
			echo "**Password incorrect**";
	   	}
	}
}

?>
