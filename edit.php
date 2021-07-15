<?php
require_once('./Models/Task.php');
$id = $_GET['id'];
$task = new Task();
$task = $task ->findById($id);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編集 | Todoアプリ</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<header>
        <span class="header-left">ToDo_team_A</span>

    </header>

    <form action="update.php" method="POST">

        <div class="box">
            <label for="title">山崎さんといえば？</label>
            <input type="text" class="form-control" name="title" id="title" value="<?php echo $task['title']?> ">
        </div>
        <div class="box">
            <label for="contents">どんなところが好き？</label>
            <textarea type="text" class="form-control" name="contents" id="contents" cols="30" rows="10"><?php echo $task['contents']?></textarea>
        </div>
        <input type="hidden" name="id" id="id" value="<?php echo $task['id']?>">
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">POST</button>
        </div>

    </form>   

   
</body>
</html>