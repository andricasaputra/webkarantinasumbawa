<?php  

require_once __DIR__ . '/facebook-sdk/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '2602415166709198',
	'app_secret' => 'ebce5c55a00f212c7e2a33efd4d1b9cb',
	'graph_api_version' => 'v5.0',
]);

/* PHP SDK v5.0.0 */
/* make the API call */
try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get(
    '1880606578875838?fields=posts{full_picture,message}',
    'EAAkZB4fZBR3c4BAPbO05JT8Pjy0x0p2yrGm075M2CMEW4gZAbIXx0t7mHLKv33qXrT6aB5jQlxvDA0H3zPGvJoghMOev0mzqqnwpcXeJhmTNbzZBg8SskT8sMi6ikQy6j71vu2y6AZC2axZCybWP0noRW0vatOZCkKzJKgYMsg9PgZDZD'
  );
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$graphNode = $response->getDecodedBody();

echo json_encode($graphNode);






