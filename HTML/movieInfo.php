<!DOCTYPE html>
<html lang="en">
 <head>
    
  </head>
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

if(isset($tags)){
    $tags = json_decode($tags);
    $tags = (array)$tags;
    foreach ($tags as $value) {
        $tagsList[] = (array)($value);
    }
}

$cookie_name = "viewMovie";


if(isset($_COOKIE[$cookie_name])){
    $cookie_value[] = json_decode($_COOKIE[$cookie_name], true);
    $cookie_value[] = $movie["MovieName"];
    setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), "/");
}else{
    $cookie_value[] = $movie["MovieName"];
    setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), "/");
}


?>
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
                var tagurl = `movieTag.php?tag=${clickBtnValue}`,
                data =  {'action': clickBtnValue};
                window.location.href = tagurl;
            });
            $('.actbtn').click(function(){
                var clickBtnValue = $(this).text();
                var actorUrl = `actor.php?actName=${clickBtnValue}`,
                data =  {'action': clickBtnValue};
                window.location.href = actorUrl;
            });
        });
        $(function(){
            $(document).one('click', '.like-review', function(e) {
                $(this).html('<i class="fa fa-heart" aria-hidden="true"></i> You liked this movie');
                $(this).children('.fa-heart').addClass('animate-like');
                
            });
        });
    </script>
    <title>Movie Info</title>
</head>

<body>
    <?php
        include '../HTML/navigation_bar.php';
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
                if(isset($tagsList)){
                    foreach ($tagsList as $key => $value) {
                        $tagsList[$key] = $tagsList[$key]["TagName"];
                        echo '<button type="button" class="btn tagbtn">';
    
                        print_r($tagsList[$key]);
                        
                        echo "</button>";
                    }
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
            <h2 class="actorHeader text-center">Actor:</h2> 
            <br>
            <?php
            
            foreach ($castlist as $key => $value) {
                $actor[$key] = $actor[$key]["actorName"];
                echo '<button type="button" class="btn actbtn">';
                print_r($actor[$key]);
                echo "</button>";
            }
            ?>
        </div>
        <div class="cast_right">
            Director:
            <br>
            <?php echo $movie["Director"]; ?>
          
        </div>
 
       
    </span>
    <div class="break"></div>

    <span class="userAction">
    <div>
      <a href="http://127.0.0.1/FYP/schedule_2.php?movie=<?php echo $movie["MovieName"]; ?> " class="btn-secondary ">Buy Ticket Now!<a>
      </div>
        <?php 
        if(isset($_COOKIE[urlencode($movie["MovieName"])])){
            echo '<button class="btn-secondary like-review" id="like-review">
                    <i class="fa fa-heart" aria-hidden="true"></i> You liked this movie
                    </button>';
        }else {
            $id = $_GET['id'];
            $name = $movie["MovieName"];
            echo '<form action="../PHP/likeMovie.php" method="get">
            <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="movieName" value="'.$name.'">
                <button class="btn-secondary like-review" id="like-review">
                    <i class="fa fa-heart" aria-hidden="true"></i> Like
                </button>
            </form>';
        }
        ?>
            
    </span>

    </div>
    <?php
include('chatbot.html');
?>

  </body>

</html>