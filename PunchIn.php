 <?php
  require_once('conn.php');
   extract($_POST);
  $conn = getDBconnection();   
  if (isset($_POST['PunchIn'])){
    $Time = $_POST['time'];
    $Date = $_POST['date'];
    $CheckID = $_POST['CheckID'];
    $SQL ="INSERT INTO PunchIn (StaffID,Date,CheckIntime)VALUES ('$CheckID','$Date', '$Time')";
                                mysqli_query($conn, $SQL) or die (mysqli_error($conn));                    
       $num = mysqli_affected_rows($conn);
          mysqli_close($conn);
        if ($num == 1  ) {
            echo "<script type='text/javascript'>alert('Your Account is Update');parent.location.href='staffAC.php';</script>";
        }
       
}
        
 
    
              
?>