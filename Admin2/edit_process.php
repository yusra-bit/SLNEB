<?php
include('connection.php');
extract($_POST);
$que=ucfirst($_POST['questions']);
$QuestionID=$_POST['id'];
$category_id=$_POST['categoryid'];
//echo $category_id;

//die;



if(empty($category_id)){
	echo"can not be blank";
}
if(empty($que)){
	echo"can not be blank";
}
if(empty($QuestionID)){
	echo"can not be blank";
}

	else{

		$update_question="UPDATE tblmcq SET questions='$questions',opt1='$opt1',opt2='$opt2',opt3='$opt3',opt4='$opt4',answer='$ans',category_id='$category_id' WHERE id='".$QuestionID."' ";
		$update_result=mysqli_query($conn,$update_question);
		if($update_result!=true){
			die('failed to insert');
		}
		else{
			header('location:questions_list.php?status=updated');
			//echo"Updated Successfully";
		}



	}













?>
