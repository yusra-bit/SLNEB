<?php
session_start();


if(!isset($_SESSION['ID'])){

    header("Location:login.php");
    exit();
}
?>
<?php
include('connection.php');
include('templates/header.php');


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/fe41504480.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title> 
    <link rel="stylesheet" href="css/style2.css" class="">
</head>
<body>
    <section class='header'> 
        <div class="header1">
            <h1>History </h1>
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
        
    </section> 
    <div class="table-container">
        <h2 class="table-heading"></h2>

        <table>
            <thead>
                <tr>
                    <th>No<?php $sno=0; ?></th>
                    <th>Total Questions</th>
                    <th>Percentage</th>
                    <th> Date</th>
                    <th>Chapter Name</th>
                </tr>
            </thead> 

            <?php

//$count=0;
$query="SELECT * FROM result WHERE username='$_SESSION[USER]' ORDER BY id desc";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
   while ($r=mysqli_fetch_assoc($result)){



?>

            <tbody>
                 <tr>
            <td data-heading="No"><?php echo ++$sno; ?></td>         
            <td data-heading="Total Questions"><?php echo $r['total_questions'];?></td>
            <td data-heading="Percentage"><?php echo $r['percenage']; ?>%</td>
            <td data-heading="Date"><?php echo $r['date']; ?></td>


<td data-heading="Chapter Name">
 <?php 
$sql="SELECT * FROM tblcategory WHERE id='".$r['category']."'";
$res1=mysqli_query($conn,$sql);
if(mysqli_num_rows($res1)>0){
  if($r1=mysqli_fetch_assoc($res1))
    echo $r1['chapter_name'];
}

 ?>
   </td>
      
    </tr>
<?php
}
}
?>
            </tbody>
        </table>
    </div>
</body>
</html>