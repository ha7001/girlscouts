<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 4/7/16
 * Time: 5:32 AM
 */

require 'init.php';
require_once('class/user.php');

global $stormpath_application;
global $current_user;

$current_user = new stdClass();
$current_user->id = "5bwaFlwGUrwvvLdFmYfBKq";
$current_user->email = 'drocdix7@gmail.com';
$current_user->last_name = 'Dixon';
$current_user->first_name = 'Domonique';
$current_user->username = 'ddixon';

// Validate token
//if (isset($_SESSION['at'])) {
//    $access_token = $_SESSION['at'];
//    $id = $_SESSION['cud'];
//
//    $current_user = User::verify($access_token, $id);
//
//    if (!$current_user) {
//        header('Location: /login.php');
//        exit();
//    }
//} else {
//    header('Location: /login.php');
//    exit();
//}