 <?php
  require_once('conn.php');
 extract($_POST);  
   if (isset($_POST['Create'])){
  $conn = getDBconnection();      
    $InputName=$_POST['InputName'];
    $InputPosition=$_POST['InpurPosition'];
    $InputGender=$_POST['InpurGender'];
    $InputTel=$_POST['InputTel'];
    $IntputPassword=$_POST['InputPassword'];
    $InputAddress=$_POST['InputAddress'];
    $InputEmail=$_POST['InputEmail'];
    $branch=$_POST['branch'];                    
    $SQL ="INSERT INTO staffaccount (Name,Position,Gender,Email,Tel,Password,Address,branch) 
                  VALUES ('$InputName','$InputPosition', '$InputGender', '$InputEmail', '$InputTel','$IntputPassword', '$InputAddress','$branch')";
                                mysqli_query($conn, $SQL) or die (mysqli_error($conn));                    
       $num = mysqli_affected_rows($conn);
          mysqli_close($conn);
        if ($num == 1  ) {
            echo "<script type='text/javascript'>alert('Your Account is Created');parent.location.href='staffAC.php';</script>";
        }

    
    
      }
    
?>

