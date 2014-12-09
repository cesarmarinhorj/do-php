<?php
require_once(__DIR__ . '/../config.php');

########################################################
# DigitalOcean API - PHP examples
# https://github.com/erikaheidi/do-php
########################################################

// Simple CURL example: list your droplets

$endpoint = "https://api.digitalocean.com/v2/droplets";
$headers[] = "Content-type: application/json";
$headers[] = "Authorization: Bearer $DO_API_TOKEN";

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_HTTPHEADER     => $headers,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL            => $endpoint,
]);

$response = curl_exec($curl);

echo "<pre>";
print_r(json_decode($response, 1));
echo "</pre>";

curl_close($curl);
