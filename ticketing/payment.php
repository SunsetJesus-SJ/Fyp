<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/payment.css">
</head>
<script src="jslib/jquery-1.11.1.js"></script>
<script type="text/javascript" src="../ticketing/js/submit_seat.js"></script>
<script>
    function addLoadEvent(func) {
        var oldonload = window.onload;
        if (typeof window.onload != 'function') {
            window.onload = func;
        } else {
            window.onload = function () {
                if (oldonload) {
                    oldonload();
                }
                func();
            }
        }
    }

    addLoadEvent(function () {
        // var price = document.getElementById('C1').value;
        // document.getElementById('lbltipAddedComment').innerHTML = price*2;


    });
</script>



<body>

    <?php
            $str = json_decode($_POST['seatsInForm'], true);
            $totalseat = count($str);
            $seat = implode(" ",$str);
            
    ?>
    <div class="page">
        <br>
        <!-- action="update_seat.php" -->
        <form name="ticket" method="post" action="confirm.php">
            <?php
            //   echo '<input type="text" name="seat" id="seatform" value="'.$seat.'">';  
            ?>
            <div class="seatInfo_table">
                <div>
                    <h2>&nbsp;&nbsp;Ticket Information</h2>
                </div>
            </div>
            <br>
            <div class="Info">
                <div class="Info-box">
                    <div class="movie-name">
                        <label for="selected-cinema">movie name :</label>
                    </div>
                    <br>
                    <div class="Info2-left">

                        <label for="selected-cinema" class="label-1">cinema :</label>
                        <br>
                        <br>
                        <label for="selected-cinema" class="label-1">house :</label>
                        <br>
                        <br>
                        <label for="selected-cinema" class="label-1">Total seat :</label>
                    </div>

                    <div class="Info2-right">

                        <label for="selected-cinema" class="label-1">Date :</label>
                        <br>
                        <br>
                        <label for="selected-cinema" class="label-1">Time :</label>
                    </div>
                </div>
                <br>

            </div>
            <br>

            <!-- card info -->
            <div class="Info">
                <div class="payment">
                    <br>
                    <div class="red-box"></div>

                    <div class="title">&nbsp;Please Select Payment Type</div>
                </div>
                <br>
                <div class="payment-method">

                    <input type="radio" id="credit-card" name="credit-card" value="credit-card">
                    <label for="credit-card" class="label-2">Any Credit Card&nbsp;<img id="visa"
                            src="img/visa.jpg">&nbsp;<img id="mastercard" src="img/mastercard.jpg"></label>

                </div>
                <br>
                <!-- Credit Card -->
                <div class="card-info" id="card-info">
                    <label>Credit Card No.</label>
                    <br>
                    <!-- name="card-no" -->
                    <input id="credit-id"  placeholder="xxxx-xxxx-xxxx-xxxx" style="text-align: center;">
                    <br>
                    Please input your credit card number.
                    <br>
                    <br>
                    In ticket picking-up procedure, you are required to provide
                    this credit card no. for verification.<br>
                    <br>
                    (Notice: If the issuing bank of your Visa / MasterCard card for online payment has “Verified by
                    Visa”/ “MasterCard SecureCode” service, please activate this service to make sure you can use your
                    Visa/MasterCard card online by adding password to your existing credit card.
                    Please contact your respective credit card issuing bank to learn more this service, otherwise your
                    transaction may not be successful.)
                    <br>
                    <hr style="width: 900px;">
                    <br>
                    <label>Credit Card Expiry Date</label>
                    <br>
                    <!-- name="month" -->
                    <select id="month" >
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    ---
                    <!-- name="year" -->
                    <select id="year" >
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>

                    </select>
                    <hr style="width: 900px;">
                    <br>
                    <label>Card Security Code</label>
                    <br>
                    <input id="credit-info" placeholder="xxx" style="text-align: center;">
                    <hr style="width: 900px;">
                </div>
                <br>
                <div class="Info-box" style="text-align: center;">
                    Payment received by Cinema.com.hk Ltd. This online merchant is located in Hong Kong
                    All promotional offers are not applicable to this film
                </div>
                <br>
                <hr style="width: 900px;">

                <br>
                <!-- Coupon -->
                <div class="Info-box">
                    <div class="red-box"></div>
                    <div class="title">&nbsp;Enter Coupon Code</div>
                    <input id="credit-id" placeholder="xxxxxx" style="text-align: center; width: 30%;">
                    <input id="apply-btn" type="button" value="Apply" style="width: 20%; height: 38px">
                </div>
                <br>
                <hr style="width: 900px;">
                <br>

                <!-- seat  -->

                <div class="Info-box">
                    <div class="red-box"></div>
                    <div class="title">&nbsp;Seat No.</div>
                    <br>

                    <?php
                        $str = json_decode($_POST['seatsInForm'], true);
                        $totalseat = count($str);
                        $amount = 0;
                        $price = "price";
                        $idArray = [];
                        // $totalseat-1
                        for ($x = 0; $x <= $totalseat-1; $x++ ) {


                            echo"&nbsp;";
                            echo"&nbsp;";
                            echo $str[$x];
                            
                            $id = $str[$x];
                            $randnum = rand(100000000,999999999);
                            $ticketnum = 'ticketID'; 
                            $type = "type";
                            $seatType = $id.$type;
                            $ticketID = $id.$randnum;
                            $ticketName = $id.$ticketnum;
                            $passSeatType = $id.$type;

                            $idArray[] = $ticketID;

                            echo "<input type='text' class='ticketID' name=".$ticketName." id=".$ticketID." value=".$ticketID.">";
                            echo "<input type='text' class='seatType' name=".$passSeatType." id=".$seatType." value='' size='10'>";
                            echo"<select id=".$id." class=".$price." name=".$id." style='width: 50%; height: 40px; float: right;'>";
                            echo"<option value='0'>---------</option>";
                            echo"<option value='110'>$100 Student + $10 service charge</option>";
                            echo"<option value='150'>$140 Adult + $10 service charge</option>";
                            echo"</select>";
                            echo"<br>";
                            echo"<br>";
                            echo"<br>";
                            echo"<hr style='width: 325px; float: left'>";
                            echo"<br>";
                            
                        }

                        
                    ?>


                </div>
                <br>

                <!-- confirm -->
                <div class="confirm-amount">
                    <div class="confirm-btn" id="confirm-btn" onclick="checkamount()">Confirm</div>
                </div>
                <br>
                <input type="text" name="seat" id="seat" value="">
                <input type="text" name="ticketIDForm" id="ticketIDForm" value="">
                <input type="text" name="seatType" id="seatType" value="">
                <!-- total-amount -->
                <div class="total-amount">
                    <!-- <label class="label-amount" id="amount" value="1">Total amount :</label> -->
                    <div class="display-price" id="display-price">Total amount :</div>
                </div>
                <br>
                <hr style="width: 900px;">
                <br>
                <!-- Contact Information -->
                <div class="Info-box">
                    <div class="red-box"></div>
                    <label class="title">&nbsp;Contact Information</label>
                    <br>
                    <br>
                    <label>Email</label>
                    <br>
                    <input id="credit-info" style="width: 70%; text-align: center;">
                    <br>
                    <label>(Please input your email address and make sure the email address is correct.
                        We will email you a transaction confirmation to this address after you purchase ticket.)
                    </label>
                </div>
                <br>
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
                        <li>Audience with children or senior ticket must produce proof of age, and those with student
                            ticket must present valid full time student card to our staff at the entrance of auditorium;
                            otherwise our cinema staff has the right to refuse admission of the audience without any
                            compensation。</li><br>
                        <li>Outside Food and drinks are not allowed to bring in the cinema.</li><br>
                    </ul>
                </div>
                <br>

                <div class="Info-box" style="border: 0px;">
                    <input id="back-btn" type="button" onclick="history.back()" value="Back"
                        style="width: 40%; height:40px;">
                    <input id="next-btn" type="submit" value="Next" style="width: 40%; height:40px; float: right">
                </div>



            </div>

            <br>

        </form>

    </div>



    <!-- <input type="" name="selectedSeat" id="selectedSeat" value="<?php echo implode(" ",$str); ?>" /><br><br> -->
    <script>
        // $(document).ready(function () {
        //     $("#next-btn").click(function () {
        //         $.post($("#form1").attr("action"),
        //             $('#seatform').val(JSON.stringify()),
        //             //$("#myForm :input").serializeArray(), 
        //             function (info) {
        //                 $("#result").html(info);
        //             });
        //     });

        //     $("#myForm").submit(function () {
        //         return false;
        //     });

        // });

        var passedArray = <?php echo json_encode($str); ?>;
        var ticketID = <?php echo json_encode($idArray); ?>;
        var length = passedArray.length ;
        var price = 0;
        var amount = 0;
        var a = 1;
        var b = 1;
        var c = 'A3';
        var type = 'type';
        var typeArray = [];
        var idArray = [];

        // price = document.getElementById(c).value;
        // $('#confirm-btn').click(function () {
        //     $('#display-price').text(price);
        // });
        // passedArray.length-1
        function checkamount() {
            for(let x = 0; x <= passedArray.length-1; x++) {
                price = document.getElementById(passedArray[x]).value;
                parseInt(price);
                amount += parseInt(price);
                type = passedArray[x] + type;
                if (document.getElementById(passedArray[x]).value == '110'){
                    document.getElementById(type).value = 'Student';
                    typeArray[x] = "Student";
                }else if(document.getElementById(passedArray[x]).value == '150'){
                    document.getElementById(type).value = 'Adult';
                    typeArray[x] = "Adult";
                }else{
                    document.getElementById(type).value = '';
                }
                type = 'type';
            }

            for(let y = 0; y <= passedArray.length-1; y++) {

            }
            // alert(amount);
            // alert(typeArray);
            // alert(ticketID);
            document.getElementById('display-price').innerText = "Total amount : $" + amount + " (HKD)";
            amount = 0;
            
        }

        $(document).ready(function () {
            $("#next-btn").click(function () {
                $.post($("#ticket").attr("action"),
                    $('#ticketIDForm').val(JSON.stringify(ticketID)),
                    $('#seatType').val(JSON.stringify(typeArray)),
                    $('#seat').val(JSON.stringify(passedArray))
                    //$("#myForm :input").serializeArray(), 
                    );
            });

            $("#ticket").submit(function () {
                return false;
            });

        });

    </script>

</body>


</html>