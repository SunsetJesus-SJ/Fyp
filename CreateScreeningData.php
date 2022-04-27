 <?php
  require_once('conn.php');
 extract($_POST);  
   $day = date('Y-m-d');
  $conn = getDBconnection();   
   $sql2 =  "Select * from house_record";
                  $rs2 = mysqli_query($conn,$sql2) or die('<div class="error">SQL command fails'.mysqli_error($conn)."</div>");
                    $rc2 = mysqli_fetch_assoc($rs2);
                    @extract($rc2);
    $ScreeningDate=$_POST['ScreeningDate'];
    $movie=$_POST['movie'];
    $ScreeningDate=$_POST['ScreeningDate'];
    $SScreeningtime=$_POST['SScreeningtime'];
    $duration=$_POST['duration'];
    $duration2="+$duration minutes";
    $House=$_POST['House'];
    $Branch=$_POST['Branch'];
    $EEndTime= date('H:i:s',strtotime($SScreeningtime.$duration2));
         if($day >= $ScreeningDate) {
           echo "<script type='text/javascript'>alert('It is past time');parent.location.href='HouseInfoPage.php';</script>";
          }
          else{
     if (($SScreeningtime >=$StartTime ||  $EndTime <= $EEndTime) && $date == $ScreeningDate && $branchID ==$Branch && $house == $House) {
    
         echo "<script type='text/javascript'>alert('Already had Screening');parent.location.href='HouseInfoPage.php';</script>";
     }
     else
     {
        
    If ($House == '1'){
    $SQL = "INSERT INTO house_record (movie,house,seatID,date,StartTime,EndTime,branchID)
             Select  '$movie','$House',seatID,'$ScreeningDate','$SScreeningtime','$EEndTime', '$Branch'
             From seat_plan1";
             mysqli_query($conn, $SQL) or die (mysqli_error($conn));                    
       $num = mysqli_affected_rows($conn);
          mysqli_close($conn);
         echo "<script type='text/javascript'>alert('Screening Created');parent.location.href='HouseInfoPage.php';</script>";
     }
     elseif  ($House == '2'){ 
         $SQL = "INSERT INTO house_record (movie,house,seatID,date,StartTime,EndTime,branchID)
             Select  '$movie','$House',seatID,'$ScreeningDate','$SScreeningtime','$EEndTime', '$Branch'
             From seat_plan2";
             mysqli_query($conn, $SQL) or die (mysqli_error($conn));                    
       $num = mysqli_affected_rows($conn);
          mysqli_close($conn);
       echo "<script type='text/javascript'>alert('Screening Created');parent.location.href='HouseInfoPage.php';</script>";
           
    }
     elseif  ($House == '3'){ 
         $SQL = "INSERT INTO house_record (movie,house,seatID,date,StartTime,EndTime,branchID)
             Select  '$movie','$House',seatID,'$ScreeningDate','$SScreeningtime','$EEndTime', '$Branch'
             From seat_plan3";
             mysqli_query($conn, $SQL) or die (mysqli_error($conn));                    
       $num = mysqli_affected_rows($conn);
          mysqli_close($conn);
       echo "<script type='text/javascript'>alert('Screening Created');parent.location.href='HouseInfoPage.php';</script>";
           
    }
    }
    }

      
  
?>

