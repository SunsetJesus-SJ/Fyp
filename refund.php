<?php
    require_once('conn.php');
    extract($_GET);
     $conn = getDBconnection();

    $sql = "UPDATE house_record Set
            Email = '',
            ticketID ='',
            position ='1' WHERE branchSeatID ='$branchSeatID'";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $num = mysqli_affected_rows($conn);
    mysqli_close($conn);

       echo "<script type='text/javascript'>alert('The ticket refund sucessful');parent.location.href='HouseInfoPage.php';</script>";

?>
    