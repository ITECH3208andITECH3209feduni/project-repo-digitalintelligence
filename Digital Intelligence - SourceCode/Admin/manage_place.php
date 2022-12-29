<?php include ("header.php"); ?>
    <!-- topbar ends -->
<?php include ("left.php"); ?>
        <!--/span-->
        <!-- left menu ends --><noscript>
           
        </noscript>
<?php 
$sel="select * from tbl_contact";
$q=mysqli_query($con,$sel);
$count=mysqli_num_rows($q);
$perpage=5;
$total_page=ceil($count/$per_page);
if(isset($_GET['page']))
{
	$page=$_GET['page'];
	$pre_page=$page-1;
	$next_page=$page+1;
	if($page<1)
	{
		$page=1;
	}
    if($pre_page<1)
	{
		$pre_page=1;
	}
	if($next_page>$total_page)
	{
		$next_page=$total_page;
	}
}
else
{
	$page=1;
	$pre_page=1;
	$next_page=2;
}
$limit_page=$page-1;
$limit="limit"." ".$limit_page*$per_page.","." ".$per_page;
?>

<!---approve-->
<?php

if(isset($_GET['aid']))
{
	$id=$_GET['aid'];
	$ap="update tbl_place set p_status=1 where p_id='$id'";
	mysqli_query($con,$ap);
}
?>

<!--reject-->
<?php
if(isset($_GET['rid']))
{
	$id=$_GET['rid'];
	$ap="update tbl_place set p_status=0 where p_id='$id'";
	mysqli_query($con,$ap);
}
?>



<!--delete-->
<?php
if(isset($_GET['did']))
{
	$id=$_GET['did'];
	$ap="delete from tbl_place where p_id='$id'";
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
	<input type="submit" class="btn btn-info" name="btn_search" value="Search" >
	<button type="submit" name="asc_btn" class="btn btn-info"><span class="glyphicon glyphicon-sort-by-alphabet"  style="line-height: 1.4"></span></button>
	<button type="submit" name="desc_btn" class="btn btn-info"><span class="glyphicon glyphicon-sort-by-alphabet-alt" style="line-height: 1.4"></span></button>
	</div>
		<a class="btn btn-info" href="add_place.php" style="float:right;">Add New</a>
	</div>
</form>
	
	<div class="row">
	<div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <a href=""><h2><i class="glyphicon glyphicon-wrench"></i> Manage place</h2></a>

        <!-- <div class="box-icon">
            
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div> -->
    </div>

    <div class="box-content">
    <div style="overflow:auto"> 
  
	<table class="table table-bordered bootstrap-datatable">
    <thead>
    <tr>
	     <th class="text-center">id</th>
        <th>name </th>
		
		<th class="text-center">detail </th>
		<th class="text-center">Budget</th>
		<th class="text-center">age</th>
		<th class="text-center">status</th>
		<th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody>

	     	<?php
			if(isset($_POST['asc_btn']))
			{
				$sel="select * from tbl_place order by p_name ASC";
				$r=mysqli_query($con,$sel);
			}
			else if(isset($_POST['desc_btn']))	
			{
				$sel="select * from tbl_place order by p_name DESC";
				$r=mysqli_query($con,$sel);
			}				
			else if(isset($_POST['btn_search']) and $_POST['txt_search']!="")
			{
				$v=$_POST['txt_search'];
				$sel="select * from tbl_place where p_name='$v'";
				$r=mysqli_query($con,$sel);
			}
			else
			{	
	$sel="select * from tbl_place;";
	$r=mysqli_query($con,$sel);
			}
	while($row=mysqli_fetch_array($r))
	{
		?>
	

    <tr>
	     <td class="text-center"><?php echo $row['p_id'];?></td>
        
		<td class="text-center"><?php echo $row['p_name'];?></td>
        <td class="text-center"><?php echo $row['p_detail'];?></td>
		<td class="text-center"><?php echo $row['p_budget'];?></td>
		<td class="text-center"><?php echo $row['p_age'];?></td>
		<td class="text-center"><?php echo $row['p_status'];?></td>
    
    
        <td class="text-center" >
<a href="manage_place.php?aid=<?php echo $row['p_id'];?>" class="btn_approve"> <img src="img/approve.png" height="30px" width="30px" data-toggle="tooltip" title="Approve"></a>


<a href="manage_place.php?rid=<?php echo $row['p_id'];?>"  class="btn_reject">
<img src="img/cancel.png" height="34px" width="34px" data-toggle="tooltip" title="Reject"></a>

<a href="manage_place.php?did=<?php echo $row['p_id'];?>"  class="btn_delete">												
<img src="img/delete.png" height="30px" width="30px" data-toggle="tooltip" title="Delete"></a>

<a href="edit_place.php?eid=<?php echo $row['p_id']; ?>">												
<img src="img/edit.png" height="30px" width="30px" data-toggle="tooltip" title="Edit"></a>
	</td>
          
     </tr>    
   <?php
	}
	?> 
   
    </tbody>
    </table>
    </form>
	
	</div>
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

    


   <?php include ("footer.php"); ?>