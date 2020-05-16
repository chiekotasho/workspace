<?php
class TodoController {
    public function index() {
        return Todo::findAll();
    }
    public function detail() {
        $todo_id = $_GET['id'];

        return $todo_id;
    }
}