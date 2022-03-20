<?php
session_start();
include('templates/header.php');
$_SESSION['userans']= rand(100,10000);

/*
$_SESSION['userans']= rand(10,10000)
This code will generate a random value for users ans for particular category so we can easily retrive users value for particular session
it genrates random value of seeion in DB when we want to retrive data so we will call this session varabile so we can reteive data for particular session.

*/




foreach ($_POST as $que => $answers)
{
	/*

	==============================================================
	Query for storeing users answer in our table so we can further retrive or match with ans with users ans
 
================================================================	*/



	 $insert_ans="INSERT INTO user_ans_details(username,question_id,answer,category_id,session,date)VALUES('".$_SESSION['USER']."','$que','$answers','".$_SESSION['cat']."','".$_SESSION['userans']."',CURRENT_TIMESTAMP)";
	$user_result=mysqli_query($conn,$insert_ans);

	if($user_result!=true){
		die('but why');
	}
	else{
		//echo"inserted";
	}
	

}
//print_r($_POST);
//die;
//die;



include('connection.php');
$category=$_SESSION['cat'];

/*
echo"<pre>";
print_r($_POST);
echo"</pre>";

*/



					$right=0;
			//	echo "<br>";
					$wrong=0;
				//echo "<br>";
					$no_answer=0;
				//die;
 $chk_ans="select id,answer from  tblmcq  where category_id='".$_SESSION['cat']."' ";
$res=mysqli_query($conn,$chk_ans);

if(mysqli_num_rows($res)>0){
	while($rs=mysqli_fetch_assoc($res))
	{
						/*print_r($rs['ans']);
						echo "<br>";
						echo"<pre>";
						print_r($_POST[$rs['id']]);
			
						echo"</pre>";
						*/
						

		if($rs['answer']==$_POST[$rs['id']])
								{
									//	echo "<br>";
										 $right++;

										
								}

								elseif($_POST[$rs['id']]=="no_answer")
									{
										
										 $no_answer++;

									}
									else
								{
									 $wrong++;
									
								}
								//die;
								

	}
	$array=array();


							$array['right']=$right;
							$array['wrong']=$wrong;
							$array['no_answer']=$no_answer;
							//echo"<br>";
							
							$_SESSION['Right']=$array['right'];
							$_SESSION['Wrong']=$array['wrong'];
							$_SESSION['NoANS']=$array['no_answer'];
							

	  $total =	$right + $wrong + $no_answer;

	  $per=($right*100)/($total);
		 $per."%";	
			


}

if (!isset($_SERVER['HTTP_REFERER'])){

		header("location:select_exam.php");
}





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
<body>
	<section class='header'>
		<div class='header1'>
			<h1> Result </h1>
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
        </section> 	<div class="container">
<center><h3><?php echo $_SESSION['USER']; ?>'s Result</h3>
    <div class="table-container">
        <h2 class="table-heading">Results</h2>
<table>
            <thead>
                <tr>
                    <th>Total </th>
                    <th>Correct </th>
                    <th>Incorrect </th>
					<th>Not Attempt </th>
					<th>Percentage</th>
					<th>STATUS</th>
                  
                </tr>
            </thead> 

            
              
               
            <tbody> <tr>
		<td data-heading="No"><?php echo $total ;?></td>
		<td data-heading="Correct Qs"><?php echo $right;?></td>
		<td data-heading="Incorrect Qs"><?php echo $wrong; ?></td>
		<td data-heading="Not Attempt Qs"><?php echo $no_answer; ?></td>
		<td data-heading="Percentage"><?php echo $per."%";?></td>
		<td data-heading="Status">
			<?php 
			if($per<45){

				echo"FAIL";

			} 
			else{
				echo"PASS";
			}

		

		?>
		</td>
	</tr>
		</tbody>
</table>
</center>
<?php
   $insert_res="INSERT INTO  result (username,category,total_questions,right_ans,wrong_ans,not_attempt,percenage) VALUES('".$_SESSION['USER']."','$category','$total','$right','$wrong','$no_answer','$per')";
$result=mysqli_query($conn,$insert_res);
if($result!=true){
	die('failed to insert');
}
else{
	  //echo "INSERTED SUCCESSFULLY";
}

?>

<center><a href="check_answers.php" class="btn btn-dark">Check Your Answers</a></center>

</div>



    </div>
</body>
</html>