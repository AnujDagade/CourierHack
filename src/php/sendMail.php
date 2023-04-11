


<?php
$email_id = $_POST['id'];
$body = $_POST['msg'];
$sender_email = $_POST['email'];

// Dependencies to install:
// $ composer require guzzlehttp/guzzle


require_once('/workspace/CourierHack/vendor/autoload.php');

$client = new \GuzzleHttp\Client();

//Remember to study "' . $email_id . '"

$response = $client->request('POST', 'https://api.courier.com/send', [
  'body' => '{"message":{"to":{"email":"' . $email_id . '","data":""},"content":{"title":"Team up requested","body":"'.$body.'\nSender email: '.$sender_email.'"}}}',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Bearer key',
    'Content-Type' => 'application/json',
  ],
]);



echo "<script> 
        alert('Request send succesful');
        window.location.href ='/html/index.html';
    </script>";

?>
