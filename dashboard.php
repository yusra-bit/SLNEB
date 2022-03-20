<?php
session_start();
include('templates/header.php');
ob_start();

if(isset($_POST['logout'])){
	
	header("location:index.php");
}
include('connection.php');
error_reporting(0);

$category=$_POST['cat'];
$_SESSION['cat']=$category;
$test = $_SESSION['cat'];

/*
==============================================================================

*/
 $sql = "SELECT count(id) as id FROM tblmcq WHERE category_id='".$_SESSION['cat']."'";
$max = mysqli_query($conn, $sql);
if(mysqli_num_rows($max)>0){
$Total_value=mysqli_fetch_assoc($max);


// $Total_value['Que_id'].'<br>';
$random = rand(1, $Total_value['id']);
//echo $random;


} 

?>

  

<?php
$select_category="SELECT chapter_name FROM tblcategory WHERE id='".$_SESSION['cat']."'";

$catres=mysqli_query($conn,$select_category);
if(mysqli_num_rows($catres)>0){

	$YourCATEGORY=mysqli_fetch_assoc($catres);	

	$YourCATEGORY['chapter_name'];
	$_SESSION['selected_cat']=$YourCATEGORY['chapter_name'];

}


?>	

<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" type="text/css" href="css/style10.css" class="">
		<div class="container-fluid">
</head> 
<body>
	<section class='header'>
		<div class='header1'>
			<h1> Exam </h1>
		</div>
		 <nav>
                <div class="nav-links" id="navLinks">
                   
                    <ul>
                         <li><a href="index.php">HOME</a></li> 
                        <li><a href="student_hub.php">STUDENT HUB</a></li>  
                        <li><a href="analytics.php">ANALYTICS</a></li> 
                        <li><a href="aboutUs.php">ABOUT US</a></li>
                        <li><a href="logout.php">LOGOUT  @<?php echo ucwords ($_SESSION['USER']); ?><a></li>
                    </ul>
                </div> 
            </nav> 
        </section> 	
		<hr>
<br>
			
				<div class="box">
				<p class="catname">Selected Category:	
			       <span style="color:black; font-weight:bold"> <?php echo $YourCATEGORY['chapter_name'];?></span></p>
				</div>
				<br><br>
		
        <div class="container">
				<!--Start of Container-->

				<br>
<?php

//Fetching Questions In Random Manner 
 $select_que="SELECT * FROM tblmcq WHERE category_id='".$test."' order by  rand()";
$res=mysqli_query($conn,$select_que);
$i=1;
if(mysqli_num_rows($res)>0){
	while($rs=mysqli_fetch_assoc($res)){
		$quest['questions']=$rs;
		//print_r($rs);
//die;
		?>

	<!--==============================================================================-->
		
		<form action="results.php" method="post" id="quiz" >
<!--Form Starts Here-->

<!--Fetching Questions in Table -->

			<table class="table table-bordered table-responsive" id="mytable">
				<!--Table Starts Here-->
		<thead>
			<!--Start of Table Header-->
		  <tr class="primary">
			<th>

			<?php echo $i;?>&nbsp;)&nbsp;<?php echo $rs['questions'];?>
				
			</th>
			<!--
				       ECHOING QUESTION ON TABLE HEADER
==============================================================================
			-->				
		  </tr>
		</thead>
							<!--END OF TABLE HEAD-->
<!--
=============================================================================
-->							
		<tbody>
			<!--START OF TABLE BODY-->
			<?php if (isset($rs['opt1'])) {?>
		  <tr class="info">
			<td>&nbsp;A) &nbsp;<input type="radio" value="<?php echo $rs['opt1'];?>"  name="<?php echo $rs['id'];?>"  />&nbsp<?php echo $rs['opt1'];?></td>
		</tr >
		<?php } ?>
		<!--
			                    ECHOING FIRST OPTION
=============================================================================																
		-->

		<?php if (isset($rs['opt2'])) {?>
		  <tr class="info">
			<td>&nbsp;B) &nbsp;<input type="radio" value="<?php echo $rs['opt2'];?>"  name="<?php echo $rs['id'];?>"  />&nbsp<?php echo $rs['opt2'];?></td>
			</tr >
		<?php } ?>

		<!--
			             ECHOING SECOND OPTION
=============================================================================
		-->

		<?php if (isset($rs['opt3'])) {?>
		  <tr class="info">
			<td> &nbsp;C) &nbsp;<input type="radio" value="<?php echo $rs['opt3'];?>" name="<?php echo $rs['id'];?>"  />&nbsp<?php echo $rs['opt3'];?></td>
			</tr >
		<?php } ?>
<!--
	                       ECHOING THIRD OPTION
==============================================================================
-->

				<?php if (isset($rs['opt4'])) {?>
		  <tr class="info">
			<td>&nbsp;D) &nbsp;<input type="radio" value="<?php echo $rs['opt4'];?>"  name="<?php echo $rs['id'];?>"  />&nbsp<?php echo $rs['opt4'];?></td>
			</tr >
		<?php } ?>
		<!--
			               ECHOING FOURTH OPTION
==============================================================================
		-->
		
		<input type="radio" value="<?php echo "no_answer";?>"checked="checked" style="display:none;" name="<?php echo $rs['id'];?>"  />
		
<!--
	Above code is used When user not attempt any answer so it takes NULL value from our table and count this at no answer varaible
=====================================================================================================================================
-->	
		

		
	  <?php 

	  $i++;
	  //i will iterat untill it will get questions
	}
	?>
	<?php }?>

	
		
</tbody>
<!--END OF TABLE BODY-->
	  </table>
	<center><input type="submit"  id="submit" value="Submit Quiz" class="btn btn-dark"/></center>
	<!--End of Form-->
</form>
<a id="back2Top" title="Back to top" href="#" style="float: right;"><img src="https://img.icons8.com/material-outlined/48/000000/up.png"/>
</a>

   <!--
==============================================================================
   -->
</div>
<!--End Of Container-->
</div>
<!--End Of Container-Fluid-->
<!--
=============================================================================
-->


</body>
<!--

==============================================================================
				SCRIPT STARTS FOR MAKING TableData CLICKABLE
-->
<script type="text/javascript">
  	/*
		this script is used for making whole td clickable  
  	*/
  	$('.table tbody tr td').click(function(event) {
  if(event.target.type !== 'radio') {
    $(':radio', this).trigger('click');
  }
});
  </script>
  <!--
==============================================================================
  -->
</html>
