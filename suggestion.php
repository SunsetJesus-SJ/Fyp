<?php
  require_once('conn.php');
 extract($_POST);  
   if (isset($_POST['recommend'])){
  $conn = getDBconnection();      
  $email=$_POST["email"];
  $name=$_POST["name"];
  $Suggestion=$_POST["Suggestion"];
              
    $SQL ="INSERT INTO custsug (Suggestion,Name,email) 
                  VALUES ('$Suggestion','$name', '$email')";
                                mysqli_query($conn, $SQL) or die (mysqli_error($conn));                    
       $num = mysqli_affected_rows($conn);
          mysqli_close($conn);
     echo "<script type='text/javascript'>alert('Your recommend is Created');parent.location.href='index.php';</script>";
        
      

    
    
      }
    
?>