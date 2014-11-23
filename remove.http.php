<?php

$input = 'http://192.168.1.5/gluckindonesia.com/get.api.php';

	// If URI is like, eg. www.way2tutorial.com/
	$input = trim($input, '/');

	// If not have http:// or https:// then prepend it
	if (!preg_match('#^http(s)?://#', $input)) {
	    $input = 'http://' . $input;
	}

	$urlParts = parse_url($input);

	// Remove www.
	$domain_name = preg_replace('/^www\./', '', $urlParts['host']);

	$whitelist = array(
	    '127.0.0.1',
	    '::1'
	);

	if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
	// Output way2tutor
	 echo $domain_name;
	}
?>