<?php
/**
 * Created by PhpStorm.
 * User: harryatwal
 * Date: 5/21/16
 * Time: 7:04 PM
 */

require 'vendor/autoload.php';
require_once('config.php');
require 'auth.php';
require_once ('language.php');

global $current_user;
global $message;


$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);
$home = $twig->loadTemplate('trailMakingTest.twig');


echo $home->render(array(
    'trailMakingTest' => $message["INDEX_TRAIL_MAKING_TEST"],
    'trailMakingTestInstructions' => $message["INDEX_TRAIL_MAKING_TEST_INSTRUCTIONS"],
    'trailMakingTestInstructions1' => $message["INDEX_TRAIL_MAKING_TEST_INSTRUCTIONS1"],
    'trailMakingTestInstructions2' => $message["INDEX_TRAIL_MAKING_TEST_INSTRUCTIONS2"],


));