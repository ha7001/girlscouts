<?php
/**
 * Created by PhpStorm.
 * User: Harry Atwal
 * Date: 5/13/16
 * Time: 12:04 AM
 */

require 'vendor/autoload.php';
require_once('config.php');
require_once 'auth.php';
require_once ('language.php');

global $current_user;
global $message;

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);
$home = $twig->loadTemplate('reyComplexFigure4.twig');


echo $home->render(array(
    //TODO Instructions for rey complex figure
    'RCFT' => $message["INDEX_RCFT_TITLE"],
    'RCFTInstructions' => $message["INDEX_RCFT_Instructions"],
    'RCFTInsructions4' => $message["INDEX_RCFT_Instructions4"],
    'RCFTSubmit' => $message["INDEX_SUBMIT"],
    'RCFTForward' => $message["INDEX_FORWARD"],
    'RCFTBackward' => $message["INDEX_BACKWARD"],
    'RCFTTestComplete' => $message["INDEX_TestComplete"],
    'RCFTYes' => $message["INDEX_yes"],
    'RCFTNo' => $message["INDEX_no"],
));