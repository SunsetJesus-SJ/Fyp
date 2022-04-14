<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $pwd = "";
    $db = "movieinfo";

    function getDBconnection(){
        global $hostname, $username, $pwd, $db;
        $conn = mysqli_connect($hostname, $username, $pwd, $db) or die(mysqli_connect_error()) or die(mysqli_connect_error());
        return $conn;
    }

    function closeDBconnection($conn){
        mysqli_close($conn);
    }

    function redirect($url) {
      ob_start();
      header('Location: '.$url);
      ob_end_flush();
      die();
    }

    $conn =  getDBconnection();
    $movieName = mysqli_real_escape_string($conn, $_POST['movieName']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $version = mysqli_real_escape_string($conn, $_POST['version']);
    $rate = mysqli_real_escape_string($conn, $_POST['rate']);
    $language = mysqli_real_escape_string($conn, $_POST['language']);
    $releaseDate = mysqli_real_escape_string($conn, $_POST['releaseDate']);
    $Duration = mysqli_real_escape_string($conn, $_POST['Duration']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $director = mysqli_real_escape_string($conn, $_POST['director']);
    $ytUrl = mysqli_real_escape_string($conn, $_POST['ytUrl']);
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    echo $target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      }
      
      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      
      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
      
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }
      
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
      $img = $target_file;
    $sql = "INSERT INTO movie (MovieID, MovieName, Type, MovieRating, Version, Languages, ReleaseDate, Duration, Description, Image, Director, video_url) VALUES 
    (NULL, '{$movieName}', '{$type}', '{$rate}', '{$version}', '{$language}', '{$releaseDate}', '{$Duration}', '{$description}', '{$img}', '{$director}', '{$ytUrl}')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        $last_id = $conn->insert_id;
        closeDBconnection($conn);
        redirect("../HTML/movieReference.php"."?movieID=".$last_id);
        
    } else {
        echo "<br>Error: " . $sql . "<br>" . $conn->error;
        closeDBconnection($conn);
    }
    
    
?>