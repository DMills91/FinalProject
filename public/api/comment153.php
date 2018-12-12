<?php

require '../../app/common.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  require 'commentPost153.php';
  exit;
}

$clientId = intval($_GET['clientId'] ?? 0);

// 1. Go to the database and get all turbines
$comments = Comment153::fetchComments153($clientId);
// 2. Convert to JSON
$json = json_encode($comments, JSON_PRETTY_PRINT);
// 3. Print
header('Content-Type: application/json');
echo $json;
