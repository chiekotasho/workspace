<?php

require_once('./../../model/Todo.php');

class TodoController {
    public function index() {
        $todo = new Todo;
        $todo_list = $todo->findAll();

        return $todo_list;
    }

    public function detail() {
        $todo_id = $_GET['id'];
        $todo = Todo::findById($todo_id);

        return $todo;
    }
    public function new() {
        $title = $_POST['title'];
        $detail = $_POST['detail'];

        $todo = new Todo;
        $todo->setTitle($title);
        $todo->setDetail($detail);
        $result = $todo->save();

        if($result === false) {
            header( "Location: ./index.php" );
        }
        header( "Location: ./index.php ");
    }
}