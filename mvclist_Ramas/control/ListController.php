<?php
include "model/ListModel.php";

class ListController { 
    public function index() {
        $listModel = new ListModel();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $task = $_POST['task'];
            $listModel->addTask($task);
        } else {
            unset($_SESSION['list']);
        }

        $list = $listModel->getList();

        require "view/ListView.php";
    }
}

?>