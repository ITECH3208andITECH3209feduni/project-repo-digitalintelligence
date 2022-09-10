<?php 

$conn=mysqli_connect("localhost","root","","digitalintelligence") or die("conncetion fail");

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	
	$email=$_POST['email'];
	
	$pass=$_POST['password'];
	

	$cont=$_POST['contact'];
	$add=$_POST['address'];
	$zip=$_POST['zip'];
	$emp=$_POST['empstat'];
	$job=$_POST['jobtitle'];
	$comp=$_POST['company'];
	$resu=$_POST['resume'];
	$cov=$_POST['coverletter'];
	$linkedin=$_POST['linkedin'];
	$inte=$_POST['interests'];
	echo $emp, $resu, $cov, $linkedin;

	$sql="INSERT INTO `students` (`student_id`, `name`, `email`, `password`, `address`, `mobile`, `profile_pic`, `employment_status`, `desired_job`, `desired_company`, `resume`, `cover_letter`, `linkedin`) 	VALUES (NULL, '$name', '$email', '$pass', '$add', '$cont', NULL, '$emp', '$job', '$comp', '$resu', '$cov ', '$linkedin')";
	
	
	if(mysqli_query($conn,$sql))
	{
		$msg="Account registered Successfully";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location:login.php");	
	} 
	else
	{
		$message="Invalid Details  |   Enter valid details";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location:register.php");
	}
}

?>