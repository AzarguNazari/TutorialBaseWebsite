

<?php include "../includes/nav.php" ?>


<title>Gallary | Tutorial Base</title>
<link rel="stylesheet" href="../main.css" type="text/css" />
<link rel="stylesheet" href="../css/gallary.css" type="text/css" />


<?php include "../includes/nav2.php" ?>



<a href="../index.php" onclick="side_close()" class="bar-item button padding text-teal">HOME</a> 
<a href="aboutme.php" onclick="side_close()" class="bar-item button padding text-teal">ABOUT ME</a> 
<a href="resume.php" onclick="side_close()" class="bar-item button padding text-teal">RESUME</a> 
<a href="contact.php" onclick="side_close()" class="bar-item button padding text-teal">CONTACT</a>
<a href="http://blog-azna.000webhostapp.com" onclick="side_close()" class="bar-item button padding text-teal">BLOG</a>
<a href="video.php" onclick="side_close()" class="bar-item button padding text-teal">VIDEO</a> 
<a href="table.php" onclick="side_close()" class="bar-item button padding text-teal">TABLE</a> 
<a href="gallary.php" onclick="side_close()" class="bar-item button padding text-teal">GALLARY</a>
<a href="feedback.php" onclick="side_close()" class="bar-item button padding text-teal">FEEDBACK FORM</a>


<?php include "../includes/nav3.php" ?>
<a href="signin.php"><button class="button black">Sign In</button></a>
<a href="register.php"><button class="button black">Register</button></a>
</div>
</div>
</div>

<h2 class="center bold">Gallary of Nature</h2>
<div class="container gallary">
    <div class="row center" id="screen">

        <div class="content display-container">
          <img class="mySlides" src="../images/gallary/1.jpg" alt="1"  style="width:100%" />
          <img class="mySlides" src="../images/gallary/2.jpg" alt="2"  style="width:100%" />
          <img class="mySlides" src="../images/gallary/3.jpg" alt="3" style="width:100%" />
          <img class="mySlides" src="../images/gallary/4.jpg" alt="4" style="width:100%" />
          <img class="mySlides" src="../images/gallary/5.jpg" alt="5" style="width:100%" />
          <img class="mySlides" src="../images/gallary/6.jpg" alt="6" style="width:100%" />
          <img class="mySlides" src="../images/gallary/7.jpg" alt="7" style="width:100%" />
          <img class="mySlides" src="../images/gallary/8.jpg" alt="8" style="width:100%" />
          <img class="mySlides" src="../images/gallary/9.jpg" alt="9" style="width:100%" />
          <img class="mySlides" src="../images/gallary/10.jpg" alt="10" style="width:100%" />
          <img class="mySlides" src="../images/gallary/11.jpg" alt="11" style="width:100%" />
          <img class="mySlides" src="../images/gallary/12.jpg" alt="12" style="width:100%" />
          <button class="button green" style="width:80px" onclick="plusDivs(-1)">&#10094;</button>
          <button class="button green" style="width:80px" onclick="plusDivs(1)">&#10095;</button>
        </div>
    </div>
    <br />
    <div class="row-padding">
        <div class="col s4 l2 m2">
            <img src="../images/gallary/1small.jpg" onclick="change(1)" class="round" alt="1.jpg" />
        </div>
        <div class="col s4 l2 m2">
            <img src="../images/gallary/2small.jpg" class="round" onclick="change(2)" alt="2.jpg" />
        </div>
        <div class="col s4 l2 m2">
            <img src="../images/gallary/3small.jpg" class="round" onclick="change(3)" alt="3.jpg" />
        </div>
        <div class="col s4 l2 m2">
            <img src="../images/gallary/4small.jpg" class="round" onclick="change(4)" alt="4.jpg" />
        </div>
        <div class="col s4 l2 m2">
            <img src="../images/gallary/5small.jpg" class="round" onclick="change(5)" alt="5.jpg" />
        </div>
        <div class="col s4 l2 m2">
            <img src="../images/gallary/6small.jpg" class="round" onclick="change(6)" alt="6.jpg" />
        </div>
    </div>
    <div class="row-padding">
        <div class="col s4 l2 m2">
            <img src="../images/gallary/7small.jpg" class="round" onclick="change(7)" alt="7.jpg" style="width:100%" />
        </div>
        <div class="col s4 l2 m2">
            <img src="../images/gallary/8small.jpg" class="round" onclick="change(8)" alt="8.jpg" style="width:100%" />
        </div>
        <div class="col s4 l2 m2">
            <img src="../images/gallary/9small.jpg" class="round" onclick="change(9)" alt="9.jpg" style="width:100%" />
        </div>
        <div class="col s4 l2 m2">
            <img src="../images/gallary/10small.jpg" class="round" onclick="change(10)" alt="10.jpg" style="width:100%" />
        </div>
        <div class="col s4 l2 m2">
            <img src="../images/gallary/11small.jpg" class="round" onclick="change(11)" alt="11.jpg" style="width:100%" />
        </div>
        <div class="col s4 l2 m2">
            <img src="../images/gallary/12small.jpg" class="round" onclick="change(12)" alt="12.jpg" style="width:100%" />
        </div>

    </div>
</div>



<?php
include "../includes/footer.php";
?>
</div>


<script src="../javascript/script.js" type="text/javascript"></script>
<script type="text/javascript" src="../javascript/slideShow.js"></script>
</body>
</html>
