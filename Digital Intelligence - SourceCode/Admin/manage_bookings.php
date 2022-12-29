<?php include "header.php"; ?>
    <!-- topbar ends -->
<?php include "left.php"; ?>
        <!--/span-->
        <!-- left menu ends --><noscript>
           
        </noscript>

<!---approve-->
<?php

if(isset($_GET['aid']))
{
	$id=$_GET['aid'];
	$ap="update bookings set p_status=1 where p_id='$id'";
	mysqli_query($con,$ap);
}
?>

<!--reject-->
<?php
if(isset($_GET['rid']))
{
	$id=$_GET['rid'];
	$ap="update bookings set p_status=0 where p_id='$id'";
	mysqli_query($con,$ap);
}
?>

<!--delete-->
<?php
if(isset($_GET['did']))
{
	$id=$_GET['did'];
	$ap="delete from bookings where booking_id='$id'";
	mysqli_query($con,$ap);
}
?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
        
    </div>
<script src="js/jquery-3.1.0.min.js"></script>
	
 
<form method="post" enctype="multipart/form-data">
    <div class="row">
	<div class="col-md-4"> 
	 <input type="text" class="form-control" name="txt_search"  value="<?php echo $_POST['txt_search']; ?>" autocomplete="off">
    </div>
	<div class="col-md-4">
	<input type=	"submit" class="btn btn-info" name="btn_search" value="Search" >
	<button type="submit" name="asc_btn" class="btn btn-info"><span class="glyphicon glyphicon-sort-by-alphabet"  style="line-height: 1.4"></span></button>
	<button type="submit" name="desc_btn" class="btn btn-info"><span class="glyphicon glyphicon-sort-by-alphabet-alt" style="line-height: 1.4"></span></button>
	</div>
		<!-- <a class="btn btn-info" href="add_dayplan.php" style="float:right;">Add New</a> -->
	</div>
</form>
	
	<div class="row">
	<div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <a href="manage_users.php"><h2><i class="glyphicon glyphicon-wrench"></i> Manage Booking Sessions</h2></a>

        <div class="box-icon">
            
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
           
        </div>
    </div>
    <div class="box-content">
    <div style="overflow:auto">
    	<div class="col-md-12" style="margin-bottom: 10px;padding-left: 0px">
    		<div class="col-md-2;" style="padding-left: 0px">

    			<?php if(!isset($_GET['id'])){ ?>
    				<a href="download_users.php"><button class="btn btn-primary btn-sm" style="float: left;"><i class="glyphicon glyphicon-download-alt"></i>&nbsp;&nbsp;Export to Excel</button></a>

    			<?php } else{ ?>
					<a href="download_users.php?id=<?=$_GET[id]?>"><button class="btn btn-primary btn-sm" style="float: left;"><i class="glyphicon glyphicon-download-alt"></i>&nbsp;&nbsp;Export to Excel</button></a>    			
				<?php } ?>
    		</div>
    		
    	</div> 
		<?php
		if(isset($_POST['asc_btn']))
			{
				$sel="select * from bookings order by date ASC";
				$r=mysqli_query($con,$sel);
			}
			else if(isset($_POST['desc_btn']))	
			{
				$sel="select * from bookings order by date DESC";
				$r=mysqli_query($con,$sel);
			}				
			else if(isset($_POST['btn_search']) and $_POST['txt_search']!="")
			{
				$v=$_POST['txt_search'];
				$sel="select * from bookings where date='$v'";
				$r=mysqli_query($con,$sel);
			}
			else
			{
		$sel="select bookings.*, students.sname, tutors.name from bookings, students, tutors where students.student_id = bookings.student_id AND tutors.id = bookings.faculty_id;";
		$r=mysqli_query($con,$sel);
			}
		?>
	<table class="table table-striped table-bordered bootstrap-datatable" style="background-color: #fff">
    <thead>
    <tr>
	
	<th class="text-center" nowrap> Booking ID </th>
	<th> Time Slot </th>
	<th>Date</th>
	<th>Faculty</th>
	<th>Student</th>
	<th>Meeting Link</th>
	<th>Actions</th>
		
		<!-- <th> Nationality</th>
		<th> Address </th>
		<th class="text-center">Actions</th> -->
		
    </tr>
    </thead>
    <tbody>
	<?php
	while($row=mysqli_fetch_array($r))
	{
		$sel_st="SELECT name FROM students WHERE student_id=".$row['student_id'].";";
		
		?>
		
    <tr>
        <td class="text-center"><?php echo $row['booking_id'];?></td>
        <td><?php echo $row['timeslot'];?></td>
		<td><?php echo $row['date'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['sname'];?></td>
		<td><?php echo $row['meeting_link'];?></td>
		
		<td class="text-center" >

<a href="meeting_link.php?aid=<?php echo $row['booking_id'];?>" class="btn_approve"> <img src="img/approve.png" height="30px" width="30px" data-toggle="tooltip" title="Approve"></a>



<a href="manage_bookings.php?did=<?php echo $row['booking_id'];?>"  class="btn_delete">												
<img src="img/delete.png" height="30px" width="30px" data-toggle="tooltip" title="Delete"></a>

	</td>
    </tr>

<?php
	}
?>	
   
    </tbody>
    </table>
	
	</div>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

    <!--/span-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
  
    
    </div>
    <!-- Ad ends -->

    <hr>


    <script type="text/javascript">
    	$("select[name='txt_skill']").change(function(e){
    		var id=$(this).val();
    		window.location='manage_bookings.php?id='+id;
    	});
    </script>

   <?php include "footer.php"; ?>
