<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 4/7/16
 * Time: 5:25 AM
 */

require 'init.php';
require_once('class/user.php');

if (isset($_REQUEST['sptoken'])) {
    $account = \Stormpath\Client::verifyEmailToken($_REQUEST['sptoken']);
    header('Location: /login.php');
    exit();
}