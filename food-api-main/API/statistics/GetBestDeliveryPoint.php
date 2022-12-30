<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once dirname(__FILE__) . '/../../COMMON/connect.php';
    include_once dirname(__FILE__) . '/../../MODEL/statistics.php';

    $database = new Database();
    $db = $database->connect();

    $statistics = new Statistics($db);

    $stmt = $statistics->getBestDeliveryPoint();

    if ($stmt->num_rows > 0) {
        $bestPoint_arr = array();

        while ($record = $stmt->fetch_assoc()) {
            $bestPoint_arr[] = $record;
        }

        $json = json_encode($bestPoint_arr);
        echo $json;

        return $json;
    } else {
        echo "\n\nNo record";
    }
?>