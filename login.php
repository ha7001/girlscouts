<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 4/7/16
 * Time: 4:57 AM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'init.php';
require_once('class/user.php');

global $stormpath_application;

$login_error_message = "";
$forgot_error_message = "";
$username = '';
$password = '';
$redirect = NULL;
$access_token = '';
$refresh_token = '';
$email = '';

if (isset($_GET['location'])) {
    if ($_GET['location'] != '') {
        $redirect = $_GET['location'];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        if (!empty($_POST["username"])) {
            $username = test_input($_POST["username"]);
        }

        if (!empty($_POST["password"])) {
            $password = test_input($_POST["password"]);
        }

        if ($username != "" && $password != "") {
            if (User::authenticate($username, $password)) {
                header('Location: /');
                exit();
            } else {
                $login_error_message = "Username/password combination is incorrect.";
            }
        }
    } else if (isset($_POST["forgot"])) {
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if ($email != "") {
            // Send email reset password
            $forgot_error_message = ucfirst(User::forgot_password($email));
        }
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
<!-- Login -->
<form class="lc-block toggled" id="l-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?location=" .$redirect;?>" method="POST">
    <div class="lcb-float"><i class="zmdi zmdi-pin-account"></i></div>
    <span class="error"><?php echo $login_error_message; ?></span>
    <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Username">
    </div>

    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password">
    </div>

    <div class="clearfix"></div>

    <div class="p-relative ">
        <div class="checkbox cr-alt">
            <label class="c-gray">
                <input type="checkbox" value="">
                <i class="input-helper"></i>
                Keep me signed in
            </label>
        </div>
    </div>

    <button type="submit" name="login" class="btn btn-block btn-primary btn-float m-t-25">Sign In</button>

    <ul class="login-navigation">
        <li data-block="#l-forget-password" class="bg-orange">Forgot Password?</li>
    </ul>
</form>

<!-- Forgot Password -->
<form class="lc-block" id="l-forget-password" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="lcb-float"><i class="zmdi zmdi-pin-account"></i></div>
    <span class="error"><?php echo $forgot_error_message; ?></span>
    <small class="m-b-15 d-block">Nulla eu risus senns with lorem urabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</small>

    <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="Email Address">
    </div>

    <button type="submit" name="forgot" class="btn btn-block btn-warning">Reset Password</button>

    <ul class="login-navigation">
        <li data-block="#l-login" class="bg-blue">Login</li>
    </ul>
</form>

<!-- Older IE Warning Message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1 class="c-white">Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="/assets/admin/img/browsers/chrome.png" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="/assets/admin/img/browsers/firefox.png" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="/assets/admin/img/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="/assets/admin/img/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="/assets/admin/img/browsers/ie.png" alt="">
                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

<!-- Javascript Libraries -->
<script src="/assets/admin/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/assets/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/assets/admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="/assets/admin/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<script src="/assets/admin/js/functions.js"></script>