<?php
require_once('conn.php');
$conn = getDBconnection();
session_start();
if(isset($_POST['Login']))
{
    if(empty($_POST['staffID']) || empty($_POST['Password']))
    {
        echo "<script type='text/javascript'>alert('StaffID and password is required');parent.location.href='Stafflogin.php';</script>";
    }
    else
    {
        $query="select * from staffaccount where StaffID='".$_POST['staffID']."' and Password='".$_POST['Password']."'";
        $result=mysqli_query($conn,$query);

        if(mysqli_fetch_assoc($result))
        {
            $_SESSION['staffID']=$_POST['staffID'];
            echo "<script type='text/javascript'>alert('welcome' );parent.location.href='MainPage.php';</script>";

        }
        else
        {
            echo "<script type='text/javascript'>alert('Please Enter Correct User Name and Password ');parent.location.href='Stafflogin.php';</script>";
        }
    }
}




?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Responsive Login Page</title>
		<link rel="stylesheet" href="css/Slogin.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>
     <video src="mp4/login.mp4" muted loop autoplay></video>
		<!--form area start-->
		<div class="form">
			<!--login form start-->
			<form class="login-form" action="" method="post">
				<i class="fas fa-user-circle"></i>
				<input class="user-input" type="text" name="staffID" placeholder="Username" required>
				<input class="user-input" type="password" name="Password" placeholder="Password" required>
				
				<input class="btn" type="submit" name="Login" value="LOGIN">
				
			</form>
			<!--login form end-->
			
		</div>
		<!--form area end-->

	

	</body>
</html>