<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);



define("TOKEN", "6853371339:AAEmXAQXi3PbAyc1oEaRZRA1b_ih0s6gWx4");
define("USER_ID", 873361973);



$textMessage = "Holla";
$textMessage = urlencode($textMessage);

$urlQuery = "https://api.telegram.org/bot" . TOKEN . "/sendMessage?chat_id=" . USER_ID . "&text=" . $textMessage;

$result = file_get_contents($urlQuery);




$hookUrl = "https://your_domain.com/webhook.php";
$url = "https://api.telegram.org/bot" . TOKEN . "/setWebhook?url=" . $hookUrl;
$response = file_get_contents($url);
echo $response;


$ch = curl_init("https://api.telegram.org/bot" . TOKEN . "/sendMessage?" . http_build_query($getQuery));
$result = curl_exec($ch);
curl_close($ch);
echo $result;
