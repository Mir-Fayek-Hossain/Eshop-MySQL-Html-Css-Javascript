<?php
error_reporting(0);
session_start();
if(isset($_SESSION['username'])){
header('location:index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
    $(document).ready(function() {
        $(".login").submit(function(event) {
            event.preventDefault()
            var name = $(".logUname").val();
            var pass = $(".logUpass").val();
            $.post("login.php", {
                    name: name,
                    pass: pass
                },
                function(data) {
                    if (data.charAt(0) == "*") {
                        $('.warning').html(data);
                    } else {
                        $('body').html(data);
                    }
                })
        })
        $(".signin").submit(function(event) {
            event.preventDefault()
            var name = $(".sigUname").val();
            var pass = $(".sigUpass").val();
            var cpass = $(".sigUcpass").val();
            $.post("register.php", {
                    name: name,
                    pass: pass,
                    cpass: cpass,
                },
                function(data) {
                    if (data.charAt(0) == "*") {
                        $('.warning').html(data);
                    } else {
                        $('body').html(data);
                    }
                })
        })
        // changing button value and para value
        $(".formBtn").click(function() {
            $(".login").slideToggle("slow");
            $(".signin").slideToggle("slow");
            if (this.value == 'Login') {
                this.value = 'Signup';
                $(".formOptions p").text("Not yet signed up?");
            } else {
                this.value = 'Login';
                $(".formOptions p").text('Already signed up?');
            }
        });
    });
    </script>
</head>
<style>
* {
    padding: 0%;
    margin: 0%;
}

body {
    min-height: 100vh;
    background-image: url("https://i.pinimg.com/originals/29/5a/33/295a33f25e1e460b85d9ff5103518ada.jpg");
    background-size: cover;
    background-position: bottom;
}

@media only screen and (max-width: 760px) {
    body {
        /* background-image: url("https://i.pinimg.com/originals/e7/a9/0f/e7a90f5673e7d0ed74ecae0992a8fc5a.gif"); */
    }
}
</style>

<body>
    <div class="signin formContainer">
        <h3>Discover the<br>latest trend now with <br>
            <p>VOGUE</p>
        </h3>
        <form method="POST">
            <div class="inputBox">
                <input class="sigUname" type="text" name="name" required="required">
                <p>User Name</p>
            </div>
            <div class="inputBox">
                <input class="sigUpass" type="password" name="pass" required="required">
                <p>Password</p>
            </div>
            <div class="inputBox">
                <input class="sigUcpass" type="password" name="cpass" required="required">
                <p>Confirm Password</p>
            </div>
            <div class="warning">
            </div>
            <div class="inputBox">
                <input class="sig" type="submit" value="Sign in">
            </div>
        </form>
    </div>
    <div class="login formContainer">
        <h3>Discover the<br>latest trend now with <br>
            <p>VOGUE</p>
        </h3>
        <form method="POST">
            <div class="inputBox">
                <input class="logUname" type="text" name="name" required="required">
                <p>User Name</p>
            </div>
            <div class="inputBox">
                <input class="logUpass" type="password" name="pass" required="required">
                <p>Password</p>
            </div>
            <div class="warning">
            </div>
            <div class="inputBox">
                <input class="log" type="submit" value="Log in">
            </div>
        </form>
    </div>
    <div class="formOptions">
        <p>Already signed up?</p>
        <input type="button" class="formBtn" value="Login">
    </div>
</body>

</html>