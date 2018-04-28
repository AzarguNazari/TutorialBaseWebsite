<?php include "./includes/nav.php" ?>
<title>Tutorial Base</title>
<link rel="stylesheet" href="main.css" type="text/css" />
        
    <style type="text/css">
        .tutorials a{
            text-decoration: none;
        }
        .tutorials h2{
            font-size: 18px;
            font-weight: bold;
        }
        .tutorials img {
            border-bottom: 1px solid #ddd;
        }
    </style>
    
    
 
    <?php include "./includes/nav2.php" ?>
                
                <a href="index.php" onclick="side_close()" class="bar-item button padding text-teal">HOME</a> 
                <a href="pages/aboutme.php" onclick="side_close()" class="bar-item button padding text-teal">ABOUT ME</a> 
                <a href="pages/resume.php" onclick="side_close()" class="bar-item button padding text-teal">RESUME</a> 
                <a href="pages/contact.php" onclick="side_close()" class="bar-item button padding text-teal">CONTACT</a>
                <a href="http://blog-azna.000webhostapp.com" onclick="side_close()" class="bar-item button padding text-teal">BLOG</a>
                <a href="pages/video.php" onclick="side_close()" class="bar-item button padding text-teal">VIDEO</a> 
                <a href="pages/table.php" onclick="side_close()" class="bar-item button padding text-teal">TABLE</a> 
                <a href="pages/gallary.php" onclick="side_close()" class="bar-item button padding text-teal">GALLARY</a>
                <a href="pages/feedback.php" onclick="side_close()" class="bar-item button padding text-teal">FEEDBACK FORM</a>

                
             
           <?php include "./includes/nav3.php" ?>
                        <a href="pages/signin.php"><button class="button black">Sign In</button></a>
                        <a href="pages/register.php"><button class="button black">Sign Out</button></a>
                    </div>
                </div>
            </div>




    
            <div class="row-padding">
                <div class="col s6 m3 l3 container margin-bottom tutorials">
                    <div class="container white center hover-opacity">
                        <h2>
                            <a href="pages/css.php">
                                <img src="images/css3.png" alt="CSS 3" width="100%" />
                                CSS3 Tutorial</a>
                        </h2>
                    </div>
                </div>
                <div class="col s6 m3 l3 container margin-bottom tutorials">
                    <div class="container white center hover-opacity">
                        <h2>
                            <a href="pages/html5.php">
                                <img src="images/html5.png" alt="HTML 5" width="100%"  />
                                HTML5 Tutorial
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="col s6 m3 l3 container margin-bottom tutorials">
                    <div class="container white center hover-opacity">
                        <h2>
                            <a href="pages/javascript.php">
                                <img src="images/javascript.png" alt="Javascript" width="100%" />
                                JavaScript Tutorial
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="col s6 m3 l3 container margin-bottom tutorials">
                    <div class="container white center hover-opacity">
                        <h2>
                            <a href="pages/jquery.php">
                                <img src="images/jquery.png" alt="jQuery" width="100%" />
                                Jquery Tutorial
                            </a>
                        </h2>
                    </div>
                </div>
            </div>

            <!-- First Photo Grid-->
            <div class="row-padding">
                <div class="col s6 m3 l3 container margin-bottom tutorials">
                    <div class="container white center hover-opacity">
                        <h2>
                            <a href="pages/angular.php">
                                <img src="images/angular.jpg" alt="AngularJS" width="100%" />
                                AngularJS Tutorial
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="col s6 m3 l3 container margin-bottom tutorials">
                    <div class="container white center hover-opacity">
                        <h2>
                            <a href="pages/bootstrap.php">
                                <img src="images/bootstrap.png" alt="Bootstrap" width="100%" />
                                Bootstrap Tutorial
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="col s6 m3 l3 container margin-bottom tutorials">
                    <div class="container white center hover-opacity">
                        <h2>
                            <a href="pages/php.php">
                                <img src="images/php.png" alt="PHP" width="100%" />
                                PHP Tutorial
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="col s6 m3 l3 container margin-bottom tutorials">
                    <div class="container white center hover-opacity">
                        <h2>
                            <a href="pages/react.php">
                                <img src="images/react.png" alt="React" width="100%" />
                                ReactJS Tutorial
                            </a>
                        </h2>
                    </div>
                </div>
            </div>


            <!-- Pagination -->
            <div class="center padding-32">
                <div class="bar">
                    <a href="#" class="bar-item button hover-black">«</a>
                    <a href="#" class="bar-item black button">1</a>
                    <a href="#" class="bar-item button hover-black">2</a>
                    <a href="#" class="bar-item button hover-black">3</a>
                    <a href="#" class="bar-item button hover-black">4</a>
                    <a href="#" class="bar-item button hover-black">»</a>
                </div>
            </div>

            
           
            <?php include "./includes/footer.php" ?>
</div>
        <script src="javascript/script.js" type="text/javascript"></script>
</body>
</html>