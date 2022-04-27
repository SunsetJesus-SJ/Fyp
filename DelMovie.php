<?php
   require_once('conn.php');
    extract($_GET);
    $conn = getDBconnection()
or die(mysqli_connect_error());
     $sql3 = "DELETE FROM moviecast WHERE MovieID='$MovieID'";
    mysqli_query($conn, $sql3) or die(mysqli_error($conn));

 
  
?>
<?php
    $sql2 = "DELETE FROM movietag WHERE MovieID='$MovieID'";
    mysqli_query($conn, $sql2) or die(mysqli_error($conn));



    
?>
<?php

       $sql = "DELETE FROM movie WHERE MovieID='$MovieID'";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $num = mysqli_affected_rows($conn);
    mysqli_close($conn);
    if ($num == 1){
        header("Location:MovieInfoPage.php");
    }
?>