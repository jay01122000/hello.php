<?php 
$con=new mysqli("localhost","root","","register");
	$id=$_GET['id'];
	$sql="SELECT * FROM `admin` where id='$id'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
	
?>
<?php

 
  if(isset($_POST['update']))
  {	
	  $name=$_POST['name'];
	  $coarse=$_POST['course'];
	  $contect=$_POST['contact'];
	  $sql="UPDATE `admin` SET `name`='$name',`coarse`='$coarse',`contect`='$contect' WHERE id='$id'";
	  $result=mysqli_query($con,$sql);
	  if($result){
		  header ('location:display.php');
	  }
  }
 
?>	
<div class="comtainer my-4 ">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.rtl.min.css">
<form action="" method="POST">
<input type="text" name="name" placeholder="enter name" class="form-control" value="<?php echo $row['name']; ?>" required><br>
<input type="text" name="course"  class="form-control"  value="<?php echo $row['coarse']; ?>" placeholder="enter  course name" required><br>
<input type="text" name="contact"  class="form-control" value="<?php echo $row['contect']; ?>" placeholder="phone number" required><br>
<input type="submit" name="update" class="btn btn-dark w-100 text-info" value="update">
</form>
	
