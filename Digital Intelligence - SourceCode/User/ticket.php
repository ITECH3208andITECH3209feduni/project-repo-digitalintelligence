<?php

$conn=mysqli_connect("localhost","root","","digitalintelligence") or die("conncetion fail");
session_start();


if (isset($_POST['submit']))
{	
	$type=$_POST['type'];
	$sub=$_POST['subject'];
	$msg=$_POST['message'];
	
	$target_dir = "tickets/";
	$fileUp = $_FILES['file'];
	$fname = $_FILES['file']['name'];
	$fsize = $_FILES['file']['size'];
	$tmp_name = $_FILES["file"]["tmp_name"];
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$uploadOk = 1;
	
	if ($fsize > 10000000)
	{
		$err = "Sorry, your file exceeds a limit of 100MB.";
		$uploadOk = 0;
	}
	
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "pdf" ) 
	{
		$err = "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
		$uploadOk = 0;
	}
	
	if ($uploadOk == 0) 
	{
		$err = "OOPS! There was a problem uploading your File.";
		// if everything is ok, try to upload file
	} 
	else 
	{
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
		{
			$err = "The file ". htmlspecialchars( basename( $fname)). " has been uploaded.";
		} 
		else 
		{
			$err = "Sorry, there was an error uploading your file.";
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
	
	
	$sid = $_SESSION['student_id'];	
	$email = $_SESSION['email'];
	
	$sql="INSERT INTO `tickets` (`ticket_id`, `query_type`, `subject`, `query`, `attachments`, `ticket_status`, `resolver_id`, `student_id`) 	VALUES (NULL, '$type', '$sub', '$msg', '$fname', 'Open', $rid, '$sid')";
	
	//echo $type, $sub, $msg, $fname, $email, $rid, $sid, $err;
	if(mysqli_query($conn,$sql))
	{
		$message="Ticket Raised Sucessfully";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location:support.php?ticket_raised_successfully");	
	} 
	else
	{
		$message="Ticket not raised.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location:support.php?error404");
	}
}

?>