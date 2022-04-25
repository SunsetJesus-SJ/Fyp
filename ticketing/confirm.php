<html>

<head>
    <title>confirm ticket</title>
    <script src="jslib/jquery-1.11.1.js"></script>
    <link rel="stylesheet" href="css/payment.css">
    <script type='text/javascript' src='http://cdn.staticfile.org/jquery/2.1.1/jquery.min.js'></script>
    <script type="text/javascript" src="http://cdn.staticfile.org/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
</head>

<body>

    <!-- <form name="summary">
        <div class="info-box">

        </div>
    </form> -->
    <?php
        $movie = $_POST['movie'];
        $house = $_POST["house"];
        $seatID = $_POST["seatID"];
        $date = $_POST["date"];
        $startTime = $_POST["startTime"];
        $endTime = $_POST["endTime"];
        $branchSeatID = $_POST["branchSeatID"];
        $branchID = $_POST["branchID"];

        $PassSeat = json_decode($_POST['ticketIDForm'], true);
        $totalseat = count($PassSeat);
    ?>

    <div class="page">
        <br>
        <!-- action="update_seat.php" -->
        <!-- action="update_db.php" -->
        <form name="summary" id="summary" method="post" action="update_db.php">
            <?php
            //   echo '<input type="text" name="seat" id="seatform" value="'.$seat.'">';  
            ?>
            <div class="seatInfo_table">
                <div>
                    <h2>&nbsp;&nbsp;Confirm Ticket Information</h2>
                </div>
            </div>
            <br>

            <!-- movie-name -->
            <div class="Info">
            <div class="Info">
                <div class="Info-box">
                    <div class="movie-name">
                        <br>
                        <label for="selected-cinema"><?php echo $movie?></label>
                    </div>
                    <br>
                    <div class="Info2-left">

                        <label for="selected-cinema" class="label-1">cinema :&nbsp;<?php echo $branchID?></label>
                        <br>
                        <br>
                        <label for="selected-cinema" class="label-1">house :&nbsp;<?php echo $house?></label>
                        <br>
                        <br>
                        <label for="selected-cinema" class="label-1">Total seat : &nbsp;<?php echo $totalseat?></label>
                    </div>

                    <div class="Info2-right">

                        <label for="selected-cinema" class="label-1">Date :&nbsp;<?php echo $date?></label>
                        <br>
                        <br>
                        <label for="selected-cinema" class="label-1">Time :&nbsp;<?php echo $startTime?></label>
                    </div>
                    <div style="display: none;">
                        <input type="text" name="movie" value="<?php echo $movie?>">
                        <input type="text" name="house" value="<?php echo $house?>">
                        <input type="text" name="seatID" value="<?php echo $seatID?>">
                        <input type="text" name="date" value="<?php echo $date?>">
                        <input type="text" name="startTime" value="<?php echo $startTime?>">
                        <input type="text" name="endTime" value="<?php echo $endTime?>">
                        <input type="text" name="branchSeatID" value="<?php echo $branchSeatID?>">
                        <input type="text"  name="branchID" value="<?php echo $branchID?>">
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
                    <div class="red-box"></div>
                    <div class="title">&nbsp;Seat Information :</div>
                    <br>
                    <br>

                    <?php 

                            $seat = json_decode($_POST['seat'], true);
                            $ticketIDForm = json_decode($_POST['ticketIDForm'], true);
                            $seatType = json_decode($_POST['seatType'], true);

                            $totalTicket = count($ticketIDForm);
                            // echo $totalTicket-1;
                            // echo "<br>";
                            // echo implode(" ",$seat);
                            // echo "<br>";
                            // echo implode(" ",$ticketIDForm);
                            // echo "<br>";
                            // echo implode(" ",$seatType);
                            // echo "<br>";

                            for($x = 0; $x <= $totalTicket-1; $x++ ){
                                echo '<div class="seat" name="seat">'.$seat[$x].'
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ticketIDForm[$x].'
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$seatType[$x].'</div><br>';
                                echo "<br>";
                                echo "<hr style='width: 900px;'>";
                                echo "<br>";
                                // echo "<input type='text' class='seatID' name=".$seat[$x]." id=".$seat[$x]." value=".$seat[$x].">";
                                // echo "<input type='text' class='ticketID' name=".$ticketIDForm[$x]." id=".$ticketIDForm[$x]." value=".$ticketIDForm[$x].">";
                                // echo "<input type='text' class='type' name=".$seatType[$x]." id=".$seatType[$x]." value=".$seatType[$x].">";
                            }
                        
                    ?>
                    <!-- <div id="<?php echo $seat[0]?>"></div> -->
                    <input type="text" name="seat" id="seat" value="" style="display: none;">
                    <input type="text" name="ticketIDForm" id="ticketIDForm" value="" style="display: none;">
                    <input type="text" name="seatType" id="seatType" value="" style="display: none;">
                </div>
                <br>

                <div class="Info-box">
                    <div class="red-box"></div>
                    <div class="title">&nbsp;Seat QR code :</div>
                    <br>
                    <br>
                    <div id="qrcode"></div>
                    <script>
                        var seatName = <?php echo json_encode($seat); ?>;
                        var ticketID = <?php echo json_encode($ticketIDForm); ?>;
                        for(let i = 0; i <= ticketID.length-1; i++){
                            document.write('<div class="qrcode" id=',ticketID[i],'>','</div>');
                            document.write('<br>');
                            document.write('<br>');
                            document.write('<br>');
                        }
                        
                         
                    </script>

                    <script>
                        var htype = '#';
                        
                        for (let x = 0; x <= ticketID.length-1; x++){
                            var qrcodeID = ticketID[x];
                            var idName = htype + qrcodeID;
                            $(idName).qrcode({width: 150,height: 150,text:ticketID[x]});
                        }
                    
                        
                    </script>

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
    var seatName = <?php echo json_encode($seat); ?>;
    var ticketID = <?php echo json_encode($ticketIDForm); ?>;
    var type = <?php echo json_encode($seatType); ?>;

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

    $('#A3').qrcode({width: 150,height: 150,text:"<?php echo $ticketIDForm[0]?>"});
</script>


</html>