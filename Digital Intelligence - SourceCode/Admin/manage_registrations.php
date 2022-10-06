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
	$ap="delete from students where student_id='$id'";
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
        <a href="manage_users.php"><h2><i class="glyphicon glyphicon-wrench"></i> Manage New Registers</h2></a>

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
				$sel="select * from students order by sname ASC";
				$r=mysqli_query($con,$sel);
			}
			else if(isset($_POST['desc_btn']))	
			{
				$sel="select * from students order by sname DESC";
				$r=mysqli_query($con,$sel);
			}				
			else if(isset($_POST['btn_search']) and $_POST['txt_search']!="")
			{
				$v=$_POST['txt_search'];
				$sel="select * from students where sname='$v'";
				$r=mysqli_query($con,$sel);
			}
			else
			{
		$sel="select * from students;";
		$r=mysqli_query($con,$sel);
			}
		?>
	<table class="table table-striped table-bordered bootstrap-datatable" style="background-color: #fff">
    <thead>
    <tr>
	
	<th class="text-center" nowrap>Sr. No</th> 
	<th> Name </th>
	<th> Email </th>
	<th>Addrerss</th>
	<th>Mobile</th>
	<th>Employment Status</th>
	<th>Desired Job</th>
	<th>Desired Company</th>
	<th>Resume</th>
	<th>Cover Letter</th>
	<th>Linkedin Profile</th>
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
	     <td class="text-center"><?php echo $row['student_id'];?></td>
        <td><?php echo $row['sname'];?></td>
        <td><?php echo $row['email'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['mobile'];?></td>
		<td><?php echo $row['employment_status'];?></td>
		<td><?php echo $row['desired_job'];?></td>
		<td><?php echo $row['desired_company'];?></td>
		<td><?php echo $row['resume'];?></td>
		<td><?php echo $row['cover_letter'];?></td>
		<td><?php echo $row['linkedin'];?></td>
		
		<td class="text-center" >

<a href="manage_registrations.php?did=<?php echo $row['student_id'];?>"  class="btn_delete">												
<img src="img/delete.png" height="30px" width="30px" data-toggle="tooltip" title="Delete"></a>

<a href="edit_registration.php?eid=<?php echo $row['student_id']; ?>">												
<img src="img/edit.png" height="30px" width="30px" data-toggle="tooltip" title="Edit"></a>
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
    		window.location='manage_students.php?id='+id;
    	});
    </script>

   <?php include "footer.php"; ?>
