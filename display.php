<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.rtl.min.css"><br><br>
<button class="btn btn-dark w-20"> <a href="insert.php">Add user </a></button>
<div class="container mt-3">
<table class="table font-monospace bg-dark text-info">
	<tr> <th> id 
		 <th>name
		 <th>course
		 <th>contact
		 <th>update
		 <th>delete
	</tr>
<?php
$con=new mysqli("localhost","root","","register");
	$sql="SELECT * FROM `admin`";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		while($row=mysqli_fetch_assoc($result))
		{
		?>	
			<tr> <td> <?php echo $row['id']; ?>
			    <td> <?php echo $row['name']; ?>
			    <td> <?php echo $row['coarse']; ?>
			    <td> <?php echo $row['contect']; ?>
				<td><button class="btn btn-info"><a href="update.php? id=<?php echo $row['id']; ?>">update</a></button>
				<td><button class="btn btn-info"><a href="delete.php? id=<?php echo $row['id']; ?>">delete</a></button>
								
		<?php
		}
	}
	

?>
		 