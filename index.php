<?php
    include_once('config.php');

    $mysql = new MySql();
    $pdo = $mysql->connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD com PHPOO</title>
</head>
<body>
    <main>
        <?php include("php/include_pages.php"); ?>
    </main>

</body>
</html>