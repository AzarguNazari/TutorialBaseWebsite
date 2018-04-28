
<?php include "../includes/nav.php" ?>


<title>Contact Us | Tutorial Base</title>
<link rel="stylesheet" href="../main.css" type="text/css" />

<style type="text/css">
    #contact fieldset{
        font-size: 18px;
    }
    #contact legend{
        text-align: center;
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
            <div class="col m4 l4 s12" id="contact">
                <form action="" onsubmit="return(contact());">
                    <fieldset>
                        <legend>Contact</legend>
                        <label>Email: 
                            <input name="email" class="input border" type="text" id="email" />
                            <span id="emailMessage" class="errorMessage"></span>
                        </label>
                        <label>
                            Subject: 
                            <input class="input border" type="text" id="subject" />
                            <span id="subjectMessage" class="errorMessage"></span>
                        </label>
                        <label>Message 
                            <textarea class="input border" cols="30" rows="10" id="message"></textarea>
                        </label>
                        <input type="submit" class="button green third" value="Send" />
                    </fieldset>
                </form>
            </div>
            <div class="col m4 l4 s12">
                <h2 class="center">Our Contact Email</h2>
                <div id="printEmail">
                    
                </div>
            </div>
        </div>

        
        
        
    
        <?php
        include '../includes/footer.php';
        ?>
    </div>



    <script src="../javascript/script.js" type="text/javascript"></script>
    <script type="text/javascript" src="../javascript/validation.js"></script>
    <script type="text/javascript" src="../javascript/email.js" ></script>
</body>
</html>
