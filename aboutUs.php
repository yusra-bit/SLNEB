
<?php session_start();?>
<html>
    <head>
        <title>
            About Us
        </title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet"> 
        <script src="https://kit.fontawesome.com/fe41504480.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style3.css"> 
    </head>
    <body>
        <section class='header'> 
            <div class="header1">
                <h1>About Us </h1>
            </div>
            <nav>
                <div class="nav-links" id="navLinks">
                   
                    <ul>
                        <li><a href="index.php">HOME</a></li> 
                        <li><a href="student_hub.php">STUDENT HUB</a></li>  
                        <li><a href="analytics.php">HISTORY</a></li> 
                        <li><a href="aboutUs.php">ABOUT US</a></li>
                        <li><a href="logout.php">LOGOUT  @<?php echo ucwords ($_SESSION['USER']); ?><a></li> 
                    </ul>
                </div> 
            </nav> 
        </section> 
 <!---------------------------------------Ends here---------------------------------------------------------->  

 <!---------------------------------------Test yourself----------------------------------------------------------> 
 <section class = "test">
    <h2> Hello, thank you for visiting us!</h2>
    <p>This is Cohérence an interactive website designed for high school seniors. 
        Cohérence was created in partial requirement of the degree of Software Engineering, at Abaarso Tech University.   </p>  
    
    <div class = "row">
        <div class = "test-yo-col">
            <h3>About the creators</h3> 
            <p>We are a group of two, consisting of Yusra Ahmed Abdi & Sagal Abdi Hussein. 
                We are two individuals who are fasinated by technology, how it changed the world,
                and how it will contiue to impact our lives. We went to the same high school, came to the
                same universty by chance, and became good friends. 
            </p> 
           
        </div> 


       

 <!---------------------------------------Ends here---------------------------------------------------------->  

 <!---------------------------------------footer----------------------------------------------------------> 
<section class="footer">
    
    <div class="icons">
        <i class="fab fa-instagram"></i> 
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-linkedin-in"></i>
    </div> 
    <p>Made with <i class="fas fa-heart"></i> by Yusra Ahmed & Sagal Abdi</p>

</section>


<!---------------------------------------Ends here----------------------------------------------------------> 
    </body>
</html>