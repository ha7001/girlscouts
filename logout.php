<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 4/7/16
 * Time: 5:33 AM
 */

require_once('auth.php');

global $current_user;

$current_user->logout();

header('Location: /login.php');