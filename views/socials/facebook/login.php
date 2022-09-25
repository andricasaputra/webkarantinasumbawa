<?php  

session_start();

require_once __DIR__ . '/facebook-sdk/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '551858005669631',
	'app_secret' => '850560101df764e6a039c076684712d',
	'graph_api_version' => 'v5.0',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl(__DIR__ . '/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';