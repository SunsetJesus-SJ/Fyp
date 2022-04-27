<html>

<head>
    <title>Movie Schedule</title>
    <script src="jslib/jquery-1.11.1.js"></script>
    <link rel="stylesheet" href="css/schedule.css">
    <link rel="stylesheet" href="../mainPage//css/navigation.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>

<body>
    <div w3-include-html="../mainPage/navigation_bar.html"></div>

    <form method="post" action="">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center>
            <div class="img" ><img src="img/schedule.png"></div>
        </center>
        <br>    
        <div class="date-box">
        <?php

            // $movie = $_GET['movie'];
            // echo $movie;
            echo "<br>";
            $datebtn = 'date-btn';
            $num = '1';
            $dateArray = [];
            include("PHP/getHouseInfo.php");
            $datelist = getMovieDate();
            while($row = mysqli_fetch_array($datelist))
            {
                extract($row);
                // $dateArray[] = $date;
                $btnID = $datebtn.$num;
            ?>   
                
                   <div class="date-btn" id="<?php echo $btnID?>" ><?php echo $date;?></div> 
                            
                

        <?php 
                $num++;
                $btnID = '';
                
            }
 
        ?>

        </div>
        <br>
        <br>

        <div class="cinema">

            <br>
            <div id="1" class="date">
                <h2>Tsing Yi Cinema (TY)</h2>

                <?php

                    // $movie = $_GET['movie'];
                    // echo $movie;
                    echo "<br>";
                    $datebtn = 'date-btn';
                    $num = '1';
                    $ty_time = getTY_1_TimeInfo();
                    while($row = mysqli_fetch_array($ty_time))
                    {
                        extract($row);
                ?>                 
                        <a class="time" role="button" style="color: black ; text-decoration: none;"
                            href="check_schedule.php?branchSeatID=<?php echo $branchSeatID?>&StarTime=<?php echo $StartTime?>"><?php echo $StartTime?>
                        </a>

                <?php 
                    }
                ?>
                <br>
                <h2>Mong Kok Cinema (MK)</h2>
                <?php

                    // $movie = $_GET['movie'];
                    // echo $movie;
                    echo "<br>";
                    $datebtn = 'date-btn';
                    $num = '1';

                    $mk_time = getMK_1_TimeInfo();
                    while($row = mysqli_fetch_array($mk_time))
                    {
                        extract($row);
                    ?>                 
                        <a class="time" role="button" style="color: black ; text-decoration: none;"
                            href="check_schedule.php?branchSeatID=<?php echo $branchSeatID?>&StarTime=<?php echo $StartTime?>"><?php echo $StartTime?>
                        </a>

                <?php 
                    }
                ?>

                <h2>Causeway Bay Cinema (CWB)</h2>
                <?php

                    // $movie = $_GET['movie'];
                    // echo $movie;
                    echo "<br>";
                    $datebtn = 'date-btn';
                    $num = '1';

                    $cwb_time = getCWB_1_TimeInfo();
                    while($row = mysqli_fetch_array($cwb_time))
                    {
                        extract($row);
                    ?>                 
                        <a class="time" role="button" style="color: black ; text-decoration: none;"
                            href="check_schedule.php?branchSeatID=<?php echo $branchSeatID?>&StarTime=<?php echo $StartTime?>"><?php echo $StartTime ?>
                        </a>

                <?php 
                }
                ?>

            </div>

            <div id="2" class="date" style="display:none">
                <h2>Tsing Yi Cinema (TY) </h2>
                <?php
                    echo "<br>";
                    $datebtn = 'date-btn';
                    $num = '1';
                    $ty_time = getTY_2_TimeInfo();
                    while($row = mysqli_fetch_array($ty_time))
                    {
                        extract($row);
                    ?>                 
                        <a class="time" role="button" style="color: black ; text-decoration: none;"
                            href="check_schedule.php?branchSeatID=<?php echo $branchSeatID?>&StarTime=<?php echo $StartTime?>"><?php echo $StartTime?>
                        </a>

                <?php 
                }
                ?>

                <br>
                <h2>Mong Kok Cinema (MK)</h2>
                <?php
                    echo "<br>";
                    $datebtn = 'date-btn';
                    $num = '1';
                    $mk_time = getMK_2_TimeInfo();
                    while($row = mysqli_fetch_array($mk_time))
                    {
                        extract($row);
                    ?>                 
                        <a class="time" role="button" style="color: black ; text-decoration: none;"
                            href="check_schedule.php?branchSeatID=<?php echo $branchSeatID?>&StarTime=<?php echo $StartTime?>"><?php echo $StartTime?>
                        </a>

                <?php 
                }
                ?>
                <br>
                <h2>Causeway Bay Cinema (CWB)</h2>
                <?php
                    echo "<br>";
                    $datebtn = 'date-btn';
                    $num = '1';
                    $ty_time = getCWB_2_TimeInfo();
                    while($row = mysqli_fetch_array($ty_time))
                    {
                        extract($row);
                    ?>                 
                        <a class="time" role="button" style="color: black ; text-decoration: none;"
                            href="check_schedule.php?branchSeatID=<?php echo $branchSeatID?>&StarTime=<?php echo $StartTime?>"><?php echo $StartTime?>
                        </a>

                <?php 
                }
                ?>

            </div>

            <div id="3" class="date" style="display:none">
                <h2>Tsing Yi Cinema (TY) </h2>
                <?php
                    echo "<br>";
                    $datebtn = 'date-btn';
                    $num = '1';
                    $ty_time = getTY_3_TimeInfo();
                    while($row = mysqli_fetch_array($ty_time))
                    {
                        extract($row);
                    ?>                 
                        <a class="time" role="button" style="color: black ; text-decoration: none;"
                            href="check_schedule.php?branchSeatID=<?php echo $branchSeatID?>&StarTime=<?php echo $StartTime?>"><?php echo $StartTime?>
                        </a>

                <?php 
                }
                ?>


                <br>
                <h2>Mong Kok Cinema (MK)</h2>
                <?php
                    echo "<br>";
                    $datebtn = 'date-btn';
                    $num = '1';
                    $mk_time = getMK_2_TimeInfo();
                    while($row = mysqli_fetch_array($mk_time))
                    {
                        extract($row);
                    ?>                 
                        <a class="time" role="button" style="color: black ; text-decoration: none;"
                            href="check_schedule.php?branchSeatID=<?php echo $branchSeatID?>&StarTime=<?php echo $StartTime?>"><?php echo $StartTime?>
                        </a>

                <?php 
                }
                ?>
                <br>
                <h2>Causeway Bay Cinema (CWB)</h2>
                <?php
                    echo "<br>";
                    $datebtn = 'date-btn';
                    $num = '1';
                    $ty_time = getCWB_2_TimeInfo();
                    while($row = mysqli_fetch_array($ty_time))
                    {
                        extract($row);
                    ?>                 
                        <a class="time" role="button" style="color: black ; text-decoration: none;"
                            href="check_schedule.php?branchSeatID=<?php echo $branchSeatID?>&StarTime=<?php echo $StartTime?>"><?php echo $StartTime?>
                        </a>

                <?php 
                }
                ?>
            </div>


        </div>
    </form>

    <script>
 
        $("#date-btn1").click(function () {

            // if(first<=time){
            //      $("#time1").css({
            //         'cursor': 'not-allowed'
            //     })
            // }
            $("#1").css({
                'display': 'block'
            })
            $("#2").css({
                'display': 'none'
            })
            $("#3").css({
                'display': 'none'
            })
            $("#4").css({
                'display': 'none'
            })

            // if(first<=time){
            //      $("#time1").css({
            //         'cursor': 'not-allowed'
            // })
            // }


        });

        $("#date-btn2").click(function () {

            // if(first<=time){
            //      $("#time2").css({
            //         'cursor': 'not-allowed'
            //     })
            // }
            $("#1").css({
                'display': 'none'
            })

            $("#2").css({
                'display': 'block'
            })
            $("#3").css({
                'display': 'none'
            })
            $("#4").css({
                'display': 'none'
            })


            // if(first<=time){
            //      $("#time2").css({
            //         'cursor': 'not-allowed'
            // })
            // }

        });

        $("#date-btn3").click(function () {

            $("#1").css({
                'display': 'none'
            })

            $("#2").css({
                'display': 'none'
            })
            $("#3").css({
                'display': 'block'
            })
            $("#4").css({
                'display': 'none'
            })

        });

        $("#date-btn4").click(function () {

            $("#1").css({
                'display': 'none'
            })

            $("#2").css({
                'display': 'none'
            })
            $("#3").css({
                'display': 'none'
            })
            $("#4").css({
                'display': 'block'
            })

        });
    </script>

</body>
<script>
    w3.includeHTML();
</script>
</html>