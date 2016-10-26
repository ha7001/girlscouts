<?php
/**
 * Created by PhpStorm.
 * User: domoniquedixon
 * Date: 4/12/16
 * Time: 12:23 AM
 */

require_once 'auth.php';
require_once 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $db;

    $record = json_decode($_POST['record'], JSON_NUMERIC_CHECK);
    $user = $_SESSION['pid'];

    $stmt = $db->pdo->prepare("CALL girlscouts.add_cpt(?, ?, ?);");
    $stmt->bindParam(1, $user, PDO::PARAM_STR);
    $stmt->bindParam(2, $record['commissions'], PDO::PARAM_INT);
    $stmt->bindParam(3, $record['omissions'], PDO::PARAM_INT);

    try {
        $stmt->execute();
        $stmt->closeCursor();
    } catch (PDOException $e ) {
        echo "Error";
    }

    foreach ($record['hits'] as $hit) {
        $stmt = $db->pdo->prepare("CALL girlscouts.add_cpt_hits(?, ?)");
        $stmt->bindParam(1, $user, PDO::PARAM_STR);
        $stmt->bindParam(2, $hit, PDO::PARAM_INT);

        try {
            $stmt->execute();
            $stmt->closeCursor();
        } catch (PDOException $e) {
            echo "Error";
        }
    }
}