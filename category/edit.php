<?php
include '../database/Database.php';
include '../class/Category.php';
include '../class/CategoryManager.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $id = $_REQUEST['id'];
    $categoryManager = new CategoryManager();
    $category = new Category($name);

    if (!empty($name)) {
        $categoryManager->updateData($category->getName(),$id);
        header('Location: ../category/display.php');
    } else {
        header('Location: ../category/add.php');
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    sua doi tai vi tri :
    <input type="number" name="id">
    doi ten thanh :
    <input type="text" name="name">
    <button type="submit">sua</button>
</form>
</body>
</html>

