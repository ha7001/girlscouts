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
$home = $twig->loadTemplate('trailMaking2.twig');


echo $home->render(array(
    //TODO Instructions for rey complex figure
    'TrailMakingTest' => $message["INDEX_TRAIL_MAKING_TITLE"],
    'TrailMakingInstructions' => $message["INDEX_TRAIL_MAKING_Instructions"],
    'TrailMakingInstructions1' => $message["INDEX_TRAIL_MAKING_Instructions1"],
    'TrailMakingInstructionsDone' => $message["INDEX_TRAIL_MAKING_DONE"],
));