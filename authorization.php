<?php

require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    'e76b905a63f04558b4e19dc15378fc81',
    '905fdf8cf04f48c693b04816557d4ed7'
);

$session->requestCredentialsToken();
$accessToken = $session->getAccessToken();

// Store the access token somewhere. In a database for example.

header('Location: some-other-file.php');
die();

?>