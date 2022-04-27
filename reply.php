
<?php
   require_once('conn.php');
    extract($_GET);
    $conn = getDBconnection()
or die(mysqli_connect_error());
    $sql = "DELETE FROM custsug WHERE ID='$ID';";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $num = mysqli_affected_rows($conn);
    mysqli_close($conn);
 
         
    
?>
<html>
<body onload="myFunction()">
    <br />
    <h1 align="center" valign="center">Reply successful!Redirect to main Page after 3 seconds</h1>

    <script>

        function myFunction() {
            setTimeout(myTimeout1t1, 3000)


            function myTimeout1t1() {
                parent.location.href = 'MainPage.php';
            }
        }
    </script>

</body>
</html>
