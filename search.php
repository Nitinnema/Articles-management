<?php 
	if(isset($_GET['search'])){
		require 'connection.php';
		$search1 = mysqli_real_escape_string($conn, $_GET['search']);
 		$sql = "SELECT title FROM articles WHERE title LIKE '%$search1%'";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Articles Management</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
	<style type="text/css">
		.container{
			width: 60%;
			border: 1px solid blue;
			margin-top: 15px;
		}
	</style>
</head>
<body>
	<?php
	$result = $conn->query($sql);
	if($result->num_rows == 0){
		echo "No Records Found.";
	}else{
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {  ?>
	       
			<div class="container">
	        	<a href="read.php?title=<?php echo $row["title"] ?>" class="title"><h4 class="card-title"><?php echo $row["title"] ?></h4></a>
			</div>
   	<?php } 
		} 
	  }
	?>
</body>
</html>