<?php  

session_start();

require_once __DIR__ . '/facebook-sdk/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '551858005669631',
	'app_secret' => '13340a8c8f6f5977c366dcd1a4fdfc9f',
	'graph_api_version' => 'v5.0',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl(__DIR__ . '/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';