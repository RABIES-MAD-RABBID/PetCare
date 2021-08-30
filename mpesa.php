<?php
//Authentication Request in PHP 
//code from developer.safaricom.co.ke
$ch = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Authorization: Basic ' . base64_encode('h0xqxLLipYMy5KvCxsAzkoM1xxGpgCIy:qzRG8tRbpOGeTN8X')
]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
echo json_decode($response);