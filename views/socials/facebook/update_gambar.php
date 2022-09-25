<?php  

require_once __DIR__ . '/facebook-sdk/src/Facebook/autoload.php';
require_once('../../../admin/config/database.php');
require_once('../../../admin/classes/class_berita.php');


/*Class Database Instance Static*/

$db = Database::getInstance();
$connect = $db->getConnection();

/*Class Instance*/
$conn = new berita($db);

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
    '556266944928036?fields=posts{full_picture}',
    'EAAkZB4fZBR3c4BAD9YxU45L20zrKuuRfHBdlD216fuQ0ZCoYhMQjes5qfjeFvr4kkE1VpwDP9nj6ppx1UjWHSYKKaZCYoIdT52It1Ei1zCGMyzsq3eVoQcZAlckYbebyDy3d6u2zhMMfXaHq5zwa1hKHu42oAPreHpthrLfmZAQtgKp9NvZAz7TKH725vJiGzeA5VgVdTPdsDATZA58F6lP6ifAWbzu3Y1cHXYOHclziXRkGqpp58L84sXmSKzm3TC8ZD'
  );
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$graphNode = $response->getDecodedBody();

// If next paging present
$next = file_get_contents($graphNode['posts']['paging']['next']);

$data = json_decode($next, true);

foreach ($data['data'] as $key => $value) {
  if ($value['full_picture']) {
   $masuk = $conn->updateFacebookImage($value['id'], $value['full_picture']);
  }
}

foreach ($graphNode['posts']['data'] as $key => $value) {
  if ($value['full_picture']) {
   $masuk = $conn->updateFacebookImage($value['id'], $value['full_picture']);
  }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);





