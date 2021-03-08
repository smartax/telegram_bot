<?php
define('API_KEY', '1655239193:AAHRpQd7xXCip4cgW8mz0-8A3HhV9cCKPx0');

$Manager = "739717149";
$compane = "smartDev";

function bot($method, $datas = []){
    $url = "https://api.telegram.org/bot".API_KEY."/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    curl_close($ch);
    if (!curl_error($ch)) return json_decode($res);
};

function html($text){
    return str_replace(['<','>'],['&#60;','&#62;'],$text);
};

$update = json_decode(file_get_contents('php://input'));

//test log
file_put_contents("log.txt",file_get_contents('php://input'));

//https://api.telegram.org/bot1655239193:AAHRpQd7xXCip4cgW8mz0-8A3HhV9cCKPx0/setWebHook?url=https://smartax.github.io/telegram_bot/chat_bot.php