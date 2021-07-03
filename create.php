<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="style.css">
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>

<body>
    <header>
        <span class="header-left">ToDo_team_A</span>

    </header>

    <form action="store.php" method="POST">

        <div class="box">
            <label for="title">山崎さんといえば？</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="box">
            <label for="contents">どんなところが好き？</label>
            <textarea type="text" class="form-control" name="contents" id="contents" cols="30" rows="10"></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">POST</button>
        </div>

    </form>


</body>

</html>