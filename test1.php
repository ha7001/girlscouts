<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 3/7/16
 * Time: 7:12 PM
 */

require 'vendor/autoload.php';
require_once('config.php');

global $current_user;

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);
$home = $twig->loadTemplate('test1.twig');


echo $home->render(array(
));