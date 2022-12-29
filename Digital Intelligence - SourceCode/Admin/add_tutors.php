<?php include "header.php";
 include "left.php"; ?>
 
<?php

if(isset($_POST['btn_submit']))
{
	$count==0;
	$nm=$_POST['txt_name'];
	if($nm=="")
	{
		$err_name="Enter Name";
		$count++;
	}

	$course=$_POST['txt_course'];
	if($course=="")
	{
		$err_course="Enter Course Name";
		$count++;
	}
	$slot1=$_POST['txt_slot1'];
	if($slot1=="")
	{
		$err_time="Select Time";
		$count++;
	}
	$slot2=$_POST['txt_slot2'];
	if($slot2=="")
	{
		$err_time="Select Time";
		$count++;
	}
	$slot3=$_POST['txt_slot3'];
	if($slot3=="")
	{
		$err_time="Select Time";
		$count++;
	}
	$slot4=$_POST['txt_slot4'];
	if($slot4=="")
	{
		$err_time="Select Time";
		$count++;
	}
	$slot5=$_POST['txt_slot5'];
	if($slot5=="")
	{
		$err_time="Select Time";
		$count++;
	}
	
}
?>

<?php
if(isset($_POST['btn_submit']))
{
	$file=$_FILES['txt_img']['name'];
	$dest="upload/$file";
	$src=$_FILES['txt_img']['tmp_name'];
	move_uploaded_file("$src","$dest");
	$img=$dest;
}
?>

<?php
if(isset($_POST['btn_submit']) and $count==0)
{
	echo $q="INSERT INTO tutors (name, course, slot1, slot2, slot3, slot4, slot5) VALUES ('$nm', '$course', '$slot1', '$slot2', '$slot3', '$slot4', '$slot5');";
	$r=mysqli_query($con,$q);
?>

<script>
alert("Details Added Successfully!");
</script>

<?php
}
?>


<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add Tutor</h2>

                <div class="box-icon">
                    
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form name="frm_pro" enctype="multipart/form-data" method="POST">
				
                    <div class="form-group">
					<h5><?php echo $err_name;?></h5>
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" max="100" min="1" name="txt_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
					
					<div class="form-group">
					<h5><?php echo $err_course;?></h5>
                        <label for="exampleInputEmail1">Course</label>
                        <input type="text" max="100" min="1" name="txt_course" class="form-control" id="exampleInputEmail1" placeholder="Enter Course">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
					<div class="form-group">
					<h5><?php echo $err_time;?></h5>
                        <label for="exampleInputEmail1">Slot 1</label>
                        <input type="time" max="10" min="1" name="txt_slot1" class="form-control" id="exampleInputEmail1" placeholder="Select Time">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
					<div class="form-group">
					<h5><?php echo $err_time;?></h5>
                        <label for="exampleInputEmail1">Slot 2</label>
                        <input type="time" max="10" min="1" name="txt_slot2" class="form-control" id="exampleInputEmail1" placeholder="Select Time">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
					<div class="form-group">
					<h5><?php echo $err_time;?></h5>
                        <label for="exampleInputEmail1">Slot 3</label>
                        <input type="time" max="10" min="1" name="txt_slot3" class="form-control" id="exampleInputEmail1" placeholder="Select Time">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
					<div class="form-group">
					<h5><?php echo $err_time;?></h5>
                        <label for="exampleInputEmail1">Slot 4</label>
                        <input type="time" max="10" min="1" name="txt_slot4" class="form-control" id="exampleInputEmail1" placeholder="Select Time">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
					<div class="form-group">
					<h5><?php echo $err_time;?></h5>
                        <label for="exampleInputEmail1">Slot 5</label>
                        <input type="time" max="10" min="1" name="txt_slot5" class="form-control" id="exampleInputEmail1" placeholder="Select Time">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
										
					
<button class="btn btn-primary btn-sm" type="submit" name="btn_submit">Add
</button>
<a class="btn btn-primary btn-sm" href="manage_tutors.php" name="btn_back">Back to List </a>
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
