<html>

<head>
	<title>Pass JS array to PHP.</title>
	<script src="jslib/jquery-1.11.1.js"></script>

</head>
    
<body>
    <?php
        $str = json_decode($_POST['seatform'], true);
        print_r($str);
        // $conn = mysqli_connect("127.0.0.1", "root", "", "fyp_ticket")
        // or die(mysqli_connect_error());
        // extract($_POST);
        // $sql = "UPDATE customer SET customerEmail='$custEmail',
        //             customerName='$custName',
        //             customerPassword='$custPswd',
        //             phoneNumber='$custPhone',
        //             address='$custAddress' WHERE customerName='$custName'";
        // mysqli_query($conn, $sql) or die(mysqli_error($conn));
        // $num = mysqli_affected_rows($conn);
        // mysqli_close($conn);
        // if ($num == 1) {
        //     header("Location: profile.php");
        // }else{
        // header("Location: profile.php");
        // }

    ?>

</body>

</html>