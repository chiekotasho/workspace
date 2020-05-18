<?php

require_once('../../config/database.php');

class Todo {
    public $title;
    public $detail;
    public $status;

    public function getTitle() {
       return $this->title;
       }
       public function setTitle($title) { 
            $this->title = $title;
       }

       public function getDetail() {
            return $this->detail;
       }
       public function setDetail($detail) { 
           $this->detail = $detail;
       }

       public function getStatus() { 
           return $this->status;
       }
       public function setStatus($status) { 
           $this->status = $status;
       }

    public static function findByQuery($query) {
        $pdo = new PDO(DSN, USERNAME, PASSWORD);
        $stmh = $pdo->query($query);
        
        return $stmh->fetchAll(PDO::FETCH_ASSOC);
        }

    public static function findAll() {
        $pdo = new PDO(DSN, USERNAME, PASSWORD);
        $query = 'select * from common.todos';
        $stmh = $pdo->query($query);

        return $stmh->fetchAll(PDO::FETCH_ASSOC);
        }

    public static function findById($todo_id) {
        $query = sprintf(
            'select * from common.todos where id = %s',
            $todo_id
            );
        $pdo = new PDO(DSN, USERNAME, PASSWORD);
        $stmh = $pdo->query($query);

        return $stmh->fetch(PDO::FETCH_ASSOC);
        }

    public function save() {
        $query = sprintf(
            "INSERT INTO `todos`
                (`title`, `detail`, `status`,
                `created_at`, `updated_at`)
            VALUES ('%s', '%s', 0, NOW(), NOW());",
            $this->title,
            $this->detail
            );
        $pdo = new PDO(DSN, USERNAME, PASSWORD);
        $stmt = $pdo->prepare($query);
        $result = $stmt->execute();

        return $result;
    }
}
