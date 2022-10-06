<?php  

require_once __DIR__ . '/facebook-sdk/src/Facebook/autoload.php';
require_once('../../../admin/config/database.php');
require_once('../../../admin/classes/class_berita.php');


/*Class Database Instance Static*/

$db = Database::getInstance();
$connect = $db->getConnection();

$fb = new Facebook\Facebook([
	'app_id' => '2602415166709198',
	'app_secret' => 'ebce5c55a00f212c7e2a33efd4d1b9cb',
	'graph_api_version' => 'v5.0',
]);

/* PHP SDK v5.0.0 */
/* make the API call */
try {
  // Returns a `Facebook\FacebookResponse` object
  var_dump($token);die;
  $token = (new berita($db))->fb_access_token()->fetch_object()->access_token;
  $response = $fb->get(
    $token
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






