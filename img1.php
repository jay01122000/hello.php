
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.rtl.min.css">
<div class="container mt-3">
<form action="img1.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file1"  class="form-control" required><br>
<div class="col-sm-12 text-center">
<input type="submit" class="form-control btn btn-dark  w-50" value="save">
</div>
</div>	

<?php
$con=new mysqli("localhost","root","","payal");
 if(isset($_FILES['file1']))
 {
	 $file=$_FILES['file1'];
	 if(file_exists("imges"))
	 {
		 mkdir("images");
	 }
 
	$target_dir="images/";
	$target_file=$target_dir.basename($_FILES["file1"]["name"]);
	$tmp=explode(".",$_FILES["file1"]["name"]);
	$newfilename=rand(35000,350000).".".end($tmp);
	move_uploaded_file($_FILES["file1"]["tmp_name"],$target_dir.$newfilename);
	$sql="INSERT INTO `pic`( `img`) VALUES ('$newfilename')";
	mysqli_query($con,$sql);
 }
?>
<table class="table text-center">
	<tr> <th> profile pic
<?php
			$sql = "SELECT * FROM `pic`";
			$res = mysqli_query($con,$sql);
			
			while($row=mysqli_fetch_assoc($res))
			{
				
	?> 
		<tr>
		    <td><img height="150" src="<?php echo "images/".$row['img'];?>">
		<?php
					
			}
		?>