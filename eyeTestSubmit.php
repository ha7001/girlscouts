<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 4/11/16
 * Time: 9:49 AM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'auth.php';
require_once 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $db;
    
    $particapantId = $_SESSION['pid'];
    $question1 = '';
    $question2 = '';
    $question3 = '';
    $question4 = '';
    $question5 = '';
    $question6 = '';
    $question7 = '';
    $question8 = '';
    $question9 = '';
    $question10 = '';
    $question11 = '';
    $question12 = '';
    $question13 = '';
    $question14 = '';
    $question15 = '';
    $question16 = '';
    $question17 = '';
    $question18 = '';
    $question19 = '';
    $question20 = '';
    $question21 = '';
    $question22 = '';
    $question23 = '';
    $question24 = '';
    $question25 = '';
    $question26 = '';
    $question27 = '';
    $question28 = '';
    $question29 = '';
    $question30 = '';
    $question31 = '';
    $question32 = '';
    $question33 = '';
    $question34 = '';
    $question35 = '';
    $question36 = '';

    $question1 = (isset($_POST['question1'])) ? test_input($_POST['question1']) : '';
    $question2 = (isset($_POST['question1'])) ? test_input($_POST['question2']) : '';
    $question3 = (isset($_POST['question1'])) ? test_input($_POST['question3']) : '';
    $question4 = (isset($_POST['question1'])) ? test_input($_POST['question4']) : '';
    $question5 = (isset($_POST['question1'])) ? test_input($_POST['question5']) : '';
    $question6 = (isset($_POST['question1'])) ? test_input($_POST['question6']) : '';
    $question7 = (isset($_POST['question1'])) ? test_input($_POST['question7']) : '';
    $question8 = (isset($_POST['question1'])) ? test_input($_POST['question8']) : '';
    $question9 = (isset($_POST['question1'])) ? test_input($_POST['question9']) : '';
    $question10 = (isset($_POST['question1'])) ? test_input($_POST['question10']) : '';
    $question11 = (isset($_POST['question1'])) ? test_input($_POST['question11']) : '';
    $question12 = (isset($_POST['question1'])) ? test_input($_POST['question12']) : '';
    $question13 = (isset($_POST['question1'])) ? test_input($_POST['question13']) : '';
    $question14 = (isset($_POST['question1'])) ? test_input($_POST['question14']) : '';
    $question15 = (isset($_POST['question1'])) ? test_input($_POST['question15']) : '';
    $question16 = (isset($_POST['question1'])) ? test_input($_POST['question16']) : '';
    $question17 = (isset($_POST['question1'])) ? test_input($_POST['question17']) : '';
    $question18 = (isset($_POST['question1'])) ? test_input($_POST['question18']) : '';
    $question19 = (isset($_POST['question1'])) ? test_input($_POST['question19']) : '';
    $question20 = (isset($_POST['question1'])) ? test_input($_POST['question20']) : '';
    $question21 = (isset($_POST['question1'])) ? test_input($_POST['question21']) : '';
    $question22 = (isset($_POST['question1'])) ? test_input($_POST['question22']) : '';
    $question23 = (isset($_POST['question1'])) ? test_input($_POST['question23']) : '';
    $question24 = (isset($_POST['question1'])) ? test_input($_POST['question24']) : '';
    $question25 = (isset($_POST['question1'])) ? test_input($_POST['question25']) : '';
    $question26 = (isset($_POST['question1'])) ? test_input($_POST['question26']) : '';
    $question27 = (isset($_POST['question1'])) ? test_input($_POST['question27']) : '';
    $question28 = (isset($_POST['question1'])) ? test_input($_POST['question28']) : '';
    $question29 = (isset($_POST['question1'])) ? test_input($_POST['question29']) : '';
    $question30 = (isset($_POST['question1'])) ? test_input($_POST['question30']) : '';
    $question31 = (isset($_POST['question1'])) ? test_input($_POST['question31']) : '';
    $question32 = (isset($_POST['question1'])) ? test_input($_POST['question32']) : '';
    $question33 = (isset($_POST['question1'])) ? test_input($_POST['question33']) : '';
    $question34 = (isset($_POST['question1'])) ? test_input($_POST['question34']) : '';
    $question35 = (isset($_POST['question1'])) ? test_input($_POST['question35']) : '';
    $question36 = (isset($_POST['question1'])) ? test_input($_POST['question36']) : '';

    // Storing the data
    $stmt = $db->pdo->prepare("CALL girlscouts.addeyeTest(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
    $stmt->bindParam(1, $particapantId, PDO::PARAM_STR);
    $stmt->bindParam(2, $question1, PDO::PARAM_STR);
    $stmt->bindParam(3, $question2, PDO::PARAM_STR);
    $stmt->bindParam(4, $question3, PDO::PARAM_STR);
    $stmt->bindParam(5, $question4, PDO::PARAM_STR);
    $stmt->bindParam(6, $question5, PDO::PARAM_STR);
    $stmt->bindParam(7, $question6, PDO::PARAM_STR);
    $stmt->bindParam(8, $question7, PDO::PARAM_STR);
    $stmt->bindParam(9, $question8, PDO::PARAM_STR);
    $stmt->bindParam(10, $question9, PDO::PARAM_STR);
    $stmt->bindParam(11, $question10, PDO::PARAM_STR);
    $stmt->bindParam(12, $question11, PDO::PARAM_STR);
    $stmt->bindParam(13, $question12, PDO::PARAM_STR);
    $stmt->bindParam(14, $question13, PDO::PARAM_STR);
    $stmt->bindParam(15, $question14, PDO::PARAM_STR);
    $stmt->bindParam(16, $question15, PDO::PARAM_STR);
    $stmt->bindParam(17, $question16, PDO::PARAM_STR);
    $stmt->bindParam(18, $question17, PDO::PARAM_STR);
    $stmt->bindParam(19, $question18, PDO::PARAM_STR);
    $stmt->bindParam(20, $question19, PDO::PARAM_STR);
    $stmt->bindParam(21, $question20, PDO::PARAM_STR);
    $stmt->bindParam(22, $question21, PDO::PARAM_STR);
    $stmt->bindParam(23, $question22, PDO::PARAM_STR);
    $stmt->bindParam(24, $question23, PDO::PARAM_STR);
    $stmt->bindParam(25, $question24, PDO::PARAM_STR);
    $stmt->bindParam(26, $question25, PDO::PARAM_STR);
    $stmt->bindParam(27, $question26, PDO::PARAM_STR);
    $stmt->bindParam(28, $question27, PDO::PARAM_STR);
    $stmt->bindParam(29, $question28, PDO::PARAM_STR);
    $stmt->bindParam(30, $question29, PDO::PARAM_STR);
    $stmt->bindParam(31, $question30, PDO::PARAM_STR);
    $stmt->bindParam(32, $question31, PDO::PARAM_STR);
    $stmt->bindParam(33, $question32, PDO::PARAM_STR);
    $stmt->bindParam(34, $question33, PDO::PARAM_STR);
    $stmt->bindParam(35, $question34, PDO::PARAM_STR);
    $stmt->bindParam(36, $question35, PDO::PARAM_STR);
    $stmt->bindParam(37, $question36, PDO::PARAM_STR);



    try {
        $stmt->execute();
        header('Location: /thankyou.php');
    } catch (PDOException $e) {
        echo "Error" . $e;
    }
}