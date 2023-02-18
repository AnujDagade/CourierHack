<?php
// Dependencies to install:
// $ composer require guzzlehttp/guzzle

require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://api.courier.com/send', [
  'body' => '{"message":{"to":{"email":"dagadeanuj@gmail.com","data":""},"content":{"title":"demo","body":"<b>Last test</b>"}}}',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Bearer pk_prod_AHT6G9ABTXMCJMG97ZHVE5AWPZMB',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();