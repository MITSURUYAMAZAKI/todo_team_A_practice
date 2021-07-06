<?php

// read the file
require_once('./models/task.php');

//receive file
$title = $_POST['title'];
$contents = $_POST['contents'];
$timestamp = date("Y/m/d H:i:s");

// save to DB
$task = new Task(); 
$task->create([$title,$contents,$timestamp]);

// redirect to index.php
header('location:index.php');

