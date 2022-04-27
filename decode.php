<?php
require_once('conn.php');
$conn = getDBconnection();
session_start();
if(!isset($_SESSION['staffID']))
{
    echo "<script type='text/javascript'>alert('please login');parent.location.href='Stafflogin.php';</script>";
}

    require "vendor/autoload.php";
    $qrcode = new QrReader($_FILES['qrimage']['tmp_name']);
    $text = $qrcode->text();





?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<head>
    <meta charset="UTF-8">
    <title>Decoding QR codes</title>

    <style>
        html, body {
            height: 100%;
            width: 100%;
        }
        .bg {

            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body onload="startTime()">
<body class="bg">
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="background-color: white; padding: 10px; box-shadow: 10px 10px 50px #888;">
                <div class="panel-heading">
                    <h1> QR codes Scanner</h1>
                </div>
                <hr>

                <p><strong>Data in QR-code:</strong></p>



                <?php
                if (isset($text)) {
                    date_default_timezone_set('Asia/Hong_Kong');
                    $time = date('H:i:s');
                    $day = date('Y-m-d');
                    $conn = getDBconnection();
                    $SQL = $sql = "Select * from house_record where ticketID='$text' ";
                    $rs1 = mysqli_query($conn, $sql) or die('<div class="error">SQL command fails' . mysqli_error($conn) . "</div>");

                    while ($rc1 = mysqli_fetch_assoc($rs1)) {
                        extract($rc1);
                        if($day == $date) {
                            if ($time >= $StartTime || $time < $Endtime) {
                    echo "<table class=\"table\">
                        <thead class=\"table-dark\">
                        <tr>
                            <th scope=\"col\">ticketID</th>
                            <th scope=\"col\">MovieName</th>
                            <th scope=\"col\">SeatNumber</th>
                            <th scope=\"col\">Starttime</th>
                            <th scope=\"col\">Date</th>
                            <th scope=\"col\">House</th>
                           
                          
                        </tr>
                        </thead>
                    <tr>
                        <td>$ticketID</td>
                        <td>$movie</td>
                        <td>$seatID</td>
                        <td>$StartTime</td>
                        <td>$date</td>
                        <td>$house</td>
                   
                        
                        </tr>
                        

                    </table>";
                                
                            }
                            else{
                                echo "<script type='text/javascript'>alert('not now');parent.location.href='ScanPage.php';</script>";
                            }

                        }
                        else{
                            echo "<script type='text/javascript'>alert('not today');parent.location.href='ScanPage.php';</script>";
                        }









                    }
                    mysqli_free_result($rs1);
                    mysqli_close($conn);
                }
                ?>


                <hr>
                <a href="ScanPage.php">Decode Another</a>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>