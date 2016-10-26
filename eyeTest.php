<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 3/3/16
 * Time: 5:38 AM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';
require_once('config.php');
require_once ('language.php');

global $current_user;
global $message;

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);
$home = $twig->loadTemplate('eyeTest.twig');


echo $home->render(array(
    'eyeTest_Instructions' => $message["INDEX_EYE_TEST_INSTRUCTIONS"],
    'eyeTest_ACCUSING' => $message["INDEX_EYE_TEST_ACCUSING"],
    'eyeTest_AFEECTIONATE' => $message["INDEX_EYE_TEST_AFFECTIONATE"],
    'eyeTest_AGHAST' => $message["INDEX_EYE_TEST_AGHAST"],
    'eyeTest_ALARMED' => $message["INDEX_EYE_TEST_ALARMED"],
    'eyeTest_AMUSED' => $message["INDEX_EYE_TEST_AMUSED"],
    'eyeTest_ANNOYED' => $message["INDEX_EYE_TEST_ANNOYED"],
    'eyeTest_ANTICIPATING' => $message["INDEX_EYE_TEST_ANTICIPATING"],
    'eyeTest_ANXIOUS' => $message["INDEX_EYE_TEST_ANXIOUS"],
    'eyeTest_APOLOGETIC' => $message["INDEX_EYE_TEST_APOLOGETIC"],
    'eyeTest_ARROGANT' => $message["INDEX_EYE_TEST_ARROGANT"],
    'eyeTest_ASHAMED' => $message["INDEX_EYE_TEST_ASHAMED"],
    'eyeTest_ASSERTIVE' => $message["INDEX_EYE_TEST_ASSERTIVE"],
    'eyeTest_BAFFLED' => $message["INDEX_EYE_TEST_BAFFLED"],
    'eyeTest_BEWILDERED' => $message["INDEX_EYE_TEST_BEWILDERED"],
    'eyeTest_CAUTIOUS' => $message["INDEX_EYE_TEST_CAUTIOUS"],
    'eyeTest_COMFORTING' => $message["INDEX_EYE_TEST_COMFORTING"],
    'eyeTest_CONCERNED' => $message["INDEX_EYE_TEST_CONCERNED"],
    'eyeTest_CONFIDENT' => $message["INDEX_EYE_TEST_CONFIDENT"],
    'eyeTest_CONFUSED' => $message["INDEX_EYE_TEST_CONFUSED"],
    'eyeTest_CONTEMPLATIVE' => $message["INDEX_EYE_TEST_CONTEMPLATIVE"],
    'eyeTest_CONTENTED' => $message["INDEX_EYE_TEST_CONTENTED"],
    'eyeTest_CONVINCED' => $message["INDEX_EYE_TEST_CONVINCED"],
    'eyeTest_CURIOUS' => $message["INDEX_EYE_TEST_CURIOUS"],
    'eyeTest_DECIDING' => $message["INDEX_EYE_TEST_DECIDING"],
    'eyeTest_DECISIVE' => $message["INDEX_EYE_TEST_DECISIVE"],
    'eyeTest_DEFIANT' => $message["INDEX_EYE_TEST_DEFIANT"],
    'eyeTest_DEPRESSED' => $message["INDEX_EYE_TEST_DEPRESSED"],
    'eyeTest_DESIRE' => $message["INDEX_EYE_TEST_DESIRE"],
    'eyeTest_DISAPPOINTED' => $message["INDEX_EYE_TEST_DISAPPOINTED"],
    'eyeTest_DISPIRITED' => $message["INDEX_EYE_TEST_DISPIRITED"],
    'eyeTest_DISTRUSTFUL' => $message["INDEX_EYE_TEST_DISTRUSTFUL"],
    'eyeTest_DOMINANT' => $message["INDEX_EYE_TEST_DOMINANT"],
    'eyeTest_DOUBTFUL' => $message["INDEX_EYE_TEST_DOUBTFUL"],
    'eyeTest_DUBIOUS' => $message["INDEX_EYE_TEST_DUBIOUS"],
    'eyeTest_EAGER' => $message["INDEX_EYE_TEST_EAGER"],
    'eyeTest_EARNEST' => $message["INDEX_EYE_TEST_EARNEST"],
    'eyeTest_EMBARRASSED' => $message["INDEX_EYE_TEST_EMBARRASSED"],
    'eyeTest_ENCOURAGING' => $message["INDEX_EYE_TEST_ENCOURAGING"],
    'eyeTest_ENTERTAINED' => $message["INDEX_EYE_TEST_ENTERTAINED"],
    'eyeTest_ENTHUSIASTIC' => $message["INDEX_EYE_TEST_ENTHUSIASTIC" ],
    'eyeTest_FANTASIZING' => $message["INDEX_EYE_TEST_FANTASIZING"],
    'eyeTest_FASCINATED' => $message["INDEX_EYE_TEST_FASCINATED"],
    'eyeTest_FEARFUL' => $message["INDEX_EYE_TEST_FEARFUL"],
    'eyeTest_FLIRTATIOUS' => $message["INDEX_EYE_TEST_FLIRTATIOUS"],
    'eyeTest_FLUSTERED' => $message["INDEX_EYE_TEST_FLUSTERED"],
    'eyeTest_FRIENDLY' => $message["INDEX_EYE_TEST_FRIENDLY"],
    'eyeTest_GRATEFUL' => $message["INDEX_EYE_TEST_GRATEFUL"],
    'eyeTest_GUILTY' => $message["INDEX_EYE_TEST_GUILTY"],
    'eyeTest_HATEFUL' => $message["INDEX_EYE_TEST_HATEFUL"],
    'eyeTest_HOPEFUL' => $message["INDEX_EYE_TEST_HOPEFUL"],
    'eyeTest_HORRIFIED' => $message["INDEX_EYE_TEST_HORRIFIED"],
    'eyeTest_HOSTILE' => $message["INDEX_EYE_TEST_HOSTILE"],
    'eyeTest_IMPATIENT' => $message["INDEX_EYE_TEST_IMPATIENT"],
    'eyeTest_IMPLORING' => $message["INDEX_EYE_TEST_IMPLORING"],
    'eyeTest_INCREDULOUS' => $message["INDEX_EYE_TEST_INCREDULOUS"],
    'eyeTest_INDECISIVE' => $message["INDEX_EYE_TEST_INDECISIVE"],
    'eyeTest_INDIFFERENT' => $message["INDEX_EYE_TEST_INDIFFERENT"],
    'eyeTest_INSISTING' => $message["INDEX_EYE_TEST_INSISTING"],
    'eyeTest_INSULTING' => $message["INDEX_EYE_TEST_INSULTING"],
    'eyeTest_INTERESTED' => $message["INDEX_EYE_TEST_INTERESTED"],
    'eyeTest_INTRIGUED' => $message["INDEX_EYE_TEST_INTRIGUED"],
    'eyeTest_IRRITATED' => $message["INDEX_EYE_TEST_IRRITATED"],
    'eyeTest_JEALOUS' => $message["INDEX_EYE_TEST_JEALOUS"],
    'eyeTest_JOKING' => $message["INDEX_EYE_TEST_JOKING"],
    'eyeTest_NERVOUS' => $message["INDEX_EYE_TEST_NERVOUS"],
    'eyeTest_OFFENDED' => $message["INDEX_EYE_TEST_OFFENDED"],
    'eyeTest_PANICKED' => $message["INDEX_EYE_TEST_PANICKED"],
    'eyeTest_PENSIVE' => $message["INDEX_EYE_TEST_PENSIVE"],
    'eyeTest_PERPLEXED' => $message["INDEX_EYE_TEST_PERPLEXED"],
    'eyeTest_PLAYFUL' => $message["INDEX_EYE_TEST_PLAYFUL"],
    'eyeTest_PREOCCUPIED' => $message["INDEX_EYE_TEST_PREOCCUPIED"],
    'eyeTest_PUZZLED' => $message["INDEX_EYE_TEST_PUZZLED"],
    'eyeTest_REASSURING' => $message["INDEX_EYE_TEST_REASSURING"],
    'eyeTest_REFLECTIVE' => $message["INDEX_EYE_TEST_REFLECTIVE"],
    'eyeTest_REGRETFUL' => $message["INDEX_EYE_TEST_REGRETFUL"],
    'eyeTest_RELAXED' => $message["INDEX_EYE_TEST_RELAXED"],
    'eyeTest_RELIEVED' => $message["INDEX_EYE_TEST_RELIEVED"],
    'eyeTest_RESENTFUL' => $message["INDEX_EYE_TEST_RESENTFUL"],
    'eyeTest_SARCASTIC' => $message["INDEX_EYE_TEST_SARCASTIC"],
    'eyeTest_SATISFIED' => $message["INDEX_EYE_TEST_SATISFIED"],
    'eyeTest_SCEPTICAL' => $message["INDEX_EYE_TEST_SCEPTICAL"],
    'eyeTest_SERIOUS' => $message["INDEX_EYE_TEST_SERIOUS"],
    'eyeTest_STERN' => $message["INDEX_EYE_TEST_STERN"],
    'eyeTest_SUSPICIOUS' => $message["INDEX_EYE_TEST_SUSPICIOUS"],
    'eyeTest_SYMPATHETIC' => $message["INDEX_EYE_TEST_SYMPATHETIC"],
    'eyeTest_TENTATIVE' => $message["INDEX_EYE_TEST_TENTATIVE"],
    'eyeTest_TERRIFIED' => $message["INDEX_EYE_TEST_TERRIFIED"],
    'eyeTest_THOUGHTFUL' => $message["INDEX_EYE_TEST_THOUGHTFUL"],
    'eyeTest_THREATENING' => $message["INDEX_EYE_TEST_THREATENING"],
    'eyeTest_UNEASY' => $message["INDEX_EYE_TEST_UNEASY"],
    'eyeTest_UPSET' => $message["INDEX_EYE_TEST_UPSET"],
    'eyeTest_WORRIED' => $message["INDEX_EYE_TEST_WORRIED"]
));
