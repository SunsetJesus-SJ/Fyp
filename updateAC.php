<?php
    require_once('conn.php');
    extract($_POST);
     $conn = getDBconnection();

    $sql = "UPDATE staffaccount Set
            Email ='$Email',
            Tel ='$Tel',
            Password ='$Password',
            Address ='$Address' WHERE StaffID ='$StaffID'";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $num = mysqli_affected_rows($conn);
    mysqli_close($conn);
 
       echo "<script type='text/javascript'>alert('Your Account is Update');parent.location.href='staffAC.php';</script>";

?>
    