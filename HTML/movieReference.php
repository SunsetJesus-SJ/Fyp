<!DOCTYPE html>
<html lang="en">

<head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Main Page</title>
    <title>Document</title>
    <script src="../JavaScript/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
            $('#tag').change(function(){
                var selectedVal = $(this).val();
                if(selectedVal == "existTag"){
                    $('#tagDescription').prop('disabled', true);
                }else if(selectedVal == "createTag"){
                    $('#tagDescription').prop('disabled', false);
                    $('#tagDescription').val('');
                }
            });
        });
    </script>
    <style>
        input{
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php
    include "../PHP/getMovieInfo.php";
    $num = $_GET["movieID"];
    $movie = getMovieInfoJson($num);
    $movie = json_decode($movie);
    $movie = $movie[0];
    $movie = (array)$movie;

    $actorList = getAllActor();
    $tagList = getAllTags();

    ?>
        <center><h1>You are adding actor/tags for movie: <span style="color: lightcoral;"><?php echo $movie["MovieName"]; ?></span></h1>
        <hr>
    <form action="../PHP/addActor.php" method="get">
        <fieldset>
            <legend>Adding actor</legend> 
            <div>
                <input type="radio" name="actor" id="actor" value="existActor">
                <label for="actor">existing actor</label>
            </div>
            <div>
                <input type="radio" name="actor" id="actor" value="createActor">
                <label for="actor">Create new actor for the movie record</label>
            </div>
            <div>
                <label for="actorName">actorName:</label>
                <input list="actorList" type="text" name="actorName" id="actorName">
                <datalist id="actorList">
                    <?php 
                        while ($record = mysqli_fetch_assoc($actorList)) {
                            extract($record);
                            echo "<option value=\"{$actorID}\" label=\"{$actorName}\"/>";
                        }
                    ?>
                </datalist>
                <input type="hidden" name="movieID" value="<?php echo $_GET["movieID"]; ?>">
            </div>

            <input type="submit" value="sumit" class="btn btn-success">
        </fieldset>
    </form>
    <hr>
    <form action="../PHP/addTag.php" method="post">
        <fieldset>
            <legend>Adding tags</legend> 
            <div>
                <input type="radio" name="tag" id="tag" value="existTag">
                <label for="actor">existing tag</label>
            </div>
            <div>
                <input type="radio" name="tag" id="tag" value="createTag">
                <label for="actor">Create new tag for the movie record</label>
            </div>
            <div>
                <label for="tagName">Tag Name:</label>
                <input list="tagList" type="text" name="tagName" id="tagName">
                <datalist id="tagList">
                    <?php 
                        while ($record = mysqli_fetch_assoc($tagList)) {
                            extract($record);
                            echo "<option value=\"{$TagID}\" label=\"{$TagName}\"/>";
                        }
                    ?>
                </datalist>
                <br>
                <label for="tagDescription">Tag Description</label>
                <div>
                <textarea name="tagDescription" id="tagDescription" cols="30" rows="10"></textarea>
                 </div>
                <input type="hidden" name="movieID" value="<?php echo $_GET["movieID"]; ?>">
            </div>
         
            <input type="submit" value="sumit" class="btn btn-success">
        </fieldset>
    </form>
    </center>
 
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>