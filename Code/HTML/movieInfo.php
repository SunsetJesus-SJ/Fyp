<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/movieInfo.css">
    <title>Movie Info</title>
</head>
<body>
<?php
    include "../PHP/conn.php";
    $conn =  getDBconnection();
    $sql = "SELECT * FROM movie WHERE MovieID = 3";
    $rs = mysqli_query($conn,$sql) or die ('<div>SQL command fail</br>' + mysqli_error($conn) +  '</div>');
    $num = mysqli_num_rows($rs);
    if($num == 0){
        echo "Number of records selected = $num <br>";
    }else{
?>       
<?php 
    while($rec = mysqli_fetch_assoc($rs)){
        extract($rec);
?>
    <div class="flex">
        <span class="top">
            <div class="img" id="content">
                <img src="http://anime.prisma-illya.jp/movie/3/img/home/visual_03.jpg" alt="">
            </div>
            <div class="video">
                <iframe src="https://www.youtube.com/embed/u1Q50htZ3l0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        
        <div class="break"></div>

        <span class="Main">
            <div class="Main_left">
                <h1>
                    Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl
                </h1>
    
                <div>Animated</div>
    
                <p>
                    Earth is dying. Within the next few centuries, it will be unable to support human life. But Julian Ainsworth has a plan. Using the remaining magic on the planet, the Holy Grail, and a mysterious, otherworldly cube, he can save humanity from their impending doom. However, as with all magic, there is a price to be paid: in this case, the life of Miyu, a single innocent girl.
    
                    Now, everything is finally in place. Yet, for his plan to come to fruition, he must first overcome one last obstacle: Illyasviel von Einzbern, a girl from a parallel world powered by heroes of myth and legend who has vowed to stop him and save not only the world itself but Miyu as well.
                </p>
            </div>
            <div class="Main_right">
                <div class="lan">
                    Languages:Janpanse
                    <br>
                    Subtitle:Chinese
                </div>
                <div class="rating">
                    Rating: IIA
                </div>
                <div class="duration">
                    duration(mins): 95 
                </div>
                <div class="version">
                    Version:2D
                </div>
            </div>
            <div class="actor">
                Actor:Masanori Tsuchiya
                Director:Shin Oonuma
            </div>
            
        </span>
        
        <div class="otherInfo"></div>
    </div>
<?php
    }
?>

<?php
    }
    mysqli_close($conn);
?>
    
</body>
</html>