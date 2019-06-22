<?php

header("Content-Type: application/json");

$ips = [
  'my_ip' => gethostbyname(trim(`hostname`)),
  'your_ip' => $_SERVER['REMOTE_ADDR']
];

if ($_SERVER['HTTP_X_FORWARDED_FOR'] && filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP)) {
  $ips['forwarded_for'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
}

echo json_encode($ips, JSON_PRETTY_PRINT);
