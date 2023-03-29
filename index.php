<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (count($_GET)) {
        foreach ($_GET as $key => $getValues) {
            echo "<div>$key : $getValues<div>";
        }
    };

    if (count($_POST)) {
        foreach ($_POST as $key => $postValues) {
            echo "<div>$key : $postValues<div>";
        }
    };

    if (count($_REQUEST)) {
        foreach ($_REQUEST as $key => $requestValues) {
            echo "<div>$key : $requestValues<div>";
        }
    };
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="age" placeholder="age">
    <input type="text" name="address" placeholder="address">
    <button type="submit">post</button>
    </form>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="age" placeholder="age">
    <input type="text" name="address" placeholder="address">
    <button type="submit">get</button>
    </form>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="age" placeholder="age">
    <input type="text" name="address" placeholder="address">
    <button type="submit">get or post</button>
    </form>
</body>
</html>