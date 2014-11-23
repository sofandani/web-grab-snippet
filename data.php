<?php
$url = 'http://192.168.1.5/api.ofanebob.com/391415531810.json';

$options = array(
  CURLOPT_RETURNTRANSFER => true, // return web page
  CURLOPT_HEADER => false, // don't return headers
  CURLOPT_FOLLOWLOCATION => true, // follow redirects
  CURLOPT_ENCODING => "utf-8", // handle all encodings
  CURLOPT_USERAGENT => 'anonymouse', // who am i
  CURLOPT_AUTOREFERER => true, // set referer on redirect
  CURLOPT_CONNECTTIMEOUT => 5, // timeout on connect
  CURLOPT_TIMEOUT => 10, // timeout on response
  CURLOPT_MAXREDIRS => 5, // stop after 10 redirects
  CURLOPT_SSL_VERIFYHOST => 0, // disable SSL verification host
  CURLOPT_SSL_VERIFYPEER => false, // skip SSL verifier
);

$curl = curl_init();
$options[CURLOPT_URL] = $url;  
curl_setopt_array($curl, $options);

$result = curl_exec($curl);

if($result !== false){

	$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE); 

	if($statusCode == 404){
		exit('Error');
	}
	else{
		echo $result;
	}
}
else{
	exit('Error');
}

curl_close($curl);
?>