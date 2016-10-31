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
$home = $twig->loadTemplate('comprehension.twig');


echo $home->render(array(
    'ComprehensionTitle' => $message["INDEX_COMPREHENSION_TEST_TITLE"],
    'ComprehensionInstructions' => $message["INDEX_COMPREHENSION_TEST_INSTRUCTIONS"],
    'ComprehensionQuestion1' => $message["INDEX_COMPREHENSION_QUESTION_1"],
    'ComprehensionQuestion2' => $message["INDEX_COMPREHENSION_QUESTION_2"],
    'ComprehensionQuestion3' => $message["INDEX_COMPREHENSION_QUESTION_3"],
    'ComprehensionQuestion4' => $message["INDEX_COMPREHENSION_QUESTION_4"],
));