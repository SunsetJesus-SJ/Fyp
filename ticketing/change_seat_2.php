<html>

<head>
    <title>Change cinema seat</title>
    <script src="jslib/jquery-1.11.1.js"></script>
    <link rel="stylesheet" href="css/payment.css">
    <script type='text/javascript' src='http://cdn.staticfile.org/jquery/2.1.1/jquery.min.js'></script>
    <script type="text/javascript" src="http://cdn.staticfile.org/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
</head>

<body>
    <?php
        // var_dump($_POST);
        $ticketID = $_POST['ticketID'];

        // echo $ticketID;

        $conn = mysqli_connect("127.0.0.1", "root", "", "fyp_ticket")
        or die(mysqli_connect_error());
        $SQL = "SELECT * FROM `house_record` WHERE ticketID = '$ticketID'";

        $rs = mysqli_query($conn, $SQL);
        while ($rc = mysqli_fetch_assoc($rs)){
        extract($rc);

        }
                // var_dump($rc);
        mysqli_free_result($rs);
        mysqli_close($conn);

    ?>

    



    <div class="page">
        <br>
        <!-- action="update_seat.php" -->
        <!-- action="update_db.php" -->
        <form action="refund_<?php echo $house?>.php" method="post" >
            
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
                    <div class="red-box"></div>
                    <div class="title">&nbsp;Seat Information :</div>
                    <br>
                    <br>
                    <div><?php echo $movie?></div>
                    <br>
                    <div><?php echo $house?></div>
                    <br>
                    <div><?php echo $seatID?></div>
                    <br>
                    <div><?php echo $date?></div>
                    <br>
                    <div><?php echo $StartTime?></div>
                    <br>
                    <div><?php echo $email?></div>
                    <br>
                    <div><?php echo $type?></div>
                    <br>
                    <div><?php echo $branchID?></div>


                    <!-- style="display: none;" -->
                    <div >
                        <input type="text" name="movie" value="<?php echo $movie?>">
                        <input type="text" name="house" value="<?php echo $house?>">

                        <input type="text" name="OldseatID" value="<?php echo $seatID?>">

                        <input type="text" name="date" value="<?php echo $date?>">
                        <input type="text" name="startTime" value="<?php echo $StartTime?>">
                        <input type="text" name="endTime" value="<?php echo $EndTime?>">
                        <input type="text" name="branchSeatID" value="<?php echo $branchSeatID?>">
                        <input type="text"  name="branchID" value="<?php echo $branchID?>">
                        
                        
                        <br>
                    </div>
            
                </div>
                <br>
                <?php

                    $conn2 = mysqli_connect("127.0.0.1", "root", "", "fyp_ticket")
                    or die(mysqli_connect_error());
                    $SQL2 = "SELECT * FROM ticket_record WHERE ticketID = '$ticketID'";

                    $rs2 = mysqli_query($conn2, $SQL2);
                    while ($rc2 = mysqli_fetch_assoc($rs2)){
                    extract($rc2);

                    }
                    var_dump($rc2);
                    mysqli_free_result($rs2);
                    mysqli_close($conn2);

                ?>  
                <input type="text"  name="refundTime" value="<?php echo $EndTime?>">
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
                        <li id="refund" style="font-size: 30px; color: red;">Each ticket only One change allowed before the playdate</li>
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
                    <!-- <input id="next-btn" type="button" value="Next" style="width: 40%; height:40px; float: right"> -->
                    <button id="next-btn" style="width: 40%; height:40px; float: right">Continue</button>
                </div>
                <br>
                <br>

            </div>

            <br>

        </form>

    </div>
</body>

<script>
    var refund = document.getElementById('refund').value;

    if (refund != 0) {
        document.getElementById("next-btn").style.display = "none";
        alert("Sorry!! You have been already change your seat");
    }else {

    }
    
    // $(document).ready(function () {
    //     $("#next-btn").click(function () {
    //         $.post($("#ticket").attr("action"),
    //             $('#ticketIDForm').val(JSON.stringify(ticketID)),
    //             $('#seatType').val(JSON.stringify(type)),
    //             $('#seat').val(JSON.stringify(seatName))
    //             //$("#myForm :input").serializeArray(), 
    //         );
    //     });


    // });

</script>


</html>