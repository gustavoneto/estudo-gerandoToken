<?php

require './vendor/autoload.php';

$url = "http://viacep.com.br/ws/38300062/json";

$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method' => 'GET'
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$jsonObj = json_decode($url, true);
echo $result;
?>