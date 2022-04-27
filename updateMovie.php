<?php
    require_once('conn.php');
    extract($_POST);
     $conn = getDBconnection();
     $Image=$_FILES['Image']['name'];
    $sql = "UPDATE movie Set
            MovieName='$movieName',
            Type ='$type',
            Version ='$version',
            MovieRating ='$rate',
            Languages = '$language',
            ReleaseDate = '$releaseDate',
            Duration = '$Duration',
            Description = '$description',
            Director = '$director',
            video_url = '$ytUrl'
            WHERE MovieID='$MovieID'";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $num = mysqli_affected_rows($conn);
    mysqli_close($conn);

      echo "<script type='text/javascript'>alert('The data is Update');parent.location.href='MovieInfoPage.php';</script>";

?>
    