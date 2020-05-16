<?php

require_once('../../config/database.php');

class Todo {
public static function findByQuery($query) {
    $pdo = new PDO(DSN, USERNAME, PASSWORD);
    $stmh = $pdo->query($query);
    
    if($stmh) {
        $todo_list = $stmh->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $todo_list = array();
    }
    return $todo_list;
    }

public static function findAll() {
    $pdo = new PDO(DSN, USERNAME, PASSWORD);
    $stmh = $pdo->query('select * from todos');
    
    if($stmh) {
        $todo_list = $stmh->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $todo_list = array();
    }

    return $todo_list;
    }
}


