<html>
    <head> 
        <meta name = 'viewport' content="with=device-width, initial-scale=1.0">
        <title>Cohérence </title>
        <link rel="stylesheet" href="css/style.css"> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <script src="https://kit.fontawesome.com/fe41504480.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    </head> 
    <body>
        <section class='header'> 
            <nav>
                <a href="index.html"><img src="css/images/logo1.png"></a>
               <div class="nav-links" id="navLinks"> 
                <i class="fas fa-times" onclick="hideMenu()"></i>
                   <ul>
                       <li><a href="index.php">HOME</a></li> 
                       <li><a href="student_hub.php">STUDENT HUB</a></li>  
                       <li><a href="analytics.php">HISTORY</a></li> 
                       <li><a href="aboutUs.php">ABOUT US</a></li>
                       
                   </ul>
               </div> 
               <i class="fa fa-bars" onclick="displayMenu()"></i>
            </nav> 
            <div class="textbox">
        <h1>Cohérence, in the pursuit of excellence.</h1>
        <p>
           We are what we repeatedly do.<br>
           Therefore, excellence is not an act but a habit.
        </p> 
        <a href="" class="hero-btn">Take a look around</a>
    </div>

        </section> 


<!--Javascript for the toggle menu, when application is dispalayed in a smaller screen (ie. phone, tablet)-->
    <script>
         var navLinks = document.getElementById("navLinks");
            function displayMenu()
            {
                navLinks.style.right = "0";
            }
            /* when I click on the hide menu icon, it doesn't close smoothly. Fix it!*/
            function hideMenu()
            {
                navLinks.style.right = "-200px";
            }
    </script> 
<!---------------------------------------Ends here----------------------------------------------------------> 


<!---------------------------------------Welcome---------------------------------------------------------->  


<section class= "promise">
    <h1>Welcome to Cohérence</h1>
    <p>
        Somaliland's first fully digitalised examination system.
    </p> 
    <div class="row">
        <div class="promise-col">
           
            <div>
                <p>
                    Ut pulsi recurrant? Quae iam oratio non a philosopho aliquo, 
                sed a censore opprimenda est. Eaedem res maneant alio modo. 
                Sin aliud quid voles, postea. Quicquid porro animo cernimus, 
                id omne oritur a sensibus; Ergo adhuc, quantum equidem intellego, 
                causa non videtur fuisse mutandi nominis. 
                </p>
            </div>
        </div>

        <div class="promise-col">
            <div>
                <p>
                    Ut pulsi recurrant? Quae iam oratio non a philosopho aliquo, 
                sed a censore opprimenda est. Eaedem res maneant alio modo. 
                Sin aliud quid voles, postea. Quicquid porro animo cernimus, 
                id omne oritur a sensibus; Ergo adhuc, quantum equidem intellego, 
                causa non videtur fuisse mutandi nominis. 
                </p>
            </div>
        </div>
    </div>
</section> 

<!---------------------------------------Ends here---------------------------------------------------------->   


<!---------------------------------------our services----------------------------------------------------------> 
<section class="our-services">
    <h1>Our Services</h1>
    <p>
        We offer a few but extremely important services that will help you succeed academically.  
    </p> 
    <div class="row">
        

        <div class="our-services-col">
            <h3>Sports Accomodations</h3>
            <p>Ut pulsi recurrant? Quae iam oratio non a philosopho aliquo, 
                sed a censore opprimenda est. Eaedem res maneant alio modo. 
                Sin aliud quid voles, postea.
            </p>

        </div>

        <div class="our-services-col">
            <h3>Delectable and Healthy Nutrition</h3>
            <p>Ut pulsi recurrant? Quae iam oratio non a philosopho aliquo, 
                sed a censore opprimenda est. Eaedem res maneant alio modo. 
                Sin aliud quid voles, postea.
            </p>

        </div>
    </div>
</section>

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