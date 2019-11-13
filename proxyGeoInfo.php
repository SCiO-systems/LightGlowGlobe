<?php

$proxy_url =  $_SERVER['REQUEST_URI'];


$actual_url = str_replace("/proxyGeoInfo.php","http://api.geonames.org/",$proxy_url);
$data = file_get_contents($actual_url);
echo $data;

?>
