<?php


include 'vendor/autoload.php'; 

$hubspot = SevenShores\Hubspot\Factory::create('fbb8b9ee-fd9d-4672-807c-91386dda8abc');

$response = $hubspot->forms()->all();

echo "<pre>";
print_r($response);
echo "</pre>";
