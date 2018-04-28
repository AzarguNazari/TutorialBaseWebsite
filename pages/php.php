
<?php include "../includes/nav.php" ?>


<title>PHP Tutorials</title>
<link rel="stylesheet" href="../main.css" type="text/css" />
<link rel="stylesheet" href="../css/table.css" type="text/css"/>



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



        
        <table width="100%">
            <caption>Tutorial Content</caption>
            <colgroup>
                <col span="1" />
                <col span="1" />
                <col span="1" />
            </colgroup>
            <thead>
                <tr>
                    <th>#</th>
                    <th scope="col">Topic</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td><a href="#lesson1">Introduction to PHP</a></td>
                    <td>In this video you will learn what is PHP?</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td><a href="#lesson2">Installation XAMP part 1</a></td>
                    <td>In this video you will learn how to install XAMP server on your local machine</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td><a href="#lesson3">Installation XAMP part 1</a></td>
                    <td>In this video you will learn how to install XAMP server on your local machine</td>
                </tr>
                <tr>
                    <th>4</th>
                    <td><a href="#lesson4">Creating your first PHP page</a></td>
                    <td>In this video you will learn how to create your basic PHP web page</td>
                </tr>
            </tbody>
        </table>


        <div class="row">
            <div class="quarter container"></div>
            <div class="half">
                <div class="row">
                    <h2 class="center">PHP Tutorials</h2>
                    <div class="col container"> 
                        <object  width="560" height="315" id="lesson1">
                            <param name="movie" value="https://www.youtube.com/embed/iCUV3iv9xOs"></param>
                            <param name="allowFullScreen" value="true"></param>
                            <embed width="100%" height="349" src="https://www.youtube.com/embed/iCUV3iv9xOs"/>
                        </object>
                        <hr />
                        <object  width="560" height="315" id="lesson2">
                            <param name="movie" value="https://www.youtube.com/embed/k6ZiPqsBvEQ"></param>
                            <param name="allowFullScreen" value="true"></param>
                            <embed width="100%" height="349" src="https://www.youtube.com/embed/k6ZiPqsBvEQ"/>
                        </object>
                        <hr />
                        <object  width="560" height="315" id="lesson3">
                            <param name="movie" value="https://www.youtube.com/embed/F0epWxZDlOk"></param>
                            <param name="allowFullScreen" value="true"></param>
                            <embed width="100%" height="349" src="https://www.youtube.com/embed/F0epWxZDlOk"/>
                        </object>
                        <hr />
                        <object  width="560" height="315" id="lesson4">
                            <param name="movie" value="https://www.youtube.com/embed/7NuTyB8Ypxc"></param>
                            <param name="allowFullScreen" value="true"></param>
                            <embed width="100%" height="349" src="https://www.youtube.com/embed/7NuTyB8Ypxc"/>
                        </object>
                        <hr />
                    </div>
                    <div class="rest container"></div>
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
