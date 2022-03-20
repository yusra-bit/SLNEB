<?php

include('connection.php');

//error_reporting(E_ALL ^ E_NOTICE);
$question=addslashes($_POST['question']);
$opt1= $_POST['opt1'];
$opt2= $_POST['opt2'];
$opt3= $_POST['opt3'];
$opt4= $_POST['opt4'];
$ans=  $_POST['ans'];

//extract($_POST);
$que=ucfirst($_POST['question']);
$categoryid=$_POST['categoryid'];
//echo $categoryid;
/*
this is our category id like php(1), html(2) css js(3) and bootstrap(4) 

*/
if(empty($categoryid)){
	echo"can not be blank";
}
else{

 $select_que="SELECT * FROM tblmcq WHERE questions='".$que."'";
$quesres=mysqli_query($conn,$select_que);
if(mysqli_num_rows($quesres)>0){
	//header('location:Questions.php?status=chkavailque');
}
else{
 echo $insert_question="INSERT INTO tblmcq(questions,opt1,opt2,opt3,opt4,answer,category_id) VALUES('$question','$opt1','$opt2','$opt3','$opt4','$ans','$categoryid')";
$result=mysqli_query($conn,$insert_question);

if($result!=true)
{

	die('failed to insert');

}
else{
	//echo"INSERTED";
	//$msg="<div class='alert alert-primary'>Inserted successfully</div>";

	header('location:add_question.php?status=Inserted');
}


}



}

?>
