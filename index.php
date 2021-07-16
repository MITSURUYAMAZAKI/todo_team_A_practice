<?php
    require_once('./Models/Task.php');
    require_once('function.php');
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
    <script src="./app.js" defer></script>
   
</head>

<body>
    <?php include('./include/header.php'); ?>
    <main>
        <div class="feed">
            <?php foreach ($tasks as $value) : ?>
                <div class="article">

                    <img src="./images/macbook.png" alt="<?php echo $value['title'];?>" class="photo">

                    <h1 class="title"><?php echo $value['title']; ?></h1>
                  
                    <p class="contents"><?php echo $value['contents']; ?></p>
                    <div>
                    <a href="edit.php?id=<?= h($value['id']); ?>" class="btn text-success">EDIT</a>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?= h($value['id']); ?>">
                                    <button type="submit" class="btn text-danger">DELETE</button>
                                </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <?php include('./include/footer.php'); ?>
</body>

</html>
