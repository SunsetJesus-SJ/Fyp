<?php
require_once('conn.php');
$conn = getDBconnection();
session_start();
 $CheckID=$_SESSION['staffID'];
          $sql =  "Select Position from staffaccount where StaffID= $CheckID";
           $rs = mysqli_query($conn,$sql) or die('<div class="error">SQL command fails'.mysqli_error($conn)."</div>");
           $rc = mysqli_fetch_assoc($rs);
           extract($rc);
    if (isset($_GET['account'])) {
    if($Position!=1 and $Position!=3 )  
         echo "<script type='text/javascript'>alert('Your no a full time or Manager');parent.location.href='MainPage.php';</script>";            
     else 
        echo "<script type='text/javascript'>parent.location.href='Accountpage.php';</script>";
    }
    elseif (isset($_GET['movieinfo'])) {
    if($Position!=1 and $Position!=3 )
     echo "<script type='text/javascript'>alert('Your no a full time or Manager');parent.location.href='MainPage.php';</script>";
     else 
     echo "<script type='text/javascript'>parent.location.href='MovieInfoPage.php';</script>";
        }
     elseif (isset($_GET['houseinfo'])) {
    if($Position!=1 and $Position!=3 )
     echo "<script type='text/javascript'>alert('Your no a full time or Manager');parent.location.href='MainPage.php';</script>";
     else 
     echo "<script type='text/javascript'>parent.location.href='HouseInfoPage.php';</script>";
        }



      mysqli_close($conn);
?>

