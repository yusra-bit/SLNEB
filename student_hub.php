<?php
if(!isset($_SESSION))
{
    session_start();
}
if(!isset($_SESSION['ID'])){
    header("Location:login.php");
    exit();
}
?>
<html>
    <head>
        <title>
            STUDENT HUB
        </title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet"> 
        <script src="https://kit.fontawesome.com/fe41504480.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style4.css"> 
    </head>
    <body>
        <section class='header'> 
            <div class="header1">
                <h1>Student Hub </h1>
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
    <h2> Test Your Knowledge</h2>
    <p>This our interactive form where you can take 
        the exams and test yourself.
          </p>  
    
    <div class = "row">
        <div class = "test-yo-col">
           
            <p>All the multiple choice question are arraged in order.
                Do your best and remember this is to help you prepare, so don't stress out.
            </p> 
            <a href="select_exam.php" class = "hero-btn">Take exams</a>
        </div> 


        <h2> Check Your Stats!</h2>
        <p>This is where you check how you did over time.  
        </p> 
        <div class = "test-yo-col">
           
            <p>This is very useful when you are trying to make long term improvements.
                Because it will inspire you to do better and if you are doing great it
                reassure you that your effort are paying off. 
            </p> 
            <a href="analytics.php" class = "hero-btn">Check your numbers</a>
        </div> 
    </div>

 <!---------------------------------------Ends here---------------------------------------------------------->  

 <!---------------------------------------footer----------------------------------------------------------> 
<section class="footer">
    <h4>About Us</h4> 
    <p>
    Just two individuals who are tying to find their way, 
    and doing their best.
    </p> 
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