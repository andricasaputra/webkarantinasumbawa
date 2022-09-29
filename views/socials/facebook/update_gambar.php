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
	'app_secret' => '7684bb15531ae16e91e213fcd10f1f60',
	'graph_api_version' => 'v5.0',
]);

/* PHP SDK v5.0.0 */
/* make the API call */
try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get(
    '556266944928036?fields=posts{full_picture}',
    'EAAkZB4fZBR3c4BAKbZARjZCn8OWlc4LyYuzy4dSIpgy3kTVZAvi9VsyOuHtdBH11CGM9BZAGX6xZBU5MgqQ79UrorAAqrowDv42B9t85VPcj7hoHq28c29ADuZAJboAMK7K0iANhI0YQc1hMtMEq2I7G682QjeV58yAbzHDXBXiEUGeJt0UygC8cPKT1OTvhutsZD'
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





