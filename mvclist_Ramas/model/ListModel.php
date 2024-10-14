<?php
class ListModel {
    public function getList() {
        if (!isset($_SESSION['list'])) {
            $_SESSION['list'] = [];
        }
        return $_SESSION['list'];
    }

    public function addTask($task) {
        if (!isset($_SESSION['list'])) {
            $_SESSION['list'] = [];
        }
        $_SESSION['list'][] = $task;
    }
}


?>