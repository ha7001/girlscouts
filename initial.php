<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 3/3/16
 * Time: 5:38 AM
 */



require 'vendor/autoload.php';
require_once('config.php');
require 'auth.php';
require_once ('language.php');

global $current_user;
global $message;

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);
$home = $twig->loadTemplate('initial.twig');

echo $home->render(array(
    'welcome' => $message["INDEX_WELCOME"],
    'para_1' => $message["INDEX_PARA_1"],
    'progress' => $message['INDEX_PROGRESS'],
    'section' => $message['INDEX_QUESTION_TITLE'],
    'question_1_title' => $message['INDEX_QUESTION_1_TITLE'],
    'question_2_title' => $message['INDEX_QUESTION_2_TITLE'],
    'question_2_option_1' => $message['INDEX_QUESTION_2_OPTION_1'],
    'question_2_option_2' => $message['INDEX_QUESTION_2_OPTION_2'],
    'question_2_option_3' => $message['INDEX_QUESTION_2_OPTION_3'],
    'question_2_option_4' => $message['INDEX_QUESTION_2_OPTION_4'],
    'backward' => $message['INDEX_BACKWARD'],
    'forward' => $message['INDEX_FORWARD']
));
