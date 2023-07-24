<?php session_start(); ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Админка</title>
</head>

<body>
    <div style="text-align: center; padding-top: 80px">
        <?php if (!empty($_SESSION['login'])) : ?>
            <?php echo "Здравствуйте" . " " . $_SESSION['login'] . "!"; ?>
            <br><br>

            <a class="btn btn-danger" href="/logout.php">Выйти</a>
            <br><br>
            <a class="btn btn-warning" href="/Admin/RentForm_show.php">Показать обращения проката</a>
            <br><br>
            <a class="btn btn-warning" href="/Admin/Certificate_show.php">Показать обращения сертификат</a>
            <br><br>
            <a class="btn btn-warning" href="/Admin/Moropark_admin.php">Редактировать товары</a>
            <br><br>
            <a class="btn btn-warning" href="/Admin/Add_product.php">Добавить товар</a>
            <br><br>

            <h1>Выберете раздел для редактирования.</h1>
            <a class="btn btn-secondary" href="/Admin/FAQ_admin.php">FAQ</a>
            <a class="btn btn-secondary" href="/Admin/Contacts_admin.php">Контакты</a>


        <?php else :
            echo '<h2>Вы что хакер?</h2>';
            echo '<a class="btn btn-primary" href="/">На главную</a>';
        ?>

        <?php endif ?>
    </div>

</body>

</html>