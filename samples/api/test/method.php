<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$method = $_SERVER['REQUEST_METHOD'];
$json = array('method' => $method);
echo json_encode($json, JSON_UNESCAPED_UNICODE);
