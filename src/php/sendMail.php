<?php

$email_id = $_POST['id'];

// Dependencies to install:
// $ composer require guzzlehttp/guzzle

require_once('/workspace/CourierHack/vendor/autoload.php');

$client = new \GuzzleHttp\Client();

//Remember to study "' . $email_id . '"

$response = $client->request('POST', 'https://api.courier.com/send', [
  'body' => '{"message":{"to":{"email":"' . $email_id . '","data":""},"content":{"title":"demo","body":"<b>Last test</b>"}}}',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Bearer pk_prod_AHT6G9ABTXMCJMG97ZHVE5AWPZMB',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();

echo "<script> 
        alert('Request send succesful');
        window.location.href ='/html/index.html';
    </script>";

//header("Location: /html/index.html");