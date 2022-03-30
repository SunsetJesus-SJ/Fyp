

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/searchMovie.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Result</title>
</head>

<?php 
include "../PHP/search.php";

function get(){
    $getData = [];
    $getData = $_GET;
    $searchType = $getData["movieName"];
    $movieName = $getData["movieName"];
    $year = $getData["year"];
    $month = $getData["month"];
    $movieRating = $getData["movieRating"];
    $type = $getData["type"];
    $Duration = $getData["Duration"];
    $Version = $getData["Version"];
    $Languages = $getData["Languages"];

    $list = search($movieName,$year,$month,$movieRating,$type,$Duration,$Version,$Languages);
    $html = <<<EOD
    <table class="table table-success table-striped">
        <legend>The result of follow data</legend>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Selected/Input</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Name</th>
            <td>{$movieName}</td>
        </tr>
        <tr>
            <th scope="row">Year</th>
            <td>{$year}</td>
        </tr>
        <tr>
            <th scope="row">month</th>
            <td>{$month}</td>
        </tr>
        <tr>
            <th scope="row">Movie Rating</th>
            <td>{$movieRating}</td>
       </tr>
       <tr>
            <th scope="row">Duration</th>
            <td>{$type}</td>
        </tr>
        <tr>
            <th scope="row">Duration</th>
            <td>{$Duration}</td>
        </tr>
        <tr>
            <th scope="row">Version</th>
            <td>{$Version}</td>
        </tr>
        <tr>
            <th scope="row">Languages</th>
            <td>{$Languages}</td>
        </tr>
        </tbody>
    </table>
EOD;
echo $html;
    return $list;
}

?>

<body>
    <?php
    $list = get();
    $selectedMovieID = [];
    while ($record = mysqli_fetch_assoc($list)) {
        extract($record);
        
        if(in_array($MovieID, $selectedMovieID)) {
            continue;
        }else{
            array_push($selectedMovieID, $MovieID);
    ?>
        <div class="card mb-3 border-primary">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $Image ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $MovieName ?></h5>
                        <p class="card-text"><?php echo $Description ?></p>
                        <p class="card-text"><small class="text-muted"> <a href="movieInfo.php?id=<?php echo $MovieID ?>">Click here to know more detail</a> </small></p>
                    </div>
                </div>
            </div>
        </div>

    <?php
        }
    }
    ?>
    <?php
include('chatbot.html');
?>

</body>

</html>