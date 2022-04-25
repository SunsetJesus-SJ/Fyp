<html>

<head>
    <title>Change cinema seat</title>
    <script src="jslib/jquery-1.11.1.js"></script>
    <link rel="stylesheet" href="css/payment.css">
    <script type='text/javascript' src='http://cdn.staticfile.org/jquery/2.1.1/jquery.min.js'></script>
    <script type="text/javascript" src="http://cdn.staticfile.org/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
</head>

<body>


    <div class="page">
        <br>
        <!-- action="update_seat.php" -->
        <!-- action="update_db.php" -->
        <form name="summary" id="summary" method="post" action="change_seat_2.php">
            <?php

            ?>
            <div class="seatInfo_table">
                <div>
                    <h2>&nbsp;&nbsp;Change Seat </h2>
                </div>
            </div>
            <br>

            <!-- movie-name -->
            <div class="Info">
            <div class="Info">
                <div class="Info-box">
                    <div class="movie-name">
                        <br>
                        <input type="text" name="ticketID" id="ticketID" value="">
                        <button>Check</button>
                    </div>
                    <br>
                    <div class="Info2-left">

                        
                    </div>

                    <div class="Info2-right">

                        
                    </div>
                    <div style="display: none;">
                        
                        <br>
                    </div>
                </div>
                <br>

            </div>
            <br>

            <div class="Info">
                <br>
                <!-- seat  -->

                
           

                <div class="Info-box">
                    
                   
                </div>
                <br>

                <!-- Notice -->
                <div class="Info-box">
                    <div class="red-box"></div>
                    <label class="title">&nbsp;Notice</label>

                </div>
                <br>
                <div class="Info-box" style="background-color: rgb(224, 221, 221)">
                    <ul>
                        <li>Children ticket is available for those under 11 years old
                            (Children over 1 meter tall must hold valid ticket).
                            Senior ticket is for 60 years old or above.
                        </li><br>
                        <li>Audience with children or senior ticket must produce proof of age, and those with
                            student
                            ticket must present valid full time student card to our staff at the entrance of
                            auditorium;
                            otherwise our cinema staff has the right to refuse admission of the audience without any
                            compensation。</li><br>
                        <li>Outside Food and drinks are not allowed to bring in the cinema.</li><br>
                        <li id="refund" style="font-size: 30px; color: red;">Each ticket only One refund allowed before the playdate</li>
                    </ul>
                </div>
                <br>
                <div class="Info-box" style="text-align: center;">
                    Payment received by Cinema.com.hk Ltd. This online merchant is located in Hong Kong
                    All promotional offers are not applicable to this film
                </div>
                <br>
                <hr style="width: 900px;">
                <br>
                <br>
                <div class="Info-box" style="border: 0px;">
                    <input id="back-btn" type="button" onclick="history.back()" value="Back"
                        style="width: 40%; height:40px;">
                    <input id="next-btn" type="submit" value="Next" style="width: 40%; height:40px; float: right">
                </div>
                <br>
                <br>

            </div>

            <br>

        </form>

    </div>
</body>

<script>

    $(document).ready(function () {
        $("#next-btn").click(function () {
            $.post($("#ticket").attr("action"),
                $('#ticketIDForm').val(JSON.stringify(ticketID)),
                $('#seatType').val(JSON.stringify(type)),
                $('#seat').val(JSON.stringify(seatName))
                //$("#myForm :input").serializeArray(), 
            );
        });

        // $("#summary").submit(function () {
        //     return false;
        // });

    });

</script>


</html>