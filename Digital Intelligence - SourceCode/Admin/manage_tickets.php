<?php include "header.php"; ?>
    <!-- topbar ends -->
<?php include "left.php"; ?>
        <!--/span-->
        <!-- left menu ends --><noscript>
           
        </noscript>

<!--delete-->
<?php
if(isset($_GET['did']))
{
	$id=$_GET['did'];
	$ap="delete from tickets where ticket_id='$id'";
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
	</div>
</form>
	
	<div class="row">
	<div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <a href="manage_users.php"><h2><i class="glyphicon glyphicon-wrench"></i> Manage tickets</h2></a>

        <div class="box-icon">
            
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
           
        </div>
    </div>
    <div class="box-content">
    <div style="overflow:auto">
   
		<?php
		if(isset($_POST['asc_btn']))
			{
				$sel="select * from tickets order by ticket_id ASC";
				$r=mysqli_query($con,$sel);
			}
			else if(isset($_POST['desc_btn']))	
			{
				$sel="select * from tickets order by ticket_id DESC";
				$r=mysqli_query($con,$sel);
			}				
			else if(isset($_POST['btn_search']) and $_POST['txt_search']!="")
			{
				$v=$_POST['txt_search'];
				$sel="select * from tickets where ticket_id='$v'";
				$r=mysqli_query($con,$sel);
			}
			else
			{
		$sel="select tickets.*, faculty.name, students.sname from tickets, faculty, students where faculty.faculty_id = tickets.resolver_id and students.student_id = tickets.student_id;";
		$r=mysqli_query($con,$sel);
			}
		?>
	<table class="table table-striped table-bordered bootstrap-datatable" style="background-color: #fff">
    <thead>
    <tr>
	
	<th class="text-center" nowrap>Ticket No.</th> 
	<th> Type of Query </th>
	<th> Subject </th>
	<th>Query Details</th>
	<th>Attachments</th>
	<th>Ticket Status</th>
	<th>Resolver</th>
	<th>Student</th>
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
		?>
		
    <tr>
	     <td class="text-center"><?php echo $row['ticket_id'];?></td>
        <td><?php echo $row['query_type'];?></td>
		<td><?php echo $row['subject'];?></td>
		<td><?php echo $row['query'];?></td>
		<td><?php echo $row['attachments'];?></td>
		<td><?php echo $row['ticket_status'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['sname'];?></td>
		
		<td class="text-center" >

<a href="status_change.php?aid=<?php echo $row['ticket_id'];?>" class="btn_approve"> <img src="img/approve.png" height="30px" width="30px" data-toggle="tooltip" title="Query Solved"></a>
	
<a href="reply_tickets.php?eid=<?php echo $row['ticket_id']; ?>?rid=<?php echo $row['resolver_id']; ?>">												
<img src="img/reply.png" height="30px" width="30px" data-toggle="tooltip" title="Reply"></a>
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
    		window.location='manage_tickets.php?id='+id;
    	});
    </script>

   <?php include "footer.php"; ?>
