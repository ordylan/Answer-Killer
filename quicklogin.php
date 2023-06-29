<?php
$api_id = $_GET["api_id"];  
$api_key = $_GET["api_key"]."ORDYLAN_HSP_ANSWERKILLER_KEY";  
echo $api_id;
echo openssl_encrypt($api_id, 'AES-128-ECB', $api_key, 0);
echo "\n\n";

//T1JEWUxBTl9URVNUX0tFWQ==
//HWvI2JrNmCkhy7QTk7qTvn6l0H7MU+9UzyFBd781Urw=
//echo openssl_decrypt($api_id, 'AES-128-ECB', $api_key, 0);

