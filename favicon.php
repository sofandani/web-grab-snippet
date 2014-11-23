<?php
require_once('curl.php');

$url = 'http://about.me/ofan';

$Curls = new cURLs(array('url'=>$url,'type'=>'favicon'));

$cURLs_data = $Curls->access_curl();

if($cURLs_data !== null){
	//header('Content-Type: image/*');
	//header("Content-Disposition: attachment; filename=\"$cURLs_data\"");
	echo '<img src="'.$cURLs_data.'" />';
}
else{
	echo "no data";
}

?>