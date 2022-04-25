<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <!-- <link rel="stylesheet" href="navigationBar.css"> -->
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <!-- to import the w3.js lib -->
    <!-- <link rel="stylesheet" href="profile.css" /> -->
</head>

<body>

    <?php 

        // var_dump($_POST);
        $movie = $_POST['movie'];
        $house = $_POST["house"];
        $seatID = $_POST["seatID"];
        $date = $_POST["date"];
        $startTime = $_POST["startTime"];
        $endTime = $_POST["endTime"];
        $branchSeatID = $_POST["branchSeatID"];
        $branchID = $_POST["branchID"];

        $seat = json_decode($_POST['seat'], true);
        $ticketIDForm = json_decode($_POST['ticketIDForm'], true);
        $seatType = json_decode($_POST['seatType'], true);
        $total = count($seat);

        date_default_timezone_set('Asia/Taipei');
        $date = date('ymd');
        $time = date('G:i:s');

        var_dump($_POST);
        echo $date;
        echo implode(" ",$seat);
        echo "<br>";
        echo implode(" ",$ticketIDForm);
        echo "<br>";
        echo implode(" ",$seatType);
        echo "<br>";

        echo $movie;
        echo "<br>";

        for ($x = 0; $x <=$total-1; $x++){

            $conn = mysqli_connect("127.0.0.1", "root", "", "fyp_ticket")
            or die(mysqli_connect_error());
            $sql = "INSERT ticket_record SET movie='$movie',
                        house='$house',
                        seat='$seat[$x]',
                        date='$date',
                        time='$time',
                        email='lapyanli@gmail.com',
                        amount='0',
                        ticketID='$ticketIDForm[$x]',
                        type='$seatType[$x]',
                        branchID='$branchID'";

            mysqli_query($conn, $sql) or die(mysqli_error($conn));
            $num = mysqli_affected_rows($conn);
            mysqli_close($conn);
        }


        for ($y = 0; $y <=$total-1; $y++){

            $conn = mysqli_connect("127.0.0.1", "root", "", "fyp_ticket")
            or die(mysqli_connect_error());
            $sql2 = "UPDATE house_record SET 
                        email='lapyanli@gmail.com',
                        ticketID='$ticketIDForm[$y]',
                        type='$seatType[$y]',
                        position='1'
                        WHERE
                        movie='$movie' AND
                        house='$house' AND
                        seatID='$seat[$y]' AND
                        date='$date' AND
                        StartTime='$startTime' AND
                        branchID='$branchID' ";


            mysqli_query($conn, $sql2) or die(mysqli_error($conn));
            $num = mysqli_affected_rows($conn);
            mysqli_close($conn);
        }

        

        

    ?>

</body>
</html>
