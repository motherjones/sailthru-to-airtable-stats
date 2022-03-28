<?php
header("Access-Control-Allow-Origin: *");

$traceback["url"] = $_SERVER['HTTP_REFERER'];

/*if(stripos($traceback, "airtableblocks.com") === false) {
    console.log($traceback);
    $err_msg["message"] = "Not allowed";
    echo json_encode($err_msg);
    die();
}*/

echo json_encode($traceback["url"]);
 ?>
