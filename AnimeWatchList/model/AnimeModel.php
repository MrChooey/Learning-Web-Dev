<?php
class AnimeModel {
    public function getList() {
        if (!isset($_SESSION['list'])) {
            $_SESSION['list'] = [];
        }
        return $_SESSION['list'];
    }
    
    public function addList($show) {
        if (!isset($_SESSION['list'])) {
            $_SESSION['list'] = [];
        }
        $_SESSION['list'][] = $show;
    }
}


?>