<html>
<head>
    <title>Pass JS array to PHP.</title>
    <script src="jslib/jquery-1.11.1.js"></script>

</head>

<body>
    <?php

       
        $str = json_decode($_POST['seatsInForm'], true);
        $seat = implode(" ",$str);
        $newStatus = 'F';
        $abc = $str[0];
        $total = count($str);

        echo $str[0];
        echo $seat;
        echo $total;
         // var_dump($_POST);

        
        // extract($_POST);

        for ($x = 0; $x <=$total-1; $x++){
            $conn = mysqli_connect("127.0.0.1", "root", "", "fyp_ticket")
            or die(mysqli_connect_error());

            $sql = "UPDATE seat_plan1 SET status = '$newStatus', type = 'student' WHERE seatID = '$str[$x]'";
            mysqli_query($conn, $sql) or die(mysqli_error($conn));
            $num = mysqli_affected_rows($conn);
            mysqli_close($conn);
        }
       

        
        
    ?>

</body>

<script>
    // var selectedSeat = document.getElementById('seatform').value;
    
</script>


</html>