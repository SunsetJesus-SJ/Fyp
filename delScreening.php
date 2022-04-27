<?php
   require_once('conn.php');
    extract($_GET);
    $conn = getDBconnection()
or die(mysqli_connect_error());
    $sql = "DELETE FROM house_record WHERE movie='$movie' and house='$house' and date='$date' and StartTime ='$StartTime';";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $num = mysqli_affected_rows($conn);
    mysqli_close($conn);
 
          echo "<script type='text/javascript'>alert('Screening Deleted');parent.location.href='HouseInfoPage.php';</script>";
    
?>