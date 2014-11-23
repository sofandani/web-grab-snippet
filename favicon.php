<?php
require_once('curl.php');

$url = isset($_GET['u']) ? $_GET['u'] : $_SERVER['REQUEST_URI'];

$Curls = new cURLs( array('url'=>$url,'type'=>'favicon','args'=>array('save'=>true)) );

$cURLs_data = $Curls->access_curl();

if($cURLs_data !== null){
	echo '<link rel="shortcut icon" href="'.$cURLs_data.'" type="image/x-icon" />';
	//header('Content-Type: image/*');
	//header("Content-Disposition: attachment; filename=\"$cURLs_data\"");
	echo '<a href="'.$cURLs_data.'" target="_blank"><img src="'.$cURLs_data.'" width="24" /><br />';
	echo $cURLs_data.'</a><br />';
}
else{
	echo "no data";
}

?>