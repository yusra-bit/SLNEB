<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 


include('connection.php');
//$username=$_SESSION["username"];

?>
<?php include('templates/header.php');
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">STUDENT'S PAGE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="select_exam.php">Select Exam</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="analytics.php">My Results</a>
        </li>
        
      </ul>
      <div class="dropdown" >
      <span class="navbar-text">
     



  <a class="btn text-secondary dropdown-toggle"  href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
  Welcome, <?php echo ucwords($_SESSION['USER']); ?>

  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" >

    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
  </ul>

      </span>
    </div>
  </div></div>
</nav>

    
    
</body>
</html>




