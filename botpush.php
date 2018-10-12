<?php



require "vendor/autoload.php";

$access_token = 'poIaFKSqTOcU1hy1kzHsBNofaGm5RdBGctHexX1L9/HJuPazmONl55odEJO4ZeS/BaS008Lh9CNOhhe2XyqNDFxygN30doFzmsd+53pXQwLLvlGvBF/e0ywhEpBdh8bVLwK+zkQ//FsRezuomtfXZQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f7345d5dca818afafe98a7b699e7f55d';

$pushID = 'Ufde4320010be19d40b1bdaa2409f10dc';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







