<?php
include_once "data.php"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>

    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Math</th>
        <th>Physics</th>
        <th>Chemistry</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $key => $student):;?>
        <tr>
            <td><?php echo $key+1?></td>
            <td><?php echo $student["name"]?></td>
            <td><?php echo $student["math"]?></td>
            <td><?php echo $student["physics"]?></td>
            <td><?php echo $student["chemistry"]?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>