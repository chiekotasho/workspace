<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $controller = new TodoController;
    $controller->new();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規作成</title>
</head>
<body>
    <div>新規作成</div>
    <form action="./new.php" method="post">
        <div>タイトル</div>
        <div>
            <input name="title" type="text">
        </div>
        <div>詳細</div>
        <div>
            <textarea name="detail"></textarea>
        </div>
        <button type="submit">登録</button>

</body>
</html>