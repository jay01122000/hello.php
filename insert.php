<?php
$con=new mysqli("localhost","root","","register");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$course=$_POST['course'];
	$contact=$_POST['contact'];
	$sql="INSERT INTO `admin`( `name`, `coarse`, `contect`) VALUES ('$name','$course','$contact')";
	$result=mysqli_query($con,$sql);
	if($result){
		header ('location:display.php');
	}
}
?>
<div class="comtainer my-4 ">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.rtl.min.css">
<form action="insert.php" method="POST">
<input type="text" name="name" placeholder="enter name" class="form-control" required><br>
<input type="text" name="course"  class="form-control" placeholder="enter  course name" required><br>
<input type="text" name="contact"  class="form-control" placeholder="phone number" required><br>
<input type="submit" name="submit" class="btn btn-dark w-100 text-info" value="submit">
</form>
<button class="btn btn-info"><a href="display.php">back</a></button>