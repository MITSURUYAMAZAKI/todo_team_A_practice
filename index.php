<?php
    require_once('./Models/Model.php');
    require_once('./Models/Task.php');
    
    $task = new Task();
    $tasks =  $task->getAll();
    // var_dump($tasks);
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
         <!--  ここから全ページ共通 -->
    <header>
        <span class="header-left">ToDo_team_A</span>
            <ul>
                <li><a href="#">Create</a></li>
                <li><a href="#">sign in</a></li>
                <li><form class="form-inline">
                    <input class="form" type="search" placeholder="word" aria-label="Search" name="title">
                    <button class="search" type="submit">Search</button>
                </form></li>
            </ul>
    </header>
  <!--  ここまで全ページ共通 -->
    <main>
        <div class="feed">
        <?php foreach ($tasks as $value):?>
            <div class="article">
                <img src="./images/macbook.png" alt="<?php echo "$value[0]";?>" class="photo" width="350px" height="350px">
                <h1 class="title"><?php echo $value['title']; ?></h1>
                <p class="contents"><?php echo $value['contents']; ?></p>
            </div>
        <?php endforeach; ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>