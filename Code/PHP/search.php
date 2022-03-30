

<?php
$hostname = "127.0.0.1";
$username = "root";
$pwd = "";
$db = "movieinfo";

function getDBconnection()
{
    global $hostname, $username, $pwd, $db;
    $conn = mysqli_connect($hostname, $username, $pwd, $db) or die(mysqli_connect_error()) or die(mysqli_connect_error());
    return $conn;
}

function closeDBconnection($conn)
{
    mysqli_close($conn);
}

function getMovieTag($id){
    $conn =  getDBconnection();
    $sql = 'SELECT tagtable.TagName FROM movie INNER JOIN movierate INNER JOIN languagestable INNER JOIN movietype INNER JOIN versiontable INNER JOIN movietag INNER JOIN tagtable WHERE movietag.TagID = tagtable.TagID AND movie.MovieID = movietag.MovieID AND movie.MovieID = ' . '"' .$id . '"';
    $rs1 = mysqli_query($conn, $sql) or die('<div>SQL command fail</br>' . mysqli_error($conn) . '</div>');
    $num = mysqli_num_rows($rs1);
    if ($num == 0) {
        echo "Number of records selected = $num <br>";
    } else {
        closeDBconnection($conn);
        return $rs1;
    }
    return $rs1;
}

function getMovieByTag($tag){
    $conn =  getDBconnection();
    $sql = 'SELECT movie.MovieID,movie.MovieName,movie.Description,movie.Image,movie.video_url,tagtable.description FROM movie INNER JOIN movierate INNER JOIN languagestable INNER JOIN movietype INNER JOIN versiontable INNER JOIN movietag INNER JOIN tagtable WHERE movie.MovieRating = movierate.RateID AND movietag.TagID = tagtable.TagID AND movie.MovieID = movietag.MovieID AND tagtable.TagName = ' . '"' .$tag . '"';
    $rs1 = mysqli_query($conn, $sql) or die('<div>SQL command fail</br>' . mysqli_error($conn) . '</div>');
    $num = mysqli_num_rows($rs1);
    if ($num == 0) {
        echo "Number of records selected = $num <br>";
    } else {
        closeDBconnection($conn);
        return $rs1;
    }
    return $rs1;
}

function getMovieActor($id){
    $conn =  getDBconnection();
    $sql = 'SELECT actor.actorName FROM movie INNER JOIN movierate INNER JOIN languagestable INNER JOIN movietype INNER JOIN versiontable INNER JOIN actor INNER JOIN moviecast WHERE actor.actorID = moviecast.actorID AND movie.MovieID = moviecast.MovieID AND movie.MovieID = ' . '"' .$id . '"';
    $rs1 = mysqli_query($conn, $sql) or die('<div>SQL command fail</br>' . mysqli_error($conn) . '</div>');
    $num = mysqli_num_rows($rs1);
    if ($num == 0) {
        echo "Number of records selected = $num <br>";
    } else {
        closeDBconnection($conn);
        return $rs1;
    }
    return $rs1;
}

function getMovieByActor($actName){
    $conn =  getDBconnection();
    $sql = 'SELECT movie.MovieID,movie.MovieName,movie.Description,movie.Image,movie.video_url,actor.actorName FROM movie INNER JOIN movierate INNER JOIN languagestable INNER JOIN movietype INNER JOIN versiontable INNER JOIN actor INNER JOIN moviecast WHERE movie.MovieRating = movierate.RateID AND actor.actorID = moviecast.actorID AND movie.MovieID = moviecast.MovieID AND actor.actorName = ' . '"' .$actName . '"';
    $rs1 = mysqli_query($conn, $sql) or die('<div>SQL command fail</br>' . mysqli_error($conn) . '</div>');
    $num = mysqli_num_rows($rs1);
    if ($num == 0) {
        echo "Number of records selected = $num <br>";
    } else {
        closeDBconnection($conn);
        return $rs1;
    }
    return $rs1;
}

function search($movieName, $year, $month, $movieRating, $type, $Duration, $Version, $Languages)
{
    $conn =  getDBconnection();
    $sql = 'SELECT movie.MovieID,movie.MovieName,movie.Description,movie.Image,movie.video_url FROM movie INNER JOIN movierate INNER JOIN languagestable INNER JOIN movietype INNER JOIN versiontable WHERE movie.MovieRating = movierate.RateID';

    if (!$movieName == "" || !$movieName == "none" && !$movieName == "") {
        $sql .= ' AND movie.MovieName LIKE "' . "%" . $movieName . "%" . '"';
    }
    if (!$year == "") {
        $sql .= ' AND YEAR(ReleaseDate) = ' . $year;
    }
    if (!$month == "") {
        $sql .= ' AND MONTH(ReleaseDate) = ' . $month;
    }
    if (!$movieRating == "") {
        $sql .= ' AND movierate.MovieRate = "' . $movieRating . '"';
    }
    if (!$type == ""){
        $sql .= ' AND movie.Type = movietype.TypeID AND movietype.Type = "' . $type . '"';
    }
    if (!$Duration == "") {
        if ($Duration == "60") {
            $sql .= '  AND movie.Duration < "' . $Duration . '"';
        } else if ($Duration == "60-100") {
            $sql .= ' AND movie.Duration BETWEEN 60 AND 100';
        } else if ($Duration == "101-150") {
            $sql .= ' AND movie.Duration BETWEEN 101 AND 150';
        } else if ($Duration == "150") {
            $sql .= ' AND movie.Duration > "' . $Duration . '"';
        }
    }
    if (!$Version == "") {
        $sql .= ' AND movie.Version = versiontable.VersionID AND versiontable.Version = "' . $Version . '"';
    }
    if (!$Languages == "") {
        $sql .= ' AND (languagestable.Languages LIKE ' . '"' . $Languages . '"' . 'OR languagestable.Subtitle LIKE ' . '"' . $Languages . '"' . ')';
    }
    $rs1 = mysqli_query($conn, $sql) or die('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
    $num = mysqli_num_rows($rs1);
    if ($num == 0) {
        echo "Number of records selected = $num <br>";
    } else {
        closeDBconnection($conn);
        return $rs1;
    }
    return $rs1;
}

?>
