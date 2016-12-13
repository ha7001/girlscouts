<?php
/**
 * Created by PhpStorm.
 * User: Harry Atwal
 * Date: 6/1/2016
 * Time: 10:04 AM
 */

require 'vendor/autoload.php';
require_once('config.php');
require_once 'auth.php';
require_once ('language.php');

global $current_user;
global $message;

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);
$home = $twig->loadTemplate('matrices.twig');


echo $home->render(array(
    //TODO Instructions for rey complex figure
    'Matrices_Title' => $message["INDEX_Matrices_Title"],
    'Matrices_Practice_Instructions' => $message["INDEX_Matrices_Practice_Instructions"],
    
    'UniversalTestComplete' => $message["INDEX_TestComplete"],
    'UniversalSubmit' => $message["INDEX_SUBMIT"],
    'UniversalForward' => $message["INDEX_FORWARD"],
    'UniversalBackward' => $message["INDEX_BACKWARD"],
));