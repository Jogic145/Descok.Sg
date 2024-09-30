<?php
require 'prevents/index.php';
function Telegram($message,$chatid,$bot){
    $telegramApiUrl = "https://api.telegram.org/bot{$bot}/sendMessage";
    $params = [
        'chat_id' => $chatid,
        'text' => $message
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegramApiUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
   
}



?>