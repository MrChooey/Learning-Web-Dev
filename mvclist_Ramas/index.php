<?php
session_start();
include "control/ListController.php";

$listControl = new ListController();

$listControl->index();

?>