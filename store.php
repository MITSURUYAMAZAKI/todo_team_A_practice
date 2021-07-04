<?php

// read the file
require_once('./models/task.php');

//receive file
$title = $_POST['title'];
$contents = $_POST['contents'];
$timestamp = time("Y年m月d日 H時i分s秒");

// save to DB
$task = new Task(); 
$task->create([$title,$contents,$timestamp]);

// redirect to index.php
header('location:index.php');

