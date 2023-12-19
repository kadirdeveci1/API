<?php

// API endpoint'ini belirt
$apiUrl = 'https://api.publicapis.io/entries';

// cURL öğesini başlat
$ch = curl_init($apiUrl);

// cURL ayarlarını yapılandır
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// API'ye GET isteği gönder
$response = curl_exec($ch);

// cURL bağlantısını kapat
curl_close($ch);

// API yanıtını ekrana yazdır
echo $response;

?>
