<?php
include('vendor/autoload.php');
use Telegram\Bot\Api;

$telegram = new Api('xxx');
$result = $telegram->getWebhookUpdates();

$text = $result['message']['text'];
$chat_id = $result['message']['chat']['id'];
$name = $result['message']['from']['username'];
$first_name = $result['message']['from']['first_name'];
$last_name = $result['message']['from']['last_name'];

if($text == '/start'){
    $reply = "Hello world!";
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply]);
}
//https://api.telegram.org/bot5591524736:AAGXk3kxgnGrjpIeMvhMM_toBda5NQVTLnQ/setWebHook?url=
//https://kabanchik-bot.evilcode.space/bot.php
