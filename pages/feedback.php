
<?php include "../includes/nav.php" ?>

<title>Angular Tutorials</title>
<link rel="stylesheet" href="../main.css" type="text/css" />
<link rel="stylesheet" href="../css/table.css" type="text/css" />

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
    <div class="row">
        <div class="col s12 m4"><h1>FeedBack Form</h1></div>
        <div class="col s12 m4" id="contact">
            <form action="../php_validation/feedback1.php" method="post" onsubmit="return(feedback1());">
                <fieldset>
                    <legend>Simple Feedback</legend>
                    <label>Email: 
                        <input name="email1" class="input border" type="text" id="email1" />
                        <span id="email1Message" class="errorMessage"></span>
                    </label>
                    <br />
                    <label>Subject: 
                        <input name="subject1" class="input border" type="text" id="subject1" />
                        <span id="subject1Message" class="errorMessage"></span>
                    </label>
                    <br />
                    <label>Message: 
                        <textarea class="input border" cols="30" rows="5" name="message1" id="message1"></textarea>
                        <span id="message1Message" class="errorMessage"></span>
                    </label>
                    <br />
                    <input type="submit" class="button green third" value="Send" />
                </fieldset>
            </form>
            
            
            <form action="../php_validation/feedback2.php" method="post" onsubmit="return(feedback2());">
                <fieldset>
                    <legend>Detailed Feedback</legend>
                    <label>First Name: 
                        <input name="fname" class="input border" type="text" id="fname" />
                        <span id="fnameMessage" class="errorMessage"></span>
                    </label>
                    <br />
                    <label>Last Name: 
                        <input name="lname" class="input border" type="text" id="lname" />
                        <span id="lnameMessage" class="errorMessage"></span>
                    </label>
                    <br />
                    <label>Email: 
                        <input name="email2" class="input border" type="text" id="email2" />
                        <span id="email2Message" class="errorMessage"></span>
                    </label>
                    <br />
                    <label>Address: 
                        <input name="address" class="input border" type="text" id="address" />
                        <span id="addressMessage" class="errorMessage"></span>
                    </label>
                    <br />
                    <label>City: 
                        <input name="city" class="input border" type="text" id="city" />
                        <span id="cityMessage" class="errorMessage"></span>
                    </label>
                    <br />
                    <label>Country:
                        <select id="country" class="select" name="country">
                            <option value="afg">Afghanistan</option>
                            <option value="pak">Pakistan</option>
                            <option value="ksa">Saudi Arabia</option>
                            <option value="usa">USA</option>
                            <option value="russia">Russia</option>
                        </select>
                    </label>
                    <br />
                    <div class="row">
                        <p>Gender:</p> 
                        <div class="col s12 m12 l12">
                            <label><input type="radio" name="gender" value="male" id="male" />: Male</label>
                        </div>
                        <div class="col s12 m12 l12">
                            <label> <input type="radio" name="gender" id="famale" value="famale" />: Famale</label>
                        </div>
                        <span id="genderMessage" class="errorMessage"></span>
                    </div>
                    <br />
                    <div class="row">
                        <p>Occupation:</p> 
                        <div class="col s12 m12 l12">
                            <label> <input type="checkbox" id="programmer" name="occupation" value="programmer"/>: Programmer</label>
                        </div>
                        <div class="col s12 m12 l12">
                            <label> <input type="checkbox" id="engineer" name="occupation" value="engineer" />: Engineer</label>
                        </div>
                        <div class="col s12 m12 l12">
                            <label> <input type="checkbox" id="student" name="occupation" value="student" />: Student</label>
                        </div>
                        <span id="occupationMessage" class="errorMessage"></span>
                    </div>
                    <br />
                    <label>Subject: 
                        <input name="subject2" class="input border" type="text" id="subject2" />
                        <span id="subjec2tMessage" class="errorMessage"></span>
                    </label>
                    <br />
                    <label>Message: 
                        <textarea class="input border" cols="30" rows="5" id="message2" name="message2"></textarea>
                        <span id="message2Message" class="errorMessage"></span>
                    </label>
                    <br />
                    <input type="submit" class="button green third" value="Send" />
                </fieldset>
            </form>
        </div>
        <div class="col s12 m4"></div>
    </div>
</div>




<?php
include '../includes/footer.php';
?>
</div>



<script src="../javascript/validation.js" type="text/javascript"></script>
</body>
</html>
