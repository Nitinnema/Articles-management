<?php
 	if(isset($_GET['title'])){
 		require 'connection.php';
 		$title1 = mysqli_real_escape_string($conn, $_GET['title']);
 		$sql = "SELECT id, name, title, article, filepath, whenadded FROM articles WHERE title='$title1'";
 	}
 	else{
 		header('Location: browse.php');
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
		.card{
			width: 60%;
			border: 1px solid blue;
			padding: 30px;
			margin-top: 15px;
		}
		h4{
			color: blue;
			margin-bottom: 0px;
		}
	</style>
</head>
<body>
	<?php
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   			 while($row = $result->fetch_assoc()) { ?>
       
		<div class="card container">
        	<div class="card-body">
        		<a href="read.php?id=<?php echo $row["id"] ?>" class="title"><h4 class="card-title"><?php echo $row["title"] ?></h4></a>
				<a href="<?php echo $row["filepath"] ?>" class="btn btn-info pull-right" style="margin-top: -20px;" download>Download Article</a>
			    <small><i>Contributed by: <b><?php echo $row["name"] ?></b> at <?php echo $row["whenadded"] ?></i></small>
			    <hr>
			    <p class="card-text"><?php echo $row["article"] ?></p>
		 	</div>
		</div>
   	<?php } 
		} 
	?>
</body>
</html>
	