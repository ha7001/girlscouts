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
$home = $twig->loadTemplate('moca_mmse.twig');


echo $home->render(array(
    //TODO Instructions for rey complex figure
    'MoCA_MMSE_Title' => $message["INDEX_MoCA_MMSE_Title"],
    'MoCA_MMSE_Question_Briefing' => $message["INDEX_MoCA_MMSE_Question_Briefing"],
    'MoCA_MMSE_Question1' => $message["INDEX_MoCA_MMSE_Questions1"],
    'MoCA_MMSE_Question2' => $message["INDEX_MoCA_MMSE_Questions2"],
    'MoCA_MMSE_Question3' => $message["INDEX_MoCA_MMSE_Questions3"],
    'MoCA_MMSE_Question4' => $message["INDEX_MoCA_MMSE_Questions4"],
    'MoCA_MMSE_Question5' => $message["INDEX_MoCA_MMSE_Questions5"],
    'MoCA_MMSE_Question_Briefing2' => $message["INDEX_MoCA_MMSE_Question_Briefing2"],
    'MoCA_MMSE_Question6' => $message["INDEX_MoCA_MMSE_Questions6"],
    'MoCA_MMSE_Question7' => $message["INDEX_MoCA_MMSE_Questions7"],
    'MoCA_MMSE_Question8' => $message["INDEX_MoCA_MMSE_Questions8"],
    'MoCA_MMSE_Question9' => $message["INDEX_MoCA_MMSE_Questions9"],
    'MoCA_MMSE_Question10' => $message["INDEX_MoCA_MMSE_Questions10"]
));