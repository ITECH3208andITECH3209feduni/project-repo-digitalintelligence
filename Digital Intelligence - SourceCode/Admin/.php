<?php include "header.php";
 include "left.php"; ?>
 
<?php
$count=="";

if(isset($_POST['btn_submit']) )
{
$name=$_POST['txt_name'];
if($name=="")
{
$err_name="Enter product Name";
$count++;
}
$age=$_POST['txt_age'];
if($age=="")
{
$err_age="Enter age";
$count++;
}
$b=$_POST['txt_budget'];
if($b=="")
{
$err_budget="Enter budget";
$count++;
}
$des=$_POST['txt_des'];
if($des=="")
{
$err_des="Enter description";
$count++;
}
$file_name=$_FILES['txt_img']['name'];
$ext = pathinfo($file_name, PATHINFO_EXTENSION);


}
?>
<?php 
if(isset($_POST['btn_submit'])&& $count==0 )
{


$file=$_FILES['txt_img']['name'];
echo $dest="upload/$file";
echo $src=$_FILES['txt_img']['tmp_name'];
move_uploaded_file("$src","$dest");
$img=$dest;
$getid=$_GET['edit'];
$name=addslashes(trim($_POST['txt_name']));
	$update="update tbl_product set product_name='$name',product_age='$age', product_budget='$b', product_des='$des' where product_id='$getid'";
	
	$query=mysqli_query($connection,$update) or die('Error in update product->'.mysqli_error($connection));
	
	if($query)
	{
	?>
	<script>alert("Successfully Update product!");
	window.location.href="manage_product.php";
	</script>
	<?php
	}
}

?>
        

<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit product</h2>

                <div class="box-icon">
                    
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
	<?php
	$getid=$_GET['edit'];
	$sel="select * from tbl_product where product_id='$getid';";
	$q=mysqli_query($connection,$sel);
	$data=mysqli_fetch_assoc($q);
	mysqli_free_result($q);
	?>
            <div class="box-content">
                <form name="frm_pro" enctype="multipart/form-data" method="post">
                    
					<div class="form-group">
                        <label for="exampleInputEmail1">product Name</label>
                        <input type="text" name="txt_name" class="form-control" id="exampleInputEmail1" productholder="product Name" value="<?php echo $data['product_name'] ?>">
						<strong><span style="color:#FF0000;"><?php echo $err_name; ?></span></strong>
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Age</label>
                        <input type="number" max="100" min="1" name="txt_age" class="form-control" id="exampleInputEmail1" productholder="Enter age" value="<?php echo $data['product_age'] ?>">
						<strong><span style="color:#FF0000;"><?php echo $err_age; ?></span></strong>
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Budget</label>
                        <input type="text" name="txt_budget" class="form-control" id="exampleInputEmail1" productholder="Enter Budget" value="<?php echo $data['product_budget'] ?>">
						<strong><span style="color:#FF0000;"><?php echo $err_budget; ?></span></strong>
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" name="txt_des" class="form-control" id="exampleInputEmail1" productholder="Enter detail" value="<?php echo $data['product_des'] ?>">
						<strong><span style="color:#FF0000;"><?php echo $err_des; ?></span></strong>
                    </div>
                  	<div class="form-group">
					<img src="<?php echo $data['product_image']; ?>" height="60px;" width="60px;">
                        <label for="exampleInputFile">product Images</label>
                        <input name="txt_img" type="file" value="<?php echo $data['product_image']; ?>">
                        <p class="help-block"><strong><span style="color:#FF0000;"><?php echo $err_img; ?></span></strong></p>
                    </div>
					
										
					
<button class="btn btn-primary btn-sm" type="submit" name="btn_submit">Edit
</button>
<a class="btn btn-primary btn-sm" href="manage_product.php" name="btn_back">Back to List </a>
</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>
<style>
.select
{
	border:#D6D6D6 solid 2px;
	border-radius:3px;
}
</style>

    <?php include "footer.php"; ?>
