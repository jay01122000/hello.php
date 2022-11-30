<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.rtl.min.css" integrity="sha512-tC3gnye8BsHmrW3eRP3Nrj/bs+CSVUfzkjOlfLNrfvcbKXFxk5+b8dQCZi9rgVFjDudwipXfqEhsKMMgRZGCDw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container mt-3">
<button class="btn btn-dark text-info"><a href="1.php">	back</a></button>	
<table class="table border-5 font-monospace">
	<tr> <th> id 
	     <th> name
		 <th> course
		 <th> contact
		 <th> action
<?php
$con=new mysqli("localhost","root","","collage");
 $sql="SELECT * FROM `crud`";
 $result=mysqli_query($con,$sql);
 if($result)
 {
	 while( $row=mysqli_fetch_assoc($result))
	 {
	 
?>		 
		<tr> <td><?php echo $row['id']; ?> </td>
	     	 <td><?php echo $row['name']; ?></td> 
			 <td><?php echo $row['course']; ?></td>
			 <td><?php echo $row['contact']; ?></td>
			 <td><button class="btn btn-info"><a href="3.php?id=<?php echo $row['id']; ?>"> update </a></button>
			 <td><button class="btn btn-danger"><a href="4.php?id=<?php echo $row['id']; ?>"> delete </a></button>
<?php		 
	 }
 }

?>
 