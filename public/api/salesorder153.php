<?php
require '../../app/common.php';
// 1. Go to the database and get all turbines
$orders = Order153::fetchOrder153();
// 2. Convert to JSON
$json = json_encode($orders, JSON_PRETTY_PRINT);
// 3. Print
header('Content-Type: application/json');
echo $json;
