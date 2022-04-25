<html>

<head>
    <title>Movie Schedule</title>
    <script src="jslib/jquery-1.11.1.js"></script>
    <link rel="stylesheet" href="css/schedule.css">
</head>

<body>
    <!-- onclick="openCity('1')" -->
    <?php
        

    ?>
    <form method="post" action="">

        <div class="date-box">

            <div class="date-btn" id="date-btn1" onclick=""></div>
            <div class="date-btn" id="date-btn2" onclick=""></div>
            <div class="date-btn" id="date-btn3" onclick=""></div>
            <div class="date-btn" id="date-btn4" onclick=""></div>

        </div>
        <br>
        <br>

        <div class="cinema">

            <!-- <div class="cinema-box">
                </div> -->


            <!-- style="display:none" -->
            <div id="1" class="date">
                <h2>Tsing Yi Cinema (TY) </h2>

                <?php
                    include "PHP/getHouseInfo.php";
                    $list = getHouseInfo();
                    while ($record = mysqli_fetch_assoc($list)) {
                        extract($record);
                ?>
                   <!-- <input type="button" class="time" id="time1" value="">&nbsp; -->
                   <a class="time" role="button" style="color: black ; text-decoration: none;" href="check_schedule.php?branchSeatID=<?php echo $branchSeatID?>"><?php echo $StartTime?></a>
                <?php
                }
                ?>
                <br>
                <h2>Mong Kok Cinema (MK)</h2>

                <h2>Causeway Bay Cinema (CWB)</h2>


            </div>

            <div id="2" class="date" style="display:none">
                <h2>Tsing Yi Cinema (TY) </h2>

                <!-- <input onclick="test();" type="button" value="test"> -->
                <br>
                <h2>Mong Kok Cinema (MK)</h2>


                <br>
                <h2>Causeway Bay Cinema (CWB)</h2>

            </div>



            <div id="3" class="date" style="display:none">
                <h2>Tsing Yi Cinema (TY) </h2>


                <!-- <input onclick="test();" type="button" value="test"> -->
                <br>
                <h2>Mong Kok Cinema (MK)</h2>

                <br>
                <h2>Causeway Bay Cinema (CWB)</h2>

            </div>



            <div id="4" class="date" style="display:none">
                <h2>Tsing Yi Cinema (TY) </h2>
           

                <!-- <input onclick="test();" type="button" value="test"> -->
                <br>
                <h2>Mong Kok Cinema (MK)</h2>

                <br>
                <h2>Causeway Bay Cinema (CWB)</h2>

            </div>


        </div>
    </form>





    <script>
        var Today = new Date();
        var now = Today.getFullYear() + "/" + (Today.getMonth() + 1) + "/" + (Today.getDate());
        var now1 = Today.getFullYear() + "/" + (Today.getMonth() + 1) + "/" + (Today.getDate() + 1);
        var now2 = Today.getFullYear() + "/" + (Today.getMonth() + 1) + "/" + (Today.getDate() + 2);
        var now3 = Today.getFullYear() + "/" + (Today.getMonth() + 1) + "/" + (Today.getDate() + 3);
        document.getElementById('date-btn1').innerHTML = now;
        document.getElementById('date-btn2').innerHTML = now1;
        document.getElementById('date-btn3').innerHTML = now2;
        document.getElementById('date-btn4').innerHTML = now3;


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

</html>