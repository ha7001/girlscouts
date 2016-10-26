<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 4/6/16
 * Time: 9:49 AM
 */

require_once 'config.php';
require_once 'db.php';
require 'functions.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $db;

    echo "time : " . date('l jS \of F Y h:i:s A') . "<br/>";

    // Unique ID
    $_id = uniqid();
    $participant_id = $_SESSION['pid'];
    $adate = date("Y-m-d H:i:s");
    $dob = '';
    $gender = '';
    $writinghand = '';
    $drawinghand = '';
    $throwinghand = '';
    $scissorshand = '';
    $knifehand = '';
    $broomhand = '';
    $openinghand = '';
    $race = '';
    $other_race = '';
    $ethnicity = '';
    $immigrant_job = '';
    $immigrant_born = '';
    $immigrant_nationality = '';
    $immigrants_move_years = '';
    $immigrants_move_months = '';
    $immigrant_other_current_position_desc = '';
    $status = '';
    $married_years = '';
    $married_months = '';
    $partner_years = '';
    $partner_months = '';
    $widow_years = '';
    $widow_months = '';
    $separated_years = '';
    $separated_months = '';
    $kids = '';
    $quantity = '';
    $city = '';
    $state = '';
    $country = '';
    $inhabitants = '';
    $geography = '';
    $unemployed_years = '';
    $unemployed_months = '';
    $daily_activities = '';
    $other_current_position_desc = '';
    $financially_dependent = '';
    $people_in_household = '';
    $children_in_household = '';
    $adults_in_household = '';
    $adults_income_in_household = '';
    $home_status = '';
    $other_home_status = '';
    $total_income = '';
    $years_study = '';
    $age_study = '';
    $highest_grade = '';
    $computer_usage = '';
    $internet_usage = '';
    $beliefs = '';
    $highest_degree = '';
    $practice_month = '';
    $housekeeping_as_child = '';
    $housekeeping_as_current = '';
    $caretaker_as_child = '';
    $caretaker = '';
    $child_upbringing = '';
    $important_decisions_current = '';
    $personal_space = '';
    $capabilities = '';
    $unique = '';
    $law_of_nature = '';
    $competition = '';
    $sacrifice_activity = '';
    $detest = '';
    $sacrifice_interest = '';
    $fast_task = '';
    $slow_task = '';
    $count_on = '';
    $relies_on = '';
    $enjoy_same = '';
    $no_help = '';
    $emotional_link = '';
    $comfortable = '';
    $administered_psychological_test = '';
    $timed_psychological_test = '';
    $comfortable_psychological_test = '';
    $not_fluent_english = '';
    $current_affairs_US = '';
    $comfortable_americans = '';
    $native_traditional_foods = '';
    $many_american_friends = '';
    $comfortable_native = '';
    $current_affairs_native = '';
    $read_native = '';
    $home_in_US = '';
    $social_native = '';
    $accepted_by_americans = '';
    $native_home = '';
    $magazines_ethnic = '';
    $speak_native_language = '';
    $cook_american_food = '';
    $native_history = '';
    $music_ethnic = '';
    $speak_native = '';
    $comfortable_english = '';
    $english_home = '';
    $native_partner = '';
    $pray_native = '';
    $social_americans = '';
    $think_native = '';
    $close_with_native = '';
    $american_history = '';
    $think_english = '';
    $english_partner = '';
    $american_foods = '';

    foreach ($_POST as $key => $val) {
        switch ($key) {
            case "dob":
                $dob = test_input($val);
                break;
            case "gender":
                $gender = test_input($val);
                break;
            case "writinghand":
                $writinghand = test_input($val);
                break;
            case "drawinghand":
                $drawinghand = test_input($val);
                break;
            case "throwinghand":
                $throwinghand = test_input($val);
                break;
            case "scissorshand":
                $scissorshand = test_input($val);
                break;
            case "knifehand":
                $knifehand = test_input($val);
                break;
            case "broomhand":
                $broomhand = test_input($val);
                break;
            case "openinghand":
                $openinghand = test_input($val);
                break;
            case "race":
                $race = test_input($val);
                break;
            case "other":
                $other_race = test_input($val);
                break;
            case "ethnicity":
                $rv = array();

                foreach ($val as $v) {
                    $rv[] = test_input($v);
                }
                $ethnicity = json_encode($rv);
                break;
            case "immigrant_job":
                $immigrant_job = test_input($val);
                break;
            case "immigrant_born":
                $immigrant_born = test_input($val);
                break;
            case "immigrant_nationality":
                $immigrant_nationality = test_input($val);
                break;
            case "immigrants_move_years":
                $immigrants_move_years = test_input($val);
                break;
            case "immigrants_move_months":
                $immigrants_move_months = test_input($val);
                break;
            case "immigrant_other_current_position_desc":
                $immigrant_other_current_position_desc = test_input($val);
                break;
            case "status":
                $status = test_input($val);
                break;
            case "married_years":
                $married_years = test_input($val);
                break;
            case "married_months":
                $married_months = test_input($val);
                break;
            case "partner_years":
                $partner_years = test_input($val);
                break;
            case "partner_months":
                $partner_months = test_input($val);
                break;
            case "widow_years":
                $widow_years = test_input($val);
                break;
            case "widow_months":
                $widow_months = test_input($val);
                break;
            case "separated_years":
                $separated_years = test_input($val);
                break;
            case "separated_months":
                $separated_months = test_input($val);
                break;
            case "kids":
                $kids = test_input($val);
                break;
            case "quantity":
                $quantity = test_input($val);
                break;
            case "city":
                $city = test_input($val);
                break;
            case "state":
                $state = test_input($val);
                break;
            case "country":
                $country = test_input($val);
                break;
            case "inhabitants":
                $inhabitants = test_input($val);
                break;
            case "geography":
                $geography = test_input($val);
                break;
            case "unemployed_years":
                $unemployed_years = test_input($val);
                break;
            case "unemployed_months":
                $unemployed_months = test_input($val);
                break;
            case "daily_activities":
                $daily_activities = test_input($val);
                break;
            case "other_current_position_desc":
                $other_current_position_desc = test_input($val);
                break;
            case "financially_dependent":
                $financially_dependent = test_input($val);
                break;
            case "people_in_household":
                $people_in_household = test_input($val);
                break;
            case "children_in_household":
                $children_in_household = test_input($val);
                break;
            case "adults_in_household":
                $adults_in_household = test_input($val);
                break;
            case "adults_income_in_household":
                $adults_income_in_household = test_input($val);
                break;
            case "home_status":
                $home_status = test_input($val);
                break;
            case "other_home_status":
                $other_home_status = test_input($val);
                break;
            case "total_income":
                $total_income = test_input($val);
                break;
            case "years_study":
                $years_study = test_input($val);
                break;
            case "age_study":
                $age_study = test_input($val);
                break;
            case "highest_grade":
                $highest_grade = test_input($val);
                break;
            case "computer_usage":
                $computer_usage = test_input($val);
                break;
            case "internet_usage":
                $internet_usage = test_input($val);
                break;
            case "beliefs":
                $beliefs = test_input($val);
                break;
            case "highest_degree":
                $highest_degree = test_input($val);
                break;
            case "practice_month":
                $practice_month = test_input($val);
                break;
            case "housekeeping_as_child":
                $housekeeping_as_child = test_input($val);
                break;
            case "housekeeping_as_current":
                $housekeeping_as_current = test_input($val);
                break;
            case "caretaker_as_child":
                $caretaker_as_child = test_input($val);
                break;
            case "caretaker":
                $caretaker = test_input($val);
                break;
            case "child_upbringing":
                $child_upbringing = test_input($val);
                break;
            case "important_decisions_current":
                $important_decisions_current = test_input($val);
                break;
            case "personal_space":
                $personal_space = test_input($val);
                break;
            case "capabilities":
                $capabilities = test_input($val);
                break;
            case "unique":
                $unique = test_input($val);
                break;
            case "law_of_nature":
                $law_of_nature = test_input($val);
                break;
            case "competition":
                $competition = test_input($val);
                break;
            case "sacrifice_activity":
                $sacrifice_activity = test_input($val);
                break;
            case "detest":
                $detest = test_input($val);
                break;
            case "sacrifice_interest":
                $sacrifice_interest = test_input($val);
                break;
            case "fast_task":
                $fast_task = test_input($val);
                break;
            case "slow_task":
                $slow_task = test_input($val);
                break;
            case "count_on":
                $count_on = test_input($val);
                break;
            case "relies_on":
                $relies_on = test_input($val);
                break;
            case "enjoy_same":
                $enjoy_same = test_input($val);
                break;
            case "no_help":
                $no_help = test_input($val);
                break;
            case "emotional_link":
                $emotional_link = test_input($val);
                break;
            case "comfortable":
                $comfortable = test_input($val);
                break;
            case "administered_psychological_test":
                $administered_psychological_test = test_input($val);
                break;
            case "timed_psychological_test":
                $timed_psychological_test = test_input($val);
                break;
            case "comfortable_psychological_test":
                $comfortable_psychological_test = test_input($val);
                break;
            case "not_fluent_english":
                $not_fluent_english = test_input($val);
                break;
            case "current_affairs_US":
                $current_affairs_US = test_input($val);
                break;
            case "comfortable_americans":
                $comfortable_americans = test_input($val);
                break;
            case "native_traditional_foods":
                $native_traditional_foods = test_input($val);
                break;
            case "many_american_friends":
                $many_american_friends = test_input($val);
                break;
            case "comfortable_native":
                $comfortable_native = test_input($val);
                break;
            case "current_affairs_native":
                $current_affairs_native = test_input($val);
                break;
            case "read_native":
                $read_native = test_input($val);
                break;
            case "home_in_US":
                $home_in_US = test_input($val);
                break;
            case "social_native":
                $social_native = test_input($val);
                break;
            case "accepted_by_americans":
                $accepted_by_americans = test_input($val);
                break;
            case "native_home":
                $native_home = test_input($val);
                break;
            case "magazines_ethnic":
                $magazines_ethnic = test_input($val);
                break;
            case "speak_native_language":
                $speak_native_language = test_input($val);
                break;
            case "cook_american_food":
                $cook_american_food = test_input($val);
                break;
            case "native_history":
                $native_history = test_input($val);
                break;
            case "music_ethnic":
                $music_ethnic = test_input($val);
                break;
            case "speak_native":
                $speak_native = test_input($val);
                break;
            case "comfortable_english":
                $comfortable_english = test_input($val);
                break;
            case "english_home":
                $english_home = test_input($val);
                break;
            case "native_partner":
                $native_partner = test_input($val);
                break;
            case "pray_native":
                $pray_native = test_input($val);
                break;
            case "social_americans":
                $social_americans = test_input($val);
                break;
            case "think_native":
                $think_native = test_input($val);
                break;
            case "close_with_native":
                $close_with_native = test_input($val);
                break;
            case "american_history":
                $american_history = test_input($val);
                break;
            case "think_english":
                $think_english = test_input($val);
                break;
            case "english_partner":
                $english_partner = test_input($val);
                break;
            case "american_foods":
                $american_foods = test_input($val);
                break;
        }
    }

    // Storing the data
    $stmt = $db->pdo->prepare("CALL girlscouts.add_user(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
    $stmt->bindParam(1, $_id, PDO::PARAM_STR);
    $stmt->bindParam(2, $adate, PDO::PARAM_STR);
    $stmt->bindParam(3, $dob, PDO::PARAM_STR);
    $stmt->bindParam(4, $gender, PDO::PARAM_STR);
    $stmt->bindParam(5, $writinghand, PDO::PARAM_STR);
    $stmt->bindParam(6, $drawinghand, PDO::PARAM_STR);
    $stmt->bindParam(7, $throwinghand, PDO::PARAM_STR);
    $stmt->bindParam(8, $scissorshand, PDO::PARAM_STR);
    $stmt->bindParam(9, $knifehand, PDO::PARAM_STR);
    $stmt->bindParam(10, $broomhand, PDO::PARAM_STR);
    $stmt->bindParam(11, $openinghand, PDO::PARAM_STR);
    $stmt->bindParam(12, $race, PDO::PARAM_STR);
    $stmt->bindParam(13, $other_race, PDO::PARAM_STR);
    $stmt->bindParam(14, $ethnicity, PDO::PARAM_STR);
    $stmt->bindParam(15, $immigrant_job, PDO::PARAM_STR);
    $stmt->bindParam(16, $immigrant_born, PDO::PARAM_STR);
    $stmt->bindParam(17, $immigrant_nationality, PDO::PARAM_STR);
    $stmt->bindParam(18, $immigrants_move_years, PDO::PARAM_INT);
    $stmt->bindParam(19, $immigrants_move_months, PDO::PARAM_INT);
    $stmt->bindParam(20, $immigrant_other_current_position_desc, PDO::PARAM_STR);
    $stmt->bindParam(21, $status, PDO::PARAM_STR);
    $stmt->bindParam(22, $married_years, PDO::PARAM_INT);
    $stmt->bindParam(23, $married_months, PDO::PARAM_INT);
    $stmt->bindParam(24, $partner_years, PDO::PARAM_INT);
    $stmt->bindParam(25, $partner_months, PDO::PARAM_INT);
    $stmt->bindParam(26, $widow_years, PDO::PARAM_INT);
    $stmt->bindParam(27, $widow_months, PDO::PARAM_INT);
    $stmt->bindParam(28, $separated_years, PDO::PARAM_INT);
    $stmt->bindParam(29, $separated_months, PDO::PARAM_INT);
    $stmt->bindParam(30, $kids, PDO::PARAM_STR);
    $stmt->bindParam(31, $quantity, PDO::PARAM_INT);
    $stmt->bindParam(32, $city, PDO::PARAM_STR);
    $stmt->bindParam(33, $state, PDO::PARAM_STR);
    $stmt->bindParam(34, $country, PDO::PARAM_STR);
    $stmt->bindParam(35, $inhabitants, PDO::PARAM_STR);
    $stmt->bindParam(36, $geography, PDO::PARAM_STR);
    $stmt->bindParam(37, $unemployed_years, PDO::PARAM_INT);
    $stmt->bindParam(38, $unemployed_months, PDO::PARAM_INT);
    $stmt->bindParam(39, $daily_activities, PDO::PARAM_STR);
    $stmt->bindParam(40, $other_current_position_desc, PDO::PARAM_STR);
    $stmt->bindParam(41, $financially_dependent, PDO::PARAM_STR);
    $stmt->bindParam(42, $people_in_household, PDO::PARAM_INT);
    $stmt->bindParam(43, $children_in_household, PDO::PARAM_INT);
    $stmt->bindParam(44, $adults_in_household, PDO::PARAM_INT);
    $stmt->bindParam(45, $adults_income_in_household, PDO::PARAM_INT);
    $stmt->bindParam(46, $home_status, PDO::PARAM_STR);
    $stmt->bindParam(47, $other_home_status, PDO::PARAM_STR);
    $stmt->bindParam(48, $total_income, PDO::PARAM_STR);
    $stmt->bindParam(49, $years_study, PDO::PARAM_INT);
    $stmt->bindParam(50, $age_study, PDO::PARAM_INT);
    $stmt->bindParam(51, $highest_grade, PDO::PARAM_STR);
    $stmt->bindParam(52, $computer_usage, PDO::PARAM_STR);
    $stmt->bindParam(53, $internet_usage, PDO::PARAM_STR);
    $stmt->bindParam(54, $beliefs, PDO::PARAM_STR);
    $stmt->bindParam(55, $highest_degree, PDO::PARAM_STR);
    $stmt->bindParam(56, $practice_month, PDO::PARAM_INT);
    $stmt->bindParam(57, $housekeeping_as_child, PDO::PARAM_STR);
    $stmt->bindParam(58, $housekeeping_as_current, PDO::PARAM_STR);
    $stmt->bindParam(59, $caretaker_as_child, PDO::PARAM_STR);
    $stmt->bindParam(60, $caretaker, PDO::PARAM_STR);
    $stmt->bindParam(61, $child_upbringing, PDO::PARAM_STR);
    $stmt->bindParam(62, $important_decisions_current, PDO::PARAM_STR);
    $stmt->bindParam(63, $personal_space, PDO::PARAM_STR);
    $stmt->bindParam(64, $capabilities, PDO::PARAM_STR);
    $stmt->bindParam(65, $unique, PDO::PARAM_STR);
    $stmt->bindParam(66, $law_of_nature, PDO::PARAM_STR);
    $stmt->bindParam(67, $competition, PDO::PARAM_STR);
    $stmt->bindParam(68, $sacrifice_activity, PDO::PARAM_STR);
    $stmt->bindParam(69, $detest, PDO::PARAM_STR);
    $stmt->bindParam(70, $sacrifice_interest, PDO::PARAM_STR);
    $stmt->bindParam(71, $fast_task, PDO::PARAM_STR);
    $stmt->bindParam(72, $slow_task, PDO::PARAM_STR);
    $stmt->bindParam(73, $count_on, PDO::PARAM_STR);
    $stmt->bindParam(74, $relies_on, PDO::PARAM_STR);
    $stmt->bindParam(75, $enjoy_same, PDO::PARAM_STR);
    $stmt->bindParam(76, $no_help, PDO::PARAM_STR);
    $stmt->bindParam(77, $emotional_link, PDO::PARAM_STR);
    $stmt->bindParam(78, $comfortable, PDO::PARAM_STR);
    $stmt->bindParam(79, $administered_psychological_test, PDO::PARAM_STR);
    $stmt->bindParam(80, $timed_psychological_test, PDO::PARAM_STR);
    $stmt->bindParam(81, $comfortable_psychological_test, PDO::PARAM_STR);
    $stmt->bindParam(82, $not_fluent_english, PDO::PARAM_STR);
    $stmt->bindParam(83, $current_affairs_US, PDO::PARAM_STR);
    $stmt->bindParam(84, $comfortable_americans, PDO::PARAM_STR);
    $stmt->bindParam(85, $native_traditional_foods, PDO::PARAM_STR);
    $stmt->bindParam(86, $many_american_friends, PDO::PARAM_STR);
    $stmt->bindParam(87, $comfortable_native, PDO::PARAM_STR);
    $stmt->bindParam(88, $current_affairs_native, PDO::PARAM_STR);
    $stmt->bindParam(89, $read_native, PDO::PARAM_STR);
    $stmt->bindParam(90, $home_in_US, PDO::PARAM_STR);
    $stmt->bindParam(91, $social_native, PDO::PARAM_STR);
    $stmt->bindParam(92, $accepted_by_americans, PDO::PARAM_STR);
    $stmt->bindParam(93, $native_home, PDO::PARAM_STR);
    $stmt->bindParam(94, $magazines_ethnic, PDO::PARAM_STR);
    $stmt->bindParam(95, $speak_native_language, PDO::PARAM_STR);
    $stmt->bindParam(96, $cook_american_food, PDO::PARAM_STR);
    $stmt->bindParam(97, $native_history, PDO::PARAM_STR);
    $stmt->bindParam(98, $music_ethnic, PDO::PARAM_STR);
    $stmt->bindParam(99, $speak_native, PDO::PARAM_STR);
    $stmt->bindParam(100, $comfortable_english, PDO::PARAM_STR);
    $stmt->bindParam(101, $english_home, PDO::PARAM_STR);
    $stmt->bindParam(102, $native_partner, PDO::PARAM_STR);
    $stmt->bindParam(103, $pray_native, PDO::PARAM_STR);
    $stmt->bindParam(104, $social_americans, PDO::PARAM_STR);
    $stmt->bindParam(105, $think_native, PDO::PARAM_STR);
    $stmt->bindParam(106, $close_with_native, PDO::PARAM_STR);
    $stmt->bindParam(107, $american_history, PDO::PARAM_STR);
    $stmt->bindParam(108, $think_english, PDO::PARAM_STR);
    $stmt->bindParam(109, $english_partner, PDO::PARAM_STR);
    $stmt->bindParam(110, $american_foods, PDO::PARAM_STR);
    $stmt->bindParam(111, $participant_id, PDO::PARAM_STR);

    try {
        $stmt->execute();
        header('Location: /cpt.php');
    } catch (PDOException $e) {
        echo "Error";
    }
}