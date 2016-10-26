<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 3/3/16
 * Time: 5:38 AM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);


require 'vendor/autoload.php';
require_once('config.php');
require 'auth.php';
require_once ('language.php');

global $current_user;
global $message;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['pid'])) {
        $pid = test_input($_POST['pid']);
        $_SESSION['pid'] = $pid;

        if (isset($_POST['dotw'])) {
            $_SESSION['dotw'] = $_POST['dotw'];
        }
        if (isset($_POST['country'])) {
            $_SESSION['country'] = $_POST['country'];
        }
        if (isset($_POST['county'])) {
            $_SESSION['county'] = $_POST['county'];
        }
        if (isset($_POST['city'])) {
            $_SESSION['city'] = $_POST['city'];
        }
        if (isset($_POST['location'])) {
            $_SESSION['location'] = $_POST['location'];
        }
        if (isset($_POST['floor'])) {
            $_SESSION['floor'] = $_POST['floor'];
        }

        header('Location: /initial.php');
        exit();
    }
}

?>


<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">

    <meta name="description" content="SuperFlat Responsive Admin Template">
    <meta name="keywords" content="SuperFlat Admin, Admin, Template, Bootstrap">

    <title>Login - Embraced Admin</title>

    <link href="/assets/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <link href="/assets/admin/css/app.min.css" rel="stylesheet">
</head>

<body class="login-content">
<form class="lc-block toggled" id="l-forget-password" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="lcb-float"><i class="zmdi zmdi-pin-account"></i></div>
    <small class="m-b-15 d-block">Please enter the participant's id</small>

    <div class="form-group">
        <input type="text" name="pid" class="form-control" placeholder="Participant ID">
    </div>

    <div class="form-group">
        <input type="text" name="dotw" class="form-control" placeholder="Day of the Week">
    </div>
    <div class="form-group">
        <input type="text" name="country" class="form-control" placeholder="Country">
    </div>
    <div class="form-group">
        <input type="text" name="county" class="form-control" placeholder="County">
    </div>
    <div class="form-group">
        <input type="text" name="city" class="form-control" placeholder="City/Town">
    </div>
    <div class="form-group">
        <input type="text" name="location" class="form-control" placeholder="Location">
    </div>
    <div class="form-group">
        <input type="text" name="floor" class="form-control" placeholder="Floor #">
    </div>

    <button type="submit" name="submit" class="btn btn-block btn-warning">Submit</button>
</form>


<!-- Javascript Libraries -->
<script src="/assets/admin/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/assets/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/assets/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="/assets/admin/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<script src="/assets/admin/js/functions.js"></script>
