<?php
/**
 * Created by PhpStorm.
 * User: Harry Atwal
 * Date: 06/01/16
 * Time: 6:44 AM
 */

require 'vendor/autoload.php';
require_once('config.php');
require_once 'auth.php';
require_once ('language.php');

global $current_user;
global $message;

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);
$home = $twig->loadTemplate('motorTask.twig');


echo $home->render(array(
    //TODO Instructions for rey complex figure
    'motorTitle' => $message["INDEX_TRAIL_MOTORTEST_TITLE"],
    'motorInstructions1' => $message["INDEX_TRAIL_MOTORTEST_Task1"],
    'motorInstructions2' => $message["INDEX_TRAIL_MOTORTEST_Task2"],
    'motorInstructions3' => $message["INDEX_TRAIL_MOTORTEST_Task3"],
    'motorInstructionsDominant' => $message["INDEX_TRAIL_MOTORTEST_Dominant_Hand"],
    'motorInstructionsNonDominant' => $message["INDEX_TRAIL_MOTORTEST_Non_Dominant_Hand"]
));