<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
try{
    $tab = [];

    $i1 = array("id"=>1, "name"=>"Apples", "price"=>"$2");
    $i2 = array("id"=>2, "name"=>"Peaches", "price"=>"$5");

    $tab[] = $i1;
    $tab[] = $i2;

    $json = array("items"=>$tab);

    if (json_encode($json, JSON_UNESCAPED_UNICODE) != false) {
        echo json_encode($json, JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode([]);
    }
} catch(PDOException $e) {
    //echo json_encode([]);
    echo "Error: " . $e->getMessage();
}