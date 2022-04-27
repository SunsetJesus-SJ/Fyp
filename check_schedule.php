<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/check_schedule.css">
  <style>
    body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
    }

    h3 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 20px;
        margin-bottom: 10px;
    }

    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
    }

    i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    li {
      float: left;
      color: red;
      font-family: "Nunito Sans", "Helvetica Neue", sans-serif;

      font-size: 20px;
      margin: 0;
    }

    .card {
        background: white;
        width: 50%;
        padding: 150px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        /* float: left; */
        margin: 0 auto;

    }
    
    .next-btn {
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px rgb(8, 73, 22);
    }

    .next-btn:hover {
        background-color: rgb(17, 128, 36);
    }

    .next-btn:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
</style>
</head>

<body>
  <?php

    // include "PHP/getHouseInfo.php";
    $ID = $_GET["branchSeatID"];
    // $StartTime = $_GET["StartTime"];
    // echo $ID;
    // echo $StartTime;

    $hostname = "127.0.0.1";
    $username = "root";
    $pwd = "";
    $db = "fyp_ticket";

    $conn = mysqli_connect("127.0.0.1", "root", "", "fypdb")
            or die(mysqli_connect_error());
            $SQL = "SELECT * FROM `house_record` WHERE `branchSeatID` = $ID";
            $rs = mysqli_query($conn, $SQL);
            while ($rc = mysqli_fetch_assoc($rs)){
            extract($rc);
              // echo "<br>";
              // echo $movie;
              // echo "<br>";
              // echo $house;
              // echo "<br>";
              // echo $seatID;
              // echo "<br>";
              // echo $date;
              // echo "<br>";
              // echo $StartTime;
              // echo "<br>";
              // echo $EndTime;
              // echo "<br>";
              // echo $branchSeatID;
              // echo "<br>";
              // echo $branchID;
            }
            // var_dump($rc);
            mysqli_free_result($rs);
            mysqli_close($conn);  
  ?>
  <div style="display: none;">
    <a class="time" role="button" style="color: black ; text-decoration: none;"
        href="check_schedule.php?branchSeatID=<?php echo $branchSeatID?>"><?php echo $StartTime?></a>
  </div>
  
  <?php
        // $link = "http://127.0.0.1/FPY_new/Fyp/ticketing/seat_plan1.php?";
        // $movie_1 = "dwaduwhadu";
        // $movie_2 = $link.$movie1;
        // echo $movie_1
          // if ($house == 1) {
          //     header("Location: seat_plan1.php");
          //     function redirect($url, $house = 1) {
          //       header('Location: '  . $url, $house);
          //       die();
          //     }

          //   redirect($movie_2);
              
          // }elseif ($house == 2){
          //   header("Location: seat_plan2.php");
          // }else {
          //   header("Location: seat_plan3.php");
          // }
  ?>

  <form action="seat_plan<?php echo $house?>.php" method="get">  
 
          <br>
        <!-- style="display: none" -->
            <center  style="display: none">
              <br>
              <input type="text" name="movie" value="<?php echo $movie?>">
              <input type="text" name="house" value="<?php echo $house?>">
              <input type="text" name="seatID" value="<?php echo $seatID?>">
              <input type="text" name="date" value="<?php echo $date?>">
              <input type="text" name="startTime" value="<?php echo $StartTime?>">
              <input type="text" name="endTime" value="<?php echo $EndTime?>">
              <input type="text" name="branchSeatID" value="<?php echo $branchSeatID?>">
              <input type="text"  name="branchID" value="<?php echo $branchID?>">
              <br>
              
            </center>
         
            
        



    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark"><img src="img/covid_img.jfif"></i>
        </div>
        <br>
        <h3>The latest government regulations (Update:19 Apr 2022)</h5>
        <br>
        <p>According to thePrevention and Control of Disease (Requirements and Directions) (Business andPremises) Regulation (Cap. 599F), 
              here are the latest arrangements from 21 April to 29 April 2022:</p>
        <br>
        <li>No eating or drinking inside a house is allowed.</li>   
        <li>Upon entering the cinema, all patrons must wear a face mask and submit to a temperature check.</li>
        <br>
        <li>Alternate seating will be implemented, and must be observed, at all screenings.</li>
        <br>
        <li>"LeaveHomeSafe" mandatory at cinema</li>
        <br>
        <li>Present the valid printed COVID-19 vaccination record or Medical Exemption Certificate with QR code, or the relevant QR code stored in the 'LeaveHomeSafe', 
              “iAM Smart” or “eHealth” mobile application on their mobile device for scanning using the latest version of the “QR Code Verification Scanner” 
                mobile application developed by the Government, upon entering the cinema</li>
        <br>


        <br>
        <br>
        <br>
        <button class="next-btn" >I Argee</button>

    </div>
  </form>
</body>

</html>
