<?php
    include "conn.php";
    $conn =  getDBconnection();
    $sql = "SELECT * FROM movie WHERE MovieID = 3";
    $rs = mysqli_query($conn,$sql) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
    $num = mysqli_num_rows($rs);
    if($num == 0){
        echo "Number of records selected = $num <br>";
    }else{
?>       
<?php 
    while($rec = mysqli_fetch_assoc($rs)){
        extract($rec);
?>
    
<?php
    }
?>

<?php
    }
    mysqli_close($conn);
?>
