<?php


include 'vendor/autoload.php'; 

$hubspot = SevenShores\Hubspot\Factory::create('API_KEY');

$response = $hubspot->contacts()->all();


$data_num = count($response->contacts);


echo "<pre>";
print_r($response->contacts);
echo $data_num;
echo "</pre>";

