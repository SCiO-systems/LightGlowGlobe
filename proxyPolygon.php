<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$proxy_url =  $_SERVER['REQUEST_URI'];

$id = $_GET['id'];
$pathOfCatalogues = $_GET['pathOfCatalogues'];

$postdata = file_get_contents("php://input");
$actual_url = str_replace("/proxyPolygon.php","http://18.191.152.248:9007",$proxy_url);
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "9007",
  CURLOPT_URL => $actual_url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $postdata,
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: c2185f06-8ebe-63dd-815e-88c6f63f030e"
  ),
));


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>


