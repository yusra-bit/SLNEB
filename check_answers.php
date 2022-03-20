<?php
session_start();
include('templates/header.php');
if (!isset($_SERVER['HTTP_REFERER'])){

	/*
		this code is preventing direct access of this page on URL if user insert user_answer.php so it will redirect to home page becaue of this function.

	*/

	header("location:select_exam.php");
}


?>



     
<?php
                    //this code is calculating the result/total
							$TOTAL=$_SESSION['Right']+$_SESSION['Wrong']+$_SESSION['NoANS'];

							$per=($_SESSION['Right']*100)/($TOTAL);
		 					$per."%";
		 					$_SESSION['percent']=$per;

		 			


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your results</title> 
    <link rel="stylesheet" href="css/style2.css" class="">
</head>
<section class='header'>
		<div class='header1'>
			<h1> Check Your Answers </h1>
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
<div class="container">
<hr>
<center><h4>Selected Chapter:<span>
<?php
$select_category="SELECT chapter_name FROM tblcategory WHERE id='".$_SESSION['cat']."'";

$catres=mysqli_query($conn,$select_category);
if(mysqli_num_rows($catres)>0){

	$YourCATEGORY=mysqli_fetch_assoc($catres);	

	echo $YourCATEGORY['chapter_name'];
	$_SESSION['selected_cat']=$YourCATEGORY['chapter_name'];
	$_SESSION['My_Category_name']=$YourCATEGORY['chapter_name'];

}


?>	
</span>

</h4>
<h4>Marks:<span>
<?php
$final_res="SELECT * FROM result WHERE category='".$_SESSION['cat']."'";
$finalRES=mysqli_query($conn,$final_res);
if(mysqli_num_rows($finalRES)>0){

	$marks=mysqli_fetch_assoc($finalRES);
	echo   $_SESSION['Right'];
	echo "/";
	echo $TOTAL;
	echo "<br><br>";
	echo "Percentage :".$per.'%';
	
	

}
else{
	die('no record found');
}

?>	
</span>
</h4>
<body>
    <div class="table-container">
        <h2 class="table-heading">Results</h2>

        <table>
            <thead>
                <tr>
                    <th>No<?php $no=1;?></th>
                    <th> Question</th>
                    <th>Your Answer</th>
                    <th class="rans">Correct Anwer</th>
                  
                </tr>
            </thead> 

            <tbody>


            <?php


$fetch_result="SELECT * FROM user_ans_details WHERE category_id='".$_SESSION['cat']."'and session='".$_SESSION['userans']."'";

/*
$_SESSION['userans'] this will store users ans for giving in this particular session

*/


$res=mysqli_query($conn,$fetch_result);

if(mysqli_num_rows($res)>0){
	while($rs=mysqli_fetch_assoc($res)){
		?>


	
	
		
		<tr>
			<td data-heading="No"><?php echo $no++; ?></td>
			
			<td data-heading="Question">

				<?php 
/*
the below query is used for retriving question value for particular question id.
*/
				$show_que="SELECT questions FROM tblmcq WHERE id='".$rs['question_id']."'";
				$RS=mysqli_query($conn,$show_que);
				if(mysqli_num_rows($RS)>0){
					while($RES=mysqli_fetch_assoc($RS)){
						echo $RES['questions'];
					}

				}
			?>
					

				</td>
			
			<?php 
/*
the below query is used for retriving question value for particular question id.

*/

				$show_que="SELECT answer FROM tblmcq WHERE id='".$rs['question_id']."'";
				$RS=mysqli_query($conn,$show_que);
				$vv ='';
				if(mysqli_num_rows($RS)>0){
					while($RES=mysqli_fetch_assoc($RS)){
						$Right_answer= $RES['answer'];

					 if($rs['answer']==$RES['answer'])
						{
							$answer_color = 'style="color:Green;"';
							
						}else{
							$answer_color = 'style="color:#FF6347;"';
}


						}
						
						
							
						
					}

				
			?>
			<td data-heading="Your Answer"<?php echo $answer_color; ?>><?php echo $rs['answer'];?></td>
		    <td data-heading="Correct Answer" <?php //echo $answer_color; ?>style="color: Black;" >
			<?php echo $Right_answer; ?></td>
		</tr>
	

		<?php

	}

?>

<?php

}

?>
</tbody>

</table>
</center><hr>



<a href="select_exam.php" class="btn btn-dark">Back To Quiz</a>

</div>
<br><br>
<!--End of Container-->













               
            
    </div>
</body>
</html>