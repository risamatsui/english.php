<?php

// ファイルの読み込み
require_once('dbconnect.php');
require_once('function.php');
require_once('./models/model.php');

// データの受け取り
$words = $_POST['words'];
$meaning = $_POST['meaning'];

var_dump($words);
var_dump($meaning);


// DBへのデータ保存
$post = new Post();
$post->create([$words, $meaning]);

//リダイレクト
header('location:index.php');
exit;