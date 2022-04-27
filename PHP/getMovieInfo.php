<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $pwd = "";
    $db = "fypdb";

    function getDBconnection(){
        global $hostname, $username, $pwd, $db;
        $conn = mysqli_connect($hostname, $username, $pwd, $db) or die(mysqli_connect_error()) or die(mysqli_connect_error());
        return $conn;
    }

    function closeDBconnection($conn){
        mysqli_close($conn);
    }

    function getMovieInfoJson($ID = 1){
        $conn =  getDBconnection();
        $sql = "SELECT movie.MovieName,movie.Description,movie.Image,movie.Director,movie.video_url,movierate.MovieRate,languagestable.Languages,languagestable.Subtitle,movietype.Type,movie.Duration,versiontable.Version FROM movie INNER JOIN movierate INNER JOIN languagestable INNER JOIN movietype INNER JOIN versiontable WHERE movie.MovieID = $ID AND movie.MovieRating = movierate.RateID AND movie.Languages = languagestable.LanguagesID AND movie.Type = movietype.TypeID AND versiontable.VersionID = movie.Version";
        $rs1 = mysqli_query($conn,$sql) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        $num = mysqli_num_rows($rs1);
        if($num == 0){
            echo "Number of records selected = $num <br>";
        }else{
            while($rec1 = mysqli_fetch_assoc($rs1)){
                extract($rec1);
                $movieInfo[] = $rec1;
            }
        }
        closeDBconnection($conn);
        return json_encode($movieInfo,JSON_PRETTY_PRINT);
    }

    function getMovieInfo($ID = 1){
        $conn =  getDBconnection();
        $sql = "SELECT movie.MovieName,movie.Description,movie.Image,movie.Director,movie.video_url,movierate.MovieRate,languagestable.Languages,languagestable.Subtitle,movietype.Type,movie.Duration,versiontable.Version FROM movie INNER JOIN movierate INNER JOIN languagestable INNER JOIN movietype INNER JOIN versiontable WHERE movie.MovieID = $ID AND movie.MovieRating = movierate.RateID AND movie.Languages = languagestable.LanguagesID AND movie.Type = movietype.TypeID AND versiontable.VersionID = movie.Version";
        $rs1 = mysqli_query($conn,$sql) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        $num = mysqli_num_rows($rs1);
        if($num == 0){
            echo "Number of records selected = $num <br>";
        }else{
            while($rec1 = mysqli_fetch_assoc($rs1)){
                extract($rec1);
                $movieInfo[] = $rec1;
                
            }
        }
        closeDBconnection($conn);
        return $movieInfo;
    }

    function getCastList($ID = 1){
        $conn =  getDBconnection();
        $sql = "SELECT actor.actorName FROM movie INNER JOIN actor INNER JOIN moviecast WHERE movie.MovieID = $ID AND moviecast.MovieID = movie.MovieID AND moviecast.actorID = actor.actorID";
        $rs = mysqli_query($conn,$sql) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        $num = mysqli_num_rows($rs);
        if($num == 0){
            echo "Number of records selected = $num <br>";
        }else{
            $cast = [];
            while($rec = mysqli_fetch_assoc($rs)){
                extract($rec);
                $cast[] = $rec;
            }
        }
        closeDBconnection($conn);
        return json_encode($cast,JSON_PRETTY_PRINT);
    }

    function getTags($ID = 1){
        $conn =  getDBconnection();
        $sql = "SELECT tagtable.TagName FROM movie INNER JOIN tagtable INNER JOIN movietag WHERE movie.MovieID = $ID AND tagtable.TagID = movietag.TagID AND movie.MovieID = movietag.MovieID";
        $rs = mysqli_query($conn,$sql) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        $num = mysqli_num_rows($rs);
        if($num == 0){
            echo "Number of records selected = $num <br>";
        }else{
            while($rec = mysqli_fetch_assoc($rs)){
                extract($rec);
                $tag[] = $rec;
            }
        }
        closeDBconnection($conn);
        return json_encode($tag,JSON_PRETTY_PRINT);
    }
      function getAllActor(){
        $conn =  getDBconnection();
        $sql = "SELECT * FROM actor";
        $rs1 = mysqli_query($conn,$sql) or die ('<div>SQL command fail</br>' . mysqli_error($conn) .  '</div>');
        $num = mysqli_num_rows($rs1);
        if($num == 0){
            echo "Number of records selected = $num <br>";
        }
        closeDBconnection($conn);
        return $rs1;
    }

    function getAllTags(){
        $conn =  getDBconnection();
        $sql = "SELECT * FROM tagtable";
        $rs1 = mysqli_query($conn,$sql) or die ('<div>SQL command fail</br>' . mysqli_error($conn) .  '</div>');
        $num = mysqli_num_rows($rs1);
        if($num == 0){
            echo "Number of records selected = $num <br>";
        }
        closeDBconnection($conn);
        return $rs1;
    }

    function getCsvData(){
        $conn =  getDBconnection();
        $sql = "SELECT movie.MovieID,movie.MovieName,GROUP_CONCAT(DISTINCT tagtable.TagName),GROUP_CONCAT(DISTINCT actor.actorName) FROM movie INNER JOIN tagtable INNER JOIN movietag INNER JOIN actor INNER JOIN moviecast WHERE movie.MovieID = moviecast.MovieID AND movie.MovieID = movietag.MovieID AND tagtable.TagID = movietag.TagID AND moviecast.actorID = actor.actorID GROUP BY movie.MovieName";
        $rs1 = mysqli_query($conn,$sql) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
        $num = mysqli_num_rows($rs1);
        if($num == 0){
            echo "Number of records selected = $num <br>";
        }else{
            closeDBconnection($conn);
            return $rs1;
        }
        return $rs1;
    } 
    

    
?>