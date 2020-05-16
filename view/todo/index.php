<?php

require_once '../../config/database.php';
//$dsn = 'mysql:host=9272b03a9bdf;dbname=common;charset=utf8';
//$user = 'chieko';
//$password = 'chieko';

$query = "SELECT * FROM common.todos";
$todo_list = Todo::findByQuery($query);
//$todo_list = Todo::findAll();

//$pdo = new PDO(DSN, USERNAME, PASSWORD);
//$stmh = $pdo->query('SELECT * FROM todos');
//$todo_list = $stmh->fetchAll(PDO::FETCH_ASSOC);
//var_dump($todo_list);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($todo_list as $todo): ?>
        <li><?php echo $todo['title']; ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>