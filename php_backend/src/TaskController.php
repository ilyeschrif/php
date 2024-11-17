<?php
require '../config/database.php';

class TaskController {

    public function createTask($taskName) {
        global $db;
        $stmt = $db->prepare("INSERT INTO tasks (name) VALUES (?)");
        $stmt->bind_param("s", $taskName);
        $stmt->execute();
        return $stmt->insert_id;
    }
}
