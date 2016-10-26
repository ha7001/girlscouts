<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 3/28/16
 * Time: 10:52 PM
 */

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}