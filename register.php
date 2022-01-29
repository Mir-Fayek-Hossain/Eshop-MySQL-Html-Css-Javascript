<?php
include 'connect.php';
$name=trim($_POST['name']);
$pass=trim($_POST['pass']);
$cpass=trim($_POST['cpass']);
    if($pass!=$cpass){
        echo "**Password did not matched**";
    }else{
        $query="SELECT * FROM usertable WHERE name='$name'";
        $result=mysqli_query($con,$query);
        $num=mysqli_num_rows($result);
        if($num==1){
            echo "**User already taken!**";
        }
        else{
            $pass=password_hash(trim($_POST['pass']),PASSWORD_DEFAULT);
            $reg="INSERT INTO usertable ( name, password) VALUES ('$name','$pass')";
            mysqli_query($con,$reg);
            $_SESSION['username']=$name; 
            header('location:index.php');
        }
    }
    
?>