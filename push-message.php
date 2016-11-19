<?php
$access_token = 'VSGQkinYYpJsnFpuYZaZMjukt3LCdCiFO9FXrg5dt52MxWKS2+DOOK95DAe79kDCxqPVkKr0ZT9Nqm+91YDqZwRhnrXT8U1SPeeduANJuP+YhWZe8egKGu/yFjs6kwFZN56IjNAos/rXKOxcRls1bAdB04t89/1O/w1cDnyilFU=';

$to = $_GET['to']; //'U2bfe4a2f9bbfdc8f03ff26d96fbf7675'

// Make a POST Request to Messaging API to reply to sender
$url = 'https://api.line.me/v2/bot/message/push';

$messages = [
	'type' => 'text',
	'text' => 'Adidas All Bird ของคุณได้ถูกรับหิ้วแล้วกรุณาเข้าไปชำระเงิน',
];

$data = [
	'to' => $to,
	'messages' => [$messages]
];
$post = json_encode($data);

//debug
//echo $post;
//echo "<br><hr>";

$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result . "\r\n";
echo "OK";