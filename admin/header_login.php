<?php 
require_once ('config/database.php');
require_once ('classes/class_login.php');
$db = Database::getInstance();
$conn = $db->getConnection();
$connection = new Login($db);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Website Admin Panel</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="assets/css/bootstrap.techie.css" rel="stylesheet">-->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32"/>
	<link href="assets/css/sb-admin.css" rel="stylesheet">
</head>