<?php

require 'vendor/autoload.php';

// Fetch your access token from somewhere. A database for example.

$api = new SpotifyWebAPI\SpotifyWebAPI();
$api->setAccessToken($accessToken);

print_r(
    $api->getTrack('4uLU6hMCjMI75M1A2tKUQC')
);

?>