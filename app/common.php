<?php

// Change the working directory to this file.
chdir(__DIR__);
set_include_path (__DIR__);

require 'environment.php';

//auto populate super post data in common
if ($_SERVER['REQUEST_METHOD'] == 'POST'
&& stripos($_SERVER['CONTENT_TYPE'], 'application/json') !== false) {
  $_POST = json_decode(file_get_contents('php://input'), true);
}

//require files for class
require 'models/Order.php';
require 'models/Order153.php';
require 'models/Comment.php';
require 'models/Comment153.php';
