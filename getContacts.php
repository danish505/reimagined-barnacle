<?php


include 'vendor/autoload.php'; 

$hubspot = SevenShores\Hubspot\Factory::create('fbb8b9ee-fd9d-4672-807c-91386dda8abc');

$response = $hubspot->contacts()->all();


$data_num = count($response->contacts);


echo "<pre>";
print_r($response->contacts);
echo $data_num;
echo "</pre>";

