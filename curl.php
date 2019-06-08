<?php

$data = array(
    'msg' => 'Merhaba',
    'lng' => 'Filiz',
    'source' => 'ttsmp3'
);

$ch=curl_init();

curl_setopt($ch, CURLOPT_URL, "https://ttsmp3.com/makemp3.php");
curl_setopt($ch, CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$result=curl_exec($ch);

echo $result;

?>
