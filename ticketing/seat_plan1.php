<!DOCTYPE html>
<html lang="en">

<head>
    <title>seat</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://www.w3schools.com/w3css/4/w3.css">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <!-- css -->
    <style>

        #screen {
            text-align: center;
            font-size: 40px;
            color: black;
        }
        .show_seat {
            width: 600px;
            margin: 50px auto;
            /* border: solid 1px gray; */
            overflow: hidden;
        }

        .seat_left {
            /* border: solid 1px gray; */
            float: left;
        }

        .seat_right {
            /* border: solid 1px gray; */
            float: right;
        }

        .seatbox {
            width: 50px;
            height: 50px;
            margin: 5px;
            border: 0px solid white;
            border-top-left-radius: 23px;
            border-top-right-radius: 23px;
            background-color: gray;
            text-align: center;
            line-height: 60px;
            display: inline-block;
            /* display: block; */

            /* width: 30px;
            height: 28px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            background: #777;
            margin: 5px;
            display: inline-block; */
        }

        #occupied {
            /* background:rgb(245, 7, 7); */
            /* background-color: #9DEE99; */
            width: 50px;
            height: 50px;
            margin: 5px;
            border: 0px solid white;
            border-top-left-radius: 23px;
            border-top-right-radius: 23px;
            background-color: #F8731E;
            text-align: center;
            line-height: 60px;
            display: inline-block;
            cursor: not-allowed;
        }

        .seatbox:hover {
            border: 1px solid white;
        }

        .screen {
            width: 100%;
            height: 70px;
            background: #fff;
            transform: rotateX(-45deg);
            box-shadow: 0 3px 10px rgba(255, 255, 255, 0.9);
            margin-bottom: 20px;
        }

        .show_screen {
            width: 600px;
            margin: 50px auto;
            overflow: hidden;
        }

        #seatTable{
            display: none;
        }

    </style>
</head>

<body class="w3-panel w3-black">

    <div class="show_screen">
        <div class="screen"><p id="screen">screen</p></div>
    </div>
    

    <div class="show_seat">
        <div class="seat_left">
            <script>
                var rows = "ABC";

                for (i = 0; i < rows.length; i++) {
                    // document.write('<div class="w3-center">');
                    for (j = 1; j <= 3; j++) {
                        document.write('<div class="seatbox" id="', rows.charAt(i), j, '"',
                            'onclick="toggle(this.id);"', '>',
                            rows.charAt(i), j, '</div>&nbsp&nbsp&nbsp');
                    }

                    // document.write('</div>');
                    document.write('<br>');
                }
            </script>
        </div>

        <div class="seat_right">
            <script>
                var rows = "ABC";

                for (i = 0; i < rows.length; i++) {
                    // document.write('<div class="w3-center">');
                    for (j = 4; j <= 6; j++) {
                        document.write('<div class="seatbox" id="', rows.charAt(i), j, '"',
                            'onclick="toggle(this.id);"', '>',
                            rows.charAt(i), j, '</div>&nbsp&nbsp&nbsp');
                    }

                    // document.write('</div>');
                    document.write('<br>');
                }
            </script>
        </div>
    </div>
    </div>
    <!-- action="submit_seat.php" -->
    <form id="form1" name="form1" method="post" action="payment.php">
        <p>Gray = available &nbsp;&nbsp;&nbsp;Red = reserved</p>
        <p>Selected seats : <span id="selectedSeatsID"></span></p>
        <input type="" name="seatsInForm" id="seatsInForm" ><br><br>
        <input type="" id="result" ><br><br>
        <input type="submit" id="submit" value="Next" >
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
            document.getElementById(seatId).style.backgroundColor = 'green';
            document.getElementById(seatId).style.textDecoration = 'line-through';
        }

        function cancel(seatId) {
            var a = selectedseats.indexOf(seatId);
            selectedseats.splice(a, 1);
            updateSelectedSeats();
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

        $(document).ready(function(){
			$("#submit").click( function() {
				$.post( $("#form1").attr("action"),
					 $('#seatsInForm').val(JSON.stringify(selectedseats)),  
			         //$("#myForm :input").serializeArray(), 
			         function(info){ $("#result").html(info); 
				});
			});
			 
			$("#myForm").submit( function() {
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

        function check() {


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