<?php

https://api.hubapi.com/form-integrations/v1/submissions/forms/583d14ff-91af-403d-b94a-c8b5d954da6f?hapikey=demo


$config = array(
'url' => 'https://api.hubapi.com/form-integrations/v1/submissions/forms/48f4b7f8-79ac-49b6-862d-af277bb55fcf?hapikey=fbb8b9ee-fd9d-4672-807c-91386dda8abc');
$headers = array(
'Content-Type: application/json',
);
/*list of curl options*/
$options = array(
CURLOPT_URL => $config['url'],
CURLOPT_RETURNTRANSFER => TRUE,
// CURLOPT_POST => TRUE,
// CURLOPT_POSTFIELDS => json_encode($data),
CURLOPT_HTTPHEADER => $headers,
);
/*curl handler*/
$ch = curl_init();
/*set options*/
curl_setopt_array($ch, $options);
/*excute*/
$result = curl_exec($ch);

echo "<pre>";
print_r($result);
echo "</pre>";