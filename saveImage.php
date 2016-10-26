<?php
var_dump($_POST['data']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $t = $_POST["imgBase64"];
    $src = $t;
    $src = substr($src, strpos($src, ",") + 1);
    $decode = base64_decode($src);

    $target_dir = "/userGenData/";
    $uuid = uniqid();
    $target_file = $target_dir . $uuid . '.png';
    $fp = fopen($target_file, 'wb');
    fwrite($fp, $decode);
    fclose($fp);
}