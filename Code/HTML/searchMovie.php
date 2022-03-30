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
    <title>search</title>
</head>


<body>
    <form action="result.php" method="get">
        <div id="searchBox">
            <div class="input-group mb-3">
                
                <input type="text" name="movieName" class="form-control form-control-lg" placeholder="Search Here">
                <button type="submit" class="input-group-text btn-success"><i class="fa fa-search"></i> Search</button>
            </div>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         Search Filter
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-*-*">
                                        <fieldset class="border p-2">
                                            <legend class="w-auto">Release Date</legend>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Year</span>
                                                <input type="number" name="year" class="form-control" placeholder="leave blank for none" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <label class="input-group-text" for="inputGroupSelect01">Month</label>
                                                <select name="month" class="form-select" id="inputGroupSelect01">
                                                    <option value="" selected>None</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">Angust</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>

                                        </fieldset>
                                    </div>
                                    <div class="col-*-*">
                                        <fieldset class="border p-2 movieRating">
                                            <legend class="w-auto">Movie Rating</legend>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="movieRating" type="radio" value="I" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" value="I" disabled>
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="movieRating" type="radio" value="IIA" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" value="IIA" disabled>
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="movieRating" type="radio" value="IIB" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" value="IIB" disabled>
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="movieRating" type="radio" value="III" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" value="III" disabled>
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" checked name="movieRating" type="radio" value="" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" value="None" disabled>
                                            </div>


                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-*-*">
                                        <fieldset class="border p-2">
                                            <legend class="w-auto">Type</legend>
                                            <div class="input-group mb-3">
                                                <label class="input-group-text" for="inputGroupSelect01">Moive Type</label>
                                                <select name="type" class="form-select">
                                                    <option value="" selected>None</option>
                                                    <option value="Action">Action</option>
                                                    <option value="Comedy">Comedy</option>
                                                    <option value="Drame">Drama</option>
                                                    <option value="Fantasy">Fantasy</option>
                                                    <option value="Horror">Horror</option>
                                                    <option value="Mystery">Mystery</option>
                                                    <option value="Romance">Romance</option>
                                                    <option value="Thriller">Thriller</option>
                                                    <option value="Animated">Animated</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-*-*">
                                        <fieldset class="border p-2">
                                            <legend class="w-auto">Movie Duration</legend>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="Duration" type="radio" value="60" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" value="less than 60mins" disabled>
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="Duration" type="radio" value="60-100" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" value="60-100mins" disabled>
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="Duration" type="radio" value="101-150" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" value="101-150mins" disabled>
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="Duration" type="radio" value="150" aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" value="more than 150mins" disabled>
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <input class="form-check-input mt-0" name="Duration" type="radio" value="" checked aria-label="Radio button for following text input">
                                                </div>
                                                <input type="text" class="form-control" value="None" disabled>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <fieldset class="border p-2">
                                    <legend class="w-auto">Version</legend>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" checked type="checkbox" name="Version" value="2D" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" value="2D" disabled class="form-control" aria-label="Text input with checkbox">
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox" name="Version" value="3D" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" value="3D" disabled class="form-control" aria-label="Text input with checkbox">
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox" name="Version" value="4DX" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" value="4DX" disabled class="form-control" aria-label="Text input with checkbox">
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox" name="Version" value="IMAX" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" value="IMAX" disabled class="form-control" aria-label="Text input with checkbox">
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox" name="Version" value="REAL D" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" value="REAL D" disabled class="form-control" aria-label="Text input with checkbox">
                                    </div>

                                </fieldset>

                            </div>

                            <div class="col-sm-3">
                                <fieldset class="border p-2">
                                    <legend class="w-auto">Languages</legend>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox" name="Languages" value="English" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" value="English" disabled class="form-control" aria-label="Text input with checkbox">
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" checked type="checkbox" name="Languages" value="Chinese" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" value="Chinese" disabled class="form-control" aria-label="Text input with checkbox">
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox" name="Languages" value="Janpanse" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" value="Janpanse" disabled class="form-control" aria-label="Text input with checkbox">
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox" name="Languages" value="Hangul" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" value="Hangul" disabled class="form-control" aria-label="Text input with checkbox">
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox" name="Languages" value="Hindi" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" value="Hindi" disabled class="form-control" aria-label="Text input with checkbox">
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox" name="Languages" value="Russian" aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" value="Russian" disabled class="form-control" aria-label="Text input with checkbox">
                                    </div>
                            </div>
                            </fieldset>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    include "../PHP/getMovieList.php";
    $list = getMovieInfo();
    while ($record = mysqli_fetch_assoc($list)) {
        extract($record);
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
    ?>

<?php
include('chatbot.html');
?>
</body>

</html>