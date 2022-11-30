<?php
$con=new mysqli("localhost","root","","collage");
if(isset($_GET['id']))
{
 session_start();
 $_SESSION['id'] = $_GET['id'];
 $id = $_SESSION['id'];
 $sql="SELECT * FROM `crud` WHERE id='$id'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
}
?>
<?php
if(isset($_POST['name']))
{	 
	session_start();
    $id = $_SESSION['id'];
	$name=$_POST['name'];
	$course=$_POST['course'];
	$contact=$_POST['contact'];
	$sql="UPDATE `crud` SET `name`='$name',`course`='$course',`contact`='$contact' WHERE id='$id'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		header('location:2.php');
	}
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.rtl.min.css" integrity="sha512-tC3gnye8BsHmrW3eRP3Nrj/bs+CSVUfzkjOlfLNrfvcbKXFxk5+b8dQCZi9rgVFjDudwipXfqEhsKMMgRZGCDw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container mt-3">
<form action="3.php" method="POST">
<input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="enter name"> </br>
<input type="text" name="course" value="<?php echo $row['course']; ?>" class="form-control" placeholder="enter course"> </br>
<input type="text" name="contact" value="<?php echo $row['contact']; ?>" class="form-control" placeholder="phone number"> </br>
<input type="submit" name="update" class="form-control btn btn-dark" value="update"> </br>
</div>

 