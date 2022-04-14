<?php
    include "../PHP/getMovieInfo.php";
    $conn =  getDBconnection();
    
    $result = getCsvData();

    $csvData = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $csvData[] = $row;

        }
    }

    #header('Content-Type: text/csv; charset=utf-8');
    #header('Content-Disposition: attachment; filename=Movie.csv');
    //$dir = '../Python/Movie_dataset';
    $output = fopen('../Python/Movie_dataset/Movie.csv', 'w');
    fputcsv($output, array('MovieID', 'MovieName', 'TagName', 'actorName'));

    if (count($csvData) > 0) {
        foreach ($csvData as $row) {
            fputcsv($output, $row);
        }
    }

    fclose($output);
?>