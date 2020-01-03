<?php

require './vendor/autoload.php';

$client_id = "cf43064c-26df-3f6b-9d9b-377989217969";
$client_secret = "b80cf6fe-87bb-3956-998f-2558fb224523";
$redirect_uri = "http://localhost";

$bodyGrantCode = array(
    "client_id" => $client_id,
    "client_secret" => $client_secret,
    "extraInfo" => "{}",
    "redirect_uri" => $redirect_uri,
    "state" => "string"
);

// $body = json_encode($bodyGrantCode);

// echo $body;

$url = 'http://api-sandbox.algartelecom.com.br/oauth/grant-code';

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => http_build_query($bodyGrantCode)
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$jsonObj = json_decode($url, true);
//if ($result === FALSE) {  Handle error  }

echo "{$result}\n";

?>