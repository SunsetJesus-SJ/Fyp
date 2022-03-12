<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/movieInfo.css">
    <script src="../JavaScript/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $('.tagbtn').click(function(){
                var clickBtnValue = $(this).text();
                var ajaxurl = `movieTag.php?tag=${clickBtnValue}`,
                data =  {'action': clickBtnValue};
                window.location.href = ajaxurl;
            });
        });
    </script>
    <title>Movie Info</title>
</head>

<body>
    <?php
    include "../PHP/getMovieInfo.php";
    $num = $_GET["id"];
    $movie = getMovieInfoJson($num);
    $castlist = getCastList($num);
    $tags = getTags($num);
    $movie = json_decode($movie);
    $movie = $movie[0];
    $movie = (array)$movie;
    $castlist = json_decode($castlist);
    $castlist = (array)$castlist;
    foreach ($castlist as $value) {
        $actor[] = (array)($value);
    }
    $tags = json_decode($tags);
    $tags = (array)$tags;
    foreach ($tags as $value) {
        $tagsList[] = (array)($value);
    }
    ?>
    <div class="flex">
        <span class="top">
            <div class="img" id="content">
                <img src="<?php echo $movie["Image"]; ?>" title="source: imgur.com" />
            </div>
            <div class="video">
                <iframe src="<?php echo $movie["video_url"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
    </div>

    <div class="break"></div>

    <span class="Main">
        <div class="Main_left">
            <h1>
                <?php echo $movie["MovieName"]; ?>
            </h1>

            <span>
                <?php
                foreach ($tagsList as $key => $value) {
                    $tagsList[$key] = $tagsList[$key]["TagName"];
                    echo '<button type="button" class="btn tagbtn">';

                    print_r($tagsList[$key]);
                    
                    echo "</button>";
                }
                ?>
            </span>

            <p>
                <?php echo $movie["Description"]; ?>
            </p>
        </div>
        <div class="Main_right">
            <div class="lan">
                Languages:
                <br>
                <?php echo $movie["Languages"]; ?>
            </div>
            <div class="lan">
                Subtitle:
                <br>
                <?php echo $movie["Subtitle"]; ?>
            </div>
            <div class="rating">
                Rating:
                <br>
                <?php echo $movie["MovieRate"]; ?>
            </div>
            <div class="duration">
                duration(mins):
                <br>
                <?php echo $movie["Duration"]; ?>
            </div>
            <div class="version">
                Version:
                <br>
                <?php echo $movie["Version"]; ?>
            </div>
        </div>


    </span>
    <span class="casting">
        <div class="cast_left">
            Actor:
            <?php
            foreach ($castlist as $key => $value) {
                $actor[$key] = $actor[$key]["actorName"];
                echo "<div>";
                print_r($actor[$key]);
                echo "</div>";
            }
            ?>
        </div>
        <div class="cast_right">
            Director:<?php echo $movie["Director"]; ?>
        </div>


    </span>
    <div class="otherInfo"></div>
    </div>


</body>

</html>