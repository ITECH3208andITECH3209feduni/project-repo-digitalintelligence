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
	$ap="delete from lectures where id='$id'";
	mysqli_query($con,$ap);
}
?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
        
    </div>
<script src="js/jquery-3.1.0.min.js"></script>
	
	
	<div class="row">
	<div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <a href="manage_users.php"><h2><i class="glyphicon glyphicon-wrench"></i> Manage Lecture Videos</h2></a>

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
				$sel="select * from lectures order by name ASC";
				$r=mysqli_query($con,$sel);
			}
			else if(isset($_POST['desc_btn']))	
			{
				$sel="select * from lectures order by name DESC";
				$r=mysqli_query($con,$sel);
			}				
			else if(isset($_POST['btn_search']) and $_POST['txt_search']!="")
			{
				$v=$_POST['txt_search'];
				$sel="select * from lectures where name='$v'";
				$r=mysqli_query($con,$sel);
			}
			else
			{
		$sel="select * from lectures;";
		$r=mysqli_query($con,$sel);
			}
		?>
	<table class="table table-striped table-bordered bootstrap-datatable" style="background-color: #fff">
    <thead>
    <tr>
	
	<th class="text-center" nowrap>Unit</th> 
	<th> Video Link </th>
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
	     <td class="text-center"><?php echo $row['unit_id'];?></td>
        <td><?php echo $row['video_link'];?></td>
		
		<td class="text-center" >

<a href="manage_lectures.php?did=<?php echo $row['unit_id'];?>"  class="btn_delete">												
<img src="img/delete.png" height="30px" width="30px" data-toggle="tooltip" title="Delete"></a>

<a href="edit_lectures.php?eid=<?php echo $row['unit_id']; ?>">												
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
    		window.location='manage_lectures.php?id='+id;
    	});
    </script>

   <?php include "footer.php"; ?>
