

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

<body class="bg">
<?php
    include '../HTML/navigation_bar.php';
    ?>

    <div class="text-center"><h1 style="color: lightcoral;">Following are the new movie</h1></div>
    
    <?php
    
    include "../PHP/search.php";
    $list = getNewMovie();
    $selectedMovieID = [];
    while ($record = mysqli_fetch_assoc($list)) {
        extract($record);
        
        if(in_array($MovieID, $selectedMovieID)) {
            continue;
        }else{
            array_push($selectedMovieID, $MovieID);
    ?>
        <div class="card mb-3 border-primary">
        
            <span>
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $Image ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $MovieName ?></h5>
                            <p style="color: lightcoral;font-weight: bold;">Release Date: <?php echo $ReleaseDate ?></p>
                            <p class="card-text"><?php echo $Description ?></p>
                            <p class="card-text"><small class="text-muted"> <a class="btn btn-info" role="button" href="movieInfo.php?id=<?php echo $MovieID?>">Click here to know more detail</a> </small></p>
                        </div>
                    </div>
                </div>
            </span>
            
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