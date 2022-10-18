<?php
   $con=new mysqli("localhost","root","","img");
   if(isset($_GET['updateid'])){ 
	$id=$_GET['updateid'];
	$sql="SELECT * FROM `form` WHERE id='$id'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
	 $name=$row['name'];
	 $coarse=$row['crs'];
	 $contect=$row['contect'];
   }
	if(isset($_POST['name']))
	{   
		
		$name=$_POST['name'];
		$coarse=$_POST['crs'];
		$contect=$_POST['contect'];
		$sql="UPDATE `form` SET  `name`='$name',`coarse`='$coarse',`contect`='$contect' WHERE id=$id";
		$result=mysqli_query($con,$sql);
		
			
		
	}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.rtl.min.css">
<div class="container mt-3">
<form action="update.php" method="POST">
<input type="text" name="name" class="form-control" placeholder="Enter student name" value="<?php echo $name; ?>" required></br>
<input type="text" name="crs" class="form-control" placeholder=" Enter coarse name" value="<?php echo $coarse;?>" required></br>
<input type="text" name="contect" class="form-control" placeholder=" Enter contect number" value="<?php echo $contect; ?>" required></br>
<input type="submit" class="btn btn-info w-25" value="update">
</form>
</div>