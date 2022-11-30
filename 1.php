<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.rtl.min.css" integrity="sha512-tC3gnye8BsHmrW3eRP3Nrj/bs+CSVUfzkjOlfLNrfvcbKXFxk5+b8dQCZi9rgVFjDudwipXfqEhsKMMgRZGCDw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container mt-3 font-monospace">
<form action="1.php" method="POST">
<input type="text" name="name" class="form-control" placeholder="enter name" required><br>
<input type="text" name="course" class="form-control" placeholder="enter course name" required><br>
<input type="text" name="contact" class="form-control" placeholder="phone number" required><br>
<input type="submit" name="submit" class="bg-dark text-info w-100" value="save"><br>
<?php
$con=new mysqli("localhost","root","","collage");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$course=$_POST['course'];
	$contact=$_POST['contact'];
	$sql="INSERT INTO `crud`( `name`, `course`, `contact`) VALUES ('$name','$course','$contact')";
	$result=mysqli_query($con,$sql);
	if($result){
	 header('location:2.php');
	}
}
?>
