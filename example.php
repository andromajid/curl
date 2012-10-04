<?php
include 'curl.php';
$curl = new curl();
$curl->http_login('xxxxx', 'xxxxxxx');
$data_package = $curl->simple_get('http://127.0.0.1/esoftdream/ws.int.co.id/get_package/1');
$curl->debug();
echo $data_package;
?>