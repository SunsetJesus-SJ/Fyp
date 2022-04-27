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
    $actor = mysqli_real_escape_string($conn, $_GET['actor']);
    $actorName = mysqli_real_escape_string($conn, $_GET['actorName']);
    $movieID = mysqli_real_escape_string($conn, $_GET['movieID']);

    if($actor == 'existActor'){
        $sql = "INSERT INTO moviecast (MovieID, actorID, No) VALUES ('{$movieID}', '{$actorName}', NULL);";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            $last_id = $conn->insert_id;
            closeDBconnection($conn);
            redirect("../HTML/movieReference.php"."?movieID=".$movieID);
            
        } else {
            echo "<br>Error: " . $sql . "<br>" . $conn->error;
            closeDBconnection($conn);
        }
    }else if($actor == 'createActor'){
        //actor
        $sql = "INSERT INTO actor (actorID, actorName) VALUES (NULL, '{$actorName}')";
        if ($conn->query($sql) === TRUE) {
            echo "New actor record created successfully";
            $last_id = $conn->insert_id;
            $sql = "INSERT INTO moviecast (MovieID, actorID, No) VALUES ('{$movieID}', '{$last_id}', NULL);";
            //moviecast
            if ($conn->query($sql) === TRUE) {
                echo "New moviecast record created successfully";
            } else {
                echo "<br>Error: " . $sql . "<br>" . $conn->error;
                closeDBconnection($conn);
            }
            //moviecast end
            closeDBconnection($conn);
            redirect("../HTML/movieReference.php"."?movieID=".$movieID);
            
        } else {
            echo "<br>Error: " . $sql . "<br>" . $conn->error;
            closeDBconnection($conn);
        }
        
    }
    

    closeDBconnection($conn);
    
?>