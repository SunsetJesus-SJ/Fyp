<html>

<head>
    <title>Movie Schedule</title>
    <script src="jslib/jquery-1.11.1.js"></script>
    <link rel="stylesheet" href="css/schedule.css">
</head>

<body>
<!-- onclick="openCity('1')" -->

    <div class="date-box">
        <button class="date-btn" id="date-btn1"></button>
        <button class="date-btn" id="date-btn2">12/4/2022</button>
        <button class="date-btn" id="date-btn3">13/4/2022</button>
        <button class="date-btn" id="date-btn4">14/4/2022</button>
    </div>
    <br>
    <br>

    <div class="cinema">

        <!-- <div class="cinema-box">
        </div> -->


        <!-- style="display:none" -->
        <div id="1" class="date" >
            <h2>Tsing Yi Cinema (TY) </h2>
            <input type="button" class="time" id="time1" value="10:30" >&nbsp;
            <input onclick="location.href='http://127.0.0.1/ticketing/seat_plan1.php';" type="button" class="time" id="time2" value="14:45" >&nbsp;
            <input type="button" class="time" id="time3" value="19:15">&nbsp;

            <!-- <input onclick="test();" type="button" value="test"> -->
            <br>
            <h2>Mong Kok Cinema (MK)</h2>
            <input type="button" class="time" id="time1" value="8:30">&nbsp;
            <input type="button" class="time" id="time2" value="12:45">&nbsp;
            <input type="button" class="time" id="time3" value="15:00">&nbsp;
            <input type="button" class="time" id="time4" value="20:00">&nbsp;
            <br>
            <h2>Causeway Bay Cinema (CWB)</h2>
            <input type="button" class="time" id="time1" value="9:30">&nbsp;
            <input type="button" class="time" id="time2" value="13:15">&nbsp;
            <input type="button" class="time" id="time3" value="18:00">
        </div>


        <div id="2" class="date" style="display:none">
        <h2>Tsing Yi Cinema (TY) </h2>
            <input type="button" class="time" id="time1" value="10:30">&nbsp;
            <input type="button" class="time" id="time2" value="14:45">&nbsp;
            <input type="button" class="time" id="time3" value="19:15">&nbsp;
            <input type="button" class="time" id="time2" value="22:15">&nbsp;

            <!-- <input onclick="test();" type="button" value="test"> -->
            <br>
            <h2>Mong Kok Cinema (MK)</h2>
            <input type="button" class="time" id="time1" value="8:30">&nbsp;
            <input type="button" class="time" id="time2" value="12:45">&nbsp;
            <input type="button" class="time" id="time3" value="15:00">&nbsp;
            <input type="button" class="time" id="time4" value="17:15">&nbsp;
            <input type="button" class="time" id="time4" value="19:45">&nbsp;
            <input type="button" class="time" id="time4" value="21:30">&nbsp;
            <input type="button" class="time" id="time4" value="22:00">&nbsp;

            <br>
            <h2>Causeway Bay Cinema (CWB)</h2>
            <input type="button" class="time" id="time1" value="9:30">&nbsp;
            <input type="button" class="time" id="time2" value="13:15">&nbsp;
            <input type="button" class="time" id="time3" value="18:00">
        </div>



        <div id="3" class="date" style="display:none">
        <h2>Tsing Yi Cinema (TY) </h2>
            <input type="button" class="time" id="time1" value="10:30">&nbsp;
            <input type="button" class="time" id="time2" value="14:45">&nbsp;
            <input type="button" class="time" id="time3" value="19:15">

            <!-- <input onclick="test();" type="button" value="test"> -->
            <br>
            <h2>Mong Kok Cinema (MK)</h2>
            <input type="button" class="time" id="time1" value="8:30">&nbsp;
            <input type="button" class="time" id="time2" value="12:45">&nbsp;
            <input type="button" class="time" id="time3" value="15:00">&nbsp;
            <input type="button" class="time" id="time4" value="20:00">&nbsp;
            <br>
            <h2>Causeway Bay Cinema (CWB)</h2>
            <input type="button" class="time" id="time1" value="9:30">&nbsp;
            <input type="button" class="time" id="time2" value="13:15">&nbsp;
            <input type="button" class="time" id="time3" value="18:00">&nbsp;
            <input type="button" class="time" id="time3" value="20:00">&nbsp;
            <input type="button" class="time" id="time3" value="22:15">&nbsp;
        </div>



        <div id="4" class="date" style="display:none">
        <h2>Tsing Yi Cinema (TY) </h2>
            <input type="button" class="time" id="time1" value="10:30">&nbsp;
            <input type="button" class="time" id="time2" value="14:45">&nbsp;
            <input type="button" class="time" id="time3" value="19:15">&nbsp;

            <!-- <input onclick="test();" type="button" value="test"> -->
            <br>
            <h2>Mong Kok Cinema (MK)</h2>
            <input type="button" class="time" id="time1" value="8:30">&nbsp;
            <input type="button" class="time" id="time2" value="12:45">&nbsp;
            <input type="button" class="time" id="time3" value="15:00">&nbsp;
            <input type="button" class="time" id="time4" value="20:00">&nbsp;
            <input type="button" class="time" id="time4" value="21:30">&nbsp;
            <br>
            <h2>Causeway Bay Cinema (CWB)</h2>
            <input type="button" class="time" id="time1" value="9:30">&nbsp;
            <input type="button" class="time" id="time2" value="11:15">&nbsp;
            <input type="button" class="time" id="time3" value="14:00">&nbsp;
            <input type="button" class="time" id="time4" value="16:30">&nbsp;
            <input type="button" class="time" id="time4" value="21:15">&nbsp;
        </div>



        

        <!-- <div id="3" class="date" style="display:none">
            <h2>Tokyo</h2>
            <p>Tokyo is the capital of Japan.</p>
        </div>
        <div id="4" class="date" style="display:none">
            <h2>FUCK</h2>
            <p>Tokyo is the capital of Japan.</p>
        </div>
        <div id="5" class="date" style="display:none">
            <h2>you</h2>
            <p>Tokyo is the capital of Japan.</p>
        </div> -->

        <!-- <div class="red" id="red" style="background-color: red;width: 100px; height:100px;">red</div> -->

    </div>




    <script>
        // function openCity(date) {
        //     var i;
        //     var x = document.getElementsByClassName("date");
        //     for (i = 0; i < x.length; i++) {
        //         x[i].style.display = "none";
        //     }
        //     document.getElementById(date).style.display = "block";
        // }

        // function test() {
        //     // var dtToday = new Date();
        //     var dtToday = "22:30";
        //     var strvalue = document.getElementById("time3").value;
        //     // var mydate = new Date(strvalue);
        //     var mydate = new Date(strvalue);

        //     alert("您輸入的日期為 " + strvalue);

        //     if (strvalue >= dtToday) {
        //         alert('日期必需要大於今天');
        //     } else {
        //         // alert('OK');
        //         // alert(strvalue);
        //         document.getElementById("time1").style.cursor = 'not-allowed';
        //         // document.getElementById("time3").style.display = "none";
        //     }
        // }

        // var today = new Date();
        // var time = today.getHours() +":" + today.getMinutes();
        // var first = document.getElementById("time1").value;
        
        var Today=new Date();
        var now = Today.getFullYear()+ "/" + (Today.getMonth()+1) + "/" + (Today.getDate());
        document.getElementById('date-btn1').innerHTML = now;

    
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