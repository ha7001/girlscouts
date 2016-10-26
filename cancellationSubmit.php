<?php
/**
 * Created by PhpStorm.
 * User: Harry
 * Date: 4/6/16
 * Time: 10:28 PM
 */
require 'auth.php';
require_once 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    global $db;
    
    $data = json_decode($_POST['block'], JSON_NUMERIC_CHECK);

    $_block = $data['block'];
    $_blockRow = $data['blockRow'];
    $_blockCol = $data['blockCol'];
    $_blockValue = $data['blockValue'];
    $_testNumber = $data['testNumber'];
    $_participantId = $_SESSION['pid'];
    $_time = $data['timeV'];


    $stmt = $db->pdo->prepare("CALL girlscouts.addCancellationTestResult(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $_block, PDO::PARAM_INT);
    $stmt->bindParam(2, $_blockRow, PDO::PARAM_INT);
    $stmt->bindParam(3, $_blockCol, PDO::PARAM_INT);
    $stmt->bindParam(4, $_blockValue, PDO::PARAM_STR);
    $stmt->bindParam(5, $_testNumber, PDO::PARAM_INT);
    $stmt->bindParam(6, $_participantId, PDO::PARAM_STR);
    $stmt->bindParam(7, $_time, PDO::PARAM_INT);

    try {
        $stmt->execute();
    }
    catch (PDOException $e)
    {
        echo "Error";
        echo $e;
    }

}
    
