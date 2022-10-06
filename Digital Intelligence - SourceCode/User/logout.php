<?php
$conn=mysqli_connect("localhost","root","","digitalintelligence");

session_start();

session_destroy();
header("location:index.php");

?>