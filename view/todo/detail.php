<?php
require_once '../../config/database.php';
require_once '../../model/Todo.php';
require_once '../../controller/TodoController.php';

$controller = new TodoController;
$todo = $controller->detail();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>詳細画面</title>
</head>
<body>
    <thead>
        <tr>
        <th>タイトル</th>
        <th>詳細</th>
        </tr>
    </thead>

    <tbody>
        <td><?php echo $todo['title']; ?></td>
        <td><?php echo $todo['detail']; ?></td>
    </tbody>
</body>
</html>