<?php
   require_once('conn.php');
    extract($_GET);
    $conn = getDBconnection()
or die(mysqli_connect_error());
    $sql = "DELETE FROM staffaccount WHERE StaffID='$StaffID';";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $num = mysqli_affected_rows($conn);
    mysqli_close($conn);
    if ($num == 1){
        header("Location:staffAC.php");
    }
?>