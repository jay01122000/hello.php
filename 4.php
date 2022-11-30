<?php
$con=new mysqli("localhost","root","","collage");
 $id=$_GET['id'];
 $sql="DELETE FROM `crud` where id='$id'";
 $result=mysqli_query($con,$sql);
 if($result)
 {
	 header('location:2.php');
 }else
 {
	 echo "error";
 }
?>