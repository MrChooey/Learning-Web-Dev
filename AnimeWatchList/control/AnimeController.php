<?php
include 'model/AnimeModel.php';

class AnimeController {
    public function index() {
        $animeModel = new AnimeModel();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $show = $_POST['show'];
            $animeModel->addList($show);
        } else {
            unset($_SESSION['list']);
        }

        $list = $animeModel->getList();

        require 'view/AnimeView.php';
    }

}
