<?php
require_once 'CustomAnalytcs_class.php';
$service_account_email = 'humasskp@websumbawa.iam.gserviceaccount.com';
$key_file_location = 'websumbawa-14b4fb526599.p12';
$analytics = new CustomAnalytcs_class($service_account_email, $key_file_location);
$sessiondata = $analytics->getSessionData();
$sessiondata2 = $analytics->getSessionData();

$arr = [$sessiondata2['sessioncountperday']['rows']['0'], $sessiondata['sessioncountstotal']['rows']['0']];

echo json_encode($arr);

?>