<?php
$name = $_GET["movieName"];
$id = $_GET["id"];

$cookie_name = "likeMovie";

function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

if(isset($_COOKIE[$cookie_name])){
    $cookie_value[] = json_decode($_COOKIE[$cookie_name], true);
    if(!strpos($_COOKIE[$cookie_name], $name)){
        $cookie_value[] =  $name;
    }
    setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), "/");
    setcookie(urlencode($name), $id, time() + (86400 * 30), "/");
}else{
    $cookie_value[] =  $name;
    setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), "/");
    setcookie(urlencode($name), $id, time() + (86400 * 30), "/");
}
$url = "../HTML/movieInfo.php"."?id=".$id;
redirect($url);
?>