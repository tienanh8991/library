<?php
include '../database/Database.php';
include '../class/Category.php';
include '../class/CategoryManager.php';

$categoryManager = new CategoryManager();
$arrayCategory = $categoryManager->getAllData();
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
<div class="card-body"><a href="add.php">Add new category</a></div>
<div class="card-body">
    <h4>Categories List</h4>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($arrayCategory as $item): ?>
            <tr>
                <th scope="row"><?php echo $item['id'] ?></th>
                <td><?php echo $item['name'] ?></td>
                <td><a href="edit.php?id=<?php echo $item['id'] ?>">Update</a>|<a
                            onclick="return confirm('Delete?')"
                            href="delete.php?id=<?php echo $item['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>

