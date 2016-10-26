<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 4/13/16
 * Time: 9:02 AM
 */

require_once('config.php');

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);
$home = $twig->loadTemplate('thankyou.twig');

echo $home->render(array());