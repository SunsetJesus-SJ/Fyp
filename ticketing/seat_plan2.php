<!DOCTYPE html>
<html lang="en">

<head>
    <title>seat</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://www.w3schools.com/w3css/4/w3.css">

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="css/seat_plan3.css">

</head>

<body class="w3-panel w3-black">

    <div class="show_screen">
        <div class="screen">
            <p id="screen">screen</p>
        </div>
    </div>


    <div class="show_seat">

        <div class="seat_left">
            <script>
                var rows = "ABCDEFG";

                for (i = 0; i < rows.length; i++) {
                    // document.write('<div class="w3-center">');
                    for (j = 1; j <= 2; j++) {
                        document.write('<div class="seatbox" id="', rows.charAt(i), j, '"',
                            'onclick="toggle(this.id);"', '>',
                            rows.charAt(i), j, '</div>&nbsp&nbsp&nbsp');
                    }

                    // document.write('</div>');
                    document.write('<br>');
                }
            </script>
            
        </div>
        

        <div class="seat_left-1">
            <script>
                var rows = "ABCDEF";

                for (i = 0; i < rows.length; i++) {
                    // document.write('<div class="w3-center">');
                    for (j = 3; j <= 6; j++) {
                        document.write('<div class="seatbox" id="', rows.charAt(i), j, '"',
                            'onclick="toggle(this.id);"', '>',
                            rows.charAt(i), j, '</div>&nbsp&nbsp&nbsp');
                    }

                    // document.write('</div>');
                    document.write('<br>');
                }
            </script>
        </div>

        



        <div class="seat_center">
            <script>
                var rows = "ABC";

                for (i = 0; i < rows.length; i++) {
                    // document.write('<div class="w3-center">');
                    for (j = 7; j <= 9; j++) {
                        document.write('<div class="seatbox" id="', rows.charAt(i), j, '"',
                            'onclick="toggle(this.id);"', '>',
                            rows.charAt(i), j, '</div>&nbsp&nbsp&nbsp');
                    }

                    // document.write('</div>');
                    // document.write('<br>');
                }
            </script>
       
        </div>
        
    </div>

    <hr style="width: 500px; margin:auto">
    <br>
    <div class="seat-status">
        <div class="status-1">
            <div class="sample-1"></div>
            <p>Available</p>
        </div>
        <div class="status-2">
            <div class="sample-2"></div>
            <p>Sold</p>
        </div>
        <div class="status-3">
            <div class="sample-3"></div>
            <p>Selected</p>
        </div>

    </div>
    <!-- action="change_seat.php" -->
    <!-- action="payment.php" -->
    <form id="form1" name="form1" method="post" action="payment.php">
        <p>Gray = available &nbsp;&nbsp;&nbsp;Red = reserved</p>
        <p>Selected seats : <span id="selectedSeatsID"></span></p>
        <input type="" name="seatsInForm" id="seatsInForm"><br><br>
        <input type="" id="result"><br><br>
        <input type="submit" id="submit" value="Next">
        <input type="button" id="btnB" value="check" onclick="check()">
    </form>

    <!-- php -->
    <table border="1" id="seatTable">
        <tr>
            <th>Seat ID</th>
            <th>Status</th>

        </tr>
        <?php
            $conn = mysqli_connect("127.0.0.1", "root", "", "fyp_ticket")
            or die(mysqli_connect_error());
            $SQL = "SELECT * FROM seat_plan1";
            $rs = mysqli_query($conn, $SQL);
            while ($rc = mysqli_fetch_assoc($rs)){
            extract($rc);
                echo "<tr>
                <td>$seatID</td>
                <td>$status</td>
            </tr>";
            }
            var_dump($rc);
            mysqli_free_result($rs);
            mysqli_close($conn);
        ?>
    </table>
    <!-- click seat -->
    <script>
        var selectedseats = [];

        // function restoreColor(seatId) {
        //     var a = selectedseats.indexOf(seatId);
        //     if (a == -1)
        //         document.getElementById(seatId).style.backgroundColor = 'gray';
        //     else
        //         document.getElementById(seatId).style.backgroundColor = 'green';
        // }



        function toggle(seatId) {
            var a = selectedseats.indexOf(seatId);
            if (a == -1)
                add(seatId);
            else
                cancel(seatId);
        }

        function add(seatId) {
            selectedseats.push(seatId);
            updateSelectedSeats();
            document.getElementById(seatId).style.color = 'black';
            document.getElementById(seatId).style.backgroundColor = 'rgb(102, 240, 84)';
            // document.getElementById(seatId).style.textDecoration = 'line-through';
        }

        function cancel(seatId) {
            var a = selectedseats.indexOf(seatId);
            selectedseats.splice(a, 1);
            updateSelectedSeats();
            document.getElementById(seatId).style.color = 'white';
            document.getElementById(seatId).style.backgroundColor = 'gray';
            document.getElementById(seatId).style.textDecoration = '';
        }

        function updateSelectedSeats() {
            var s = "";
            selectedseats.sort();
            for (x of selectedseats) {
                s += x + ' ';
            }
            document.getElementById('selectedSeatsID').innerHTML = s;
            document.getElementById('seatsInForm').value = s;
        }

        $(document).ready(function () {
            $("#submit").click(function () {
                $.post($("#form1").attr("action"),
                    $('#seatsInForm').val(JSON.stringify(selectedseats)),
                    //$("#myForm :input").serializeArray(), 
                    function (info) {
                        $("#result").html(info);
                    });
            });

            $("#myForm").submit(function () {
                return false;
            });

        });
    </script>

    <!-- check seat -->
    <script>
        var seatRow = "ABC";
        var tableRow = document.getElementById("seatTable").rows.length;
        var countRecord = tableRow - 1; // document.getElementById("A1").innerHTML = countRecord;

        var seatRowA = "A";
        var seatRowB = "B";
        var seatRowC = "C";

        var countA = 1;
        var countB = 7;
        var countC = 13;

        window.onload = function check() {


            //A
            for (x = 1; x <= 6; x++) {
                if (document.getElementById("seatTable").rows[countA].cells[1].innerHTML == 'T') {

                    seatRowA = seatRowA + x;
                    document.getElementById(seatRowA).style.backgroundColor = 'gray';
                    document.getElementById(seatRowA).style.cursor = "pointer";
                    seatRowA = "A";
                    countA++;

                } else {
                    seatRowA = seatRowA + x;
                    // document.getElementById(seatRowA).style.backgroundColor = 'red';
                    document.getElementById(seatRowA).id = 'occupied';
                    seatRowA = "A";
                    countA++;
                }

            }

            // B
            for (y = 1; y <= 6; y++) {
                if (document.getElementById("seatTable").rows[countB].cells[1].innerHTML == 'T') {

                    seatRowB = seatRowB + y;
                    document.getElementById(seatRowB).style.backgroundColor = 'gray';
                    document.getElementById(seatRowB).style.cursor = "pointer";
                    seatRowB = "B";
                    countB++;

                } else {
                    seatRowB = seatRowB + y;
                    // document.getElementById(seatRowB).style.backgroundColor = 'red';
                    document.getElementById(seatRowB).id = 'occupied';
                    seatRowB = "B";
                    countB++;
                }

            }

            //C
            for (z = 1; z <= 6; z++) {
                if (document.getElementById("seatTable").rows[countC].cells[1].innerHTML == 'T') {

                    seatRowC = seatRowC + z;
                    document.getElementById(seatRowC).style.backgroundColor = 'gray';
                    document.getElementById(seatRowC).style.cursor = "pointer";
                    seatRowC = "C";
                    countC++;

                } else {
                    seatRowC = seatRowC + z;
                    // document.getElementById(seatRowC).style.backgroundColor = 'red';
                    document.getElementById(seatRowC).id = 'occupied';
                    seatRowC = "C";
                    countC++;
                }

            }
            // document.getElementById("C1").style.backgroundColor = 'red';
        }
    </script>


</body>

</html>