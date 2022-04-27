<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Movie Record</title>
    <script src="../JavaScript/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
        });
    </script>
    <style>
        div{
            margin: 10px;
        }
    </style>
         
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/loading.css">
    <title>Main Page</title>
</head>
<body>

    <h1 style="text-align: center;">Create movie info</h1>
    <hr>
    <form action="../FYP/img/movieInsert.php" method="POST" enctype="multipart/form-data">
     <h3 >Movie details:</h3>
         <div class="row">  
         <div class="col-md-3">
            <label for="movieName">Movie Name:</label>
            <input type="text" name="movieName" id="movieName">
        </div>
        <div class="col-md-3">
            <label for="type">Movie Type:</label>
            <input list="typeList" type="text" id="type" name="type">
            <datalist id="typeList">
                <option label="Action" value="1" />
                <option label="Comedy" value="2" />
                <option label="Drama" value="3" />
                <option label="Fantasy" value="4" />
                <option label="Horror" value="5" />
                <option label="Mystery" value="6" />
                <option label="Romance" value="7" />
                <option label="Thriller" value="8" />
                <option label="Animated" value="9" />
            </datalist>
        </div>
        <div class="col-md-3">
        <label for="version">Version:</label>
            <input list="versionList" type="text" id="version" name="version">
            <datalist id="versionList">
                <option label="2D" value="1" />
                <option label="3D" value="2" />
                <option label="THX" value="3" />
                <option label="CGS" value="4" />
                <option label="REAL D" value="5" />
                <option label="4DX" value="6" />
                <option label="IMAX" value="7" />
                <option label="VIP" value="8" />
            </datalist>
        </div>
        </div>
        <div class="row">  
         <div class="col-md-3">
        <label for="rate">Movie Rate:</label>
            <input list="rateList" type="text" id="rate" name="rate">
            <datalist id="rateList">
                <option label="I" value="1" />
                <option label="IIA" value="2" />
                <option label="IIB" value="3" />
                <option label="III" value="4" />
                <option label="TBC" value="5" />
            </datalist>
        </div>
        
        <div class="col-md-4">
            <label for="language">Language & Subtitle:</label>
            <input list="languageList" type="text" id="language" name="language">
            <datalist id="languageList">
                <option label="English & English" value="1" />
                <option label="English & Chinese" value="2" />
                <option label="English & English + Chinese" value="3" />
                <option label="Chinese & Chinese" value="4" />
                <option label="Chinese & English" value="5" />
                <option label="Chinese & English + Chinese" value="6" />
                <option label="Japanese & Janpanse" value="7" />
                <option label="Japanese & Chinese" value="8" />
                <option label="Japanese & English" value="9" />
                <option label="Japanese & English + Chinese" value="10" />
                <option label="Japanese & Janpanse + Chinese" value="11" />
                <option label="Hangul & Hangul" value="12" />
                <option label="Hangul & Chinese" value="13" />
                <option label="Hangul & English" value="14" />
                <option label="Hangul & English + Chinese" value="15" />
                <option label="Hangul & Hangul + Chinese" value="16" />
                <option label="Hindi & Hindi" value="17" />
                <option label="Hindi & Chinese" value="18" />
                <option label="Hindi & English" value="19" />
                <option label="Hindi & English + Chines" value="20" />
                <option label="Hindi & Hindi + Chines" value="21" />
                <option label="Russian & Russian" value="22" />
                <option label="Russian & Chinese" value="23" />
                <option label="Russian & English" value="24" />
                <option label="Russian & English + Chines" value="25" />
                <option label="Russian & Russian + Chines" value="26" />
            </datalist>
        </div>
        </div>
        <hr>
        <h3 >Movie Data:</h3>
               <div class="row">  
         <div class="col-md-3">
            <label for="releaseDate">Release Date:</label>
            <input type="date" name="releaseDate" id="releaseDate">
        </div>

        <div class="col-md-4">
            <label for="Duration">Duration(mins):</label>
            <input type="number" name="Duration" id="Duration">
        </div>
        </div>
        <hr>
         <h3 >Other:</h3>
        <div>
            <fieldset style="width: fit-content;">
                <legend>Description</legend>
                <textarea id="description" name="description" rows="8" cols="100"></textarea>
            </fieldset>
        </div>
        <div>
            <label for="img">Moive Image:</label>
            <input type="file" name="fileToUpload" id="fileToUpload" >
        </div>
        <div>
            <label for="director">Director:</label>
            <input type="text" name="director" id="director">
        </div>

        <div>
            <label for="ytUrl">YouTube url:</label>
            <input type="text" name="ytUrl" id="ytUrl">
        </div>
        <hr>
        <div>
            <input type="submit" name="submit" id="submit" value="submit" class="btn btn-success">
        </div>
    </form>
      <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <script src="js/loading.js"></script>
    <!--loading end-->


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