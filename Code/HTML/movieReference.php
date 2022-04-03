<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h1>You are adding actor/tags for movie: <span style="color: lightcoral;"><?php echo $movie["MovieName"]; ?></span></h1>
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
                <input type="hidden" name="movieID" value="<?php echo $movie["MovieID"]; ?>">
            </div>

            <input type="submit" value="sumit">
        </fieldset>
    </form>

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
                <textarea name="tagDescription" id="tagDescription" cols="30" rows="10"></textarea>
                <input type="hidden" name="movieID" value="<?php echo $movie["MovieID"]; ?>">
            </div>

            <input type="submit" value="sumit">
        </fieldset>
    </form>
</body>
</html>