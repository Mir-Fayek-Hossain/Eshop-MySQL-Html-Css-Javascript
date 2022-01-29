<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:form.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Hello, world!</title>
</head>
<style>
th,td{
    
    border:1px solid black;
    padding:10px;
}
table *{
    text-align: center;
}
#List{
    width: 100vw;
    height: 100vh;
    display:none;
    position: fixed;
    z-index: 20;
    background: rgba(0, 0, 0, 0.7);
    top:50%;
    left:49.2%;
    transform: translate(-50%,-50%);
    padding-top:10%;
}
#List input{
    position:absolute;
    z-index: 30;
    top:20px;
    right:20px;
}
table, #List div{
    margin:auto; 
    width:300px;
    background-color: red;
}
p{
    display:inline;
}
#List div{
    text-align:center;
    margin-top: 5px;
    padding-left:140px;
}
</style>
<body>
<div id="List">
    <table >
        <thead>
            <tr>
                <th>SN</th>
                <th>Product Name</th>
                <th>Product Price</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <div><p>Total : </p> <p id="Total_amount">0</p> $</div>
    
    <input  type="submit" value="X" />
</div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul class="options"  onmouseout="MouseOut()">
            <li onmouseover="MouseOver1()"  onmouseout="MouseOut()">
                <button class="home">HOME</button>
            </li>
            <li onmouseover="MouseOver2()" onmouseout="MouseOut()">
                <button class="men">MEN</button>
            </li>
            <li onmouseover="MouseOver3()" onmouseout="MouseOut()">
                <button class="women">WOMEN</button>
            </li>
            <li onmouseover="MouseOver4()" onmouseout="MouseOut()">
                <button class="accessories">ACCESSORIES</button>
            </li>
            <div class="dropdown"> 
                <button  class="dropbtn"id="setting" onmouseover="MouseOver5()">SETTING</button>
                <div class="dropdown-content">
                        <button class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Update</button>
                        <form  action="logout.php">
                            <input class="nav-link" type="submit" value="Logout" />
                        </form>
                        <form action="delete.php">
                            <input class="nav-link" type="submit" value="DELETE" />
                        </form>
                </div>
            </div>
        </ul>
    </div>
    <div id="main">
        <div class="header">
            V O G U E
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-warning ">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLongTitle">Update your username</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <div aria-hidden="true">&times;</div>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <h3 class="Ucard__head">VOGUE</h3>
                        <div class="Ucard__wrap">
                            <form class="Ucard__form" action="" method="POST">
                                <input class="Ucard__input Uname" type="text"  placeholder="Username" required>

                                <input class="Ucard__input Upass" type="password" placeholder="Password"
                                    required>
                                <div class="warning">
                                </div>
                                
                                <button  class="Ucard__btn">Update</button>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"style="font-size:13px;">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="sd">
            <div id="navbar">
                <span class="closs_sidenav" onclick="openNav()" style="position:absolute;">&#9776;</span>
                <h1 style="font-family: 'Times New Roman', Times, serif;" id="welcome">Home</h1>
                <div class="mycart"><i class="fa fa-shopping-cart"></i><input id="quantityAmount"  type="submit" value="" /></div>
            </div>
        </div>
        <div class="web_loader">
        </div>
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Home delevey</a></li>
                                <li><a href="#">Fashion design</a></li>
                                <li><a href="#">Hosting</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <p>Vogue is an American monthly fashion and lifestyle magazine covering many topics,
                                    including fashion, beauty, culture, living, and runway. Based in New York </p>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>Our Shop</h3>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11881.128906840073!2d90.3676011645082!3d23.822766283798302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sbd!4v1601970204327!5m2!1sen!2sbd"
                                width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div>
                        <div class="social_icons">
                            <div  class="icon-button twitter"><i class="icon-twitter"></i><span></span></div>
                            <div  class="icon-button instagram"><i class="fa fa-instagram"></i><span></span></div>
                            <div  class="icon-button facebook"><i class="icon-facebook"></i><span></span></div>
                            <div  class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></div>
                            <div  class="icon-button pinterest"><i class="fa fa-pinterest"></i><span></span></div>
                        </div>
                        <p class="copyright">VOGUE © 2018</p>
                    </div>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js">
        </script>
    </div>
    <script>
     $(document).ready(function() {
        $(".web_loader").load("home.php");
        $(".home").click(function() {
            $('#welcome').text('Home');
            $(".web_loader").load("home.php");
        });
        $(".men").click(function() {
            $('#welcome').text('Men');
            $(".web_loader").load("men.php");
        });
        $(".women").click(function() {
            $('#welcome').text('Women');
            $(".web_loader").load("women.php");
        });
        $(".accessories").click(function() {
            $('#welcome').text('Accessories');
            $(".web_loader").load("accessories.php");
        });
    });
    $(".Ucard__btn").click(function(event){
      event.preventDefault()
      var uname = $(".Uname").val();
      var pass = $(".Upass").val(); 
      $.post("update.php",{
        uname:uname,
        pass:pass
      },
      function(data){ 
        if(data.charAt(0)=="*"){
            $('.warning').html(data);
        }else{
            location.reload(true);
        }
      })
    })
    </script>
    <script>
    // Home
    function MouseOver1() {
        document.getElementById("setting").style.color ="rgba(250, 7, 7, 0.377)";
        document.getElementById("mySidenav").style.backgroundImage =
            "url('https://i.pinimg.com/originals/3c/bb/8a/3cbb8a7b1f7758ea1eb53ce03eadd36a.gif')";
    }
    //MEN
    function MouseOver2() {
        document.getElementById("setting").style.color ="rgba(250, 7, 7, 0.377)";
        document.getElementById("mySidenav").style.backgroundImage =
            "url('https://i.ibb.co/MRSZxC3/manu-rios-entrevista-moda-6.jpg')";
    }

    function MouseOver3() {
        document.getElementById("setting").style.color ="rgba(250, 7, 7, 0.377)";
        document.getElementById("mySidenav").style.backgroundImage =
            "url('https://celebmafia.com/wp-content/uploads/2015/10/gigi-hadid-photoshoot-for-vogue-magazine-november-2015-_1.jpg')";
    }

    function MouseOver4() {
        document.getElementById("setting").style.color ="rgba(250, 7, 7, 0.377)";
        document.getElementById("mySidenav").style.backgroundImage =
            "url('https://media.karousell.com/media/photos/products/2020/6/28/original_lv_bags_1593345516_b2098bf5.jpg')";
    } 
    
    function MouseOver5(){
        document.getElementById("setting").style.color ="rgba(250, 7, 7, 0.377)";
        document.getElementById("setting").style.color ="rgb(245, 3, 3)";
    }

    function MouseOut() {
        document.getElementById("mySidenav").style.backgroundImage =
            "url('https://i.pinimg.com/originals/3c/bb/8a/3cbb8a7b1f7758ea1eb53ce03eadd36a.gif')";
            
        document.getElementById("setting").style.color ="white";
    }
    var count = 0;

    function openNav() {
        document.getElementById("mySidenav").style.width = "280px";
        document.getElementById("main").style.marginLeft = "280px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
    setInterval(function() {
        var w = window.innerWidth;
        if (w > 759) {
            count = 0;
            openNav();
        } else {
            if (count == 0) {
                closeNav();
                count++;
            }
        }
    }, 500);
    const tbody=document.querySelector("tbody");
    var Bill=0;
    var quantity=0;
    function addtocart(productPrice,productName){
        quantity++;
        const ProductPrice=productPrice;
        const ProductName=productName; 
        Bill=Bill+ProductPrice;
        document.getElementById("quantityAmount").value = quantity;
        document.getElementById("Total_amount").innerHTML = Bill;
        alert("Added to cart.");
        tbody.innerHTML+=
        `<tr>
            <td>${quantity}</td>
            <td>${ProductName}</td>
            <td>${ProductPrice}</td>
        </tr>`;
    }
    </script>
</body>

</html>