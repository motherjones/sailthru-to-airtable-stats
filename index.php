<?php
header("Access-Control-Allow-Origin: *");

$traceback = $_SERVER['HTTP_REFERER'];
/*if(stripos($traceback, "airtableblocks.com") === false) {
    console.log($traceback);
    $err_msg["message"] = "Not allowed";
    echo json_encode($err_msg);
    die();
}*/

//example call below
//curl 'https://api.sailthru.com/<endpoint>?api_key=<key>&sig=<sig>&format=<json_or_xml>&json=<url_escaped_data>'
//the stats url
//https://api.sailthru.com/stats?api_key=$api_key&sig=$sig&json=

$secret = getenv("secret");
$api_key = getenv("api_key");
$type = "json";
$payload = json_encode({"stat":"list"});
//get the sig
$sig = md5($secret . $api_key . $type . $payload);

$return_me["return"] = $sig;

echo json_encode($return_me);
 ?>
