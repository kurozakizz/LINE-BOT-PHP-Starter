<?php
$access_token = 'VSGQkinYYpJsnFpuYZaZMjukt3LCdCiFO9FXrg5dt52MxWKS2+DOOK95DAe79kDCxqPVkKr0ZT9Nqm+91YDqZwRhnrXT8U1SPeeduANJuP+YhWZe8egKGu/yFjs6kwFZN56IjNAos/rXKOxcRls1bAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;