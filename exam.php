<?php
	$con=new mysqli("localhost","root","","img");
	
	if(isset($_POST['name']))
	{
		$name=$_POST['name'];
		$coarse=$_POST['crs'];
		$contect=$_POST['contect'];
		$sql="INSERT INTO `form`(`name`, `coarse`, `contect`) VALUES ('$name','$coarse','$contect')";
		$result=mysqli_query($con,$sql);
		if($result){
			echo "sucsses";
		}else{
			echo "failear";
		}
	}


?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.rtl.min.css">
<div class="container mt-3">
<form action="exam.php" method="POST">
<input type="text" name="name" class="form-control" placeholder="Enter student name" required></br>
<input type="text" name="crs" class="form-control" placeholder=" Enter coarse name" required></br>
<input type="text" name="contect" class="form-control" placeholder=" Enter contect number" required></br>
<input type="submit" class="btn btn-info w-25" value="submit">
</form>
</div>

