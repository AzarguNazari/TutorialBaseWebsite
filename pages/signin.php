
<?php include "../includes/nav.php" ?>


<title>Sign In | Tutorial Base</title>
<link rel="stylesheet" href="../main.css" type="text/css" />
<link rel="stylesheet" href="../css/style.css" type="text/css" />


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
                <form action="../php_validation/signin.php" method="post" onsubmit="return(signin());">
                    <fieldset>
                        <legend>Sign In</legend>
                        <label>Email: 
                            <input name="email" class="input border" type="text" id="email" />
                            <span id="emailMessage" class="errorMessage"></span>
                        </label>
                        <label>Password: 
                            <input name="password" class="input border" type="password" id="password" />
                            <span id="passwordMessage" class="errorMessage"></span>
                        </label>
                        <br />
                        <input type="submit" class="button green third" value="Send" />
                    </fieldset>
                </form>
            </div>
        </div>

        
        <hr />
        
      
        <?php
        include '../includes/footer.php';
        ?>
</div>
   

    
  
    <script src="../javascript/script.js" type="text/javascript"></script>
    <script type="text/javascript">
        function signin() {
            var username = document.getElementById("email").value;
            if (username === null || username === "" || username.length === 0) {
                document.getElementById("emailMessage").innerHTML = "Please fill your username correctly";
                return false;
            } else {
                document.getElementById("emailMessage").innerHTML = "";
            }
            var password = document.getElementById("password").value;
            if (password === null || password === "" || username.length === 0) {
                document.getElementById("passwordMessage").innerHTML = "Please fill your password correctly";
                return false;
            } else {
                document.getElementById("passwordMessage").innerHTML = "";
            }
            return true;

        }
    </script>
</body>
</html>
