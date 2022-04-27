<?php
    require_once('conn.php');
    extract($_GET);
             
    $conn = getDBconnection();
                          
    $SQL = "SELECT * FROM memberaccount WHERE MemberID=$MemberID";
    $rs = mysqli_query($conn, $SQL);
    $rc = mysqli_fetch_assoc($rs);
    extract($rc);
    $balance = $PointBalance - $Point;
    if(isset($_GET['memberID'])){
    $sql = "UPDATE memberaccount Set
            PointBalance ='$balance' WHERE MemberID ='$MemberID'";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $num = mysqli_affected_rows($conn);
    mysqli_close($conn);
    if ($num == 1){
       echo "<script type='text/javascript'>alert('Your Account is Update');parent.location.href='staffAC.php';</script>";
}
  echo "<script type='text/javascript'>alert('Your Account is Update');parent.location.href='FoodShop.php';</script>";
}
?>
    