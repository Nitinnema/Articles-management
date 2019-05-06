<?php
  require 'connection.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(isset($_POST['name']) && isset($_POST['title']) && isset($_POST['article']) && isset($_FILES['InputFile']) && !empty($_FILES['InputFile'])){
        $name = $_POST['name'];
        $title = $_POST['title'];
        $article = $_POST['article'];
        $filename = $_FILES['InputFile']['name'];
        $type = $_FILES['InputFile']['type'];
        $tmp_name = $_FILES['InputFile']['tmp_name'];
        $size = $_FILES['InputFile']['size'];
        $location = "uploads/";

        if($type == "application/pdf" || $type == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"){ 
          if(move_uploaded_file($tmp_name, $location.$filename)){
            $sql = "INSERT INTO articles (name, title, article, filename, filepath, whenadded)
                VALUES ('$name', '$title', '$article', '$filename', '$location$filename', now())";
            if($conn->query($sql) === TRUE){
              header( "refresh:4; url=index.php" );
              echo "You Contributed Article successfully";
            }else{
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
           }else{
              echo "Failed to Upload";
           } 
        }else{
          echo "File should be in PDF or .DOCX Format";
        }
    }
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
      margin-top: 50px;
    }
    span{
      color: red;
    }
  </style>
</head>
<body>
  <div class="container">
      <form method="POST" class="col-md-8 col-md-offset-2" enctype="multipart/form-data">
        <legend>Contribute</legend>
        <div class="form-group">
          <label for="name">Name <span>*</span></label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
          <label for="title">Article's Title <span>*</span></label>
          <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Article's Title" required>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input <span>*</span></label>
          <input type="file" class="form-control-file" name="InputFile" aria-describedby="fileHelp">
          <small id="fileHelp" class="form-text text-muted">Upload your article in pdf, .docx format.</small>
        </div>
        <div class="form-group">
          <label for="Article">Your Article <span>*</span></label>
          <textarea class="form-control" id="Article" name="article" rows="4" placeholder="Your Article" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>