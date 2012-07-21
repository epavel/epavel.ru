<?php
$ch = curl_init('http://ya.ru/');
$options = array(
        CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $options);
$response = curl_exec($ch);
curl_close($ch);
echo $response;