<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 4/7/16
 * Time: 6:52 AM
 */

require 'init.php';
require_once('class/user.php');

$message = '';
$password = '';
$errorMessage = '';
$passwordErr = '';


if (isset($_REQUEST['sptoken'])) {
    $user = User::verify_password_reset($_REQUEST['sptoken']);
    $_SESSION['tempUser'] = $user;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    if ($password != "") {
        // Send email reset password
        $user = $_SESSION['tempUser'];
        $message = $user->set_password($password);

        $found_user = User::authenticate($user->username, $password, false);

        if ($found_user) {
            unset($_SESSION['tempUser']);
            header('Location: /admin.php');
            exit();
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

    <title>Reset Password - Embraced Admin</title>

    <link href="/assets/admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <link href="/assets/admin/css/app.min.css" rel="stylesheet">
</head>

<body class="login-content">
<!-- Reset Password -->
<form class="lc-block toggled" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="lcb-float"><i class="zmdi zmdi-pin-account"></i></div>
    <span class="error"><?php echo $errorMessage; ?></span>
    <small class="m-b-15 d-block">Nulla eu risus senns with lorem urabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</small>

    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password">
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
