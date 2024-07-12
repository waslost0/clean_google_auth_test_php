<?php
require __DIR__ . '/vendor/autoload.php';

use Google\Auth\AccessToken;

$auth = new AccessToken();
// TODO insert token
$response = $auth->verify("");
echo '<pre>'; print_r($response); echo '</pre>';