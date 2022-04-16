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

    function getMovieName($ID = 1){
        $conn =  getDBconnection();
        $sql = "SELECT MovieName FROM movie WHERE MovieID = $ID";
        $rs1 = mysqli_query($conn,$sql) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        $num = mysqli_num_rows($rs1);
        if($num == 0){
            echo "Number of records selected = $num <br>";
        }else{
            while($rec1 = mysqli_fetch_assoc($rs1)){
                extract($rec1);
            }
        }
        closeDBconnection($conn);
        return $MovieName;
    }   
?>