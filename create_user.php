<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 4/7/16
 * Time: 7:15 AM
 */

require 'vendor/autoload.php';
require 'auth.php';
require_once('config.php');
require_once ('language.php');

global $current_user;
global $message;

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);
$home = $twig->loadTemplate('create_user.twig');

$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = test_input($_POST["fname"]);
    $lastname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }


    // Create user
    $newuser = new User();
    $newuser->first_name = $firstname;
    $newuser->last_name = $lastname;
    $newuser->username = $username;
    $newuser->password = $password;
    $newuser->email = $email;

    $result = User::create_user($newuser);
    $errorMessage = $result;

    if ($errorMessage == 'success') {
        header('Location: /');
    }
}

echo $home->render(array(
    'user' => $current_user,
    'error_message' => $errorMessage
));