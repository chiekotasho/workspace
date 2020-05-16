<?php
require_once '../../config/database.php';
require_once '../../model/Todo.php';
require_once './../controller/TodoController.php';

$controller = new TodoController;
$todo_id = $controller->detail();

var_dump($todo_id);

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
    <table class="table">
        <thead>
            <tr>
                <th>タイトル</th>
                <th>詳細</th>
                <th>締め切り</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>
</html>