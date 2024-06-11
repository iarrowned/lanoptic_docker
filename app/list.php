<?php
require_once "/var/www/html/config/bootstrap.php";

global $entityManager;

$repo = $entityManager->getRepository(\Entity\Response::class);

$els = $repo->findAll();

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Спсиок заявок</title>
</head>
<style>
    .container {
        width: 900px;
        margin: 0 auto;
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
    }
    .item {
        display: flex;
        flex-direction: column;
        width: 30%;
        margin-right: 3%;
        border: 1px solid;
    }
    .name {
        height: 30px;
        margin-bottom: 15px;
    }
</style>
<body>
    <div class="container">
        <?php foreach ($els as $e): ?>
        <div class="item">
            <div class="name">
                <?= $e->getName() ?>
            </div>
            <div class="name">
                <?= $e->getEmail() ?>
            </div>
            <div class="name">
                <?= $e->getPhone() ?>
            </div>
            <div class="name">
                <?= $e->getPosition() ?>
            </div>
            <div class="name">
                <?= $e->getResume() ?>
            </div>
        </div>
        <?php endforeach; ?>


    </div>
</body>
</html>
