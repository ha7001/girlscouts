<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 5/23/16
 * Time: 11:31 PM
 */

require 'vendor/autoload.php';
require_once('config.php');
require 'auth.php';
require_once ('language.php');

global $current_user;
global $message;

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);
$home = $twig->loadTemplate('save_voice.twig');

echo $home->render(array());