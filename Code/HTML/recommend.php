<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .reMsg {
            text-align: center;
            font-size: 1.2em;
            color: lightcoral;
        }
    </style>
    <link rel="stylesheet" href="../CSS/searchMovie.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg">
<?php
    include '../HTML/navigation_bar.php';
    ?>
    <?php
    include "../PHP/search.php";
    $rMovie = $_GET["rMovie"];
    $vMovie = $_GET["vMovie"];

    $rs1 = getMovieByName($rMovie);
    while ($record = mysqli_fetch_assoc($rs1)) {
        extract($record);
    ?>
    <div class=" card mb-3 border-primary text-center">
        <div class="reMsg">You are recommended to watch this movie</div>
        <span>
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $Image ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $MovieName ?></h5>
                        <p class="card-text"><?php echo $Description ?></p>
                        <p class="card-text"><small class="text-muted"> <a class="btn btn-info" role="button" href="movieInfo.php?id=<?php echo $MovieID?>">Click here to know more detail</a> </small></p>
                    </div>
                </div>
            </div>
        </span>
    </div>
    <?php
    }  
    $rs2 = getMovieByName($vMovie);
    while ($record = mysqli_fetch_assoc($rs2)) {
        extract($record);
    ?>
    <div class="card mb-3 border-primary text-center">
        <div class="reMsg">Since you seem to be interested in this movie</div>
        <span>
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $Image ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body ">
                        <h5 class="card-title"><?php echo $MovieName ?></h5>
                        <p class="card-text"><?php echo $Description ?></p>
                        <p class="card-text"><small class="text-muted"> <a class="btn btn-info" role="button" href="movieInfo.php?id=<?php echo $MovieID?>">Click here to know more detail</a> </small></p>
                    </div>
                </div>
            </div>
        </span>
    </div>
    <?php
    }
    ?>

<?php
include('chatbot.html');
?>
</body>
</html>