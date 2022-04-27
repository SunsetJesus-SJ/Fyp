<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $pwd = "";
    $db = "fyp_ticket";

    

    function getDBconnection(){
        global $hostname, $username, $pwd, $db;
        $conn = mysqli_connect($hostname, $username, $pwd, $db) or die(mysqli_connect_error()) or die(mysqli_connect_error());
        return $conn;
    }

    function closeDBconnection($conn){
        mysqli_close($conn);
    }

    function getHouseInfo(){

        date_default_timezone_set("Asia/Taipei");
        // $today = date("Ymd");
        $today = '20220426';
        $time =  date("H:i:s"); 
        // $time =  '094400';

        // StartTime > $time
        $conn =  getDBconnection();
        $sql = "SELECT DISTINCT `movie`,`StartTime`,`branchSeatID`,`branchID` FROM `house_record` WHERE `seatID` = 'A1' AND date = '$today' AND branchID = 'TY'
                    ORDER BY `house_record`.`StartTime` ASC";

        $rs1 = mysqli_query($conn,$sql) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        $num = mysqli_num_rows($rs1);
        if($num == 0){
            echo "Number of records selected = $num <br>";
        }else{
            closeDBconnection($conn);
            return $rs1;
        }
        return $rs1;
    } 
?>
