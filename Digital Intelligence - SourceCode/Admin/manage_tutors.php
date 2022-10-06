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
	$ap="delete from tutors where id='$id'";
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
		<a class="btn btn-info" href="add_tutors.php" style="float:right; margin-right:20px;">Add New</a>
	</div>
</form>
	
	<div class="row">
	<div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <a href="manage_users.php"><h2><i class="glyphicon glyphicon-wrench"></i> Manage Tutors</h2></a>

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
				$sel="select * from tutors order by name ASC";
				$r=mysqli_query($con,$sel);
			}
			else if(isset($_POST['desc_btn']))	
			{
				$sel="select * from tutors order by name DESC";
				$r=mysqli_query($con,$sel);
			}				
			else if(isset($_POST['btn_search']) and $_POST['txt_search']!="")
			{
				$v=$_POST['txt_search'];
				$sel="select * from tutors where name='$v'";
				$r=mysqli_query($con,$sel);
			}
			else
			{
		$sel="select * from tutors;";
		$r=mysqli_query($con,$sel);
			}
		?>
	<table class="table table-striped table-bordered bootstrap-datatable" style="background-color: #fff">
    <thead>
    <tr>
	
	<th class="text-center" nowrap>Sr. No</th> 
	<th> Name </th>
	<th>Course</th>
	<th>Slot 1</th>
	<th>Slot 2</th>
	<th>Slot 3</th>
	<th>Slot 4</th>
	<th>Slot 5</th>
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
	     <td class="text-center"><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
		<td><?php echo $row['course'];?></td>
		<td><?php echo $row['slot1'];?></td>
		<td><?php echo $row['slot2'];?></td>
		<td><?php echo $row['slot3'];?></td>
		<td><?php echo $row['slot4'];?></td>
		<td><?php echo $row['slot5'];?></td>
		
		<td class="text-center" >

<a href="manage_tutors.php?did=<?php echo $row['id'];?>"  class="btn_delete">												
<img src="img/delete.png" height="30px" width="30px" data-toggle="tooltip" title="Delete"></a>

<a href="edit_tutors.php?eid=<?php echo $row['id']; ?>">												
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
    		window.location='manage_tutors.php?id='+id;
    	});
    </script>

   <?php include "footer.php"; ?>
