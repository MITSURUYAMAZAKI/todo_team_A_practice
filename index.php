<?php
    require_once('./Models/Task.php');
    
    $task = new Task();
    $tasks =  $task->getAll();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php include('./include/header.php'); ?>
    <main>
        <div class="feed">
            <?php foreach ($tasks as $value):?>
                <div class="article">
                    <img src="./images/macbook.png" alt="<?php echo $value['title'];?>" class="photo" width="350px" height="350px">
                    <h1 class="title"><?php echo $value['title']; ?></h1>
                    <p class="contents"><?php echo $value['contents']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <?php include('./include/footer.php'); ?>
</body>
</html>