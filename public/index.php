<?php
require_once "../config.php";
require_once "../model/paysModel.php";
$dsn = DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset" . DB_CHARSET . ";port=" . DB_PORT;

try{
    $db = new PDO($dsn, DB_LOGIN, DB_PWD, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
}catch(Exception $e){
    die($e->getMessage());
}
if(!empty($_GET["order"]) && !empty($_GET["type"]) && in_array($_GET["order"], ORDERS)){
    $orderBY = $_GET["order"];
    $type = $_GET["type"] === "ASC" ? "ASC" : "DESC";
}else{
    $orderBY = ORDERS[1];
    $type = "ASC";
}
$pays = getAllPaysWithFlags($db, $orderBY, $type);
$db = null;

require_once "../view/paysView.php";