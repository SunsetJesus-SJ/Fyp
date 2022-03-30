<?php

session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    echo "<script type='text/javascript'>alert('bye');parent.location.href='Stafflogin.php';</script>";
}
?>

