<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 3/16/16
 * Time: 7:04 PM
 */

require 'vendor/autoload.php';
require_once('config.php');
require_once ('language.php');

global $current_user;
global $message;

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);
$home = $twig->loadTemplate('clockDrawing.twig');


echo $home->render(array(
    'clockDrawingTest' => $message["INDEX_CLOCKDRAWING_TEST_TITLE"],
    'clockDrawingTestInstructions' => $message["INDEX_CLOCKDRAWING_TEST_INSTRUCTIONS"],

    'UniversalTestComplete' => $message["INDEX_TestComplete"],
    'UniversalSubmit' => $message["INDEX_SUBMIT"],
    'UniversalForward' => $message["INDEX_FORWARD"],
    'UniversalBackward' => $message["INDEX_BACKWARD"],
));