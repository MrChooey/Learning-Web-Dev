<?php

session_start();

include 'control/AnimeController.php';

$blogControl = new AnimeController();
$blogControl->index();

