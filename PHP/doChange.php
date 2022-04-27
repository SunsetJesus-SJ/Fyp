<?php
    var_dump($_POST);
    // var_dump($_POST);
    $movie = $_POST['movie'];
    $house = $_POST["house"];
    $newseatID = $_POST["seatsInForm"];
    $oldseatID = $_POST["oldseatID"];
    $date = $_POST["date"];
    $startTime = $_POST["startTime"];
    $endTime = $_POST["endTime"];
    $branchSeatID = $_POST["branchSeatID"];
    $branchID = $_POST["branchID"];
    $ticketID = $_POST['ticketID'];
    $type = $_POST['type'];
    $email = $_POST['email'];

    // echo $seatID;

    // $seat = json_decode($_POST['seat'], true);
    // $ticketIDForm = json_decode($_POST['ticketIDForm'], true);
    // $seatType = json_decode($_POST['seatType'], true);
    // $total = count($seat);

    date_default_timezone_set('Asia/Taipei');
    $todate = date('ymd');
    $time = date('G:i:s');

    // var_dump($_POST);
    // echo $date;
    // echo implode(" ",$seat);
    // echo "<br>";
    // echo implode(" ",$ticketIDForm);
    // echo "<br>";
    // echo implode(" ",$seatType);
    // echo "<br>";

    // echo $movie;
    // echo "<br>";

    for ($x = 0; $x <= 1; $x++){

        $conn = mysqli_connect("127.0.0.1", "root", "", "fyp_ticket")
        or die(mysqli_connect_error());
        $sql = "UPDATE ticket_record SET 
                    seat='$newseatID',
                    refund='1'
                    where ticketID='$ticketID'";

        mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $num = mysqli_affected_rows($conn);
        mysqli_close($conn);
    }


    for ($y = 0; $y <=1; $y++){

        $conn = mysqli_connect("127.0.0.1", "root", "", "fyp_ticket")
        or die(mysqli_connect_error());
        $sql2 = "UPDATE house_record SET 
                    email='',
                    ticketID='',
                    type='',
                    position=''
                    where ticketID='$ticketID' ";


        mysqli_query($conn, $sql2) or die(mysqli_error($conn));
        $num = mysqli_affected_rows($conn);
        mysqli_close($conn);
    }

    for ($y = 0; $y <=1; $y++){

        $conn = mysqli_connect("127.0.0.1", "root", "", "fyp_ticket")
        or die(mysqli_connect_error());
        $sql2 = "UPDATE house_record SET 
                    email='$email',
                    ticketID='$ticketID',
                    type='$newseatID',
                    position='1'
                    WHERE
                    movie='$movie' AND
                    house='$house' AND
                    seatID='$newseatID' and
                    date='$date' and
                    
                    StartTime='$startTime' and
                    branchID='$branchID'
                    ";


        mysqli_query($conn, $sql2) or die(mysqli_error($conn));
        $num = mysqli_affected_rows($conn);
        mysqli_close($conn);
    }

    header('Location: http://127.0.0.1/FPY_new/Fyp/ticketing/successful.html');
    

?>


