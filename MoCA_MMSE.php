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
    'MoCA_MMSE_Question10' => $message["INDEX_MoCA_MMSE_Questions10"],
    'MoCA_MMSE_Minutes' => $message["INDEX_MoCA_MMSE_Minutes"],
    'MoCA_MMSE_Month' => $message["INDEX_MoCA_MMSE_Month"],
    'MoCA_MMSE_Year' => $message["INDEX_MoCA_MMSE_Year"],
    'MoCA_MMSE_Day' => $message["INDEX_MoCA_MMSE_Day"],
    'MoCA_MMSE_Monday' => $message["INDEX_MoCA_MMSE_Monday"],
    'MoCA_MMSE_Tuesday' => $message["INDEX_MoCA_MMSE_Tuesday"],
    'MoCA_MMSE_Wednesday' => $message["INDEX_MoCA_MMSE_Wednesday"],
    'MoCA_MMSE_Thursday' => $message["INDEX_MoCA_MMSE_Thursday"],
    'MoCA_MMSE_Friday' => $message["INDEX_MoCA_MMSE_Friday"],
    'MoCA_MMSE_Saturday' => $message["INDEX_MoCA_MMSE_Saturday"],
    'MoCA_MMSE_Sunday' => $message["INDEX_MoCA_MMSE_Sunday"],
    'MoCA_MMSE_January' => $message["INDEX_MoCA_MMSE_January"],
    'MoCA_MMSE_February' => $message["INDEX_MoCA_MMSE_February"],
    'MoCA_MMSE_March' => $message["INDEX_MoCA_MMSE_March"],
    'MoCA_MMSE_April' => $message["INDEX_MoCA_MMSE_April"],
    'MoCA_MMSE_May' => $message["INDEX_MoCA_MMSE_May"],
    'MoCA_MMSE_June' => $message["INDEX_MoCA_MMSE_June"],
    'MoCA_MMSE_July' => $message["INDEX_MoCA_MMSE_July"],
    'MoCA_MMSE_August' => $message["INDEX_MoCA_MMSE_August"],
    'MoCA_MMSE_September' => $message["INDEX_MoCA_MMSE_September"],
    'MoCA_MMSE_October' => $message["INDEX_MoCA_MMSE_October"],
    'MoCA_MMSE_November' => $message["INDEX_MoCA_MMSE_November"],
    'MoCA_MMSE_December' => $message["INDEX_MoCA_MMSE_December"],
    'MoCA_MMSE_SelectOne' => $message["INDEX_MoCA_MMSE_SelectOne"],
    'MoCA_MMSE_Submit' => $message["INDEX_SUBMIT"],
    'Forward' => $message["INDEX_FORWARD"],
    'Backward' => $message["INDEX_BACKWARD"]
));