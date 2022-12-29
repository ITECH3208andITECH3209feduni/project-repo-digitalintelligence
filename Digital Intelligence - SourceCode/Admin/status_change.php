<?php include "header.php";
 include "left.php"; ?>
<?php 

	$eid=$_GET['aid'];
	echo $q="UPDATE `tickets` set `ticket_status`='Resolved' WHERE `ticket_id`='$eid';";
	$r=mysqli_query($con,$q);
	
?>
<script>
alert("Status Changed Successfully!");
window.location.href="manage_tickets.php";
</script>
