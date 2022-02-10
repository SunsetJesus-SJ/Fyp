

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

function search($movieName, $year, $month, $movieRating, $type, $Duration, $Version, $Languages)
{
    $conn =  getDBconnection();
    $sql = 'SELECT movie.MovieID,movie.MovieName,movie.Description,movie.Image,movie.video_url FROM movie INNER JOIN movierate INNER JOIN languagestable INNER JOIN movietype INNER JOIN versiontable WHERE movie.MovieRating = movierate.RateID';

    if (!$movieName == "" || !$movieName == "none" && !$movieName == "") {
        $sql .= ' AND movie.MovieName LIKE "' . $movieName . '"';
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
