<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 3/3/16
 * Time: 5:38 AM
 */



require 'vendor/autoload.php';
require_once('config.php');
require 'auth.php';
require_once ('language.php');

global $current_user;
global $message;

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader);
$home = $twig->loadTemplate('initial.twig');

echo $home->render(array(
    'welcome' => $message["INDEX_WELCOME"],
    'para_1' => $message["INDEX_PARA_1"],
    'progress' => $message['INDEX_PROGRESS'],
    'section' => $message['INDEX_QUESTION_TITLE'],
    'question_1_title' => $message['INDEX_QUESTION_1_TITLE'],
    'question_2_title' => $message['INDEX_QUESTION_2_TITLE'],
    'question_2_option_1' => $message['INDEX_QUESTION_2_OPTION_1'],
    'question_2_option_2' => $message['INDEX_QUESTION_2_OPTION_2'],
    'question_2_option_3' => $message['INDEX_QUESTION_2_OPTION_3'],
    'question_2_option_4' => $message['INDEX_QUESTION_2_OPTION_4'],
    'backward' => $message['INDEX_BACKWARD'],
    'forward' => $message['INDEX_FORWARD'],
    'dominantHandQuestion' => $message['INDEX_dominantHandQuestion'],
    'dominantHandLeft' => $message['INDEX_dominantHandLeft'],
    'dominantHandRight' => $message['INDEX_dominantHandRight'],
    'dominantHandWriting' => $message['INDEX_dominantHandWriting'],
    'dominantHandDrawing' => $message['INDEX_dominantHandDrawing'],
    'dominantHandBallThrowing' => $message['INDEX_dominantHandBallThrowing'],
    'dominantHandScissors' => $message['INDEX_dominantHandScissors'],
    'dominantHandToothbrush' => $message['INDEX_dominantHandToothbrush'],
    'dominantHandKnifeCutting' => $message['INDEX_dominantHandKnifeCutting'],
    'dominantHandSpoon' => $message['INDEX_dominantHandSpoon'],
    'dominantHandBroom' => $message['INDEX_dominantHandBroom'],
    'dominantHandMatchStrike' => $message['INDEX_dominantHandMatchStrike'],
    'dominantHandBoxLid' => $message['INDEX_dominantHandBoxLid'],
    'raceQuestion1' => $message['INDEX_raceQuestion1'],
    'raceQuestion1a' => $message['INDEX_raceQuestion1a'],
    'raceQuestion1b' => $message['INDEX_raceQuestion1b'],
    'raceQuestion1c' => $message['INDEX_raceQuestion1c'],
    'raceQuestion1d' => $message['INDEX_raceQuestion1d'],
    'raceQuestion1e' => $message['INDEX_raceQuestion1e'],
    'raceQuestion1f' => $message['INDEX_raceQuestion1f'],
    'raceQuestion1g' => $message['INDEX_raceQuestion1g'],
    'raceQuestion2' => $message['INDEX_raceQuestion2'],
    'raceQuestion2a' => $message['INDEX_raceQuestion2a'],
    'raceQuestion2b' => $message['INDEX_raceQuestion2b'],
    'raceQuestion2c' => $message['INDEX_raceQuestion2c'],
    'raceQuestion2d' => $message['INDEX_INDEX_raceQuestion2d'],
    'raceQuestion2e' => $message['INDEX_raceQuestion2e'],
    'maritalQuestion1' => $message['INDEX_maritalQuestion1'],
    'maritalQuestion1a' => $message['INDEX_maritalQuestion1a'],
    'maritalQuestion1b' => $message['INDEX_maritalQuestion1b'],
    'maritalQuestion2' => $message['INDEX_maritalQuestion2'],
    'years' => $message['INDEX_years'],
    'months' => $message['INDEX_months'],
    'maritalQuestionPartnerLabel' => $message['INDEX_maritalQuestionPartnerLabel'],
    'maritalQuestion3' => $message['INDEX_maritalQuestion3'],
    'maritalQuestion4' => $message['INDEX_maritalQuestion4'],
    'maritalSeperated' => $message['INDEX_martialQuestionSeperated'],
    'maritalQuestion5' => $message['INDEX_maritalQuestion5'],
    'maritalQuestion6' => $message['INDEX_maritalQuestion6'],
    'yes' => $message['INDEX_yes'],
    'no' => $message['INDEX_no'],
    'neither' => $message['INDEX_neither'],
    'maritalQuestion7' => $message['INDEX_maritalQuestion7'],
    'residenceLive' => $message['INDEX_residenceLive'],
    'city' => $message['INDEX_city'],
    'state' => $message['INDEX_state'],
    'country' => $message['INDEX_country'],
    'residenceInhabitants' => $message['INDEX_residenceInhabitants'],
    'residenceInhabitants1' => $message['INDEX_residenceInhabitants1'],
    'residenceInhabitants2' => $message['INDEX_residenceInhabitants2'],
    'residenceInhabitants3' => $message['INDEX_residenceInhabitants3'],
    'residenceDescribe' => $message['INDEX_residenceDescribe'],
    'residenceRural' => $message['INDEX_residenceRural'],
    'residenceIntermediate' => $message['INDEX_residenceIntermediate'],
    'residenceUrban' => $message['INDEX_residenceUrban'],
    'occupation1' => $message['INDEX_occupation1'],
    'occupation1a' => $message['INDEX_occupation1a'],
    'occupation1b' => $message['INDEX_occupation1b'],
    'occupation1c' => $message['INDEX_occupation1c'],
    'occupation1d' => $message['INDEX_occupation1d'],
    'occupation1' => $message['INDEX_occupation1d'],
    'occupation2' => $message['INDEX_occupation2'],
    'occupation2a' => $message['INDEX_occupation2a'],
    'occupation2b' => $message['INDEX_occupation2b'],
    'occupation2c' => $message['INDEX_occupation2c'],
    'occupation2d' => $message['INDEX_occupation2d'],
    'occupation3' => $message['INDEX_occupation3'],
    'occupation3a' => $message['INDEX_occupation3a'],
    'occupation3b' => $message['INDEX_occupation3b'],
    'occupation3c' => $message['INDEX_occupation3c'],
    'occupation3d' => $message['INDEX_occupation3d'],
    'occupation4' => $message['INDEX_occupation4'],
    'occupation4a' => $message['INDEX_occupation4a'],
    'occupation4b' => $message['INDEX_occupation4b'],
    'occupation5' => $message['INDEX_occupation5'],
    'occupation5a' => $message['INDEX_occupation5a'],
    'occupation5b' => $message['INDEX_occupation5b'],
    'occupation5c' => $message['INDEX_occupation5c'],
    'occupation5d' => $message['INDEX_occupation5d'],
    'occupation5e' => $message['INDEX_occupation5e'],
    'occupation5f' => $message['INDEX_occupation5f'],
    'occupation5g' => $message['INDEX_occupation5g'],
    'occupation5h' => $message['INDEX_occupation5h'],
    'occupation5i' => $message['INDEX_occupation5i'],
    'occupation5j' => $message['INDEX_occupation5j'],
    'occupation5k' => $message['INDEX_occupation5k'],
    'occupation5l' => $message['INDEX_occupation5l'],
    'occupation5m' => $message['INDEX_occupation5m'],
    'occupation5n' => $message['INDEX_occupation5n'],
    'occupation5o' => $message['INDEX_occupation5o'],
    'occupation5p' => $message['INDEX_occupation5p'],
    'occupation5q' => $message['INDEX_occupation5q'],
    'occupation5r' => $message['INDEX_occupation5r'],
    'occupation5s' => $message['INDEX_occupation5s'],
    'occupation5t' => $message['INDEX_occupation5t'],
    'occupation5u' => $message['INDEX_occupation5u'],
    'occupation5v' => $message['INDEX_occupation5v'],
    'occupation5w' => $message['INDEX_occupation5w'],
    'occupation5x' => $message['INDEX_occupation5x'],
    'occupation6' => $message['INDEX_occupation6'],
    'occupation6a' => $message['INDEX_occupation6a'],
    'occupation6b' => $message['INDEX_occupation6b'],
    'occupation6c' => $message['INDEX_occupation6c'],
    'occupation7' => $message['INDEX_occupation7'],
    'occupation8' => $message['INDEX_occupation8'],
    'income1' => $message['INDEX_income1'],
    'income2' => $message['INDEX_income2'],
    'income2a' => $message['INDEX_income2a'],
    'income2b' => $message['INDEX_income2b'],
    'income2c' => $message['INDEX_income2c'],
    'income2d' => $message['INDEX_income2d'],
    'income2e' => $message['INDEX_income2e'],
    'income2f' => $message['INDEX_income2f'],
    'income2g' => $message['INDEX_income2g'],
    'income2h' => $message['INDEX_income2h'],
    'income2i' => $message['INDEX_income2i'],
    'income3' => $message['INDEX_income3'],
    'income4' => $message['INDEX_income4'],
    'income5' => $message['INDEX_income5'],
    'income6' => $message['INDEX_income6'],
    'income7' => $message['INDEX_income7'],
    'income7a' => $message['INDEX_income7a'],
    'income7b' => $message['INDEX_income7b'],
    'income7c' => $message['INDEX_income7c'],
    'income7d' => $message['INDEX_income7d'],
    'income8a' => $message['INDEX_income8a'],
    'income8b' => $message['INDEX_income8b'],
    'income8c' => $message['INDEX_income8c'],
    'income8d' => $message['INDEX_income8d'],
    'income8e' => $message['INDEX_income8e'],
    'income8f' => $message['INDEX_income8f'],
    'income8g' => $message['INDEX_income8g'],
    'income8h' => $message['INDEX_income8h'],
    'income8i' => $message['INDEX_income8i'],
    'income8j' => $message['INDEX_income8j'],
    'income8k' => $message['INDEX_income8k'],
    'subjectiveSocialStatus1a' => $message['INDEX_subjectiveSocialStatus1a'],
    'subjectiveSocialStatus1b' => $message['INDEX_subjectiveSocialStatus1b'],
    'subjectiveSocialStatus1c' => $message['INDEX_subjectiveSocialStatus1c'],
    'subjectiveSocialStatus1d' => $message['INDEX_subjectiveSocialStatus1d'],
    'subjectiveSocialStatus2a' => $message['INDEX_subjectiveSocialStatus2a'],
    'subjectiveSocialStatus2b' => $message['INDEX_subjectiveSocialStatus2b'],
    'subjectiveSocialStatus2c' => $message['INDEX_subjectiveSocialStatus2c'],
    'education1' => $message['INDEX_education1'],
    'education2' => $message['INDEX_education2'],
    'education2a' => $message['INDEX_education2a'],
    'education3' => $message['INDEX_education3'],
    'education3a' => $message['INDEX_education3a'],
    'education3b' => $message['INDEX_education3b'],
    'education3c' => $message['INDEX_education3c'],
    'education3d' => $message['INDEX_education3d'],
    'education4' => $message['INDEX_education4'],
    'education4a' => $message['INDEX_education4a'],
    'education4b' => $message['INDEX_education4b'],
    'education4c' => $message['INDEX_education4c'],
    'education4d' => $message['INDEX_education4d'],
    'education4e' => $message['INDEX_education4e'],
    'education4f' => $message['INDEX_education4f'],
    'education4g' => $message['INDEX_education4g'],
    'education4h' => $message['INDEX_education4h'],
    'education5' => $message['INDEX_education5'],
    'education6' => $message['INDEX_education6'],
    'religious1' => $message['INDEX_religious1'],
    'religious1a' => $message['INDEX_religious1a'],
    'religious1b' => $message['INDEX_religious1b'],
    'religious1c' => $message['INDEX_religious1c'],
    'religious1d' => $message['INDEX_religious1d'],
    'religious2' => $message['INDEX_religious2'],
    'religious2a' => $message['INDEX_religious2a'],
    'religious2b' => $message['INDEX_religious2b'],
    'religious2c' => $message['INDEX_religious2c'],
    'religious2d' => $message['INDEX_religious2d'],
    'religious2e' => $message['INDEX_religious2e'],
    'religious2f' => $message['INDEX_religious2f'],
    'religious2g' => $message['INDEX_religious2g'],
    'religious2h' => $message['INDEX_religious2h'],
    'religious2i' => $message['INDEX_religious2i'],
    'religious2j' => $message['INDEX_religious2j'],
    'religious3' => $message['INDEX_religious3'],
    'gender1' => $message['INDEX_gender1'],
    'gender2' => $message['INDEX_gender2'],
    'gender3' => $message['INDEX_gender3'],
    'gender4' => $message['INDEX_gender4'],
    'gender6' => $message['INDEX_gender6'],
    'gender7' => $message['INDEX_gender7'],
    'genderMe' => $message['INDEX_genderMe'],
    'genderMother' => $message['INDEX_genderMother'],
    'genderFather' => $message['INDEX_genderFather'],
    'genderGrandmother' => $message['INDEX_genderGrandmother'],
    'genderGrandfather' => $message['INDEX_genderGrandfather'],
    'genderAunt' => $message['INDEX_genderAunt'],
    'genderUncle' => $message['INDEX_genderUncle'],
    'genderSister' => $message['INDEX_genderSister'],
    'genderBrother' => $message['INDEX_genderBrother'],
    'genderCousinMale' => $message['INDEX_genderCousinMale'],
    'genderCousinFemale' => $message['INDEX_genderCousinFemale'],
    'cultural1' => $message['INDEX_cultural1'],
    'cultural2' => $message['INDEX_cultural2'],
    'cultural3' => $message['INDEX_cultural3'],
    'cultural4' => $message['INDEX_cultural4'],
    'cultural5' => $message['INDEX_cultural5'],
    'cultural6' => $message['INDEX_cultural6'],
    'cultural7' => $message['INDEX_cultural7'],
    'cultural8' => $message['INDEX_cultural8'],
    'cultural9' => $message['INDEX_cultural9'],
    'cultural10' => $message['INDEX_cultural10'],
    'friend' => $message['INDEX_friend'],
    'partner' => $message['INDEX_partner'],
    'relative' => $message['INDEX_relative'],
    'socialSupport1' => $message['INDEX_socialSupport1'],
    'socialSupport2' => $message['INDEX_socialSupport2'],
    'socialSupport3' => $message['INDEX_socialSupport3'],
    'socialSupport4' => $message['INDEX_socialSupport4'],
    'socialSupport5' => $message['INDEX_socialSupport5'],
    'socialSupport6' => $message['INDEX_socialSupport6'],
    'experiance1' => $message['INDEX_experiance1'],
    'experiance2' => $message['INDEX_experiance2'],
    'experiance3' => $message['INDEX_experiance3'],
    'experianceIDK' => $message['INDEX_experianceIDK'],
    'experiance3a' => $message['INDEX_experiance3a'],
    'experiance3b' => $message['INDEX_experiance3b'],
    'immigrants1' => $message['INDEX_immigrants1'],
    'immigrants1city' => $message['INDEX_immigrants1city'],
    'immigrants1state' => $message['INDEX_immigrants1state'],
    'immigrants1country' => $message['INDEX_immigrants1country'],
    'immigrants2' => $message['INDEX_immigrants2'],
    'immigrants3' => $message['INDEX_immigrants3'],
    'immigrants4' => $message['INDEX_immigrants4'],
    'immigrants5' => $message['INDEX_immigrants5'],
    'immigrants6' => $message['INDEX_immigrants6'],
    'immigrants6a' => $message['INDEX_immigrants6a'],
    'immigrants6b' => $message['INDEX_immigrants6b'],
    'immigrants6c' => $message['INDEX_immigrants6c'],
    'immigrants6d' => $message['INDEX_immigrants6d'],
    'immigrants6e' => $message['INDEX_immigrants6e'],
    'immigrants6f' => $message['INDEX_immigrants6f'],
    'immigrants6g' => $message['INDEX_immigrants6g'],
    'immigrants7' => $message['INDEX_immigrants7'],
    'immigrants7a' => $message['INDEX_immigrants7a'],
    'immigrants7b' => $message['INDEX_immigrants7b'],
    'immigrants7c' => $message['INDEX_immigrants7c'],
    'immigrants7d' => $message['INDEX_immigrants7d'],
    'immigrants8' => $message['INDEX_immigrants8'],
    'immigrants8a' => $message['INDEX_immigrants8a'],
    'immigrants8b' => $message['INDEX_immigrants8b'],
    'immigrants9' => $message['INDEX_immigrants9'],
    'immigrants9a' => $message['INDEX_immigrants9a'],
    'immigrants9b' => $message['INDEX_immigrants9b'],
    'immigrants9c' => $message['INDEX_immigrants9c'],
    'immigrants9d' => $message['INDEX_immigrants9d'],
    'immigrants9e' => $message['INDEX_immigrants9e'],
    'immigrants9f' => $message['INDEX_immigrants9f'],
    'immigrants9g' => $message['INDEX_immigrants9g'],
    'immigrants9h' => $message['INDEX_immigrants9h'],
    'immigrants9i' => $message['INDEX_immigrants9i'],
    'immigrants9j' => $message['INDEX_immigrants9j'],
    'immigrants9k' => $message['INDEX_immigrants9k'],
    'immigrants9l' => $message['INDEX_immigrants9l'],
    'immigrants9m' => $message['INDEX_immigrants9m'],
    'immigrants9n' => $message['INDEX_immigrants9n'],
    'immigrants9o' => $message['INDEX_immigrants9o'],
    'immigrants9p' => $message['INDEX_immigrants9p'],
    'immigrants9q' => $message['INDEX_immigrants9q'],
    'immigrants9r' => $message['INDEX_immigrants9r'],
    'immigrants9s' => $message['INDEX_immigrants9s'],
    'immigrants9t' => $message['INDEX_immigrants9t'],
    'immigrants9u' => $message['INDEX_immigrants9u'],
    'immigrants9v' => $message['INDEX_immigrants9v'],
    'immigrants9w' => $message['INDEX_immigrants9w'],
    'immigrants9x' => $message['INDEX_immigrants9x'],
    'immigrants10' => $message['INDEX_immigrants10'],
    'immigrants10a' => $message['INDEX_immigrants10a'],
    'immigrants10b' => $message['INDEX_immigrants10b'],
    'immigrants10c' => $message['INDEX_immigrants10c'],
    'immigrants11' => $message['INDEX_immigrants11'],
    'immigrants12' => $message['INDEX_immigrants12'],
    'stronglydisagree' => $message['INDEX_stronglydisagree'],
    'disagreesomewhat' => $message['INDEX_disagreesomewhat'],
    'agreesomewhat' => $message['INDEX_agreesomewhat'],
    'agreestrongly' => $message['INDEX_agreestrongly'],
    'notatall' => $message['INDEX_notatall'],
    'alittle' => $message['INDEX_alittle'],
    'prettywell' => $message['INDEX_prettywell'],
    'extremelywell' => $message['INDEX_extremelywell'],
    'acculturation1' => $message['INDEX_acculturation1'],
    'acculturation1a' => $message['INDEX_acculturation1a'],
    'acculturation1b' => $message['INDEX_acculturation1b'],
    'acculturation1c' => $message['INDEX_acculturation1c'],
    'acculturation2' => $message['INDEX_acculturation2'],
    'acculturation2a' => $message['INDEX_acculturation2a'],
    'acculturation2b' => $message['INDEX_acculturation2b'],
    'acculturation2c' => $message['INDEX_acculturation2c'],
    'acculturation2d' => $message['INDEX_acculturation2d'],
    'acculturation2e' => $message['INDEX_acculturation2e'],
    'acculturation2f' => $message['INDEX_acculturation2f'],
    'acculturation2g' => $message['INDEX_acculturation2g'],
    'acculturation2h' => $message['INDEX_acculturation2h'],
    'acculturation2i' => $message['INDEX_acculturation2i'],
    'acculturation2j' => $message['INDEX_acculturation2j'],
    'acculturation2k' => $message['INDEX_acculturation2k'],
    'acculturation2l' => $message['INDEX_acculturation2l'],
    'acculturation2m' => $message['INDEX_acculturation2m'],
    'acculturation2n' => $message['INDEX_acculturation2n'],
    'acculturation3' => $message['INDEX_acculturation3'],
    'acculturation3a' => $message['INDEX_acculturation3a'],
    'acculturation3b' => $message['INDEX_acculturation3b'],
    'acculturation3c' => $message['INDEX_acculturation3c'],
    'acculturation3d' => $message['INDEX_acculturation3d'],
    'acculturation3e' => $message['INDEX_acculturation3e'],
    'acculturation4' => $message['INDEX_acculturation4'],
    'acculturation4a' => $message['INDEX_acculturation4a'],
    'acculturation4b' => $message['INDEX_acculturation4b'],
    'acculturation4c' => $message['INDEX_acculturation4c'],
    'acculturation4d' => $message['INDEX_acculturation4d'],
    'acculturation5' => $message['INDEX_acculturation5'],
    'acculturation5a' => $message['INDEX_acculturation5a'],
    'acculturation5b' => $message['INDEX_acculturation5b'],
    'acculturation5c' => $message['INDEX_acculturation5c'],
    'acculturation5d' => $message['INDEX_acculturation5d'],
    'acculturation5e' => $message['INDEX_acculturation5e'],
    'acculturation6' => $message['INDEX_acculturation6'],
    'acculturation6a' => $message['INDEX_acculturation6a'],
    'acculturation6b' => $message['INDEX_acculturation6b'],
    'acculturation6c' => $message['INDEX_acculturation6c'],
    'acculturation6d' => $message['INDEX_acculturation6d'],
    'acculturation7' => $message['INDEX_acculturation7'],
    'acculturation7a' => $message['INDEX_acculturation7a'],
    'acculturation7b' => $message['INDEX_acculturation7b'],
    'acculturation7c' => $message['INDEX_acculturation7c'],
    'acculturation7d' => $message['INDEX_acculturation7d'],
    'acculturation7e' => $message['INDEX_acculturation7e'],
    'acculturation7f' => $message['INDEX_acculturation7f'],
    'acculturation8' => $message['INDEX_acculturation8'],
    'acculturation8a' => $message['INDEX_acculturation8a'],
    'acculturation8b' => $message['INDEX_acculturation8b'],
    'acculturation8c' => $message['INDEX_acculturation8c'],
    'acculturation8d' => $message['INDEX_acculturation8d'],
    'acculturation8e' => $message['INDEX_acculturation8e'],
    'acculturation8f' => $message['INDEX_acculturation8f'],
    'submission' => $message['INDEX_submission'],
    'submit' => $message['INDEX_submit'],
    'TestStart' => $message['INDEX_TestStart'],

));
