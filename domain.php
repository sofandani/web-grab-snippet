<?php
$url = isset($_GET['u']) ? $_GET['u'] : false;

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_NOBODY, true);
curl_setopt($curl, CURLOPT_HEADER, true);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
if ($result !== false){
  $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);  
  if ( in_array($statusCode, range(200,306)) ){
    echo "URL Exists";
  }
  else{
    echo "URL Not Exists";
  }
  echo '<br /> '.($statusCode !== null ? $statusCode : '');
}
else{
  echo "URL not Exists";
}

curl_close($curl);
?>