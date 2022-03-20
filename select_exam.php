<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
 
 //it makes this page unaccessable without username and password

if (!isset($_SESSION['ID'])) {
	header("Location:login.php");
	exit();
}

?>

<?php 
include('connection.php');
?>
    

 <html>
	 <head>
		 <link rel="stylesheet" href="css/style9.css">
	 </head> <head>
        <title>
            Select Exam
        </title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet"> 
        <script src="https://kit.fontawesome.com/fe41504480.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style9.css"> 
    </head>
    <body>
        <section class='header'> 
            <div class="header1">
                <h1>Select Exam </h1>
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
 <br>


<form method ="post" action ="dashboard.php">
	 	
	 	<select class="form-control" id="" name="cat" required  style="width:30%; margin-top:3%; 
		 padding:1%; margin-bottom:10px; margin-left:10px;">
	 		<!--Select Box for Showing Options-->
	<option  value="">select category</option>
	<?php
$select_category="SELECT * FROM tblcategory ORDER BY subject";
$res=mysqli_query($conn,$select_category);
if(mysqli_num_rows($res)>0){
	while($rs=mysqli_fetch_assoc($res)){
		//$cat[]=$rs;
		

		//$category=$_POST['cat'];
		

		if (!in_array($rs['id'], $USER_GIVEN_ANS))
			/*
				Passing above array Which is containing user's already answerd category so user will not see same category becase of above function
			*/
  {
                 
 
		
		?>

		<option value='<?php echo $rs['id'];?>' id=""><?php echo $rs['chapter_name'];?>
		<!--Showing Category in Select Box-->
			
		</option>
<?php
	}


}


}
?> </select> <!--End of Select box-->
<br>
	<input type="submit" name="submit" class="btn btn-primary">
	
	 </form>



</body>
</html>

