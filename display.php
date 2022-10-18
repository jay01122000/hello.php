
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.rtl.min.css">
<div class="container mt-3">
<button class="btn btn-primary"><a href="exam.php" class="text-white"> Add user </a> </button></br>
<table class="table">
	<tr> 
	    <th>id </th>
		 <th> name </th>
		 <th> CONTECT </th>
		 
		 
		 
<?php
	$con=new mysqli("localhost","root","","img");
	$sql="SELECT * FROM `form`";
	$result=mysqli_query($con,$sql);
	if($result){
		while($row=mysqli_fetch_assoc($result))
		{
			$id=$row['id'];			
			$name=$row['name'];			
			$contect=$row['contect'];
			
			echo '<tr>
				<td>'.$id.'</td>
				<td>'.$name.'</td>
				<td>'.$contect.'</td>
    			<td> <button class="btn btn-info"><a href="update.php ? updateid='.$id.'"class="text-white">update</a></button>
				<td> <button class="btn btn-danger"><a href="delete.php ? deleteid='.$id.'"class="text-white">delete</a></button>
				</tr>';
				
		}
	}
?>
