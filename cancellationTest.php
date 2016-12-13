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
$home = $twig->loadTemplate('cancellationTest.twig');


echo $home->render(array(
    'CancellationTest' => $message["INDEX_CANCELLATION_TEST_TITLE"],
    'cancellationTestInstructions1' => $message["INDEX_CANCELLATION_TEST_INSTRUCTIONS_1"],
    'cancellationTestInstructions2' => $message["INDEX_CANCELLATION_TEST_INSTRUCTIONS_2"],
    'cancellationTestInstructions3' => $message["INDEX_CANCELLATION_TEST_INSTRUCTIONS_3"],
    'cancellationTestStartPracticeTest' => $message["INDEX_CANCELLATION_STARTPRACTICETEST"],
    'cancellationTestStartTest' => $message["INDEX_CANCELLATION_STARTTEST"],
    'cancellationTestPractice' => $message["INDEX_CANCELLATION_Practice"],
    'cancellationTestPractice2' => $message["INDEX_CANCELLATION_Practice2"],
    'cancellationTestPractice3' => $message["INDEX_CANCELLATION_Practice3"],
    'cancellationTestTesting' => $message["INDEX_CANCELLATION_Testing"],

    'UniversalTestComplete' => $message["INDEX_TestComplete"],
    'UniversalSubmit' => $message["INDEX_SUBMIT"],
    'UniversalForward' => $message["INDEX_FORWARD"],
    'UniversalBackward' => $message["INDEX_BACKWARD"],
));