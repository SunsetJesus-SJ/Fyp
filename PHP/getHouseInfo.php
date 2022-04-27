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

    function getMovieDate(){
        
        $name = $_GET['movie'];
        // echo $name;

        $date = date("ymd");
        $conn =  getDBconnection();

        $sql = "SELECT DISTINCT `date` FROM `house_record` WHERE `seatID` = 'A1' AND movie= '$name' AND `date`>= '$date' ORDER BY `house_record`.`date` ASC LIMIT 3";
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

    function getTY_1_TimeInfo(){
        $name = $_GET['movie'];
        date_default_timezone_set("Asia/Taipei");
        $date = date("ymd");
        $datelist = [];
        $conn =  getDBconnection();
 
        $sql_date = "SELECT DISTINCT `date` FROM `house_record` WHERE `seatID` = 'A1' AND movie= '$name' AND `date`>= '$date' ORDER BY `house_record`.`date` ASC LIMIT 3";
        $getDate = mysqli_query($conn,$sql_date) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        while ($rc = mysqli_fetch_assoc($getDate)){
            extract($rc);
            $datelist[] = $date;
            
        }   
        // echo implode(" ",$datelist);
        // echo "<br>";
        $date2 = $datelist[0];
        // echo $date2;

        $sql = "SELECT `movie`,`StartTime`,`branchSeatID`,`branchID` FROM `house_record` 
                WHERE `seatID` = 'A1' AND
                    movie= '$name' AND
                    date = '$date2' AND
                    branchID = 'TY'
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

    function getTY_2_TimeInfo(){
        $name = $_GET['movie'];
        
        date_default_timezone_set("Asia/Taipei");
        $date = date("ymd");
        $datelist = [];
        $conn =  getDBconnection();
 
        $sql_date = "SELECT DISTINCT `date` FROM `house_record` WHERE `seatID` = 'A1' AND movie= '$name' AND `date`>= '$date' ORDER BY `house_record`.`date` ASC LIMIT 3";
        $getDate = mysqli_query($conn,$sql_date) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        while ($rc = mysqli_fetch_assoc($getDate)){
            extract($rc);
            $datelist[] = $date;
            
        }   
        // echo implode(" ",$datelist);
        // echo "<br>";
        $date2 = $datelist[1];
        // echo $date2;

        $sql = "SELECT `movie`,`StartTime`,`branchSeatID`,`branchID` FROM `house_record` 
                WHERE `seatID` = 'A1' AND
                    date = '$date2' AND
                    branchID = 'TY'
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

    function getTY_3_TimeInfo(){
        $name = $_GET['movie'];
        
        date_default_timezone_set("Asia/Taipei");
        $date = date("ymd");
        $datelist = [];
        $conn =  getDBconnection();
 
        $sql_date = "SELECT DISTINCT `date` FROM `house_record` WHERE `seatID` = 'A1' AND movie= '$name' AND `date`>= '$date' ORDER BY `house_record`.`date` ASC LIMIT 3";
        $getDate = mysqli_query($conn,$sql_date) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        while ($rc = mysqli_fetch_assoc($getDate)){
            extract($rc);
            $datelist[] = $date;
            
        }   

        $date2 = $datelist[2];
        // echo $date2;

        $sql = "SELECT `movie`,`StartTime`,`branchSeatID`,`branchID` FROM `house_record` 
                WHERE `seatID` = 'A1' AND
                    date = '$date2' AND
                    branchID = 'TY'
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

    function getMK_1_TimeInfo(){
        $name = $_GET['movie'];

        date_default_timezone_set("Asia/Taipei");
        $date = date("ymd");
        $datelist = [];
        $conn =  getDBconnection();
 
        $sql_date = "SELECT DISTINCT `date` FROM `house_record` WHERE `seatID` = 'A1' AND movie= '$name' AND `date`>= '$date' ORDER BY `house_record`.`date` ASC LIMIT 3";
        $getDate = mysqli_query($conn,$sql_date) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        while ($rc = mysqli_fetch_assoc($getDate)){
            extract($rc);
            $datelist[] = $date;
            
        }   
        // echo implode(" ",$datelist);
        // echo "<br>";
        $date2 = $datelist[0];
        // echo $date2;

        $sql = "SELECT `movie`,`StartTime`,`branchSeatID`,`branchID` FROM `house_record` 
                WHERE `seatID` = 'A1' AND
                    date = '$date2' AND
                    branchID = 'MK'
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

    function getMK_2_TimeInfo(){
        $name = $_GET['movie'];

        date_default_timezone_set("Asia/Taipei");
        $date = date("ymd");
        $datelist = [];
        $conn =  getDBconnection();
 
        $sql_date = "SELECT DISTINCT `date` FROM `house_record` WHERE `seatID` = 'A1' AND movie= '$name' AND `date`>= '$date' ORDER BY `house_record`.`date` ASC LIMIT 3";
        $getDate = mysqli_query($conn,$sql_date) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        while ($rc = mysqli_fetch_assoc($getDate)){
            extract($rc);
            $datelist[] = $date;
            
        }   
        // echo implode(" ",$datelist);
        // echo "<br>";
        $date2 = $datelist[1];
        // echo $date2;

        $sql = "SELECT `movie`,`StartTime`,`branchSeatID`,`branchID` FROM `house_record` 
                WHERE `seatID` = 'A1' AND
                    date = '$date2' AND
                    branchID = 'MK'
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

    function getMK_3_TimeInfo(){
        $name = $_GET['movie'];

        date_default_timezone_set("Asia/Taipei");
        $date = date("ymd");
        $datelist = [];
        $conn =  getDBconnection();
 
        $sql_date = "SELECT DISTINCT `date` FROM `house_record` WHERE `seatID` = 'A1' AND movie= '$name' AND `date`>= '$date' ORDER BY `house_record`.`date` ASC LIMIT 3";
        $getDate = mysqli_query($conn,$sql_date) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        while ($rc = mysqli_fetch_assoc($getDate)){
            extract($rc);
            $datelist[] = $date;
            
        }   
        // echo implode(" ",$datelist);
        // echo "<br>";
        $date2 = $datelist[2];
        // echo $date2;

        $sql = "SELECT `movie`,`StartTime`,`branchSeatID`,`branchID` FROM `house_record` 
                WHERE `seatID` = 'A1' AND
                    date = '$date2' AND
                    branchID = 'MK'
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

    function getCWB_1_TimeInfo(){
        $name = $_GET['movie'];

        date_default_timezone_set("Asia/Taipei");
        $date = date("ymd");
        $datelist = [];
        $conn =  getDBconnection();
 
        $sql_date = "SELECT DISTINCT `date` FROM `house_record` WHERE `seatID` = 'A1' AND  movie= '$name' AND `date`>= '$date' ORDER BY `house_record`.`date` ASC LIMIT 3";
        $getDate = mysqli_query($conn,$sql_date) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        while ($rc = mysqli_fetch_assoc($getDate)){
            extract($rc);
            $datelist[] = $date;
            
        }   
        // echo implode(" ",$datelist);
        // echo "<br>";
        $date2 = $datelist[0];
        // echo $date2;

        $sql = "SELECT `movie`,`StartTime`,`branchSeatID`,`branchID` FROM `house_record` 
                WHERE `seatID` = 'A1' AND
                    date = '$date2' AND
                    branchID = 'CWB'
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
    
    function getCWB_2_TimeInfo(){
        $name = $_GET['movie'];

        date_default_timezone_set("Asia/Taipei");
        $date = date("ymd");
        $datelist = [];
        $conn =  getDBconnection();
 
        $sql_date = "SELECT DISTINCT `date` FROM `house_record` WHERE `seatID` = 'A1' AND movie= '$name' AND `date`>= '$date' ORDER BY `house_record`.`date` ASC LIMIT 3";
        $getDate = mysqli_query($conn,$sql_date) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        while ($rc = mysqli_fetch_assoc($getDate)){
            extract($rc);
            $datelist[] = $date;
            
        }   
        // echo implode(" ",$datelist);
        // echo "<br>";
        $date2 = $datelist[1];
        // echo $date2;

        $sql = "SELECT `movie`,`StartTime`,`branchSeatID`,`branchID` FROM `house_record` 
                WHERE `seatID` = 'A1' AND
                    date = '$date2' AND
                    branchID = 'CWB'
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

    function getCWB_3_TimeInfo(){
        $name = $_GET['movie'];

        date_default_timezone_set("Asia/Taipei");
        $date = date("ymd");
        $datelist = [];
        $conn =  getDBconnection();
 
        $sql_date = "SELECT DISTINCT `date` FROM `house_record` WHERE `seatID` = 'A1' AND movie= '$name' AND `date`>= '$date' ORDER BY `house_record`.`date` ASC LIMIT 3";
        $getDate = mysqli_query($conn,$sql_date) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        while ($rc = mysqli_fetch_assoc($getDate)){
            extract($rc);
            $datelist[] = $date;
            
        }   
        // echo implode(" ",$datelist);
        // echo "<br>";
        $date2 = $datelist[2];
        // echo $date2;

        $sql = "SELECT `movie`,`StartTime`,`branchSeatID`,`branchID` FROM `house_record` 
                WHERE `seatID` = 'A1' AND
                    date = '$date2' AND
                    branchID = 'CWB'
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
