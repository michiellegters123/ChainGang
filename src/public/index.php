<?php

session_start();

//define("PRIVATE_FOLDER", "../private");
define("PRIVATE_FOLDER", realpath(dirname(__FILE__) . "/../private"));
require_once(PRIVATE_FOLDER . "/config/config.php");

$db = new DataBase();
$result = $db->querry("select * from review_vote");
print_r($result->fetch_assoc());

//echo $_GET["page"];
//Route::loadPage($_GET["page"]);