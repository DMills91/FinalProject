<?php

$comment = new Comment153($_POST);

$comment->create();

echo json_encode($comment);
