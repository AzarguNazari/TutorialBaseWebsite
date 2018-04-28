
<?php include "../includes/nav.php" ?>


<title>Resume</title>
<link rel="stylesheet" href="../main.css" type="text/css" />
<link rel="stylesheet" href="../css/table.css" type="text/css"/>
<link rel="stylesheet" href="../css/print.css" type="text/css"/>


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
            <caption>Tutorials Content</caption>
            <colgroup>
                <col span="1" />
                <col span="1" />
                <col span="1" />
            </colgroup>
            <thead>
                <tr>
                    <th>#</th>
                    <th scope="col">Name</th>
                    <th scope="col">About</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td><a href="jquery.php">Jquery</a></td>
                    <td>jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td><a href="html5.php">HTML5</a></td>
                    <td>HTML5 is the latest version of Hypertext Markup Language, the code that describes web pages. It's actually three kinds of code: HTML, which provides the structure; Cascading Style Sheets (CSS), which take care of presentation; and JavaScript, which makes things happen.</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td><a href="css.php">CSS3</a></td>
                    <td>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.1. It brings a lot of long-awaited novelties, like rounded corners, shadows, gradients, transitions or animations, as well as new layouts like multi-columns, flexible box or grid layouts.</td>
                </tr>
                <tr>
                    <th>4</th>
                    <td><a href="javascript.php">Javascript</a></td>
                    <td>JavaScript is a programming language used to make webpages interactive. It is what gives a page life—the interactive elements and animation that engage a user.</td>
                </tr>
                <tr>
                    <th>5</th>
                    <td><a href="angular.php">AngularJS</a></td>
                    <td>AngularJS is a JavaScript framework. It can be added to an HTML page with a tag. AngularJS extends HTML attributes with Directives, and binds data to HTML with Expressions.</td>
                </tr>
                <tr>
                    <th>6</th>
                    <td><a href="php.php">PHP</a></td>
                    <td> PHP is a server side scripting language. that is used to develop Static websites or Dynamic websites or Web applications. PHP stands for Hypertext Pre-processor, that earlier stood for Personal Home Pages. </td>
                </tr>
                <tr>
                    <th>7</th>
                    <td><a href="react.php">ReactJS</a></td>
                    <td>React is a declarative, efficient, and flexible JavaScript library for building user interfaces. React has a few different kinds of components, but we'll start with React.Component subclasses: class ShoppingList extends React.</td>
                </tr>
                <tr>
                    <th>8</th>
                    <td><a href="bootstrap.php">Bootstrap</a></td>
                    <td>Bootstrap is a free front-end framework for faster and easier web development. Bootstrap includes HTML and CSS based design templates for typography, forms, buttons, tables, navigation, modals, image carousels and many other, as well as optional JavaScript plugins.</td>
                </tr>
            </tbody>
        </table>

          
        <?php
        include '../includes/footer.php';
        ?>
</div>

    

    <script src="../javascript/script.js" type="text/javascript"></script>
</body>
</html>
