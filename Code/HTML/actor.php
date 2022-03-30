

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/searchMovie.css">
    <link rel="stylesheet" href="../CSS/tag.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Result</title>
    <script src="../JavaScript/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $('.actbtn').click(function(){
                var clickBtnValue = $(this).text();
                var ajaxurl = `actor.php?actName=${clickBtnValue}`,
                data =  {'action': clickBtnValue};
                window.location.href = ajaxurl;
            });
        });
    </script>
</head>

<?php 
include "../PHP/search.php";

function get(){
    $getData = [];
    $getData = $_GET;
    $actName = $getData["actName"];

    $list = getMovieByActor($actName);
    $html = <<<EOD
    <table class="table table-success table-striped">
        <legend>Actor: {$actName}</legend>
        <thead>
        <tr>
            <th scope="col">Actor Name</th>
            <th scope="col">{$actName}</th>
        </tr>
        </thead>
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

    <script>
        $(document).ready(function(){
            document.getElementById("description").innerHTML = '<?php echo $information ?>';
        });
    </script>

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
                        
                        <?php
                            $actors = getMovieActor($MovieID);
                            $actorsList = [];
                            while ($rc = mysqli_fetch_assoc($actors)) {
                                extract($rc);

                                if(in_array($actorName, $actorsList)) {
                                    continue;
                                }else{
                                    array_push($actorsList, $actorName);
                                echo '<button type="button" class="btn btn-success tagbtn                                                                                       ">';
            
                                print_r($actorName);
                                
                                echo "</button>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        

    <?php
        }
    }
    ?>

</body>

</html>