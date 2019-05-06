<?php
 
    require 'connection.php';
    $sql = "SELECT id, name, title, article, filepath, whenadded FROM articles";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Articles Management</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
		.search-container {
		  float: right;
		  margin-top: -8px;
		}

		.search-container input[type=text] {
		  padding: 6px;
		  margin-top: 8px;
		  font-size: 17px;
		}

		.search-container button {
		  float: right;
		  padding: 6px 10px;
		  margin-top: 8px;
		  margin-right: 16px;
		  background: #ddd;
		  font-size: 20px;
		  border: none;
		}

		.search-container button:hover {
		  background: #ccc;
		}
	</style>
</head>
<body>
	<div class="search-container">
		<form action="search.php">
	      <input type="text" placeholder="Search.." name="search" required>
	      <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
	    </form>
	</div>


	<?php
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
   			 while($row = $result->fetch_assoc()) { ?>
       
		<div class="card container">
        	<div class="card-body">
        		<a href="read.php?title=<?php echo $row["title"] ?>" class="title"><h4 class="card-title"><?php echo $row["title"] ?></h4></a>
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
	