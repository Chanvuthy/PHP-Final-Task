<?php
session_start();
require_once('vendor/autoload.php');

$FBObject = new \Facebook\Facebook([
	'app_id' => '521689182366094',
	'app_secret' => '58233cca83a54bce85f3f3eb861ea07a',
	'default_graph_version' => 'v11.0'
]);

$handler = $FBObject -> getRedirectLoginHelper();


?>