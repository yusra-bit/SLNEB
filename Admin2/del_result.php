<?php
include('connection.php');
$ID=$_GET['id'];
//echo $QuestionID;
?>
<?php
$delete_question="DELETE FROM result WHERE id='".$ID."'";
$query_result=mysqli_query($conn,$delete_question);

if($query_result!=true){

	die('failed to delete result');
}
else{

	//echo"Deleted";
	header('location:results_list.php?status=Result_Deleted');
}



?>