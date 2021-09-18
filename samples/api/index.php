<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once './core/App.php';
$app = new App();
$json = [];
if ($app->request_name != null) {
    if (file_exists("v1/" . $app->request_name . ".php")) {
        require_once "./v1/" . $app->request_name . ".php";
    }
} else {
    $json = array('error' => '404 Not Found');
}
if (json_encode($json, JSON_UNESCAPED_UNICODE) != false) {
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode([]);
}