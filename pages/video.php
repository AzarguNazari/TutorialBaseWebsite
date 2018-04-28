
<?php include "../includes/nav.php" ?>


<title>Vidoes | Tutorial Base</title>
<link rel="stylesheet" href="../main.css" type="text/css" />


<style type="text/css">
    .container .row{
        width: 100%;
    }
    .container .col{
        width: 50%;
        padding: 5px;
    }
    .container object{
        width: 100%; 
    }
</style>


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


            
            
          
        <div class="container">
            <div class="row">
                <div class="col s12 l6 m6">
                    <object width="50%" height="300">
                        <param name="movie" value="https://www.youtube.com/embed/6lt2JfJdGSY"></param>
                        <param name="allowFullScreen" value="true"></param>
                        <embed width="100%" height="349" src="https://www.youtube.com/embed/6lt2JfJdGSY"/>
                    </object>
                </div>
                <div class="col s12 l6 m6">
                    <object  width="50%" height="300">
                        <param name="movie" value="https://www.youtube.com/embed/XhHCcH7hyqo"></param>
                        <param name="allowFullScreen" value="true"></param>
                        <embed width="100%" height="349" src="https://www.youtube.com/embed/XhHCcH7hyqo"/>
                    </object>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l6 m6">
                    <object  width="50%" height="300">
                        <param name="movie" value="https://www.youtube.com/embed/mg67iIFivDo"></param>
                        <param name="allowFullScreen" value="true"></param>
                        <embed width="100%" height="349" src="https://www.youtube.com/embed/mg67iIFivDo"/>
                    </object>
                </div>
                <div class="col s12 l6 m6">
                    <object  width="50%" height="300">
                        <param name="movie" value="https://www.youtube.com/embed/iDUkQEXOWLA"></param>
                        <param name="allowFullScreen" value="true"></param>
                        <embed width="100%" height="349" src="https://www.youtube.com/embed/iDUkQEXOWLA"/>
                    </object>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l6 m6">
                    <object  width="50%" height="300">
                        <param name="movie" value="https://www.youtube.com/embed/3TIxdxT064g"></param>
                        <param name="allowFullScreen" value="true"></param>
                        <embed width="100%" height="349" src="https://www.youtube.com/embed/3TIxdxT064g"/>
                    </object>
                </div>
                <div class="col s12 l6 m6">
                    <object  width="50%" height="300">
                        <param name="movie" value="https://www.youtube.com/embed/lEP40IzYRfg"></param>
                        <param name="allowFullScreen" value="true"></param>
                        <embed width="100%" height="349" src="https://www.youtube.com/embed/lEP40IzYRfg"/>
                    </object>
                </div>
            </div>
        </div>

            
          
        <?php
        include '../includes/footer.php';
        ?>
</div>

    
  
    <script src="../javascript/script.js" type="text/javascript"></script>
</body>
</html>
