<?php


include 'vendor/autoload.php'; 

$hubspot = SevenShores\Hubspot\Factory::create('API_key');

$response = $hubspot->forms()->all();

echo "<pre>";
print_r($response);
echo "</pre>";
