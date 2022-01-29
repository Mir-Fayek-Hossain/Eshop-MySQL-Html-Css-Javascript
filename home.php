<?php
session_start();
?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

<style>
body {
    background-color: white;
    height: 100vh;
}

.row-row {
    width:33.3%;
    height: 500px;
    background-position: center;
    background-size: cover;
}

#avatarImage {
    width: 1px;
    visibility: hidden;
}

#gallery_button {
    background-image: url("https://www.phoca.cz/images/projects/phoca-gallery-r.png");
    background-position: center;
    background-size: cover;
    border-radius: 50%;
    border: 2px solid white;
    cursor: pointer;
    height: 70px;
    width: 70px;
}

.d-flex {
    margin: 20px;
}

img {
    border-radius: 50%;
}

.comment_section {
    margin: 5% 0 5% 0;
    padding: 5%;
    border-radius: 5%;
    background-color: indianred;
}

.img_option {
    background-color: transparent;
    padding: 20px;
    transition: 0.5s;
    cursor: pointer;
    border: none;
}

hr {
    border: 1px solid black;
}

.img_option:hover {
    background-size: cover;
    background-position: center;
    background-image: url("https://i.pinimg.com/originals/ef/d8/68/efd86898401b7d5c942ff1739c6d894a.gif");
}
#typewriter{
  font-size: 2.8vw;
}
@media screen and (max-width: 760px) {
    .row-row{
        height: 200px;
    }
}
</style>


<div class="tcontainer">
    <div class="ticker-wrap">
        <div class="ticker-move">
            <div class="ticker-item">
                <h3 style="font-size:25px; font-family: 'Times New Roman', Times, serif; ">Vogue is an American monthly fashion and
                    lifestyle magazine covering many topics, including fashion, beauty, culture, living, and runway.
                    Based in New York City, it began as a weekly newspaper in 1892, before becoming a monthly magazine
                </h3>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div style="background-image:url('https://media.voguebusiness.com/photos/5f68a8073661730efbaa01ee/2:3/w_2560%2Cc_limit/vogue-singapore-voguebus-vogue-singapore-sep-20-story.gif');"
            class="row-row">
        </div>
        <div class="row-row">
            <h2 id="typewriter">
            </h2>
        </div>
        <div style="background-image:url('https://assets.vogue.com/photos/5c9841d95c8e5f02711e9a16/3:4/w_645,h_860,c_limit/00-NEW-BELLACOVER-FINAL.gif');"
            class="row-row">
        </div>
    </div>
</div>
<!-- Button trigger modal -->
<div class="container">
    <div class="comment_section">
        <h3>You can give us your valuable thoughts here !</h3>
        <?php 
            $con=mysqli_connect('localhost','root','');
            mysqli_select_db($con,'userregistration');
            $sql="SELECT * from comment";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
            if( $num>0){
                while($row=mysqli_fetch_assoc($result)){
            ?>
            <img src=
            "<?php
                echo $row['img']
            ?>"
            alt="" height="60px">
            <br>
            <div class="media-body">
                <h5 style="font-size:25px;">
                    <?php
                        echo $row['uname']
                    ?>
                    <small style="font-size:15px;"><i style="color:black;Opacity:.6;">Posted on 
                    <?php
                        echo $row['time']
                    ?>
                    </i></small></h5>
                    <p style="font-size:19px;">
                    <?php
                    // for addinf edit comment stuf
                    // if(isset($_SESSION['username'])){
                    //     echo"bbbb";
                    // }
                        echo $row['cmnt']
                    ?>
                    </p>
            </div>
            <hr>
            <?php
                }
            }
            ?>
        <form id="myform" action="comment.php" method="POST">
            <div style="display: flex; border: none;">
                <!-- Button trigger modal -->
                <div id="gallery_button" data-toggle="modal" data-target="#avatars">
                </div>
                <input type="text" class=" m-3 form-control p5"style="font-size:15px;" name="pass" placeholder="write a comment...">   
                <input type="text" id="avatarImage" name="image" value="7.jpg">
            </div>
            <br>
            <input type="submit" onclick="changeContent()" id="submit" name="submit" value="Submit"
                class="btn btn-info pull-right submit" style="float: right;">
            <br>
        </form>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="avatars" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #384B5F;border: 2px solid white;">
            <div class="d-flex justify-content-around">
                <button class="img_option " onclick="img_opt(1)">
                    <img src="1.png" alt="" height="120px" data-dismiss="modal">
                </button>
                <button class="img_option " onclick="img_opt(2)">
                    <img src="2.png" alt="" height="120px" data-dismiss="modal">
                </button>
                <button class="img_option " onclick="img_opt(3)">
                    <img src="3.png" alt="" height="120px" data-dismiss="modal">
                </button>
            </div>
            <div class="d-flex justify-content-around ">
                <button class="img_option " onclick="img_opt(4)">
                    <img src="4.png" alt="" height="120px" data-dismiss="modal">
                </button>
                <button class="img_option " onclick="img_opt(5) ">
                    <img src="5.png" alt=" " height="120px " data-dismiss="modal">
                </button>
                <button class="img_option " onclick="img_opt(6)">
                    <img src="6.png" alt="" height="120px" data-dismiss="modal">
                </button>
            </div>
        </div>
    </div>
</div>
<script>
var i = 0;
var txt =
    'Fashion refers to anything that becomes a rage among the masses. Fashion is a popular aesthetic expression. Most Noteworthy, it is something that is in vogue. Fashion appears in clothing.';
function typeWriter() {
    if (i < txt.length) {
        document.getElementById("typewriter").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, 200);
    }
}
window.onscroll = function() {
    setTimeout(function() {
        typeWriter()
    }, 500);
};
var img = "";
function img_opt(x) {
    if (x == 1) {
        img = "url(1.png)";
    } else if (x == 2) {
        img = "url(2.png)";
    } else if (x == 3) {
        img = "url(3.png)";
    } else if (x == 4) {
        img = "url(4.png)";
    } else if (x == 5) {
        img = "url(5.png)";
    } else if (x == 6) {
        img = "url(6.png)";
    } else{
        img = "url(7.jpg)";
    }
    document.getElementById("gallery_button").style.backgroundImage = img;
    var ret = img.replace('url(', '');
    img = ret.replace(')', '');
    document.getElementById('avatarImage').value = img;
}
</script>
<script>
$(document).ready(function() {
    var form = $('#myform');
    $('#submit').click(function() {
        $.ajax({
            url: form.attr("action"),
            type: 'post',
            data: $("#myform tesxtarea").serialize(),
            success: function(data) {
                alert("Thank you for your valuable thought.");
            }
        });
    });
});
</script>