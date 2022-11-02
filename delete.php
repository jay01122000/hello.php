<?php
$con=new mysqli("localhost","root","","register");
 $id=$_GET['id'];
 $sql="DELETE FROM `admin` WHERE id='$id'";
 $result=mysqli_query($con,$sql);
 if($result){
		header ('location:display.php');
	}
	else
	{
		echo 'error';
	}
?>