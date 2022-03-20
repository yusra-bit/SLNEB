<?php
include('connection.php');
$ID=$_GET['id'];
//echo $QuestionID;
?>
<?php
$delete_question="DELETE FROM tblmcq WHERE id='".$ID."'";
$query_result=mysqli_query($conn,$delete_question);

if($query_result!=true){

	die('failed to delete question');
}
else{

	//echo"Deleted";
	header('location:questions_list.php?status=Question_Deleted');
}



?>
