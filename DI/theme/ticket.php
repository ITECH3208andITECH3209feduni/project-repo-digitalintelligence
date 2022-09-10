<?php

$conn=mysqli_connect("localhost","root","","digitalintelligence") or die("conncetion fail");
session_start();
if (isset($_POST['submit']))
{	
	$type=$_POST['type'];
	$sub=$_POST['subject'];
	$msg=$_POST['message'];
	$file=$_FILES['file'];
	$fname=$_FILES['file']['name'];
	$temp_name=$_FILES['file']['temp_name'];
	$fsize=$_FILES['file']['size'];
	$ferror=$_FILES['file']['error'];
	$ftype=$_FILES['file']['type'];
	
	
	$fileext=explode('.', $fname);
	$fileactualext=strtolower(end($fileext));
	
	$allowed=array('jpg','jpeg','png','pdf');
	
	if(in_array($fileactualext,$allowed))
	{
		if($ferror ===0)
		{
			if ($fsize<1000000 )
			{
				$filedir='attachments/'.$fname;
				move_uploaded_file($temp_name,$filedir);
				header("Location: support.php");
			}
			
		}
		
	}
	if ($type =="Miscellaneous")
	{
		$rid=2;
	}
	else if ($type=="Submissions" || $type=="Special Considerations")
	{
		$rid=1;
	}
	
	$sel2=mysqli_query($conn,"select student_id from students where email='$email'");
	$row2 = mysqli_fetch_assoc($sel2);
	$sid =$row2['student_id'];
	$_SESSION['student_id']=$sid;
	$sql="INSERT INTO `tickets` (`ticket_id`, `query_type`, `subject`, `query`, `attatchments`, `ticket_status`, `resolver_id`, `student_id`) 	VALUES (NULL, '$type', '$sub', '$msg', '$fname', 'Open', $rid, '$sid')";
	
	echo $type, $sub, $msg, $fname, $fileext, $fileactualext, $email, $rid, $sid, $row2;
	if(mysqli_query($conn,$sql))
	{
		//$msg="Account registered Successfully";
		//echo "<script type='text/javascript'>alert('$message');</script>";
		//header("location:support.php?ticket_raised_successfully");	
	} 
	else
	{
		//$message="Invalid Details  |   Enter valid details";
		//echo "<script type='text/javascript'>alert('$message');</script>";
		//header("location:support.php?error404");
		echo "error";
	}
}

?>