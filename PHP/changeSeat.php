<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $pwd = "";
    $db = "fypdb";

    

    function getDBconnection(){
        global $hostname, $username, $pwd, $db;
        $conn = mysqli_connect($hostname, $username, $pwd, $db) or die(mysqli_connect_error()) or die(mysqli_connect_error());
        return $conn;
    }

    function closeDBconnection($conn){
        mysqli_close($conn);
    }

    function getTicketInfo(){

        // $today = date("dmy");
        $ticketID = $_POST['ticketID'];

        $conn =  getDBconnection();
        $SQL = "SELECT * FROM `ticket_record` WHERE ticketID = '$ticketID'";
        $rs = mysqli_query($conn, $SQL);

        $num = mysqli_num_rows($rs);
        while($row = mysqli_fetch_array($rs))
        {
            extract($row);
            // echo $refund;
        }

        if($num == 0){
            $message = 'Please input correct Ticket ID !!.';

            echo "<SCRIPT> //not showing me this
                alert('$message');
                window.location.replace('http://127.0.0.1/Fyp/change_seat.php');
            </SCRIPT>";
          
        }elseif ($refund == 1){
            $message = 'You have been already change the seat';

            echo "<SCRIPT> //not showing me this
                alert('$message');
                window.location.replace('http://127.0.0./Fyp/change_seat.php');
            </SCRIPT>";
                   
        }else{
            closeDBconnection($conn);
            return $rs;
        }
    
    }

    function getCheckDate(){
        
        $today = date("dmy");
        $ticketID = $_POST['ticketID'];

        $conn =  getDBconnection();
        $SQL = "SELECT `date` FROM `house_record` WHERE `ticketID`='$ticketID'";
        $rs = mysqli_query($conn, $SQL);
        while($row = mysqli_fetch_array($rs))
        {
            extract($row);
            echo $date;
            if ($today >= $date){
                $msg = 'You only can change your seat before the Movie Playdate';
                echo "<SCRIPT> //not showing me this
                    alert('$msg');
                    window.location.replace('http://127.0.0.1/Fyp/change_seat.php');
                </SCRIPT>";
            }
            closeDBconnection($conn);
            return $rs;
        }

        
    }

    function gethouse() {
        $ticketID = $_POST['ticketID'];

        $conn =  getDBconnection();
        $SQL = "SELECT * FROM `house_record` WHERE ticketID = '$ticketID'";
        $rs = mysqli_query($conn, $SQL);

        closeDBconnection($conn);
        return $rs;
        
    } 
    
    
?>
