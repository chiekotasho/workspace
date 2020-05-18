<?php

require_once('../../model/Todo.php');
require_once('../../controller/TodoController.php');

$controller = new TodoController;
$todo_list = $controller->index();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($todo_list): ?>
        <ul>
            <?php foreach($todo_list as $todo): ?>
                <li>
                <a href="./detail.php?todo_id=<?php echo $todo['id'];?>">
                    <?php echo $todo['title']; ?>
                </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div>
        <a href="./new.php">新規作成</a>
    </div>

    <?php else: ?>
         <p>データなし</p>
    <?php endif; ?>
</body>
</html>