<?php
// session_start();

// // $user = $_SESSION['user'] ?? [];
// $user = [];

// // ファイルの読み込み
   require_once('./dbconnect.php');
   require_once('./models/model.php');
   require_once('./function.php');

   $post = new Post();
   $posts = $post->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

    <header>
        

    <!---拓也さん-->
    <div class="container-fulid">
        <div class="row">
            <div class="header">
                <nav class="navbar navbar-dark bg-dark">
                    <a href="./test.php" class="navbar-brand">lets test</a>
                    <a href="./create.php" class="navbar-brand">create</a>
                </nav>
            </div>
        </div>

    </div>
    <!----->
<link rel="stylesheet" href="./style.css">
    </header>

<body>   
    <?php foreach ($posts as $post) : ?>
    <div class="fruit">
        <div class="one">
            <div class="question">
                <?= h($post["meaning"]); ?>
            </div> 
            <div class="answer">
                <?= h($post["words"]); ?>
            </div>
            <div class="text-right d-flex justify-content-end">
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?= h($post['id']); ?>">
                    <button type="submit" class="btn text-danger">DELETE</button>
                </form>
            </div>        
        </div>
    </div>
    <?php endforeach; ?>
</body>
</html>