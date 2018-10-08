<?php



require "vendor/autoload.php";

$access_token = 'cF/yLUC3iBaJWcY3m5vXjhBPY7HSTimzdASos6sJaibNo62msHbpi4sUX1fmqgjspdv0JBgb04eCO2gZj4U4UbTqeKLYS0v8CK6bLiUCBC21l6gKoDCbC4CYxP/SXMOrEvLyIneD8ZKjnm4DrSIX/QdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f85cfc863884bab59f188eceb7f4d1b6';

$pushID = 'U5bb6ceb4d2cd3adbef8295b61c445ce2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world 0x100078');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







