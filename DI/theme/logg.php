<?php 

$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
		echo "Not connected to server";
}

if(!mysqli_select_db($conn,"digitalintelligence"))
{
		echo "Not connected to database";
}

if (isset($_POST['submit']))
{	
	session_start();
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$sel2=mysqli_query($conn,"select * from students where email='$email'");
	$row2 = mysqli_fetch_assoc($sel2);
	$name =$row2['name'];
	$_SESSION['name']=$name;
	$sid = $row2['student_id'];
	$_SESSION['student_id']=$sid;
	$_SESSION['email']=$email;
	$sel="select * from students where email='$email' and password='$pass'";
	$row=mysqli_query($conn,$sel);
	$result=mysqli_num_rows($row);
	if($result > 0)
	{
		$_SESSION['name']=$name;
		$_SESSION['student_id']=$sid;
		$_SESSION['email']=$email;
		header("location:index2.php");
	}
	else
	{
		$message="Invalid Details  |   Enter valid details";
		echo "<script type='text/javascript'>alert('$message');";
		echo "window.location.href = '/digitalintelligence/login.php'</script>";
		
	}
	
}
?>