<!DOCTYPE html>
<html>
<head>
	<title>Articles Management</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
	<style type="text/css">
	</style>
</head>
<body>
	<div class="container">
		<button class="btn btn-success" type="button" onclick="browseArticle()">Browse Articles</button>
		<button class="btn btn-info" type="button" onclick="Contribute()">Contribute</button>
	</div>
</body>
<script type="text/javascript">
	function browseArticle(){
		location.href = "browse.php";
	};
	function Contribute(){
		location.href = "contribute.php";
	};
</script>
</html>