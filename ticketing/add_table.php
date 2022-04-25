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

        // $seat = json_decode($_POST['seat'], true);
        // $ticketIDForm = json_decode($_POST['ticketIDForm'], true);
        // $seatType = json_decode($_POST['seatType'], true);
        // $total = count($seat);

        date_default_timezone_set('Asia/Taipei');
        $date = date('ymd');
        $time = date('G:i:s');

        $a = 'A';
        $b = 'B';
        $c = 'C';
        $d = 'D';
        $e = 'E';
        $f = 'F';
        $g = 'G';
        $h = 'H';
        $i = 'I';
        $branch = 'ty03';

        for ($x = 1; $x <=9; $x++){

            $conn = mysqli_connect("127.0.0.1", "root", "", "fyp_ticket")
            or die(mysqli_connect_error());
            // extract($_POST);
            $A = $i.$x;
            $id = $branch.$A;
            $sql = "INSERT cwb_house_record SET 
                        movie='Spider-Man: No Way Home',
                        house='03',
                        seatID='$A',
                        date='2022-04-19',
                        time='18:30:00',
                        email='',
                        ticketID='',
                        type='',
                        position='',
                        branchSeatID='$id'";
            mysqli_query($conn, $sql) or die(mysqli_error($conn));
            $num = mysqli_affected_rows($conn);
            mysqli_close($conn);
            $A = '';
            $id = '';
        }
    
    ?>
</body>
</html>

SELECT * FROM `cwb_house_record`
WHERE `house` LIKE '03'
ORDER BY `seatID` ASC