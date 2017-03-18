<?php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '28977c4030268b96f55d736408daf88a';
$access_token  = 'UHVfEcWiNbhq9r+HmWKjoihcCHj7DX/i8YoihTFMuRN3EdA8rxzGueMsu9y+d5pHHueHQfkO4pevBVVPmNKT8VDHlMW0tK4htcIhYL/72Pbo5Fy0/ZajSjFXn5JjoVNGYWfZKqGjtevxQ9XaX+a2LwdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
    $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}
