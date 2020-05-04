<?php
include '../database/Database.php';
include '../class/Category.php';
include '../class/CategoryManager.php';

if ($_SERVER['REQUEST_METHOD'] = 'POST'){
    $id = $_REQUEST['id'];

    $categories = new CategoryManager();
    $categories->deleteData($id);
    header('Location: display.php');
}

