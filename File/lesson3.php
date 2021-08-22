<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>File Upload</title>
  </head>
  <body>
    

 
 <div class="container">
     <h1>File Upload</h1>
<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fileupload">
  </div>

  <br>

  <button type="submit" name="file_upload" class="btn btn-primary">File Upload</button>
</form>

 </div>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


  </body>
</html>


<?php

if(isset($_POST['file_upload'])){

$save_file = "images/".$_FILES['fileupload']['name'];

    move_uploaded_file($_FILES['fileupload']['tmp_name'],$save_file);
}




?>