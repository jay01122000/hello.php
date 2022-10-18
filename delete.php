<?php
	$con=new mysqli("localhost","root","","img");
	if(isset($_GET['deleteid']))
	{
		$id=$_GET['deleteid'];
		$sql="DELETE FROM `form` WHERE `id`='$id'";
		$result=mysqli_query($con,$sql);
		if($result)
		{
			header("location:display.php");
		}else
		{
			echo "no data";
		}
	}
?>