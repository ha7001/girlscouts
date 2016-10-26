<?php
function defineStrings() {
    switch($_SESSION['lang']) {
        case "en-us":
            require 'languages/english_us.php';
            break;
        case "sp":
            require 'languages/spanish.php';
            break;
        default:
            require 'languages/english_us.php';
            break;
    }
}
