<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 1/8/16
 * Time: 2:49 PM
 */

if(!isset($_SESSION))
{
    session_start();
}

if (isset($_POST['lang'])) {
    $_SESSION['lang'] = $_POST['lang'];
} else {
    $_SESSION['lang'] = 'en-us';
}

switch($_SESSION['lang']) {
    case "en-us":
        define("LANGCODE", "en-us");
        require 'languages/english_us.php';
        break;
    case "sp":
        define("LANGCODE", "sp");
        require 'languages/spanish.php';
        break;
    default:
        define("LANGCODE", "en-us");
        require 'languages/english_us.php';
        break;
}
header("Content-Type: text/html;charset=UTF-8");
header("Content-Language: ".LANGCODE);