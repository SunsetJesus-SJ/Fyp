<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $pwd = "";
    $db = "fypdb";

    
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
    $tag = mysqli_real_escape_string($conn, $_POST['tag']);
    $tagName = mysqli_real_escape_string($conn, $_POST['tagName']);
    if(isset($_POST['tagDescription'])){
        $tagDescription = mysqli_real_escape_string($conn, $_POST['tagDescription']);
    }else{
        $tagDescription = "null";
    }
    $movieID = mysqli_real_escape_string($conn, $_POST['movieID']);

    if($tag == 'existTag'){
        $sql = "INSERT INTO movietag (MovieID, TagID, No) VALUES ('{$movieID}', '{$tagName}', NULL);";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            $last_id = $conn->insert_id;
            closeDBconnection($conn);
             echo "<script type='text/javascript'>parent.location.href='http://127.0.0.1/fyp/MovieInfoPage.php';</script>";
            
        } else {
            echo "<br>Error: " . $sql . "<br>" . $conn->error;
            closeDBconnection($conn);
        }
    }else if($tag == 'createTag'){
        //actor
        $sql = "INSERT INTO tagtable (TagID, TagName, description) VALUES (NULL, '{$tagName}', '{$tagDescription}')";
        if ($conn->query($sql) === TRUE) {
            echo "New tag record created successfully";
            $last_id = $conn->insert_id;
            $sql = "INSERT INTO movietag (MovieID, TagID, No) VALUES ('{$movieID}', '{$last_id}', NULL);";
            //moviecast
            if ($conn->query($sql) === TRUE) {
                echo "New tag record created successfully";
            } else {
                echo "<br>Error: " . $sql . "<br>" . $conn->error;
                closeDBconnection($conn);
            }
            //moviecast end
            closeDBconnection($conn);
            echo "<script type='text/javascript'>parent.location.href='http://127.0.0.1/fyp/MovieInfoPage.php';</script>";
            
        } else {
            echo "<br>Error: " . $sql . "<br>" . $conn->error;
            closeDBconnection($conn);
        }
        
    }
    

    closeDBconnection($conn);
    
?>